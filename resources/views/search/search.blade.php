@extends('layouts.master')
@section('title','| Find Donors')
@section('content')
 
<section class="section-content-block section-process">

<div class="container">

    <div class="row">

        <div class="col-md-12 col-sm-12 text-center">
            <h2 class="section-heading"><span>Find/Search</span> Donor</h2>
            <p class="section-subheading">you can find donor by  groups or location wise</p>
        </div> <!-- end .col-sm-10  -->                    

    </div> <!--  end .row  -->


</div> <!--  end .container  -->

</section> <!--  end .section-process -->

<section class="cta-section-2 lkfbsearchbygroup">
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
            <h2>Find Donors by Blood Groups</h2>
           @foreach($bloodgroups as $bloodgroup)
            <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-12 col-xs-12">
                <a class="btn btn-cta-2 lkfbsearchbygroupbutton" href="{{route('donor.by.bloodgroup',$bloodgroup->blood_group)}}">{{$bloodgroup->blood_group}} ({{$bloodgroup->total}})</a>
            </div>
           @endforeach 
        </div> <!--  end .col-md-8  -->
    </div> <!--  end .row  -->
</div>
</section> 

        <!--  APPOINTMENT SECTION -->


<br><br> 

<section class="cta-section-2 lkfbsearchbygroup">
<div class="container">
    <div class="row">
        <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12">
            <h2>Find Donors by Location(District) Wise</h2>
            @foreach($donordistricts as $donordistrict)
             <div  class="col-lg-3 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-12 col-xs-12">
                <a style="font-size: 20px;width: 260px;" class="btn btn-cta-2 lkfbsearchbygroupbutton1" href="{{route('donor.by.district',$donordistrict->district)}}">{{$donordistrict->district}} ({{$donordistrict->total}})</a>
            </div>
             @endforeach 

        </div> <!--  end .col-md-8  -->
    </div> <!--  end .row  -->
</div>
</section> 

<!--  APPOINTMENT SECTION -->
@endsection