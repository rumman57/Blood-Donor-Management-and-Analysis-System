@extends('layouts.master')
@section('title','| Donor Login')
@section('content')
 
        <section class="section-content-block section-home-blog section-pure-white-bg">

            <div class="container wow fadeInUp">

                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading">Donor Login Form</h2>
                        <p class="section-subheading">
                            Pls fill it with your credentials information & manage your profile settings.
                        </p>
                    </div> <!-- end .col-md-12  -->

                </div> <!--  end .row  -->

                <div class="row">

                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                          <div class="appointment-form-wrapper text-center clearfix">
                            <h3 class="join-heading">Sign In</h3>

                            @include('flashmessage.fordonorregistration')

                            <form action="{{route('user.login')}}" method="POST" class="appoinment-form"> 
                                
                              {{csrf_field()}}

                                <div class="form-group col-md-12">
                                    <input id="your_email" class="form-control" placeholder="Email" name="email" type="email">
                                </div>
                                 <div class="form-group col-md-12">
                                    <input id="your_phone" class="form-control" placeholder="Password" name="password" type="password">
                                </div>
                                                                                        

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button id="btn_submit" class="btn-submit" type="submit">Login</button>
                                </div>

                                <div class="form-group col-md-12">
                                    <p style="text-align: left;"><a href="{{route('password.request')}}">Forgot password ?</a></p>

                                     <p style="text-align: left; color:#178e9b ">New User ? <a href="{{route('user.register')}}"> Sign Up</a> Now.</p>
                                </div>

                            </form>

                        </div> <!-- end .appointment-form-wrapper  -->
                    </div>


                </div> <!-- end row  -->

                
            </div> <!-- end .container  -->

        </section> <!--  end .section-latest-blog -->
@endsection