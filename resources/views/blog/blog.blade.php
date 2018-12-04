@extends('layouts.master')
@section('title','| Blog')
@section('content')
 
<section class="page-header" data-stellar-background-ratio="1.2">

<div class="container">

    <div class="row">

        <div class="col-sm-12 text-center">


            <h3>
                Blog Posts
            </h3>

            <p class="page-breadcrumb">
                <a href="#">Home</a> / Blog
            </p>


        </div>

    </div> <!-- end .row  -->

</div> <!-- end .container  -->

</section> <!-- end .page-header  -->

<!--  MAIN CONTENT  -->

<section class="main-content">

<div class="container">

    <div class="row">

        <div class="col-md-8 col-sm-12">
          
          @foreach($posts as $post)
            <article class="post single-post">
              @if($post->featured_image)
                <div class="single-post-content">

                    <a title="" href="{{route('blog.single',$post->slug)}}">
                        <img alt="" src="{{URL::asset('images/posts/'.$post->featured_image)}}" />
                    </a>

                </div> <!-- end .bd-view  -->
              @endif

                <div class="single-post-title">

                    <h2>
                        <a href="{{route('blog.single',$post->slug)}}">
                            {{$post->title}}
                        </a>
                    </h2> <!--  end blog-post-title  -->

                    <p class="single-post-meta">                           

                        <i class="fa fa-user"></i>
                        &nbsp;Admin

                        &nbsp;<i class="fa fa-book"></i>
                        &nbsp;<a title="View all posts" href="{{route('postby.category',$post->category->name)}}"> {{$post->category->name}} </a>

                        &nbsp;<i class="fa fa-calendar"></i>
                        &nbsp;{{date('M j,Y',strtotime($post->created_at))}}

                    </p>

                    <p>
                        {!!substr(html_entity_decode($post->body),0,350)!!}{{strlen(strip_tags($post->body))>350 ? "......":""}}                                     
                    </p>


                </div> <!-- end col-sm-8  -->

            </article>
          @endforeach
             {{$posts->links()}}

        </div> <!--  end col-sm-8 -->


        <div class="col-md-4 col-sm-12">

            <div class="widget site-sidebar">

                <h2 class="widget-title">Search</h2>

                <form action="{{route('postby.search')}}" method="POST" class="search-form" role="form" method="get">
                   {{csrf_field()}}
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search...." required="1">
                       <span class="input-group-addon"><input style="background: crimson;" type="submit" name="Search"></span>
                       
                    </div>

                </form> <!-- end #search-form  -->

            </div> <!--  end .widget -->            


            <div class="widget site-sidebar">

                <h2 class="widget-title">Categories</h2>

                <ul class="widget-post-category clearfix">
                 @foreach($categories as $category)
                    <li>
                        <a title="View all posts filed under Environment" href="{{route('postby.category',$category->name)}}">{{$category->name}}</a>
                        <span class="pull-right badge">{{count($category->posts)}}</span>
                    </li>
                 @endforeach
                </ul>

            </div> <!--  end .widget -->

            <div class="widget site-sidebar">

                <h2 class="widget-title">Recent Posts</h2>
              
              @foreach($posts as $post)
                @if($loop->iteration > 4)

                    @break

                @endif
                <div class="single-recent-post">
                    <a href="{{route('blog.single',$post->slug)}}">{{$post->title}}</a>
                    <span><i class="fa fa-calendar icon-color"></i>&nbsp; {{date('M j,Y',strtotime($post->created_at))}}</span>
                </div>
              @endforeach
            </div> <!--  end .widget -->


        </div> <!-- end .col-sm-4  -->

    </div> <!--  end row  -->

</div> <!--  end container -->

</section> <!-- end .main-content  -->
@endsection