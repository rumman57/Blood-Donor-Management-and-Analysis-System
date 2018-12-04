@extends('layouts.master')
@section('title','| Donor\'s Profile')
@section('content')
  <section class="section-content-block section-home-blog section-pure-white-bg">

    <div class="container wow fadeInUp">

        <div class="row section-heading-wrapper">

            <div class="col-md-12 col-sm-12 text-center">
                <h2 class="section-heading">Your Profile</h2>
                <p class="section-subheading">
                   Here you can manage your information. Pls update donation date after donating the blood.
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

               <table class="table tablefordonor">
               
                <tbody class="text-center">
                        
                  <tr class="success">
                    <td><h5>Name</h5></td>
                    <td class="tablefordonorrstd"><p>{{$user->name}}</p></td>
                  </tr>

                  <tr class="success">
                    <td><h5>Email</h5></td>
                    <td class="tablefordonorrstd"><p>{{$user->email}}</p></td>
                  </tr>

                  <tr class="success">
                    <td><h5>Photo</h5></td>
                    <td class="tablefordonorrstd"><p>
                      
                       @if(empty($user->image))
                    	<img src="{{URL::asset('images/pro_demo.jpg')}}" height="200" width="200">
                       @else
                        <img src="{{URL::asset('images/propic/'.$user->image)}}" height="200" width="200">
                       @endif
                    </p></td>
                  </tr>

                  <tr class="success">
                    <td><h5>Blood Group</h5></td>
                    <td class="tablefordonorrstd"><p>{{$user->blood_group}}</p></td>
                  </tr>

                  <tr class="success">
                    <td><h5>Smoker?</h5></td>
                    <td class="tablefordonorrstd"><p>{{$user->smoker or "N/A"}}</p></td>
                  </tr>

                   <tr class="success">
                    <td><h5>Drug Accidted?</h5></td>
                    <td class="tablefordonorrstd"><p>{{$user->drugadd or "N/A" }}</p></td>
                  </tr>

                   <tr class="success">
                    <td><h5>Total Number of Donations?</h5></td>
                    <td class="tablefordonorrstd"><p>{{count($user->donations)}}</p></td>
                  </tr>

                   <tr class="success">
                    <td><h5>Last Donation Date</h5></td>
                    <td class="tablefordonorrstd"><p>

                      @foreach ($user->donations as $donation)
                           @if($loop->last)
                               {{$donation->donation_date}}  
                           @endif
                      @endforeach

                    </p></td>
                  </tr>

                   <tr class="success">
                    <td><h5>Gender</h5></td>
                    <td class="tablefordonorrstd"><p>{{$user->gender or "N/A"}}</p></td>
                  </tr>

                  <tr class="success">
                    <td><h5>Contact No</h5></td>
                    <td class="tablefordonorrstd"><p>{{$user->phone or "N/A"}}</p></td>
                  </tr>
                  
                  <tr class="success">
                    <td><h5>Age</h5></td>
                    <td class="tablefordonorrstd"><p>{{$user->age or "N/A"}}</p></td>
                  </tr>

                  <tr class="success">
                    <td><h5>Weight</h5></td>
                    <td class="tablefordonorrstd"><p>{{$user->weight or "N/A"}} 
                    	@if(!empty($user->age)) Kg @endif</p></td>
                  </tr>

                  <tr class="success">
                    <td><h5>Date of Birth</h5></td>
                    <td class="tablefordonorrstd"><p>{{$user->dob or "N/A"}}</p></td>
                  </tr>

                   <tr class="success">
                    <td><h5>Your Division</h5></td>
                    <td class="tablefordonorrstd"><p>{{$user->division}}</p></td>
                  </tr>

                   <tr class="success">
                    <td><h5>Home District</h5></td>
                    <td class="tablefordonorrstd"><p>{{$user->district}}</p></td>
                  </tr>

                   <tr class="success">
                    <td><h5>Current Living District</h5></td>
                    <td class="tablefordonorrstd"><p>{{$user->currdistrict or $user->district}}</p></td>
                  </tr>

                  <tr class="success">
                    <td><h5>Present Address</h5></td>
                    <td class="tablefordonorrstd"><p>{{$user->pradd or "N/A"}}</p></td>
                  </tr>

                  <tr class="success">
                    <td><h5>Short Profile</h5></td>
                    <td class="tablefordonorrstd"><p>{{$user->address}}</p></td>
                  </tr>

                </tbody>
              </table>
                  
            </div>


        </div> <!-- end row  -->

        
    </div> <!-- end .container  -->

</section> <!--  end .section-latest-blog -->
@endsection