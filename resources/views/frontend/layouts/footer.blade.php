<!-- Footer -->
<footer id="footer">
    <div class="footer-content px-2 px-md-5">
        <div class="container-fluid px-2 px-md-5">
            <div class="row">
                <div class="col-lg-3">
                    <div class="widget">

                        <div class="widget-title"><img class="img-fluid" width="150px"
                                src="{{ url('front/img/green-guide-logo.png') }}"></div>
                        <ul class="footer_social_icons">
                            <li><a href="https://www.instagram.com/greenguide_magazine/"><i class="icon-instagram"
                                        target="__blank"> </i></a></li>
                            <li><a href="https://www.facebook.com/profile.php?id=100083758106281" target="__blank"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/lggmarketing?lang=en" target="__blank"><i
                                        class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.tiktok.com/@officiallggmarketing" target="__blank"><img
                                        src="{{ asset('front/img/tictok.png') }}" alt=""></i></a></li>
                            <li><a href="https://www.linkedin.com/company/local-green-guide-ltd/" target="__blank"><i
                                        class="fab fa-linkedin"></i></a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">

                        <div class="col-lg-5">
                            <div class="widget">
                                <div class="widget-title"><b>Contact Us</b></div>
                                <ul class="list">
                                    <li><a href="#"><i class="icon-map-pin pe-2"></i>Local Green Guide Ltd (t/a) LGG
                                            Marketing</a></li>
                                    <li><a href="#"><i class="icon-map-pin pe-2"></i>Unit 4 Georgiou Business Park, Second Avenue, London, N18 2PG</a></li>

                                    <li><a href="tel:0203 773 5835"><i class="icon-phone pe-2"> </i> 0203 773 5835</a></li>
                                    <li><a href="mailto:magazine@localgreenguide.com"><i class="icon-mail pe-2"></i> magazine@localgreenguide.com</a></li>
                                    <li><a href="#"><i class="fa fa-registered pe-2"></i> Company Reg No. 09076943</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="widget">
                                <div class="widget-title"><b>Home</b></div>
                                <ul class="list">
                                    <li><a href="/about">About Us</a></li>
                                    <li><a href="/contact">Contact Us</a></li>
                                    <li><a href="/magzine-design-book">Advertise in Magazine</a></li>
                                    <li><a href="/businessdirectory">Business Directory</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="widget">
                                <div class="widget-title"><b>Legal</b></div>
                                <ul class="list">
                                    <li><a href="/website-terms-of-use">Website Terms of Use</a></li>
                                    <li><a href="/disclaimer">Disclaimer</a></li>
                                    <li><a href="/cookie-policy">Cookie Policy</a></li>
                                    <li><a href="/bd-terms-and-conditions">Business Directory Terms & Conditions</a>
                                    </li>
                                    <li><a href="/reviews-ternms-of-use">Reviews Terms of Use</a></li>
                                </ul>
                                {{-- @if (Request::url() === route('contact'))
                                <a href="#opt-form"><h2>Opt Out</h2></a>
                                @endif --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-content">
        <div class="container">
            <div class="copyright-text text-center">&copy;
                <script>
                    document.write(new Date().getFullYear());
                </script> Green Guide - Binary Professionals. All Rights
                Reserved.<a href="#" target="_blank" rel="noopener"> Green Guide</a>
            </div>
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
