@extends('layouts.masterforindex')
@section('title','| Home')
@section('content')
 
        <section class="">

            {{--<div class="container wow fadeInUp">

                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center">
                        <div class="banner-content">
                            <h2>
                                Become a blood donor
                            </h2>					
                            <h3>Blood is the most precious gift that anyone can give to another person.<br>
                                Donating blood not only saves the life also save donor's lives.
                            </h3>

                            <h4 style="color: #c7d884;">
                                We have O negative and O positive blood requested today
                            </h4>

                            <a href="#" class="btn btn-slider">REGESTER NOW</a>   
                        </div>
                    </div> <!-- end .col-md-12  -->--}}


                    <div id="map_wrapper">
                        <div id="map_canvas" class="mapping"></div>
                    </div>
                     
             {{--  </div>

            </div>
        </div>--}}
        </section>

        <!--  SECTION CHOOSE PLAN PROCESS -->

        <section class="section-content-block section-process">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading"><span></span> Processes</h2>
                        <p class="section-subheading">Click below based on your requirement</p>
                    </div> <!-- end .col-sm-10  -->                    

                </div> <!--  end .row  -->

                <div class="row wow fadeInUp">

                    <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">

                        <div class="process-layout">

                            <article class="process-info">
                                <h2>Become a blood donor</h2>   
                                <p>If you are completely new to blood donation.</p>

                                 <div class="choose_plan_button">
                                     <a href="{{route('user.register')}}" class="btn btn-choose-plan">REGESTER NOW</a>
                                 </div>
                            
                            </article>
                          

                        </div> <!--  end .process-layout -->

                    </div> <!--  end .col-lg-3 -->



                    <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">

                        <div class="process-layout">

        
                            <article class="process-info">                                   
                                <h2>Already a donor?</h2>
                                <p>Sign up for an online account to manage account settings.</p>

                                 <div class="choose_plan_button">
                                     <a href="{{route('user.login')}}" class="btn btn-choose-plan">SIGN IN</a>
                                 </div>

                            </article>

                        </div> <!--  end .process-layout -->

                    </div> <!--  end .col-lg-3 -->


                    <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">

                        <div class="process-layout">

                            <article class="process-info">
                                <h2>Need Blood?</h2>
                                <p>Request or find for emergency blood for any group by clicking below.</p>

                                 <div class="choose_plan_button">
                                     <a href="{{route('blood.looking')}}" class="btn btn-choose-plan">CLICK HERE</a>
                                 </div>

                            </article>

                        </div> <!--  end .process-layout -->

                    </div> <!--  end .col-lg-3 -->

                </div> <!--  end .row --> 

            </div> <!--  end .container  -->

        </section> <!--  end .section-process -->




         <!-- SECTION CTA  -->   

        <section class="cta-section-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-12 col-xs-12">
                        <h2>View Availabe Donors</h2>
                        <p>
                           You can see our availabe donors by clicking below. You can talk with the available donor via phone or email.                      
                        </p>
                        <a class="btn btn-cta-2" href="{{route('donor.lists')}}">All Donor Lists</a>
                    </div> <!--  end .col-md-8  -->

                    <div class="col-lg-6 col-lg-offset-0 col-md-6 col-md-offset-0 col-sm-12 col-xs-12">
                        <h2>Find Donors</h2>
                        <p>
                           Here you can search our availabe donors. You can also find donors by blood group wise or district wise.                       
                        </p>
                        <a class="btn btn-cta-2" href="{{route('donor.search')}}">Search Donor</a>
                    </div> <!--  end .col-md-8  -->
                </div> <!--  end .row  -->
            </div>
        </section> 

        <!--  APPOINTMENT SECTION -->

    

    <!-- BLOG SECTION  -->

    <section class="section-content-block section-home-blog section-pure-white-bg">

        <div class="container wow fadeInUp">

            <div class="row section-heading-wrapper">

                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading">Recent Blog</h2>
                    <p class="section-subheading">
                        Latest news and statements regarding giving blood, blood processing and supply.
                    </p>
                </div> <!-- end .col-md-12  -->

            </div> <!--  end .row  -->

            <div class="row">

             @foreach($posts as $post)
                <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">

                    <div class="latest-news-container"> 
                      @if($post->featured_image)
                        <a href="{{route('blog.single',$post->slug)}}">
                            <figure>
                                <img src="{{URL::asset('images/posts/'.$post->featured_image)}}"" alt="latest news" height="240" width="360">
                            </figure>
                        </a>
                      @endif

                        <div class="news-content">

                            <h3>
                                <a href="{{route('blog.single',$post->slug)}}">{{$post->title}}</a>
                            </h3>

                            <div class="news-meta-info">
                                <i class="fa fa-clock-o"></i> {{date('M j,Y',strtotime($post->created_at))}}
                              
                            </div>                                

                            <div class="update-details">                                     
                               {!!substr(html_entity_decode($post->body),0,150)!!}{{strlen(strip_tags($post->body))>150 ? "......":""}} 
                            </div>

                        </div>

                    </div><!--  end .update-info  -->

                </div> <!--  end col-lg-4  -->
            @endforeach


            </div> <!-- end row  -->

            <div class="row">
                <div class="col-sm-12 col-md-4 col-md-offset-4 text-center">
                    <a href="{{route('pages.blog')}}" class="btn btn-load-more">- View All Blog -</a>
                </div>
            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!--  end .section-latest-blog -->
   
