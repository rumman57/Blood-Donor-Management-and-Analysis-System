@extends('layouts.master')
@section('title','| Donor Registration Validity')
@section('content')
  <section class="section-content-block section-home-blog section-pure-white-bg">

    <div class="container wow fadeInUp">

        <div class="row section-heading-wrapper">

            <div class="col-md-12 col-sm-12 text-center">
                <h2 class="section-heading">Registration Validity as a blood donor</h2>
                <p class="section-subheading">
                    Pls check it carefully
                </p>
            </div> <!-- end .col-md-12  -->

        </div> <!--  end .row  -->

        <div class="row">

            <div class="col-lg-12 col-md-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12">

                <div class="latest-news-container"> 

                    <div class="news-content">
                        <div class="update-details">                                     
                            Most people can give blood but sometimes it is not possible to be a blood donor. <br><br>

                            Please answer all of the following five questions so that we can advise if blood donation is appropriate for you.
                            Your responses are not recorded in any way.<br><br>

                            These questions only apply if you want to register as a new blood donor. If you are already a registered blood donor please pls <strong><a href=""> sign in </a></strong> to manage your account.<br><br> 
                        </div>

              
                    <form action="{{route('user.preregister')}}" method="POST" class="appoinment-form preregisterform prreglabel">

                      {{csrf_field() }}
                    
                    @if(Session::has('regvaliditymsg'))
                     @php
                     $msg = Session::get('regvaliditymsg');
                      echo "<script>alert('".$msg."')</script>";
                      echo "<script>window.location.href='/'</script>";
                     @endphp
                   @endif

                      <div>
                          <h5>1. Are you 17 – 65 years old?</h5>
                               <div class="radio">
                                  <label><input  type="radio" name="checkage" required="1" value="y">YES</label>
                                </div>
                                <div class="radio">
                                  <label><input type="radio" name="checkage" value="n">NO</label>
                              </div>
                      </div><br>

                       <div>
                          <h5>2. Do you currently weigh less than 50kg (7 stone 12 pounds)?</h5>
                               <div class="radio">
                                  <label><input type="radio" name="checkweight" required="1" value="y">YES</label>
                                </div>
                                <div class="radio">
                                  <label><input type="radio" name="checkweight" value="n">NO</label>
                              </div>
                      </div><br>

                      <div>
                          <h5>3. Have you received donated eggs or embryos ?</h5>
                               <div class="radio">
                                  <label><input type="radio" name="checkembroys" required="1" value="y">YES</label>
                                </div>
                                <div class="radio">
                                  <label><input type="radio" name="checkembroys" value="n">NO</label>
                              </div>
                      </div><br>


                      <div>
                          <h5>4. Have you had a blood or blood product transfusion ?</h5>
                               <div class="radio">
                                  <label><input type="radio" name="checktransfusion" required="1" value="y">YES</label>
                                </div>
                                <div class="radio">
                                  <label><input type="radio" name="checktransfusion" value="n">NO</label>
                              </div>
                      </div><br>


                      <div>
                          <h5>5. Have you ever had a cancer other than basal cell carcinoma or cervical carcinoma insitu (CIN)?</h5>
                               <div class="radio">
                                  <label><input type="radio" name="checkcancer" required="1" value="y">YES</label>
                                </div>
                                <div class="radio">
                                  <label><input type="radio" name="checkcancer" value="n">NO</label>
                              </div>
                      </div><br>
                       
                        
                        <div class="form-group">
                            <button id="btn_submit" class="btn-submit" type="submit">Continue</button>
                        </div>

                    </form>

                


                    </div>

                </div><!--  end .update-info  -->

            </div> <!--  end col-lg-4  -->


        </div> <!-- end row  -->

        
    </div> <!-- end .container  -->

</section> <!--  end .section-latest-blog -->     
@endsection