@extends('layouts.master')
@section('title','| Donor\'s Profile')
@section('content')
  <section class="section-content-block section-home-blog section-pure-white-bg">

    <div class="container wow fadeInUp">

        <div class="row section-heading-wrapper">

            <div class="col-md-12 col-sm-12 text-center">
                <h2 class="section-heading">{{$donor->name}}'s Profile</h2>
                <p class="section-subheading">
                   Profile
                </p>
            </div> <!-- end .col-md-12  -->

        </div> <!--  end .row  -->

        <div class="row">

            <div class="col-md-10 col-sm-12 col-md-offset-1">

               <table class="table tablefordonor1">
               
                <tbody class="text-center">
                  
                  <tr class="success">
                    <td><h5>Photo</h5></td>
                    <td class="tablefordonorrstd"><p>
                      
                       @if(empty($donor->image))
                      <img src="{{URL::asset('images/pro_demo.jpg')}}" height="200" width="200">
                       @else
                        <img src="{{URL::asset('images/propic/'.$donor->image)}}" height="200" width="200">
                       @endif
                    </p></td>
                  </tr>

                  <tr class="success">
                    <td><h5>Name</h5></td>
                    <td class="tablefordonorrstd"><p>{{$donor->name}}</p></td>
                  </tr>

                  <tr class="success">
                    <td><h5>Blood Group</h5></td>
                    <td class="tablefordonorrstd"><p>

                      @if($donor->blood_group=='A-') A negetive(-)
                      @elseif($donor->blood_group=='A+') A positive(+)
                      @elseif($donor->blood_group=='B-') B negetive(-)
                      @elseif($donor->blood_group=='B+') B positive(+)
                      @elseif($donor->blood_group=='AB-') AB negetive(-)
                      @elseif($donor->blood_group=='AB+') AB positive(+)
                      @elseif($donor->blood_group=='O-') O negetive(-)
                      @elseif($donor->blood_group=='O+') O positive(+)
                      @endif

                    </p></td>
                  </tr>

                  <tr class="success">
                    <td><h5>Member Status: </h5></td>
                    <td class="tablefordonorrstd"><p>
                      
                        @php
                         $lastddate = "";
                        @endphp
                        @foreach ($donor->donations as $donation)
                           @if($loop->last)
                              @php
                               $lastddate = $donation->donation_date;
                              @endphp
                           @endif
                        @endforeach
                        @php
                         $wdn = $donor->is_want_to_donate_now;
                         $result = \App\Http\Controllers\PagesController::donorstatus($lastddate,$wdn);
                        @endphp

                        @if($result=='allready')
                          <img src="{{URL::asset('images/smile-face.png')}}" >
                          <img src="{{URL::asset('images/right-icon.png')}}" height="30" width="30" >
                        @elseif($result=='notready')
                          <img src="{{URL::asset('images/sorry.png')}}" height="30" width="30">
                          <img src="{{URL::asset('images/right-icon.png')}}" height="30" width="30" >
                        @elseif($result=='cannot')
                          <img src="{{URL::asset('images/cross-red.png')}}" height="30" width="30" >
                        @endif

                    </p></td>
                  </tr>

                  <tr class="success">
                    <td><h5>Smoker?</h5></td>
                    <td class="tablefordonorrstd"><p>

                     @if($donor->smoker=='Yes') Smoker
                     @else Non-smoker
                     @endif

                    </p></td>
                  </tr>

                   <tr class="success">
                    <td><h5>Drug Accidted?</h5></td>
                    <td class="tablefordonorrstd"><p>
                       @if($donor->drugadd=='Yes') Addicted
                       @else Non-addicted
                       @endif
                    </p></td>
                  </tr>

                 
                   <tr class="success">
                    <td><h5>Last Donation Date</h5></td>
                    <td class="tablefordonorrstd"><p>

                      @foreach ($donor->donations as $donation)
                           @if($loop->last)
                              @php
                               $lastdd = $donation->donation_date;
                              @endphp 
                           @endif
                      @endforeach
                        @if(!empty($lastdd))
                          {{$lastdd}}
                          ({{\Carbon\Carbon::parse($lastdd)->diffForHumans()}})
                        @else
                          <span style="color: crimson;"> "No Donation Yet"</span>
                        @endif
                    </p></td>
                  </tr>

                   <tr class="success">
                    <td><h5>Gender</h5></td>
                    <td class="tablefordonorrstd"><p>{{$donor->gender or "N/A"}}</p></td>
                  </tr>

                  <tr class="success">
                    <td><h5>Contact No</h5></td>
                    <td class="tablefordonorrstd"><p>{{$donor->phone or "N/A"}}</p></td>
                  </tr>
                  
                  <tr class="success">
                    <td><h5>Age</h5></td>
                    <td class="tablefordonorrstd"><p>{{$donor->age or "N/A"}}</p></td>
                  </tr>

                  <tr class="success">
                    <td><h5>Weight</h5></td>
                    <td class="tablefordonorrstd"><p>{{$donor->weight or "N/A"}} 
                    	@if(!empty($donor->age)) Kg @endif</p></td>
                  </tr>

                  <tr class="success">
                    <td><h5>Date of Birth</h5></td>
                    <td class="tablefordonorrstd"><p>{{$donor->dob or "N/A"}}</p></td>
                  </tr>

                   <tr class="success">
                    <td><h5>Division</h5></td>
                    <td class="tablefordonorrstd"><p>{{$donor->division}}</p></td>
                  </tr>

                   <tr class="success">
                    <td><h5>Home District</h5></td>
                    <td class="tablefordonorrstd"><p>{{$donor->district}}</p></td>
                  </tr>

                   <tr class="success">
                    <td><h5>Current Living District</h5></td>
                    <td class="tablefordonorrstd"><p>{{$donor->currdistrict or $donor->district}}</p></td>
                  </tr>

                  <tr class="success">
                    <td><h5>Present Address</h5></td>
                    <td class="tablefordonorrstd"><p>{{$donor->pradd or "N/A"}}</p></td>
                  </tr>

                  <tr class="success">
                    <td><h5>Short Profile</h5></td>
                    <td class="tablefordonorrstd"><p>{{$donor->address}}</p></td>
                  </tr>

                </tbody>
              </table>
                  
            </div>


        </div> <!-- end row  -->

        
    </div> <!-- end .container  -->

