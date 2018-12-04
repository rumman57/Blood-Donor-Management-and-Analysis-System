@extends('layouts.master')
@section('title','| Donor\'s Profile')
@section('content')
  <section class="section-content-block section-home-blog section-pure-white-bg">

    <div class="container wow fadeInUp">

        <div class="row section-heading-wrapper">

            <div class="col-md-12 col-sm-12 text-center">
                <h2 class="section-heading">Your Donation History List</h2>
                <p class="section-subheading">
                   Here you can see your all donatios lists.
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
               
              <div class="process-layout">

                  <article class="process-info">
                       <table id="example" class="table table-striped table-bordered tableshow" style="width:100%">
                                  <thead>
                                      <tr>
                                          <th>No.</th>
                                          <th>Donation Date</th>
                                          <th>Donation To</th>
                                          <th>Donation Address</th>
                                          <th>Action</th>                                         
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @php
                                      $i =0;
                                    @endphp
                              @foreach($donations as $donation)
                                    @php $i++ @endphp
                                      <tr>
                                          <td>{{ $i }}</td>
                                          <td>{{$donation->donation_date}}</td>
                                          <td>{{$donation->donation_to}}</td>
                                          <td>{{$donation->donation_address}}</td>
                                          <td>
                                              <form method="POST" action="{{action('DonationController@destroy',['id'=>$donation->id])}}">

                                                {{method_field('DELETE')}}
                                                {{csrf_field()}}

                                               <span onclick = "return confirm('Are You Sure To Delete ?')" href=""><button class="btn btn-danger">Delete</button></span>

                                            </form>
                                            
                                          </td>
                                         
                                      </tr>
                              @endforeach
                                  </tbody>
                                  {{--<tfoot>
                                      <tr>
                                          <th>No.</th>
                                          <th>Donation Date</th>
                                          <th>Donation To</th>
                                          <th>Donation Address</th>
                                          <th>Action</th>
                                      </tr>
                                  </tfoot>--}}
                              </table>
                     
                  </article>

                   {{$donations->links()}}
                

              </div> <!--  end .process-layout -->
            
            </div>


        </div> <!-- end row  -->

        
    </div> <!-- end .container  -->

</section> <!--  end .section-latest-blog -->
@endsection
@section('scripts')
<script src="{{ URL::asset('js/jquery-3.3.1.js') }}"></script>
<script src="{{ URL::asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('js/dataTables.bootstrap4.min.js') }}"></script>

<script>
       $(document).ready(function() {
    $('#example').DataTable();
} );
@endsection