@extends('layouts.master')
@section('title','| Donor\'s Profile')
@section('content')
  <section class="section-content-block section-home-blog section-pure-white-bg">

    <div class="container wow fadeInUp">

        <div class="row section-heading-wrapper">

            <div class="col-md-12 col-sm-12 text-center">
                <h2 class="section-heading">Set Your Profile Picture</h2>
                <p class="section-subheading">
                   Here you can change your profile picture
                </p>
            </div> <!-- end .col-md-12  -->

        </div> <!--  end .row  -->

        <div class="row">

            

            <div class="col-md-4 col-sm-12">

                <div class="process-layout layoutofdonorprofilesidebar">

                    <article class="process-info dfsly">
                        <h2>Update Donation Date</h2>   
                        <p>After donating blood pls update your donating date.</p>

                         <div class="choose_plan_button">
                              <a href="{{route('donations.create')}}" class="btn btn-choose-plan">UPDATE</a>
                         </div>
                    
                    </article>
                  

                </div> <!--  end .process-layout -->


                 <div class="process-layout layoutofdonorprofilesidebar">

                        <div class="appointment-form-wrapper  clearfix">
                          <h3 class="join-heading">Donors Area</h3>
                            <div class="donorsareassidebar">
                              <ol type="a">
                                  <li><a href="{{route('user.profile')}}"> View Profile</a></li>
                                  <li><a href="{{route('update.donorprofile')}}"> Edit Profile</a></li>
                                  <li><a href="{{route('update.donorpassword')}}"> Change Password</a></li>
                                  <li><a href="{{route('update.donorpropic')}}"> Change Profile Photo</a></li>
                                  <li><a href="{{route('donations.create')}}"> Update Donation Date</a></li>
                                  <li><a href="{{route('donations.index')}}"> Donation History</a></li>
                                  <li><a href="{{route('update.donorprivacy')}}"> Privacy Options</a></li>
                              </ol>
                            </div>
                        </div> <!-- end .appointment-form-wrapper  -->
                  

                </div> <!--  end .process-layout -->

                  <div class="process-layout layoutofdonorprofilesidebar">

                        <div class="appointment-form-wrapper text-center clearfix">
                         
                        
                              <form class="appoinment-form"> 
                                 
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <br>
                                    <a href="{{route('user.logout')}}" id="btn_submit" class="btn-submit" type="submit">Log Out</a>
                                </div>

                             </form>

                        </div> <!-- end .appointment-form-wrapper  -->
                  

                </div> <!--  end .process-layout -->
                  
            </div>


            <div class="col-md-8 col-sm-12">

              <div class="appointment-form-wrapper text-center clearfix" style="margin-top: 0px;">
                  <h3 class="join-heading">Update Profile Picture</h3>
                  
                  @include('flashmessage.fordonorregistration')

                  <form action="{{route('update.donorpropic')}}" method="POST" class="appoinment-form" enctype="multipart/form-data"> 
                    
                    {{method_field('PUT')}}
                    {{csrf_field()}}
                    
                      <div class="form-group col-md-12">
                          <input  class="form-control" placeholder="image" type="file" name="image" >
                      </div>
                      
                      <div style="margin-left: -235px;margin-top: 30px; margin-bottom: 30px;" class="form-group col-md-12">
                        <label style="display: block;color: #000;margin-left: -70px;">Current:</label><br>

                        @if($user->image)
                          <img src="{{URL::asset('images/propic/'.$user->image)}}"  height="200" width="200">
                        @else
                          <img src="{{URL::asset('images/pro_demo.jpg')}}" height="200" width="200">
                        @endif
                      </div>
                     
                       <div class="form-group col-md-12 col-sm-12 col-xs-12">
                              <button id="btn_submit" class="btn-submit" type="submit">Change Profile Pic</button>
                        </div>
                  </form>
                </div>
            </div>


        </div> <!-- end row  -->

        
    </div> <!-- end .container  -->

</section> <!--  end .section-latest-blog -->
@endsection