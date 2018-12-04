@extends('layouts.master')
@section('title')
| {{$post->slug}}
@endsection
@section('content')

<section class="page-header" data-stellar-background-ratio="1.2">

    <div class="container">

        <div class="row">

            <div class="col-sm-12 text-center">


                <h3>
                    Blog Single Post
                </h3>

                <p class="page-breadcrumb">
                    <a href="#">Home</a> / <a href="#">Blog</a> / Single Post
                </p>


            </div>

        </div> <!-- end .row  -->

    </div> <!-- end .container  -->

</section> <!-- end .page-header  -->

<section class="section-content-block">

    <div class="container">

        <div class="row">

            <div class="col-md-8 col-sm-12">

                <article class="post single-post-inner">
                  @if($post->featured_image)
                    <div class="post-inner-featured-content">
                        <img alt="" src="{{URL::asset('images/posts/'.$post->featured_image)}}">
                    </div>
                  @endif
                    <div class="single-post-inner-title">
                        <h2>{{$post->title}}</h2>
                        <p class="single-post-meta"><i class="fa fa-user"></i>&nbsp; Admin &nbsp; &nbsp; <i class="fa fa-share"></i>&nbsp; {{$post->category->name}}</p>
                    </div>

                    <div class="single-post-inner-content">
                        {!! $post->body !!}
                    </div>


                </article> <!--  end single-post-container -->

            </div> <!--  end .single-post-container -->

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
              
              @foreach($rposts as $post)
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

</section> <!-- end .section-content-block  --> 

@endsection