</section> <!--  end .section-latest-blog -->

  <section class="section-content-block section-home-blog section-pure-white-bg">

    <div class="container wow fadeInUp">
          <div class="row">

            
           <div class="row section-heading-wrapper">

            <div class="col-md-12 col-sm-12 text-center">
                <h2 class="section-heading">Donation History</h2>
            </div> <!-- end .col-md-12  -->

        </div> <!--  end .row  -->


        <div class="col-md-10 col-sm-12 col-md-offset-1">
             
            <div class="process-layout">

                <article class="process-info">
                     <table id="example" class="table table-striped table-bordered tableshow" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Donation Date</th>
                                        <th>Donation To</th>
                                        <th>Donation Address</th>  
                                    </tr>
                                </thead>
                                <tbody>
                          @if($donor->is_show_in_history==1)
                                  @php
                                    $i =0;
                                  @endphp
                            @foreach($donor->donations as $donation)
                                  @php $i++ @endphp
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{$donation->donation_date}}</td>
                                        <td>{{$donation->donation_to}}</td>
                                        <td>{{$donation->donation_address}}</td>
                                    </tr>
                            @endforeach

                          @else
                           <tr>
                               <td colspan="4" style="color: crimson;">Sorry!! You can't see history for this donor</td>         
                            </tr>
                          @endif
                                </tbody>
                          
                            </table>
                   
                </article>

            </div> <!--  end .process-layout -->
            
            </div>


        </div> <!-- end row  -->

        
    </div> <!-- end .container  -->

</section> <!--  end .section-latest-blog -->

<section class="section-content-block section-process" style="margin-top: -100px;">

<div class="container">

    <div class="row">

        <div class="col-md-12 col-sm-12 text-center">
            <h2 class="section-heading"><span>Donor Status Symbol</span> Explanation</h2>
            <p class="section-subheading">meaning of available donor status symbol</p>
        </div> <!-- end .col-sm-10  -->                    

    </div> <!--  end .row  -->

    <div class="row wow fadeInUp">


        <div class="col-lg-10 col-md-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">

            <div class="process-layout">

                <article class="process-info">
                     <table class="table table-striped table-bordered tableshow" >
                                <thead>
                                    <tr>
                                        <th style="width: 30%">Symbol</th>
                                        <th style="width: 70%">Meaning</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="{{URL::asset('images/smile-face.png')}}" ></td>
                                        <td>The donor is interested to donate blood right now</td>
                                      
                                    </tr>
                                    <tr>
                                        <td><img src="{{URL::asset('images/sorry.png')}}" height="30" width="30" ></td>
                                        <td>The donor is not interested to donate blood right now for some reasons</td>
                                      
                                    </tr>
                                  
                                    <tr>
                                        <td><img src="{{URL::asset('images/right-icon.png')}}" height="30" width="30" ></td>
                                        <td><strong>The donor is ready to donate blood because:</strong><br>a) He/She didn't donate blood yet or <br>b) He/She has donated blood before 4 months (120 days) ago</td>
                                      
                                    </tr>
                                    <tr>
                                        <td><img src="{{URL::asset('images/cross-red.png')}}" height="30" width="30" ></td>
                                        <td><strong>The donor is not ready to donate blood right now because:</strong> <br>He/She has donated blood within last 4 months (120 days)</td>
                                      
                                    </tr>
                                </tbody>
                                
                            </table>
                   
                </article>
              

            </div> <!--  end .process-layout -->

        </div> <!--  end .col-lg-3 -->


    </div> <!--  end .row --> 

</div> <!--  end .container  -->

</section> <!--  end .section-process -->
@endsection