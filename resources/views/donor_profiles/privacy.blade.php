@extends('layouts.master')
@section('title','| Donor\'s Profile')
@section('content')
  <section class="section-content-block section-home-blog section-pure-white-bg">

    <div class="container wow fadeInUp">

        <div class="row section-heading-wrapper">

            <div class="col-md-12 col-sm-12 text-center">
                <h2 class="section-heading">Set Up Your Privacy Option</h2>
                <p class="section-subheading">
                   Here you can set up your privacy option
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

              <div class="news-content" style="padding-left: 25px; box-sizing: border-box;">
                        
                        @include('flashmessage.fordonorregistration')

                        <form action="{{route('update.donorprivacy')}}" method="POST" class="appoinment-form preregisterform"> 

                          {{method_field('PUT')}}
                         {{csrf_field()}}

                          <div>
                              <h4>1. Do you want to display your profile in Donors Profile List?</h4>
                              <p>***** if you set it YES then people can see your profile and you will be counted as a member.</p>

                                   <div class="radio">
                                      <label><input type="radio" name="is_show_profile" value="1" @if($user->is_show_profile==1) checked="1" @endif>YES</label>
                                    </div>

                                    <div class="radio">
                                      <label><input type="radio" name="is_show_profile" value="2" @if($user->is_show_profile==2) checked="1" @endif>NO</label>
                                  </div>

                          </div><br>

                           <div>
                              <h4>2. Do you want to display your blood donation history list?</h4>
                              <p>***** if you set it YES then people can see your blood donation history.</p>

                                   <div class="radio">
                                      <label><input type="radio" name="is_show_in_history" value="1" @if($user->is_show_in_history==1) checked="1" @endif>YES</label>
                                    </div>

                                    <div class="radio">
                                      <label><input type="radio" name="is_show_in_history" value="2" @if($user->is_show_in_history==2) checked="1" @endif>NO</label>
                                  </div>

                          </div><br>

                          <div>
                             <h4>3. Are you wish to donate blood now?</h4>
                              <p>***** you can set it as NO as long as you think that you will not donate blood now (for some reasons as illness or weakness or so....)</p>

                                   <div class="radio">
                                      <label><input type="radio" name="is_want_to_donate_now" value="1" @if($user->is_want_to_donate_now==1) checked="1" @endif>YES</label>
                                    </div>

                                    <div class="radio">
                                      <label><input type="radio" name="is_want_to_donate_now" value="2" @if($user->is_want_to_donate_now==2) checked="1" @endif>NO</label>
                                  </div>

                          </div><br>


                          <div>
                              <h4>4. Are you interested to receive e-mail from Admin (administrative e-mails)?</h4>
                              <p>***** if you set it YES then you will receive e-emails from admin. For some special and emergency cases you will receive e-mails from admin, even you set it as NO.</p>

                                   <div class="radio">
                                      <label><input type="radio" 
                                        name="is_wantto_rec_mail_for_admnistrative_purpose" value="1" @if($user->is_wantto_rec_mail_for_admnistrative_purpose==1) checked="1" @endif>YES</label>
                                    </div>

                                    <div class="radio">
                                      <label><input type="radio" 
                                        name="is_wantto_rec_mail_for_admnistrative_purpose" value="2" @if($user->is_wantto_rec_mail_for_admnistrative_purpose==2) checked="1" @endif>NO</label>
                                  </div>

                          </div><br>


                          <div>
                             <h4>5. Are you interested to receive e-mail from Admin (about request of blood)?</h4>
                              <p>***** if you set it YES then you will receive e-emails when people will make request for blood of your group (and also you are ready to donate blood).</p>

                                   <div class="radio">
                                      <label><input type="radio" name="is_wantto_rec_mail_for_blood_req" value="1" @if($user->is_wantto_rec_mail_for_blood_req==1) checked="1" @endif>YES</label>
                                    </div>

                                    <div class="radio">
                                      <label><input type="radio" name="is_wantto_rec_mail_for_blood_req" value="2" @if($user->is_wantto_rec_mail_for_blood_req==2) checked="1" @endif>NO</label>
                                  </div>

                          </div><br>

                           <div>
                             <h4>6. Are you interested to receive e-mail from people who is looking for blood?</h4>
                              <p>***** if you set it YES then you will receive e-emails from general people (personal request for blood).</p>

                                   <div class="radio">
                                      <label><input type="radio" name="is_wantto_rec_mail_from_people" value="1" @if($user->is_wantto_rec_mail_from_people==1) checked="1" @endif>YES</label>
                                    </div>

                                    <div class="radio">
                                      <label><input type="radio" name="is_wantto_rec_mail_from_people" value="2" @if($user->is_wantto_rec_mail_from_people==2) checked="1" @endif>NO</label>
                                  </div>

                          </div><br>
                           
                            
                            <div class="form-group">
                                <button id="btn_submit" class="btn-submit" type="submit">Update</button>
                            </div>

                        </form>

                    


                    </div>
            </div>


        </div> <!-- end row  -->

        
    </div> <!-- end .container  -->

</section> <!--  end .section-latest-blog -->
@endsection