<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <title>Blood Management & Analysis System @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Blood Donation - Activism & Campaign HTML5 Template">
        <meta name="author" content="Rumman">
        <link rel="shortcut icon" href="{{URL::asset('images/favicon.png')}}" />


        <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}" />
        <link rel="stylesheet" href="{{URL::asset('css/animate.css')}}" />
        <link rel="stylesheet" href="{{URL::asset('css/owl.carousel.css')}}" />
        <link rel="stylesheet" href="{{URL::asset('css/venobox.css')}}" />
        <link rel="stylesheet" href="{{URL::asset('css/styles.css')}}" />
        
        @yield('stylesheets')
    </head>

    <body> 

        <div id="preloader">
            <span class="margin-bottom"><img src="images/loader.gif" alt="" /></span>
        </div>

        <!--  HEADER -->

        <header class="main-header clearfix">

            <div class="top-bar clearfix">

                <div class="container">

                    <div class="row">

                        <div class="col-md-8 col-sm-12">

                            <p>Welcome to blood donor management & analysis center.</p>

                        </div>

                        <div class="col-md-4col-sm-12">

                            <div class="top-bar-social">
                              @foreach($slinks as $slink)
                                <a href="{{$slink->link}}"><i class="{{$slink->icon}}"></i></a>
                              @endforeach
                            </div>   
                        </div> 

                    </div>

                </div> <!--  end .container -->

            </div> <!--  end .top-bar  -->

            <section class="header-wrapper navgiation-wrapper">

                <div class="navbar navbar-default">     
                    <div class="container">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="logo" href="{{route('home.index')}}">
                                <img alt="" src="{{URL::asset('uploads/'.$option->logo)}}">
                            </a>
                        </div>

                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{route('home.index')}}">Home</a></li>

                        <li><a href="{{route('donor.lists')}}">All Donor List</a></li>
                        <li><a href="{{route('donor.search')}}">Find Donors</a></li>
                        <li><a href="{{route('requests.index')}}">All Blood Request List</a></li>
                        <li><a href="{{route('pages.blog')}}">Blog</a></li>
                        <li><a href="{{route('requests.create')}}">Request For Blood</a></li>
                                
                           {{-- <li><a href="about-us.html" title="About Us">About Us</a></li>

                            <li><a href="contact.html">Contact</a></li>--}}

                                @if(Auth::check())
                                    <li>
                                        <a href="#">Hi, 
                                          @php
                                           $parts = explode(" ", Auth::user()->name);
                                           $lastname = array_pop($parts);
                                          @endphp
                                            {{$lastname}}
                                        </a>
                                        <ul class="drop-down">
                                            <li><a href="{{route('user.profile')}}">View Profile</a></li> 
                                            <li><a href="{{route('user.logout')}}">Logout</a></li>
                                        </ul>
                                   </li>
                                @else

                                   <li><a href="{{route('user.login')}}">Sign In</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>

            </section>


        </header> <!-- end main-header  -->