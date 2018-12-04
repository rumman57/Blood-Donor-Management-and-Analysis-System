
        <!-- START FOOTER  -->

        <footer>            

            <section class="footer-widget-area footer-widget-area-bg">

                <div class="container">

                    <div class="row">

                       <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <img src="{{URL::asset('images/logo-footer1.png')}}" alt="" />
                        </div> <!--  end col-lg-3-->

                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <p>
                                This is a Blood Donor Management & Analysis Sytem. People who are interested to donate blood can registered here & manage their account. People who are searching for blood can make a request to blood or directly talk with the available donor via phone or email. This system also analysis the blood donor & request based on the registerd information.
                            </p>
                        </div> <!--  end .col-lg-9  -->

                    </div> <!--  end .row  -->

                </div> <!-- end .container  -->

            </section> <!--  end .footer-widget-area  -->

            <!--FOOTER CONTENT  -->

            <section class="footer-contents">

                <div class="container">

                    <div class="row clearfix">

                        <div class="col-md-6 col-sm-12">
                            <p class="copyright-text"> {{$option->copyright}} </p>

                        </div>  <!-- end .col-sm-6  -->

                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="footer-nav">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="{{route('home.index')}}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{route('blood.looking')}}">Looking For Blood</a>
                                        </li>
                                        <li>
                                            <a href="{{route('donor.lists')}}">All Donor List</a>
                                        </li>
                                         <li><a href="{{route('requests.index')}}">All Blood Request List</a></li>
                                         
                                       
                                    </ul>
                                </nav>
                            </div> <!--  end .footer-nav  -->
                        </div> <!--  end .col-lg-6  -->

                    </div> <!-- end .row  -->                                    

                </div> <!--  end .container  -->

            </section> <!--  end .footer-content  -->

        </footer>

        <!-- END FOOTER  -->

        <!-- Back To Top Button  -->

        <a id="backTop">Back To Top</a>

        <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('js/wow.min.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.backTop.min.js') }}"></script>
        <script src="{{ URL::asset('js/waypoints.min.js') }}"></script>
        <script src="{{ URL::asset('js/waypoints-sticky.min.js') }}"></script>
        <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.stellar.min.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.counterup.min.js') }}"></script>
        <script src="{{ URL::asset('js/venobox.min.js') }}"></script>
       <script src="{{ URL::asset('js/custom-scripts.js') }}"></script>

        @yield('scripts')
        
    </body>
</html>