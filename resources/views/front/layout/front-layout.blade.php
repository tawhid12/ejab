<!DOCTYPE html>

<html class="no-js" lang="en"><!--<![endif]-->

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
   <!-- Page Title
    ================================================== -->
    <title>Ejab Group of Industries @yield('title','Home')</title>
     <!-- META DATA -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="UTF-8">
    <meta name="description" content="Ejab Group Industries Bangladesh @yield('description')"/>
    <meta name="keywords" content="Ejab, Group, Industries, Bangladesh, @yield('keywords') "/>
    <meta name="author" content="Muktodhara Ltd."/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSS
    ================================================== -->  
    <!--A dead simple, responsive boilerplate-->
    <link rel="stylesheet" href="{{asset('front/frontend/css/base.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/frontend/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('front/frontend/css/skeleton.css')}}"/>    

    <!-- Font Awesome cdn -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"> -->
    <link rel="stylesheet" href="{{asset('front/frontend/vendor/fontawsome/style.css')}}">



    <!--Content Animation-->
    <link rel="stylesheet" href="{{asset('front/frontend/css/animsition.min.css')}}"/>        
    <!-- Rebulationlider-->
    <link rel="stylesheet" href="{{asset('front/frontend/rev/css/revoulation.css')}}"/>     
    <!--Common Style-->
    <link rel="stylesheet" href="{{asset('front/frontend/css/style.css')}}"/>   
    <!--  megamenu-->
    <link rel="stylesheet" type="text/css" href="{{asset('front/frontend/css/fontawsam.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/frontend/megamenu/css/plugins-css/header-menu.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('front/frontend/css/swiper.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('front/frontend/css/home.css')}}">

    <!-- Favicons
    ================================================== -->
     
    <link rel="shortcut icon" href="{{asset('front/assets/images/home/logo.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('front/assets/images/home/logo.png')}}">

    
    <!----------------Home Buisness verticals slider ----------------->
    <script type="text/javascript" src="{{asset('front/frontend/js/jquery2.2.4.min.js')}}"></script> 
    <script src="{{asset('front/frontend/slider/amazingslider.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('front/frontend/slider/amazingslider-1.css')}}">
    <script src="{{asset('front/frontend/slider/initslider-1.js')}}"></script> 
    <script type="text/javascript">
      var baseurl = "{{url('/')}}" ;
    </script>
    @stack('styles')
    
