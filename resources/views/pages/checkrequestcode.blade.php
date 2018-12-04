@extends('layouts.master')
@section('title','| Modify Blood Request')
@section('content')
 
<section class="section-content-block section-home-blog section-pure-white-bg">

    <div class="container wow fadeInUp">

        <div class="row section-heading-wrapper">

            <div class="col-md-12 col-sm-12 text-center">
                <h2 class="section-heading">Modify Blood Request</h2>
                <p class="section-subheading">
                    verify this form with your request code
                </p>
            </div> <!-- end .col-md-12  -->

        </div> <!--  end .row  -->

        <div class="row">

            <div class="col-lg-12 col-md-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12">
                  <div class="appointment-form-wrapper text-center clearfix">
                    <h3 class="join-heading">Modify Blood Request</h3>
                     @include('flashmessage.fordonorregistration')
                    <form action="{{route('check.code',$id)}}" method="POST" class="appoinment-form"> 
                        {{csrf_field()}}
                        <div class="form-group col-md-12">
                            <input id="your_name" class="form-control" placeholder="Give Your Blood Request Code*" type="text" name="code" required="1">
                        </div>
                                                                               

                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <button id="btn_submit" class="btn-submit" type="submit">CONTINUE</button>
                        </div>

                    </form>

                </div> <!-- end .appointment-form-wrapper  -->
            </div>


        </div> <!-- end row  -->

        
    </div> <!-- end .container  -->

</section> <!--  end .section-latest-blog -->
           
       
@endsection