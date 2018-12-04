@extends('layouts.master')
@section('title','| Analysis')
@section('stylesheets')
 {!! Charts::assets() !!}
@endsection
@section('content')
 
        <section class="section-content-block section-home-blog section-pure-white-bg">

            <div class="container wow fadeInUp">

                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading">Analysis View For Current Year: <span style="color: #1c697c;"> (<?php echo date('Y') ?>)</span></h2>
                        <p class="section-subheading">
                            Here you can view different statistics based on our database information
                        </p>
                    </div> <!-- end .col-md-12  -->

                </div> <!--  end .row  -->
                <br><br>
                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h5 class="section-heading">Donor Section</h5>
                    </div> <!-- end .col-md-12  -->

                </div> <!--  end .row  -->

                <div class="row">
                    <br>
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                          {!! $donorchart->render() !!}
                          <br><br><br>
                           {!! $bg_pie_chart->render() !!}
                           <br><br><br>
                           {!! $don_by_dis->render() !!}
                    </div>


                </div> <!-- end row  -->
               

                
            </div> <!-- end .container  -->

        </section> <!--  end .section-latest-blog -->

        

        <section class="section-content-block section-home-blog section-pure-white-bg">

            <div class="container wow fadeInUp">

                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-center">
                        <h5 class="section-heading">Blood Request Section</h5>
                    </div> <!-- end .col-md-12  -->

                </div> <!--  end .row  -->

                <div class="row">

                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                          {!! $brchart->render() !!}
                          <br><br><br>
                          {!! $br_bbg_chart->render() !!}
                          <br><br><br>
                          {!! $br_brd_chart->render() !!}
                         
                          
                    </div>


                </div> <!-- end row  -->
               

                
            </div> <!-- end .container  -->

        </section> <!--  end .section-latest-blog -->






  <section class="section-content-block section-home-blog section-pure-white-bg">

      <div class="container wow fadeInUp">

          <div class="row section-heading-wrapper">

              <div class="col-md-12 col-sm-12 text-center">
                  <h2 class="section-heading">Analysis With Specific Date</h2>
                  <p class="section-subheading">
                      pls select date withing the same year.
                  </p>
              </div> <!-- end .col-md-12  -->

          </div> <!--  end .row  -->

          <div class="row section-heading-wrapper">

              <div class="col-md-10 col-sm-12 text-center col-md-offset-1">
                 <div class="appointment-form-wrapper text-center clearfix">
                      <h3 class="join-heading">Select Date within the same Year</h3>

                      @include('flashmessage.fordonorregistration')

                      <form action="{{route('result.search.analysis')}}" method="POST" class="appoinment-form anapaf"> 
                          
                        {{csrf_field()}}
                        <div class="col-md-4">
                          <div class="form-group col-md-12">
                              <label>Strat Date</label>
                              <input  class="form-control" placeholder="Date" name="sdate" type="date" required="1">
                          </div>
                        </div>
                        <div class="col-md-4">
                           <label>End Date</label>
                           <div class="form-group col-md-12">
                             <input  class="form-control" placeholder="Date" name="edate" type="date" required="1">
                          </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <button id="btn_submit" class="btn-submit" type="submit">View</button>
                          </div>
                        </div>
                                                                            
                      </form>
                      <br>

                  </div> <!-- end .appointment-form-wrapper  -->
              </div> <!-- end .col-md-12  -->

          </div> <!--  end .row  -->
          
     <br>
      </div> <!-- end .container  -->

  </section> <!--  end .section-latest-blog -->
@endsection
@section('scripts')

@endsection