</head>
<body>
  <!-- START PAGE WRAP -->
  <div class="animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
    <div class="mobile-menu-nav">
      <div class="mobile-menu-inner"></div>
    </div><!--ssd !-->
    <div class="transparent-header opacity-0 light-header">
      <div class="header-wrap header-1">
        <div class="header-con mag-sticky-header">
          <header class="header">
            <div id="inner-header" class="clearfix">
              <div id="logo">
                <a href="{{url('/')}}" class="normal-logo">
                  <img src="{{asset('front/assets/images/home/logo.png')}}" alt="" class="dark-logo">
                  <img src="{{asset('front/assets/images/home/logo.png')}}" alt="" class="light-logo">  
                </a>
                <a href="index.html" class="sticky-logo" rel="nofollow">
                  <img src="{{asset('front/assets/images/home/logo.png')}}" alt="">
                </a>
              </div>
              <div class="pix-menu webfont1">
                <div class="pix-menu-trigger">
                  <span class="mobile-menu">Menu</span>
                </div>
              </div>
              <div class="menu-responsive mobile-menu-inner webfont1"></div>
              <div class="widget-right webfont1">
                <div class="header-elem">
                  <div class="selectdiv webfont1">
                    <label>
                      <select>
                        <option selected> EN </option>
                        <option>BN</option>
                        <option>AR</option>
                      </select>
                    </label>
                  </div>
                </div>
              </div>
              <nav class="main-nav main-nav-style4">
                <ul id="menu-main-menu" class="menu clearfix webfont1">
                  <li class="menu-item">
                    <a href="{{url('/')}}" class="active">
                      <span class="inner-menu"> <span> Home </span> </span>
                    </a>
                  </li>
                  <li class="menu-item menu-item-has-children">
                    <a href="#">
                      <span class="inner-menu">
                        <span>  Who we are</span>
                      </span>
                    </a>
                    <span class="mag-dropdown-arrow "></span>
                    <ul class="sub-menu">
                      <li class="menu-item"> <a href="contact-with-us.html"> <span class="inner-menu"> <span>About Ejab Group </span> </span> </a> <span class="mag-dropdown-arrow "></span> </li>
                      <li class="menu-item"> <a  href="#"> <span class="inner-menu"> <span>Vission Mission & Value </span> </span> </a> <span class="mag-dropdown-arrow "></span> </li>
                      <li class="menu-item"> <a  href="#"> <span class="inner-menu"> <span>Message   From MD </span> </span> </a> <span class="mag-dropdown-arrow "></span> </li>
                      <li class="menu-item"> <a href="team.html"> <span class="inner-menu"> <span>Board Of  Directors</span> </span> </a> <span class="mag-dropdown-arrow "></span> </li>
                      <li class="menu-item"> <a href=""> <span class="inner-menu"> <span>Opration Members </span> </span> </a> <span class="mag-dropdown-arrow "></span> </li>                          
                    </ul>
                  </li>
                  <li class="menu-item  menu-item-has-children pix-megamenu pix-megamenu-col4 webfont1">
                    <a href="#" >
                      <span class="inner-menu">
                        <span >Business Verticals</span>
                      </span>
                    </a>
                    <span class="mag-dropdown-arrow "></span>
                    <ul class="sub-menu">
                      @php
                        $categories = App\Models\ProductCategory::where('parent_id',null)->get()->chunk(2);
                      @endphp
                      @forelse($categories as $cat_chunk)
                      <li class="">
                        @forelse($cat_chunk as $category)
                        <div class="mag-post-wrap">
                          <h2 class="m-title " style=" margin-bottom:16px;">{{$category->name}}</h2>
                          <div class="b-post-wrap ">
                            <div class="b-post ">
                              <div class="b-post-co ">
                                @forelse($category->children as $subcategory)
                                <h2 class="title webfont2" style=" margin-bottom:12px;" >
                                  <a  href="{{route('front.product', $subcategory->slug)}}" >{{$subcategory->name}}</a>
                                </h2>
                                @empty
                                @endforelse
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        @empty
                        @endforelse
                        <!-- 2nd sub -->
                        <div class="mag-post-wrap">
                          <h2 class="m-title " style=" margin-bottom:16px;">FMCG</h2>
                          <div class="b-post-wrap ">
                            <div class="b-post ">
                              <div class="b-post-co ">
                                <h2 class="title webfont2" style=" margin-bottom:12px;" >
                                  <a  href="products.html" >Cake</a>
                                </h2>
                                <h2 class="title webfont2" style=" margin-bottom:12px;">
                                  <a  href="products.html" >Chanachur</a>
                                </h2>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      @empty
                      @endforelse
                      <li class="">
                        <div class="mag-post-wrap">
                          <h2 class="m-title " style=" margin-bottom:16px;">FMCG</h2>
                          <div class="b-post-wrap ">
                            <div class="b-post ">
                              <div class="b-post-co ">
                                <h2 class="title webfont2" style=" margin-bottom:12px;" >
                                  <a  href="products.html" >Cake</a>
                                </h2>
                                <h2 class="title webfont2" style=" margin-bottom:12px;">
                                  <a  href="products.html" >Chanachur</a>
                                </h2>
                                <h2 class="title webfont2" style=" margin-bottom:12px;">
                                  <a  href="products.html" >Potato Chips</a>
                                </h2>
                                <h2 class="title webfont2" style=" margin-bottom:12px;">
                                  <a  href="products.html" >Toast </a>
                                </h2>
                                <h2 class="title webfont2" style=" margin-bottom:12px;">
                                  <a  href="products.html" >Corn Snacke</a>
                                </h2>
                                <h2 class="title webfont2" style=" margin-bottom:12px;">
                                  <a  href="products.html" >Salt</a>
                                </h2>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="mag-post-wrap">
                          <h2 class="m-title " style=" margin-bottom:16px;">FMCG</h2>
                          <div class="b-post-wrap ">
                            <div class="b-post ">
                              <div class="b-post-co ">
                                <h2 class="title webfont2" style=" margin-bottom:12px;" >
                                  <a  href="products.html" >Cake</a>
                                </h2>
                                <h2 class="title webfont2" style=" margin-bottom:12px;">
                                  <a  href="products.html" >Chanachur</a>
                                </h2>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class=""> 
                        <div class="mag-post-wrap">
                          <h2 class="m-title " style=" margin-bottom:16px;">FMCG</h2>
                          <div class="b-post-wrap ">
                            <div class="b-post ">
                              <div class="b-post-co ">
                                <h2 class="title webfont2" style=" margin-bottom:12px;" >
                                  <a  href="businessverticals/products.html" >Cake</a>
                                </h2>
                                <h2 class="title webfont2" style=" margin-bottom:12px;">
                                  <a  href="products.html" >Chanachur</a>
                                </h2>
                                <h2 class="title webfont2" style=" margin-bottom:12px;">
                                  <a  href="products.html" >Potato Chips</a>
                                </h2>
                                <h2 class="title webfont2" style=" margin-bottom:12px;">
                                  <a  href="products.html" >Toast </a>
                                </h2>
                                <h2 class="title webfont2" style=" margin-bottom:12px;">
                                  <a  href="products.html" >Corn Snacke</a>
                                </h2>
                                <h2 class="title webfont2" style=" margin-bottom:12px;">
                                  <a  href="products.html" >Salt</a>
                                </h2>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="mag-post-wrap">
                          <h2 class="m-title " style=" margin-bottom:16px;">FMCG</h2>
                            <div class="b-post-wrap ">
                              <div class="b-post ">
                                <div class="b-post-co ">
                                  <h2 class="title webfont2" style=" margin-bottom:12px;" >
                                    <a  href="products.html" >Cake</a>
                                  </h2>
                                  <h2 class="title webfont2" style=" margin-bottom:12px;">
                                    <a  href="products.html" >Chanachur</a>
                                  </h2>
                                  <h2 class="title webfont2" style=" margin-bottom:12px;">
                                    <a  href="products.html" >Potato Chips</a>
                                  </h2>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="">
                          <div class="mag-post-wrap">
                            <div class="b-post-wrap webfont2">
                              <div class="mainh webfont1">
                                <a href="brands.html" > <h2 class="m-title webfont1" style=" margin-bottom:16px;">  Himadri Ltd</h2></a>
                                <a  href="brands.html"> <h2 class="m-title webfont1" style=" margin-bottom:16px;">  Ejab Distribution Ltd.</h2></a>
                                <a  href="brands.html" > <h2 class="m-title webfont1" style=" margin-bottom:16px;">  Ejab Alliance Ltd</h2></a>
                                <a  href="brands.html" > <h2 class="m-title webfont1" style=" margin-bottom:16px;">  Northern Agricultural & Ind. Co. Ltd.</h2></a>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                      <a href="#" >
                        <span class="inner-menu webfont1">
                          <span>Media </span>
                        </span>
                      </a>
                      <span class="mag-dropdown-arrow "></span>
                      <ul class="sub-menu">
                        <li class="menu-item">
                          <a  href="#">
                            <span class="inner-menu webfont1">
                              <span>News & Events</span>
                            </span>
                          </a>
                          <span class="mag-dropdown-arrow "></span>
                        </li>
                        <li class="menu-item">
                          <a  href="#">
                            <span class="inner-menu webfont1">
                              <span>Newsletter</span>
                            </span>
                          </a>
                          <span class="mag-dropdown-arrow "></span>
                        </li>
                        <li class="menu-item">
                          <a  href="#">
                            <span class="inner-menu webfont1">
                              <span>Commercial Advertisements </span>
                            </span>
                          </a>
                          <span class="mag-dropdown-arrow "></span>
                        </li>
                      </ul>
                    </li>
                    <li class="menu-item">
                      <a href="#" class="active">
                        <span class="inner-menu">
                          <span> Reports </span>
                        </span>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="#" >
                        <span class="inner-menu webfont1">
                          <span>Giving Back</span>
                        </span>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="#" >
                        <span class="inner-menu webfont1">
                          <span> Career</span>
                        </span>
                      </a>
                    </li>
                    <li class="menu-item">
                      <a href="{{route('front.contact')}}" >
                        <span class="inner-menu webfont1">
                          <span>Contact With Us</span>
                        </span>
                      </a>
                    </li>
                </ul>
              </nav>
            </div>
          </header>
        </div>
      </div>
    </div>    
      <!-- MAIN CONTENT================================================== -->      
      <main class="cd-main-content">


        @yield('content')
      </main>
 
 <!-- VISIT US
            ================================================== -->
