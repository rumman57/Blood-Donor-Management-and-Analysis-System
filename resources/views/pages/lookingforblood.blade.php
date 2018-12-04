@extends('layouts.master')
@section('title','| Looking For Blood')
@section('content')
 
   <section class="section-content-block section-process">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading"><span>Looking For</span> Blood ?</h2>
                        <p class="section-subheading">choose any option below</p>
                    </div> <!-- end .col-sm-10  -->                    

                </div> <!--  end .row  -->

                <div class="row wow fadeInUp">

                    
                    <div class="col-lg-5 col-md-offset-0 col-md-5 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">

                        <div class="process-layout">

        
                            <article class="process-info">                                   
                                <h2>Make a Request for Blood</h2>
                                <p>Your request will be published to our blood request list. </p>

                                <p>* Please don't make any fake request.</p>

                                 <div class="choose_plan_button">
                                     <a href="{{route('requests.create')}}" class="btn btn-choose-plan">Make Request</a>
                                 </div>

                            </article>

                        </div> <!--  end .process-layout -->

                    </div> <!--  end .col-lg-3 -->


                    <div class="col-lg-7 col-md-offset-0 col-md-7 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">

                        <div class="process-layout">

                            <article class="process-info">
                                <h2>Find Donors of your Location</h2>   
                                <p>You will find a list of blood donors of your location. You can make phone call to donors. You can send email to donors.</p>

                                <p>* Please don't make any fake call or don't send any fake email</p>

                                 <div class="choose_plan_button">
                                     <a href="{{route('donor.search')}}" class="btn btn-choose-plan">FIND DONORS</a>
                                 </div>
                            
                            </article>
                          

                        </div> <!--  end .process-layout -->

                    </div> <!--  end .col-lg-3 -->


                </div> <!--  end .row --> 

            </div> <!--  end .container  -->

        </section> <!--  end .section-process -->


        <!-- SECTION TEAM -->


@endsection