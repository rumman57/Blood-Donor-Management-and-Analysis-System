@extends('layouts.master')
@section('title','| Update Donor Information')
@section('content')
 
       

  <section class="section-content-block section-home-blog section-pure-white-bg">

      <div class="container wow fadeInUp">

          <div class="row section-heading-wrapper">

              <div class="col-md-12 col-sm-12 text-center">
                  <h2 class="section-heading">Update Your Information</h2>
                  <p class="section-subheading">
                      Here you can update your current information
                  </p>
              </div> <!-- end .col-md-12  -->

          </div> <!--  end .row  -->

          <div class="row">

              <div class="col-lg-12 col-md-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12">
                    <div class="appointment-form-wrapper text-center clearfix">
                      <h3 class="join-heading">Update Information</h3>
                      
                      @include('flashmessage.fordonorregistration')

                      <form action="{{route('update.donorprofile')}}" method="POST" class="appoinment-form updonpro"> 
                        
                        {{method_field('PUT')}}
                        {{csrf_field()}}
                        
                          <div class="form-group col-md-6">
                              <label>Name: </label>
                              <input id="your_name" class="form-control" value="{{$user->name}}" type="text" name="name" required="1">
                          </div>
                          <div class="form-group col-md-6">
                               <label >Email: </label>
                              <input id="your_email" class="form-control" type="email" name="email" value="{{$user->email}}" readonly="1">
                          </div>
                         
                        
                          <div class="form-group col-md-6">
                              <div class="select-style">  
                                <label style="margin-left: -370px;">Select Blood Group</label>                                  
                                  <select class="form-control" name="blood_group" required="1">
                                      <option value="">Select Blood Group</option>
                                      <option @if($user->blood_group=='A-') selected="selected" @endif  value="A-">A negetive(-)</option>

                                      <option @if($user->blood_group=='A+') selected="selected" @endif value="A+">A positive(+)</option>

                                      <option @if($user->blood_group=='B-') selected="selected" @endif value="B-">B negetive(-)</option>

                                      <option @if($user->blood_group=='B+') selected="selected" @endif value="B+">B positive(+)</option>

                                      <option @if($user->blood_group=='AB-') selected="selected" @endif value="AB-">AB negetive(-)</option>

                                      <option @if($user->blood_group=='AB+') selected="selected" @endif value="AB+">AB positive(+)</option>

                                      <option @if($user->blood_group=='O-') selected="selected" @endif value="O-">O negetive(-)</option>

                                      <option @if($user->blood_group=='O+') selected="selected" @endif value="O+">O positive(+)</option>
                                      
                                  </select>
                              </div>
                          </div>

                           <div class="form-group col-md-6">
                              <div class="select-style">
                              <label style="margin-left: -400px;">Select Division</label>                                    
                                  <select class="form-control" name="division" required="1">
                                      <option value="">Select Division</option>

                                      <option @if($user->division=='Barisal') selected="selected" @endif value="Barisal">Barisal</option>

                                      <option @if($user->division=='Chittagong') selected="selected" @endif value="Chittagong">Chittagong</option>

                                      <option @if($user->division=='Dhaka') selected="selected" @endif value="Dhaka">Dhaka</option>

                                      <option @if($user->division=='Khulna') selected="selected" @endif value="Khulna">Khulna</option>

                                      <option @if($user->division=='Mymensingh') selected="selected" @endif value="Mymensingh">Mymensingh</option>

                                      <option @if($user->division=='Rajshahi') selected="selected" @endif value="Rajshahi">Rajshahi</option>

                                      <option @if($user->division=='Rangpur') selected="selected" @endif value="Rangpur">Rangpur</option>

                                      <option @if($user->division=='Sylhet') selected="selected" @endif value="Sylhet">Sylhet</option>
                                  </select>
                              </div>
                          </div>

                           <div class="form-group col-md-6">
                              <div class="select-style"> 

                                 <label style="margin-left: -361px;">Select Home District</label>                                   
                                  <select class="form-control" name="district" required="1">
                                      <option value="">Select District</option>

                                      <option value="Barguna">Barguna</option>
                                      <option value="Barisal">Barisal</option>
                                      <option value="Bhola">Bhola</option>
                                      <option value="Jhalokati">Jhalokati</option>
                                      <option value="Patuakhali">Patuakhali</option>
                                      <option value="Pirojpur">Pirojpur</option>

                                      <option value="Bandarban">Bandarban</option>
                                      <option value="Brahmanbaria">Brahmanbaria</option>
                                      <option value="Chandpur">Chandpur</option>
                                      <option value="Chittagong">Chittagong</option>
                                      <option value="Comilla">Comilla</option>
                                      <option value="Cox's Bazar">Cox's Bazar</option>
                                      <option value="Feni">Feni</option>
                                      <option value="Khagrachhari">Khagrachhari</option>
                                      <option value="Lakshmipur">Lakshmipur</option>
                                      <option value="Noakhali">Noakhali</option>
                                      <option value="Rangamati">Rangamati</option>

                                      <option value="Dhaka">Dhaka</option>
                                      <option value="Faridpur">Faridpur</option>
                                      <option value="Gazipur">Gazipur</option>
                                      <option value="Gopalganj">Gopalganj</option>
                                      <option value="Kishoreganj">Kishoreganj</option>
                                      <option value="Madaripur">Madaripur</option>
                                      <option value="Manikganj">Manikganj</option>
                                      <option value="Munshiganj">Munshiganj</option>
                                      <option value="Narayanganj">Narayanganj</option>
                                      <option value="Narsingdi">Narsingdi</option>
                                      <option value="Rajbari">Rajbari</option>
                                      <option value="Shariatpur">Shariatpur</option>
                                      <option value="Tangail">Tangail</option>


                                      <option value="Bagerhat">Bagerhat</option>
                                      <option value="Chuadanga">Chuadanga</option>
                                      <option value="Jessore">Jessore</option>
                                      <option value="Jhenaidah">Jhenaidah</option>
                                      <option value="Khulna">Khulna</option>
                                      <option value="Kushtia">Kushtia</option>
                                      <option value="Magura">Magura</option>
                                      <option value="Meherpur">Meherpur</option>
                                      <option value="Narail">Narail</option>
                                      <option value="Satkhira">Satkhira</option>


                                      <option value="Jamalpur">Jamalpur</option>
                                      <option value="Mymensingh">Mymensingh</option>
                                      <option value="Netrokona">Netrokona</option>
                                      <option value="Sherpur">Sherpur</option>


                                      <option value="Bogra">Bogra</option>
                                      <option value="Joypurhat">Joypurhat</option>
                                      <option value="Naogaon">Naogaon</option>
                                      <option value="Natore">Natore</option>
                                      <option value="Chapai Nawabganj">Chapai Nawabganj</option>
                                      <option value="Pabna">Pabna</option>
                                      <option value="Rajshahi">Rajshahi</option>
                                      <option value="Sirajganj">Sirajganj</option>


                                      <option value="Dinajpur">Dinajpur</option>
                                      <option value="Gaibandha">Gaibandha</option>
                                      <option value="Kurigram">Kurigram</option>
                                      <option value="Lalmonirhat">Lalmonirhat</option>
                                      <option value="Nilphamari">Nilphamari</option>
                                      <option value="Panchagarh">Panchagarh</option>
                                      <option value="Rangpur">Rangpur</option>
                                      <option value="Thakurgaon">Thakurgaon</option>


                                      <option value="Habiganj">Habiganj</option>
                                      <option value="Moulvibazar">Moulvibazar</option>
                                      <option value="Sunamganj">Sunamganj</option>
                                      <option value="Sylhet">Sylhet</option>

                                      
                                </select>
                              </div>
                          </div>
                          

                               <div class="form-group col-md-6">
                              <div class="select-style"> 
                                
                                 <label style="margin-left: -345px;">Select Current District</label>                                   
                                  <select class="form-control" name="currdistrict" required="1">
                                      <option value="">Select District</option>

                                      <option value="Barguna">Barguna</option>
                                      <option value="Barisal">Barisal</option>
                                      <option value="Bhola">Bhola</option>
                                      <option value="Jhalokati">Jhalokati</option>
                                      <option value="Patuakhali">Patuakhali</option>
                                      <option value="Pirojpur">Pirojpur</option>

                                      <option value="Bandarban">Bandarban</option>
                                      <option value="Brahmanbaria">Brahmanbaria</option>
                                      <option value="Chandpur">Chandpur</option>
                                      <option value="Chittagong">Chittagong</option>
                                      <option value="Comilla">Comilla</option>
                                      <option value="Cox's Bazar">Cox's Bazar</option>
                                      <option value="Feni">Feni</option>
                                      <option value="Khagrachhari">Khagrachhari</option>
                                      <option value="Lakshmipur">Lakshmipur</option>
                                      <option value="Noakhali">Noakhali</option>
                                      <option value="Rangamati">Rangamati</option>

                                      <option value="Dhaka">Dhaka</option>
                                      <option value="Faridpur">Faridpur</option>
                                      <option value="Gazipur">Gazipur</option>
                                      <option value="Gopalganj">Gopalganj</option>
                                      <option value="Kishoreganj">Kishoreganj</option>
                                      <option value="Madaripur">Madaripur</option>
                                      <option value="Manikganj">Manikganj</option>
                                      <option value="Munshiganj">Munshiganj</option>
                                      <option value="Narayanganj">Narayanganj</option>
                                      <option value="Narsingdi">Narsingdi</option>
                                      <option value="Rajbari">Rajbari</option>
                                      <option value="Shariatpur">Shariatpur</option>
                                      <option value="Tangail">Tangail</option>


                                      <option value="Bagerhat">Bagerhat</option>
                                      <option value="Chuadanga">Chuadanga</option>
                                      <option value="Jessore">Jessore</option>
                                      <option value="Jhenaidah">Jhenaidah</option>
                                      <option value="Khulna">Khulna</option>
                                      <option value="Kushtia">Kushtia</option>
                                      <option value="Magura">Magura</option>
                                      <option value="Meherpur">Meherpur</option>
                                      <option value="Narail">Narail</option>
                                      <option value="Satkhira">Satkhira</option>


                                      <option value="Jamalpur">Jamalpur</option>
                                      <option value="Mymensingh">Mymensingh</option>
                                      <option value="Netrokona">Netrokona</option>
                                      <option value="Sherpur">Sherpur</option>


                                      <option value="Bogra">Bogra</option>
                                      <option value="Joypurhat">Joypurhat</option>
                                      <option value="Naogaon">Naogaon</option>
                                      <option value="Natore">Natore</option>
                                      <option value="Chapai Nawabganj">Chapai Nawabganj</option>
                                      <option value="Pabna">Pabna</option>
                                      <option value="Rajshahi">Rajshahi</option>
                                      <option value="Sirajganj">Sirajganj</option>


                                      <option value="Dinajpur">Dinajpur</option>
                                      <option value="Gaibandha">Gaibandha</option>
                                      <option value="Kurigram">Kurigram</option>
                                      <option value="Lalmonirhat">Lalmonirhat</option>
                                      <option value="Nilphamari">Nilphamari</option>
                                      <option value="Panchagarh">Panchagarh</option>
                                      <option value="Rangpur">Rangpur</option>
                                      <option value="Thakurgaon">Thakurgaon</option>


                                      <option value="Habiganj">Habiganj</option>
                                      <option value="Moulvibazar">Moulvibazar</option>
                                      <option value="Sunamganj">Sunamganj</option>
                                      <option value="Sylhet">Sylhet</option>

                                      
                                </select>
                              </div>
                          </div>


                           <div class="form-group col-md-6">
                            <label>Phone:</label>
                              <input id="your_phone" class="form-control"  type="text" name="phone" required="1" value="{{$user->phone}}">
                          </div>

                          <div class="form-group col-md-6">
                              <label>Age:</label>
                              <input id="your_age" class="form-control" placeholder="Age" type="text" name="age" required="1" value="{{$user->age}}">
                          </div> 

                           <div class="form-group col-md-6">
                              <div class="select-style">
                              <label style="margin-left: -384px;">Are You Smoker ?</label>                                    
                                  <select class="form-control" name="smoker">
                                      <option value="">Select Option</option>

                                      <option @if($user->smoker=='Yes') selected="selected" @endif value="Yes">Yes</option>

                                      <option @if($user->smoker=='No') selected="selected" @endif value="No">No</option>

                                  </select>
                              </div>
                          </div>

                            <div class="form-group col-md-6">
                              <div class="select-style">
                              <label style="margin-left: -334px;">Are You Drug Addicted ?</label>                                    
                                  <select class="form-control" name="drugadd">
                                      <option value="">Select Option</option>

                                      <option @if($user->drugadd=='Yes') selected="selected" @endif value="Yes">Yes</option>

                                      <option @if($user->drugadd=='No') selected="selected" @endif value="No">No</option>

                                  </select>
                              </div>
                           </div>


                          <div class="form-group col-md-6">
                              <label>Weight:</label>
                              <input id="your_age" class="form-control" placeholder="Weight. Ex: 58" type="text" name="weight"  value="{{$user->weight}}">
                          </div>

                          <div class="form-group col-md-6">
                              <label style="margin-left: -420px;">Date of Birth:</label>
                              <input id="your_age" class="form-control" placeholder="Date Of Birth" type="date" name="dob"  value="{{$user->dob}}">
                              <br>
                          </div>
                         
                         
                           <div class="form-group col-md-12">
                              <div class="select-style">
                                <label style="margin-left: -815px;">Gender:</label>
                                 <div class="radio-inline">

                                   <span style="margin-left: 40px;"></span>
                                    <input type="radio" name="gender" @if($user->gender=='Male') checked @endif value="Male" >Male

                                    <span style="margin-left: 40px;"></span>
                                  <input type="radio" name="gender" @if($user->gender=='Female') checked @endif value="Female" >Female

                                </div><br>
                              </div>
                           </div>

                        
                          <div class="form-group col-md-12 col-sm-12 col-xs-12">
                              <textarea id="textarea_message" class="form-control" rows="4" placeholder="Your Address Or Info" name="address">{{$user->address}}</textarea>
                          </div> 

                          <div class="form-group col-md-12 col-sm-12 col-xs-12">
                              <textarea id="textarea_message" class="form-control" rows="4" placeholder="Your Present Address Or Info" name="pradd">{{$user->pradd}}</textarea>
                          </div>                                                          

                          <div class="form-group col-md-12 col-sm-12 col-xs-12">
                              <button id="btn_submit" class="btn-submit" type="submit">Update</button>
                          </div>



                      </form>

                  </div> <!-- end .appointment-form-wrapper  -->
              </div>


          </div> <!-- end row  -->

          
      </div> <!-- end .container  -->

  </section> <!--  end .section-latest-blog -->
@endsection