<footer style="background:#12141D; color:#fff; padding:40px 20px; font-family:sans-serif;">

    <div style="max-width:1200px; margin:0 auto; display:flex; flex-wrap:wrap; justify-content:space-between; gap:20px;">
  
    <!-- Column 1 -->
  <!-- Column 1 -->
  <div class="footer-col-1 " style="flex:0 0 35%;  padding:0 15px; margin-bottom:30px;">
    <h4 style="font-weight:700; margin-bottom:15px;">
      <a href="index.html" style="color:#fff; text-decoration:none;">
        <img src="{{asset('front/assets/images/home/logo.png')}}" alt="LOGO" style="max-width:180px; height:auto;">
      </a>
    </h4>
    <p style="font-size:14px; line-height:1.8; color:#ccc; margin-bottom:20px;">
      There are many variations of passages of Lorem the Ipsum available it majority.
    </p>
    <div style="display:flex; width:100%; margin-top:15px; justify-content:flex-start;">
      <div style="display:flex; background:#3b3b3b; padding:8px; border-radius:2px;">
        <input type="email" placeholder="Enter your email"
               style="padding:10px; border:none; width:200px; outline:none; color:#000;" />
        <button style="padding:10px 20px; border:none; border-radius:4px; background:#8ED053; color:#fff; cursor:pointer; white-space:nowrap;">
          Subscribe
        </button>
      </div>
    </div>
  </div>
  
  
    <!-- Column 2: Services -->
  <div class="footer-col text-center text-md-start" style="flex:0 0 18%;" >
    <h5 style="font-weight:700; margin-bottom:5px; text-transform:none;" class="mb-1 mb-md-3">Services</h5>
    <ul style="list-style:none; padding:0; margin:0;">
      <li class="mb-1 mb-md-3"><a href="#" style="color:#fff; text-decoration:none;">Incident Responder</a></li>
      <li class="mb-1 mb-md-3"><a href="#" style="color:#fff; text-decoration:none;">Secure Managed IT</a></li>
      <li class="mb-1 mb-md-3"><a href="#" style="color:#fff; text-decoration:none;">Check website Url</a></li>
      <li class="mb-1 mb-md-3"><a href="#" style="color:#fff; text-decoration:none;">Locker Security</a></li>
    </ul>
  </div>
  
  <!-- Column 3: About Us -->
  <div class="footer-col text-center text-md-start" style="flex:0 0 18%;">
    <h5 style="font-weight:700; margin-bottom:5px; text-transform:none;" class="mb-1 mb-md-3">About Us</h5>
    <ul style="list-style:none; padding:0; margin:0;">
      <li class="mb-1 mb-md-3"><a href="#" style="color:#fff; text-decoration:none;">Payment Plans</a></li>
      <li class="mb-1 mb-md-3"><a href="#" style="color:#fff; text-decoration:none;">Make saving More</a></li>
      <li class="mb-1 mb-md-3"><a href="#" style="color:#fff; text-decoration:none;">Tax Calculator</a></li>
      <li class="mb-1 mb-md-3"><a href="#" style="color:#fff; text-decoration:none;">Talk To Us</a></li>
    </ul>
  </div>
  
  <!-- Column 4: Contact Info -->
  <div class="footer-col text-center text-md-start" style="flex:0 0 18%;">
    <h5 style="font-weight:700; margin-bottom:5px; text-transform:none;" class="mb-1 mb-md-3">Contact Info</h5>
    <ul style="list-style:none; padding:0; margin:0;">
      <li class="mb-1 mb-md-3">
        <a href="#" style="color:#fff; text-decoration:none;">
          455 West Orchard Street Kings Mountain, NC 280867
        </a>
      </li>
      <li class="mb-1 mb-md-3">
        <a href="tel:+0882466422710" style="color:#fff; text-decoration:none;">
          <i class="fa fa-phone" style="color:#8ED053; margin-right:8px;"></i>
          +088 (246) 642-27-10
        </a>
      </li>
      <li class="mb-1 mb-md-3">
        <a href="mailto:example@gmail.com" style="color:#fff; text-decoration:none;">
          <i class="fa fa-envelope" style="color:#8ED053; margin-right:8px;"></i>
          example@gmail.com
        </a>
      </li>
    </ul>
  </div>
  
  
    </div>
  
    <hr style="border-color:#444; margin:20px 0 15px 0; max-width:1200px; margin-left:auto; margin-right:auto;">
  
  <div style="max-width:1200px; margin:0 auto; text-align:center; font-size:14px; padding-bottom:15px;">
    © <span id="year"></span> 
    <a href="https://muktodharaltd.com/" target="_blank" style="color:inherit; text-decoration:none;">
      Muktodhara Technology Limited
    </a>
  </div>
  
  </footer>
  
  
  </div>
  <!-- JARVIS THEME SCRIPTS -->

    
    <script> document.getElementById("year").textContent = new Date().getFullYear(); </script>
  <script type="text/javascript" src="{{asset('front/frontend/js/modernizr.custom.js')}}"></script>
  <script type="text/javascript" src="{{asset('front/frontend/js/jquery.sticky.js')}}"></script>
  <script type="text/javascript" src="{{asset('front/frontend/js/jquery.countTo.js')}}"></script>
  <script type="text/javascript" src="{{asset('front/frontend/js/jquery.appear.js')}}"></script>
  <script type="text/javascript" src="{{asset('front/frontend/js/jquery.easing.js')}}"></script>  
  
  <script type="text/javascript" src="{{asset('front/frontend/js/smooth-scroll.js')}}"></script>
  
  <script type="text/javascript" src="{{asset('front/frontend/js/owl.carousel.min.js')}}"></script>
  
  
  <script type="text/javascript" src="{{asset('front/frontend/js/scrollReveal.min.js')}}"></script>
  
  <script type="text/javascript" src="{{asset('front/frontend/js/TweenMax.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('front/frontend/js/share.js')}}"></script>
  <script type="text/javascript" src="{{asset('front/frontend/js/animsition.min.js')}}"></script>
  
  <!-------------------------------------Revolation slider ----------------->
      <script src="{{asset('front/frontend/rev/js/jquery.themepunch.tools.min.js')}}"></script>
      <script src="{{asset('front/frontend/rev/js/jquery.themepunch.revolution.min.js')}}"></script>     
      <script src="{{asset('front/frontend/rev/js/revolution.extension.layeranimation.min.js')}}"></script>
      <script src="{{asset('front/frontend/rev/js/revolution.extension.migration.min.js')}}"></script>    
      <script src="{{asset('front/frontend/rev/js/revolution.extension.slideanims.min.js')}}"></script>
      <script src="{{asset('front/frontend/rev/js/revolution.extension.video.min.js')}}"></script>
      <script src="{{asset('front/frontend/rev/js/revoulation.js')}}"></script>
  <!--------------------Mega Menue ----------------------->
  <script type='text/javascript' src="{{asset('front/frontend/megamenu/js/waypoints.min.js')}}"></script>
  <script src="{{asset('front/frontend/megamenu/js/plugins.js')}}"></script>
  <script src="{{asset('front/frontend/megamenu/js/scripts.js')}}"></script>
  
  
  <script type="text/javascript">
    function changeLanguage(lan) {
      //alert(lan);
      location.href='local/'+lan;
    }
  //alert(screen.width);
  var vbg = document.getElementById('vbg');
  function playBg() {
    vbg.play();
  }
  
  </script>
  
  
  <script type="text/javascript">
  (function($) { "use strict";
      $(document).ready(function() {  
        $(".animsition").animsition({
        
          inClass               :   'fade-in',
          outClass              :   'fade-out',
          inDuration            :    1500,
          outDuration           :    800,
          linkElement           :   '.animsition-link', 
          // e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
          loading               :    false,
          loadingParentElement  :   'body', //animsition wrapper element
          loadingClass          :   'animsition-loading',
          unSupportCss          : [ 'animation-duration',
                                    '-webkit-animation-duration',
                                    '-o-animation-duration'
                                  ],
          
          overlay               :   false,
          
          overlayClass          :   'animsition-overlay-slide',
          overlayParentElement  :   'body'
        });
      });  
  })(jQuery);
  </script>
  
  
  <script type="text/javascript" src="{{asset('front/frontend/js/script.js')}}"></script>  
  <script type="text/javascript" src="{{asset('front/frontend/js/swiper.min.js')}}"></script>
  
 <!-- #region -->
 @stack('scripts')
  
  
  
  
  </body>
  
  </html>