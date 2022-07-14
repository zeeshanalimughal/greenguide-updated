<!-- Footer -->
<footer id="footer">
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="widget">

                        <div class="widget-title"><img class="img-fluid" width="150px"
                                src="{{ url('front/img/green-guide-logo.png') }}"></div>
                        <p class="mb-5">Built with love by Binary Professionals<br> All rights reserved.
                            Copyright © 2021.</p>

                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="widget">
                                <div class="widget-title"><b></b></div>
                                <ul class="list">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="/contact">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="widget">
                                <div class="widget-title"><b>Services</b></div>
                                <ul class="list">
                                    <li><a href="/advert-design-book">Advertise Booking</a></li>
                                    <li><a href="/magzine-design-book">Design Booking</a></li>
                                    <li><a href="/businessdirectory">Business Listing</a></li>
                                    <li><a href="/localevents">Events Listing</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="widget">
                                <div class="widget-title"><b>Usefull Links</b></div>
                                <ul class="list">
                                    <li><a href="/website-terms-of-use">Website Terms of Use</a></li>
                                    <li><a href="/disclaimer">Disclaimer</a></li>
                                    <li><a href="/cookie-policy">Cookie Policy</a></li>
                                    <li><a href="/bd-terms-and-conditions">Business Directory Terms & Conditions</a></li>
                                    <li><a href="/reviews-ternms-of-use">Reviews Terms of Use</a></li>
                                </ul>
                                @if(Request::url() === route('contact'))
                                <a href="#opt-form"><h2>Opt Out</h2></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>


            </div>
         <div class="container">
           <div class="row">
               <div class="col-lg-9 col-md-12 offset-sm-1 offset-0">
                <p class=" text-bold">Local Green Guide Ltd (t/a) LLG Marketing is a limited company registered in England and Wales. Registered Office: Unit 4 Georgiou Business Park, Second Avenue, London, N18 2PG Company Reg No. 09076943</p>
               </div>
           </div>
         </div>
        </div>
    </div>
    <div class="copyright-content">
        <div class="container">
            <div class="copyright-text text-center">&copy; <script>document.write(new Date().getFullYear());</script> Green Guide - Binary Professionals. All Rights
                Reserved.<a href="#" target="_blank" rel="noopener"> Green Guide</a> </div>
        </div>
    </div>
</footer>
<!-- end: Footer -->

</div>
<!-- end: Body Inner -->

<!-- Scroll top -->
<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
<!--Plugins-->
<script type="text/javascript">
    // $('select').select2();
</script>
<script src="{{ url('front/js/jquery.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/js/swiper.min.js"></script>

<script src="{{ url('front/js/plugins.js') }}"></script>

<!--Template functions-->
<script src="{{ url('front/js/functions.js') }}"></script>
 <!--Datatables plugin files-->
 <script src="{{ url('front/plugins/datatables/datatables.min.js') }}"></script>

 @stack('datatable-script')

{{-- <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyBOksKHb9HyydVB-mcrqKUVfA_LeB79jcQ">
</script> --}}

<script src="{{ url('front/js/script.js') }}"></script>
@stack('particles')



@stack('select-category')
</body>

</html>
