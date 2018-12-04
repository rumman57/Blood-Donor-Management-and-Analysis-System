@extends('layouts.master')
@section('title','| Recover Forgot Password')
@section('content')
 
        <section class="section-content-block section-home-blog section-pure-white-bg">

            <div class="container wow fadeInUp">

                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading">Recover Forgot Password</h2>
                        <p class="section-subheading">
                            Pls fill up with your registered email to get the password reset link
                        </p>
                    </div> <!-- end .col-md-12  -->

                </div> <!--  end .row  -->

                <div class="row">

                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                          <div class="appointment-form-wrapper text-center clearfix">
                            <h3 class="join-heading">Recover Password Link Form</h3>

                            @include('flashmessage.fordonorregistration')

                            <form action="{{route('password.email')}}" method="POST" class="appoinment-form"> 
                                
                              {{csrf_field()}}

                                <div class="form-group col-md-12">
                                    <input id="your_email" class="form-control" placeholder="Registered Email" name="email" type="email" required="1">
                                </div>
                                 
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button id="btn_submit" class="btn-submit" type="submit">Submit</button>
                                </div>

                            </form>

                        </div> <!-- end .appointment-form-wrapper  -->
                    </div>


                </div> <!-- end row  -->

                
            </div> <!-- end .container  -->

        </section> <!--  end .section-latest-blog -->
@endsection