    <!-- footer section -->
    <section>
        <footer>
            <div class="footerbg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 col-lg-3">
                            <div class="footer_list">
                                <h2>Product</h2>
                                <h3>Account Management</h3>
                                <h3>HRM</h3>
                                <h3>Account Management</h3>
                                <h3>Account</h3>
                                <h3>Inventory</h3>
                                <h3>Account Management</h3>
                                <h3>Point of Sale (POS)</h3>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-3">
                            <div class="footer_list">
                                <h2>Product</h2>
                                <h3>Account Management</h3>
                                <h3>HRM</h3>
                                <h3>Account Management</h3>
                                <h3>Account</h3>
                                <h3>Inventory</h3>
                                <h3>Account Management</h3>
                                <h3>Point of Sale (POS)</h3>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-3">
                            <div class="footer_list">
                                <h2>Product</h2>
                                <h3>Account Management</h3>
                                <h3>HRM</h3>
                                <h3>Account Management</h3>
                                <h3>Account</h3>
                                <h3>Inventory</h3>
                                <h3>Account Management</h3>
                                <h3>Point of Sale (POS)</h3>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-3">
                            <div class="footer_list">
                                <h2>Product</h2>
                                <h3>Account Management</h3>
                                <h3>HRM</h3>
                                <h3>Account Management</h3>
                                <h3>Account</h3>
                                <h3>Inventory</h3>
                                <h3>Account Management</h3>
                                <h3>Point of Sale (POS)</h3>
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
                                <img src="{{asset('front/images/sslcommerce.png')}}" alt="patment" />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-3">
                            <div class="member mb-4">
                                <h2>We Are Member</h2>
                                <img src="{{asset('front/images/basis-size.png')}}" alt="patment" />
                                <img src="{{asset('front/images/cccl-size.png')}}" alt="patment" />
                                <img src="{{asset('front/images/ecab-size.png')}}" alt="patment" />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-3">
                            <div class="socal_media">
                                <h2>Connect with</h2>
                                <p>To get updates follow us on Facebook, Twitters etc.</p>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
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
                                    © 2017 to 2022 Muktodhara Technology Limited. All rights
                                    reserved.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="all_rights text-right copy-contain">
                                <p>Terms of Service | Privacy Policy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <!-- footer section -->

    <script type="text/javascript" src="{{asset('front/js/jquery-3.4.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/bootstrap.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                autoPlay: 3000,
                items: 4,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 3],
                center: true,
                nav: true,
                loop: true,
                responsive: {
                    600: {
                        items: 4,
                    },
                },
            });
        });
    </script>
    <script src="{{asset('front/js/app.js')}}"></script>
    </body>

    </html>