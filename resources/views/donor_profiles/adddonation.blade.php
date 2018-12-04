@extends('layouts.master')
@section('title','| Donor\'s Profile')
@section('content')
  <section class="section-content-block section-home-blog section-pure-white-bg">

    <div class="container wow fadeInUp">

        <div class="row section-heading-wrapper">

            <div class="col-md-12 col-sm-12 text-center">
                <h2 class="section-heading">Update Donation Date</h2>
                <p class="section-subheading">
                   Here you can update your donation date. After donating blood pls update your donating date.
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
                  <h3 class="join-heading">Update Donation Date</h3>
                  
                  @include('flashmessage.fordonorregistration')

                  <form action="{{route('donations.store')}}" method="POST" class="appoinment-form" enctype="multipart/form-data"> 

                    {{csrf_field()}}
                    
                      <div class="form-group col-md-12" style="margin-bottom: 20px;">
                          <input  class="form-control" placeholder="Donation Date" type="date" name="donation_date" required="1">
                      </div>
                      
                       <div class="form-group col-md-12">
                          <div class="select-style">                                    
                              <select class="form-control" name="donation_to" required="1">
                                  <option value="">Donation To</option>
                                  <option value="Direct To Patient">Direct To Patient</option>
                                  <option value="Direct To Blood Bank">Direct To Blood Bank</option>  
                              </select>
                        </div>
                        </div>

                          <div class="form-group col-md-12 col-sm-12 col-xs-12">
                              <textarea id="textarea_message" class="form-control" rows="4" placeholder="Recipient Address Or Info" name="donation_address">{{Request::old('donation_address')}}</textarea>
                          </div>  
                        
                        <input type="hidden" name="user_id" value="{{$user->id}}">
                          
                       <div class="form-group col-md-12 col-sm-12 col-xs-12">
                              <button id="btn_submit" class="btn-submit" type="submit">Add Donation Date</button>
                        </div>
                  </form>
                </div>
            </div>


        </div> <!-- end row  -->

        
    </div> <!-- end .container  -->

</section> <!--  end .section-latest-blog -->
@endsection