<!-- SECTION CTA  -->   

<section class="cta-section-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                <h2>Analysis Result</h2>
                <p>
                    You can give blood at any of our blood donation venues all over the world. We have total sixty thousands donor centers and visit thousands of other venues on various occasions.                            
                </p>
                <a class="btn btn-cta-2" href="{{route('result.analysis')}}">View Analysis</a>
            </div> <!--  end .col-md-8  -->
        </div> <!--  end .row  -->
    </div>
</section> 
@endsection

@section('scripts')
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
jQuery(function($) {
    // Asynchronously Load the map API 
    var script = document.createElement('script');
    script.src = "//maps.googleapis.com/maps/api/js?v=3&sensor=false&callback=initialize";
    document.body.appendChild(script);
});

function initialize() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap'
    };
                    
    // Display a map on the page
    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
    map.setTilt(45);
        
    // Multiple Markers
    var markers = [
     
      @foreach($dis as $di)
            
            @if($di->district=='Dhaka')
             ['{{$di->district}}, Bangladesh', 23.8103,90.4125],
            @endif     
                  /*Barisal Division */

           @if($di->district=='Barguna')
            ['{{$di->district}}, Bangladesh', 22.0953,90.1121],
           @endif
           @if($di->district=='Barisal')
            ['{{$di->district}}, Bangladesh', 22.70497,90.37013],
           @endif
            @if($di->district=='Bhola')
            ['{{$di->district}}, Bangladesh', 22.68759,90.64403],
           @endif
            @if($di->district=='Jhalokati')
            ['{{$di->district}}, Bangladesh', 22.5721,90.1870],
           @endif
            @if($di->district=='Patuakhali')
            ['{{$di->district}}, Bangladesh', 22.2249,90.4548],
           @endif
            @if($di->district=='Pirojpur')
            ['{{$di->district}}, Bangladesh', 22.57965,89.97521],
           @endif
  
           @if($di->district=='Barisal')
            ['{{$di->district}}, Bangladesh', 22.70497,90.37013],
           @endif


                        /*Chittagong DIvision */
 
           @if($di->district=='Bandarban')
            ['{{$di->district}}, Bangladesh', 22.19534,92.21946],
           @endif
           @if($di->district=='Brahmanbaria')
            ['{{$di->district}}, Bangladesh', 23.9608,91.1115],
           @endif
            @if($di->district=='Chandpur')
            ['{{$di->district}}, Bangladesh', 23.2513,90.8518],
           @endif
            @if($di->district=='Chittagong')
            ['{{$di->district}}, Bangladesh', 22.3384,91.83168],
           @endif
            @if($di->district=='Comilla')
            ['{{$di->district}}, Bangladesh', 23.46186,91.18503],
           @endif
           @if($di->district=='Cox\'s Bazar')
            ['{{$di->district}}, Bangladesh', 21.45388,91.96765],
           @endif
            @if($di->district=='Feni')
            ['{{$di->district}}, Bangladesh', 23.0144,91.3966],
           @endif
            @if($di->district=='Khagrachhari')
            ['{{$di->district}}, Bangladesh', 23.10787,91.97007],
           @endif
           @if($di->district=='Lakshmipur')
            ['{{$di->district}}, Bangladesh', 22.9443,90.83005],
           @endif
           @if($di->district=='Noakhali')
            ['{{$di->district}}, Bangladesh', 22.8724,91.0973],
           @endif
           @if($di->district=='Rangamati')
            ['{{$di->district}}, Bangladesh', 22.7324,92.2985],
           @endif


               
                /*Dhaka DIvision */

           
           @if($di->district=='Faridpur')
            ['{{$di->district}}, Bangladesh', 23.60612,89.84064],
           @endif
            @if($di->district=='Gazipur')
            ['{{$di->district}}, Bangladesh', 24.0958,90.4125],
           @endif
            @if($di->district=='Gopalganj')
            ['{{$di->district}}, Bangladesh', 23.0488,89.8879],
           @endif
            @if($di->district=='Kishoreganj')
            ['{{$di->district}}, Bangladesh', 24.43944,90.78291],
           @endif
           @if($di->district=='Madaripur')
            ['{{$di->district}}, Bangladesh', 23.17097,90.20935],
           @endif
            @if($di->district=='Manikganj')
            ['{{$di->district}}, Bangladesh', 23.8617,90.0003],
           @endif
            @if($di->district=='Munshiganj')
            ['{{$di->district}}, Bangladesh', 23.4981,90.4127],
           @endif
           @if($di->district=='Narayanganj')
            ['{{$di->district}}, Bangladesh', 23.61352,90.50298],
           @endif
           @if($di->district=='Narsingdi')
            ['{{$di->district}}, Bangladesh', 23.92298,90.71768],
           @endif
           @if($di->district=='Rajbari')
            ['{{$di->district}}, Bangladesh', 23.7151,89.5875],
           @endif
            @if($di->district=='Shariatpur')
            ['{{$di->district}}, Bangladesh', 23.2423,90.4348],
           @endif
            @if($di->district=='Tangail')
            ['{{$di->district}}, Bangladesh', 24.24984,89.91655],
           @endif
                    
                         /*Khulna DIvision */

           @if($di->district=='Bagerhat')
            ['{{$di->district}}, Bangladesh', 22.6602,89.7895],
           @endif
           @if($di->district=='Chuadanga')
            ['{{$di->district}}, Bangladesh', 23.16971,89.21371],
           @endif
            @if($di->district=='Jessore')
            ['{{$di->district}}, Bangladesh', 23.16971,89.21371],
           @endif
            @if($di->district=='Jhenaidah')
            ['{{$di->district}}, Bangladesh', 23.40964,89.13801],
           @endif
            @if($di->district=='Khulna')
            ['{{$di->district}}, Bangladesh', 22.80979,89.56439],
           @endif
           @if($di->district=='Kushtia')
            ['{{$di->district}}, Bangladesh', 23.9028,89.11943],
           @endif
            @if($di->district=='Magura')
            ['{{$di->district}}, Bangladesh', 23.4290,89.4364],
           @endif
            @if($di->district=='Meherpur')
            ['{{$di->district}}, Bangladesh', 23.8052,88.6724],
           @endif
           @if($di->district=='Narail')
            ['{{$di->district}}, Bangladesh', 23.15509,89.49515],
           @endif
           @if($di->district=='Satkhira')
            ['{{$di->district}}, Bangladesh', 22.70817,89.07185],
           @endif



            /*Mymensingh DIvision */

           @if($di->district=='Jamalpur')
            ['{{$di->district}}, Bangladesh', 24.91965,89.94812],
           @endif
           @if($di->district=='Mymensingh')
            ['{{$di->district}}, Bangladesh', 24.75636,90.40646],
           @endif
            @if($di->district=='Netrokona')
            ['{{$di->district}}, Bangladesh', 24.88352,90.72898],
           @endif
            @if($di->district=='Sherpur')
            ['{{$di->district}}, Bangladesh', 25.01881,90.01751],
           @endif
           
           
                        /*Rajshahi DIvision */

           @if($di->district=='Bogra')
            ['{{$di->district}}, Bangladesh', 24.85098,89.37108],
           @endif
           @if($di->district=='Joypurhat')
            ['{{$di->district}}, Bangladesh', 25.10147,89.02734],
           @endif
            @if($di->district=='Naogaon')
            ['{{$di->district}}, Bangladesh', 24.59025,88.27444],
           @endif
            @if($di->district=='Natore')
            ['{{$di->district}}, Bangladesh', 24.4102,89.0076],
           @endif
            @if($di->district=='Chapai Nawabganj')
            ['{{$di->district}}, Bangladesh', 24.7413,88.2912],
           @endif
           @if($di->district=='Pabna')
            ['{{$di->district}}, Bangladesh', 24.1585,89.4481],
           @endif
            @if($di->district=='Rajshahi')
            ['{{$di->district}}, Bangladesh', 24.07821,89.63262],
           @endif
            @if($di->district=='Sirajganj')
            ['{{$di->district}}, Bangladesh', 24.45771,89.70802],
           @endif


                       /*Rangpur DIvision */

           @if($di->district=='Dinajpur')
            ['{{$di->district}}, Bangladesh', 25.62745,88.63779],
           @endif
           @if($di->district=='Gaibandha')
            ['{{$di->district}}, Bangladesh', 25.3297,89.5430],
           @endif
            @if($di->district=='Kurigram')
            ['{{$di->district}}, Bangladesh', 25.8072,89.6295],
           @endif
            @if($di->district=='Lalmonirhat')
            ['{{$di->district}}, Bangladesh', 25.91719,89.44595],
           @endif
            @if($di->district=='Nilphamari')
            ['{{$di->district}}, Bangladesh', 25.8483,88.9414],
           @endif
           @if($di->district=='Panchagarh')
            ['{{$di->district}}, Bangladesh', 26.2709,88.5952],
           @endif
            @if($di->district=='Rangpur')
            ['{{$di->district}}, Bangladesh', 25.74664,89.25166],
           @endif
            @if($di->district=='Thakurgaon')
            ['{{$di->district}}, Bangladesh', 26.03097,88.46989],
           @endif


                    /*Sylhet DIvision */

           @if($di->district=='Habiganj')
            ['{{$di->district}}, Bangladesh', 24.38044,91.41299],
           @endif
           @if($di->district=='Moulvibazar')
            ['{{$di->district}}, Bangladesh', 24.48888,91.77075],
           @endif
            @if($di->district=='Sunamganj')
            ['{{$di->district}}, Bangladesh', 25.0715,91.3992],
           @endif
            @if($di->district=='Sylhet')
            ['{{$di->district}}, Bangladesh', 24.89904,91.87198],
           @endif
           
         

      @endforeach

      
    ];
                        
    // Info Window Content
    var infoWindowContent = [
     
     @foreach($dis as $di)
            
            @if($di->district=='Dhaka')
               ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
            @endif   

                  /*Barisal Division */

           @if($di->district=='Barguna')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
           @if($di->district=='Barisal')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Bhola')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Jhalokati')
             ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Patuakhali')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Pirojpur')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
           @if($di->district=='Barisal')
             ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif

                       /*Chittagong DIvision */
 
           @if($di->district=='Bandarban')
             ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'], 
           @endif
           @if($di->district=='Brahmanbaria')
             ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Chandpur')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Chittagong')
             ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Comilla')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
           @if($di->district=='Cox\'s Bazar')
             ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Feni')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Khagrachhari')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
           @if($di->district=='Lakshmipur')
            ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
           @if($di->district=='Noakhali')
             ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
           @if($di->district=='Rangamati')
             ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif


               
                /*Dhaka DIvision */

           
           @if($di->district=='Faridpur')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Gazipur')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Gopalganj')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Kishoreganj')
             ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
           @if($di->district=='Madaripur')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Manikganj')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Munshiganj')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
           @if($di->district=='Narayanganj')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
           @if($di->district=='Narsingdi')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
           @if($di->district=='Rajbari')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Shariatpur')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Tangail')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
                    
                         /*Khulna DIvision */

           @if($di->district=='Bagerhat')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
           @if($di->district=='Chuadanga')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Jessore')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Jhenaidah')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Khulna')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
           @if($di->district=='Kushtia')
             ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Magura')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Meherpur')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
           @if($di->district=='Narail')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
           @if($di->district=='Satkhira')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif



            /*Mymensingh DIvision */

           @if($di->district=='Jamalpur')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
           @if($di->district=='Mymensingh')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Netrokona')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Sherpur')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
           
           
                        /*Rajshahi DIvision */

           @if($di->district=='Bogra')
             ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
           @if($di->district=='Joypurhat')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Naogaon')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Natore')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Chapai Nawabganj')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
           @if($di->district=='Pabna')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Rajshahi')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Sirajganj')
             ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif


                       /*Rangpur DIvision */

           @if($di->district=='Dinajpur')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
           @if($di->district=='Gaibandha')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Kurigram')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Lalmonirhat')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Nilphamari')
             ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
           @if($di->district=='Panchagarh')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Rangpur')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Thakurgaon')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif


                    /*Sylhet DIvision */

           @if($di->district=='Habiganj')
             ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
           @if($di->district=='Moulvibazar')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Sunamganj')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
            @if($di->district=='Sylhet')
              ['<div class="info_content">' +
                '<h3>{{$di->district}}</h3>' +
                '<p>Total Donors: {{$di->total}}</p>' +
                '</div>'],
           @endif
           
     @endforeach
       
       
    ];
        
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Loop through our array of markers & place each one on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0]
        });
        
        // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
    }

    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(8);
        google.maps.event.removeListener(boundsListener);
    });
    
}   

</script>
@endsection