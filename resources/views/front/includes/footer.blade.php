@php $setting=\App\Models\setting::first(); @endphp
<!-- footer section -->
<section>
    <footer>
        <div class="footerbg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="footer_list">
                            <!-- <h2>Product</h2> -->
                            @php $sec_1 = DB::table('pages')->where('show_section',1)->where('published',1)->take(5)->get(); @endphp
                            @forelse($sec_1 as $one)
                            <a href="page/{{$one->page_slug}}"><h3>{{$one->page_title}}</h3></a>
                            @empty
                            @endforelse
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="footer_list">
                            <!-- <h2>Product</h2> -->
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="footer_list">
                            <!-- <h2>Product</h2> -->
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="footer_list">
                            <!-- <h2>Product</h2> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ft_color">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ft_border border-top"></div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="payment_op">
                            <h2>Payment Options</h2>
                            <img src="{{asset('uploads/setting/thumb/'.$setting->payment_logo)}}" alt="patment" />
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="member mb-4">
                            <h2>We Are Member</h2>
                            <img src="{{asset('uploads/setting/thumb/'.$setting->memeber_logo_1)}}" alt="patment" />
                            <img src="{{asset('uploads/setting/thumb/'.$setting->memeber_logo_2)}}" alt="patment" />
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="socal_media">
                            <h2>Connect with</h2>
                            <p>To get updates follow us on Facebook, Twitters etc.</p>
                            <a href="{{$setting->link1}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="{{$setting->link2}}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="{{$setting->link3}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="{{$setting->link4}}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy_bg copy-contain">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="all_rights copy-contain">
                            <p>
                                &copy; Ejab Group. All rights
                                reserved.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="all_rights text-right copy-contain">
                            <!-- <p>Terms of Service | Privacy Policy</p> -->
                        </div>
                    </div>
                    <div class="col-12">
                        <small>
                            <a class="text-white text-center d-block" href="https://muktodharaltd.com/">Design & Developed By Muktodhara Technology Limited.</a>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>
<!-- footer section -->

<script type="text/javascript" src="{{asset('front/js/jquery-3.4.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/bootstrap.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            items: 4, // Number of items to display
            loop: true, // Infinite loop
            autoplay: true, // Autoplay
            autoplayTimeout: 3000, // Autoplay timeout in milliseconds
            responsiveClass: true, // Enable responsive options
            responsive: {
                0: {
                    items: 1 // Number of items to display on small screens
                },
                600: {
                    items: 3 // Number of items to display on medium screens
                },
                1000: {
                    items: 4 // Number of items to display on large screens
                }
            }
        });
    });
</script>
<script src="{{asset('front/js/app.js')}}"></script>
@stack('scripts')
</body>

</html>