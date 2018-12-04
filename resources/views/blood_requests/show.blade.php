@extends('layouts.master')
@section('title','| All Blood Request Lists')
@section('content')

<section class="section-content-block section-home-blog section-pure-white-bg">

  <div class="container wow fadeInUp">

      <div class="row section-heading-wrapper">

          <div class="col-md-12 col-sm-12 text-center">
              <h2 class="section-heading">Current Blood Requests List</h2>
              <p class="section-subheading">
                  Here is the latest request for blood
              </p>
          </div> <!-- end .col-md-12  -->

      </div> <!--  end .row  -->

    @foreach($requests->chunk(3) as $chunkrequest)
      <div class="row wow fadeInUp">
          
        @foreach($chunkrequest as $request)
           <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12">

          
               <div class="item_row_requestL">
                  <strong>Blood Group</strong>: 

                  @if($request->blood_group=='A-') A negetive(-)
                  @elseif($request->blood_group=='A+') A positive(+)
                  @elseif($request->blood_group=='B-') B negetive(-)
                  @elseif($request->blood_group=='B+') B positive(+)
                  @elseif($request->blood_group=='AB-') AB negetive(-)
                  @elseif($request->blood_group=='AB+') AB positive(+)
                  @elseif($request->blood_group=='O-') O negetive(-)
                  @elseif($request->blood_group=='O+') O positive(+)
                  @endif
                  <br>
                  <strong>Amount</strong>: {{$request->amount}} Unit(s)/Bag(s) <br>
                  <strong>Donation Date</strong>: {{$request->date}} (yyyy/mm/dd)<br>
                  <strong>Request from (Name)</strong>: {{$request->name}}<br>
                  <strong>Patient's Location</strong>: {{$request->present_location}}<br>
                  <strong>Present District</strong>: {{$request->present_district}}<br>
                  <strong>Contact Number</strong>: {{$request->phone}}<br>
                  <strong>More Message</strong>:{{$request->messages}}<br><br>
                  <a href="{{route('check.code',$request->id)}}" alt="edit">Update/Delete</a>
              </div>

                 
          </div>
        @endforeach

      </div> <!-- end row  -->
    @endforeach
      
      {{$requests->links()}}
  </div> <!-- end .container  -->

</section> <!--  end .section-latest-blog -->
@endsection