@extends('layouts.master')
@section('title','| Sent Mail to Donor')
@section('content')
 
<section class="section-content-block section-home-blog section-pure-white-bg">

    <div class="container wow fadeInUp">

        <div class="row section-heading-wrapper">

            <div class="col-md-12 col-sm-12 text-center">
                <h2 class="section-heading">Send Mail to <span style="color: forestgreen;">( {{$donor->name}} )</span></h2>
                <p class="section-subheading">
                    you can send mail to this donor throug this form. 
                </p>
            </div> <!-- end .col-md-12  -->

        </div> <!--  end .row  -->

        <div class="row">

            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                  <div class="appointment-form-wrapper text-center clearfix">
                    <h3 class="join-heading">Send Mail</h3>

                    @include('flashmessage.fordonorregistration')

                    <form action="{{route('post.sent.mail')}}" method="POST" class="appoinment-form"> 
                        
                      {{csrf_field()}}

                        <div class="form-group col-md-12">
                            <input id="your_email" class="form-control" placeholder="Name" name="name" type="text" required="1">
                        </div>

                         <div class="form-group col-md-12">
                            <input id="your_phone" class="form-control" placeholder="Subject" name="subject" type="text" required="1">
                        </div>
                                                                                

                         <div class="form-group col-md-12 col-sm-12 col-xs-12">
                              <textarea id="textarea_message" class="form-control" rows="4" placeholder="Your Message Or Info" name="message" required="1">{{Request::old('message')}}</textarea>
                         </div>

                         <input type="hidden" name="donor_id" value="{{$donor->id}}">
                        

                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <button id="btn_submit" class="btn-submit" type="submit">Send</button>
                        </div>
                      

                    </form>

                </div> <!-- end .appointment-form-wrapper  -->
            </div>


        </div> <!-- end row  -->

        
    </div> <!-- end .container  -->

</section> <!--  end .section-latest-blog -->
@endsection