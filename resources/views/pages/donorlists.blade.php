@extends('layouts.master')
@section('title','| All Donor Lists')
@section('content')

<section class="section-content-block section-process">

    <div class="container">

        <div class="row">

            <div class="col-md-12 col-sm-12 text-center">
                <h2 class="section-heading"><span>All Donors </span> List </h2>
                <p class="section-subheading">Find the required group donor</p>
            </div> <!-- end .col-sm-10  -->                    

        </div> <!--  end .row  -->

        <div class="row wow fadeInUp">


            <div class="col-lg-12 col-md-offset-0 col-md-12 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">

                <div class="process-layout">

                    <article class="process-info">
                         <table id="example" class="table table-striped table-bordered tableshow" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Blood Group</th>
                                            <th>Age</th>
                                            <th>District</th>
                                            <th>Phone</th>
                                            <th>Donor Status</th>
                                            <th>Email</th>
                                            <th>Profile</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            @foreach($donors as $donor)
                                    <tr>
                                        <td>{{$donor->name}}</td>
                                        <td>
                                          @if($donor->blood_group=='A-') A negetive(-)
                                          @elseif($donor->blood_group=='A+') A positive(+)
                                          @elseif($donor->blood_group=='B-') B negetive(-)
                                          @elseif($donor->blood_group=='B+') B positive(+)
                                          @elseif($donor->blood_group=='AB-') AB negetive(-)
                                          @elseif($donor->blood_group=='AB+') AB positive(+)
                                          @elseif($donor->blood_group=='O-') O negetive(-)
                                          @elseif($donor->blood_group=='O+') O positive(+)
                                          @endif
                                        </td>

                                        <td>{{$donor->age}} years</td>
                                        <td>{{$donor->district}}</td>
                                        <td>{{$donor->phone}}</td>
                                        <td>
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

                                         </td>
                                        <td>
                                          @if($donor->is_wantto_rec_mail_from_people==1)
                                            <button class="btn btn-success"><a href="{{route('sent.mail',$donor->id)}}" style="color: #fff;" >Send Email</button></td>
                                          @else
                                            <button class="btn btn-danger"><a onclick="return alert('you can\'t sent mail to this donor')" style="color: #fff;" href="#">Send Email</button></td>
                                          @endif
                                        <td><button class="btn btn-primary"><a style="color: #fff;" href="{{route('donor.view.profile',$donor->id)}}">View Profile</button></td>
                                    </tr>
                            @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Blood Group</th>
                                            <th>Age</th>
                                            <th>District</th>
                                            <th>Phone</th>
                                            <th>Donor Status</th>
                                            <th>Email</th>
                                            <th>Profile</th>
                                        </tr>
                                    </tfoot>
                                </table>
                       
                    </article>
                  

                </div> <!--  end .process-layout -->

            </div> <!--  end .col-lg-3 -->


        </div> <!--  end .row --> 

    </div> <!--  end .container  -->

</section> <!--  end .section-process -->


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
@section('scripts')
<script src="{{ URL::asset('js/jquery-3.3.1.js') }}"></script>
<script src="{{ URL::asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('js/dataTables.bootstrap4.min.js') }}"></script>

<script>
       $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endsection