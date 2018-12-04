@extends('layouts.master')
@section('title','| Make Blood Request')
@section('content')
 
<section class="section-content-block section-home-blog section-pure-white-bg">

    <div class="container wow fadeInUp">

        <div class="row section-heading-wrapper">

            <div class="col-md-12 col-sm-12 text-center">
                <h2 class="section-heading">Make a Request for Blood</h2>
                <p class="section-subheading">
                    Pls fill it & submit for blood request
                </p>
            </div> <!-- end .col-md-12  -->

        </div> <!--  end .row  -->

        <div class="row">

            <div class="col-lg-12 col-md-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12">
                  <div class="appointment-form-wrapper text-center clearfix">
                    <h3 class="join-heading">Request Form</h3>
                     @include('flashmessage.fordonorregistration')
                    <form action="{{route('requests.store')}}" method="POST" class="appoinment-form"> 
                        {{csrf_field()}}
                        <div class="form-group col-md-6">
                            <input id="your_name" class="form-control" placeholder="Your Name*" type="text" name="name" >
                        </div>
                        <div class="form-group col-md-6">
                            <input  class="form-control" placeholder="Your Contact No*" type="text" name="phone" required="1">
                        </div>
                        
                
                        <div class="form-group col-md-6">
                            <div class="select-style">                                    
                                <select class="form-control" name="blood_group" required="1">
                                     <option value="">Select Blood Group</option>
                                      <option value="A-">A negetive(-)</option>
                                      <option value="A+">A positive(+)</option>
                                      <option value="B-">B negetive(-)</option>
                                      <option value="B+">B positive(+)</option>
                                      <option value="AB-">AB negetive(-)</option>
                                      <option value="AB+">AB positive(+)</option>
                                      <option value="O-">O negetive(-)</option>
                                      <option value="O+">O positive(+)</option>
                                    
                                </select>
                            </div>
                        </div>

                        
                         <div class="form-group col-md-6">
                            <div class="select-style">                                    
                                <select class="form-control" name="division" required="1">
                                   <option value="">Select Division</option>
                                      <option value="Barisal">Barisal</option>
                                      <option value="Chittagong">Chittagong</option>
                                      <option value="Dhaka">Dhaka</option>
                                      <option value="Khulna">Khulna</option>
                                      <option value="Mymensingh">Mymensingh</option>
                                      <option value="Rajshahi">Rajshahi</option>
                                      <option value="Rangpur">Rangpur</option>
                                      <option value="Sylhet">Sylhet</option>
                                    
                                </select>
                            </div>
                        </div>

                         <div class="form-group col-md-6">
                            <div class="select-style">                                    
                                <select class="form-control" name="present_district" required="1">
                                    <option value="">Patient's Present District</option>

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
                            <input id="your_phone" class="form-control" placeholder="Patient's Present Location*" type="text" name="present_location" required="1">
                        </div>
                        
                        <div class="form-group col-md-6">
                            <input id="your_email" class="form-control" placeholder="Amount (Unit/Bag)*" type="number" name="amount" required="1">
                        </div>

                        <div class="form-group col-md-6">
                            <input id="your_age" class="form-control" placeholder="Date of Donation*" type="date" name="date" required="1">
                        </div>

                        <div class="form-group col-md-12" style="margin-top: 20px;">
                            <label><p>Edit Code (that will be used as password if you want to edit/delete the request)</p></label>
                            <input id="your_age" class="form-control" placeholder="Edit Code" type="text" name="code" required="1">
                        </div>

                      
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <textarea id="textarea_message" class="form-control" rows="4" placeholder="More Message Or Info" name="messages"></textarea>
                        </div>                                                          

                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <button id="btn_submit" class="btn-submit" type="submit">SUBMIT</button>
                        </div>

                    </form>

                </div> <!-- end .appointment-form-wrapper  -->
            </div>


        </div> <!-- end row  -->

        
    </div> <!-- end .container  -->

</section> <!--  end .section-latest-blog -->
           
       
@endsection