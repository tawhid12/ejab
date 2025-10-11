@extends('front.layout.front-layout')
@section('title', 'Home')

@push('styles')
<style>
  @keyframes zoom {
      0% { transform: scale(2.2); }
      100% { transform: scale(2.5); }
  }

  #custom-timeline {
    position: relative;
    background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('{{asset("front/assets/images/home/year-min.jpg")}}') no-repeat center center / cover;
    padding: 250px 20px 100px;  
    color: #fff;
  }

  

  /* Mobile responsive */
  @media (max-width: 768px) {
    #custom-timeline {
      padding-top: 80px; 
      padding-left: 10px;
      padding-right: 10px;
      padding-bottom: 60px; 
    }
    #timeline-box-wrapper {
      height: 50px;
    }
    #timeline-box h2 {
      font-size: 14px;   /* Title ছোট */
    }
    #year-button {
      font-size: 10px;   /* Button ছোট */
      padding: 2px 6px;
    }
    #timeline-years {
      font-size: 10px;   /* Years ছোট */
    }
    #active-dot {
      width: 12px;       
      height: 12px;
      top: -4px;
    }
  }

  /* Active year highlight */
  #timeline-years span {
    transition: color 0.3s ease;
    position: absolute;
    transform: translateX(-50%);
  }
  #timeline-years span.active {
    color: #8ED053;
    font-weight: bold;
  }


  @media (max-width: 767.98px) {
    #newsSlider {
      display: flex !important;
      flex-direction: column !important;
    }
    #newsSlider .work-item {
      width: 100% !important;
      height: 300px !important;
      margin-bottom: 10px !important; /* box গুলোর vertical gap কমানো */
    }
    #newsSlider .overlay-text .date {
      font-size: 12px !important;  /* mobile এ date ছোট করা */
      margin-bottom: 4px !important;
    }
    #newsSlider .overlay-text h4 {
      font-size: 14px !important;  /* mobile এ h4 ছোট করা */
      margin-top: 2px !important;
    }
    #newsSlider .overlay-text button {
      font-size: 12px !important;  /* Read more ছোট করা */
      margin-top: 6px !important;
    }
  }

  @media (max-width: 767.98px) {
        #newsSlider {
            display: flex !important;
            flex-direction: column !important;
        }
        #newsSlider .work-item {
            width: 100% !important;
            height: 400px !important; /* box slightly smaller */
            margin-bottom: 20px;      /* vertical gap */
        }
    }
    input::placeholder { color:#dddbdb; }

    /* Mobile adjustments */
    @media screen and (max-width: 767px) {
      .footer-col-1 input {
        padding:6px; 
        font-size:12px; 
        width:60%;
      }
      .footer-col-1 button {
        padding:6px 10px;
        font-size:12px;
      }
      .footer-col-1 {
        text-align: center;
      }
    }
    @media (max-width: 768px) {
      footer > div > div {
        flex: 0 0 100% !important;
      }
      .footer-col-1 {
        flex: 0 0 100% !important;
      }
      /* পরের ৩ কলাম মোবাইলে ডানে সরবে */
      .footer-col {
        padding-left: 17px !important;
      }
    }
</style>
@endpush
@section('content')
        <!-- slider SECTION================================================== -->
        <section class="home page-section bg-overlay-dark-alfa40 bg-pattern ">
          <div id="home-scrollto">
            <a data-scroll data-options='{ "easing": "easeInQuad" }' class="scroll color-white" href="#scroll-link">
              <i class="fa fa-angle-double-down"></i>
            </a>
          </div>
          <div class="rev_slider_wrapper fullscreen-container pcslider">     
            <div class="slider-revoluation">
              <div id="rev_slider_8_1_wrapper" class="rev_slider_wrapper fullscreenbanner" data-alias="home-authentic-studio" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.4.7 fullwidth mode -->
                <div>
                  <div id="vbg" 
                      style="
                          background-image: url('{{asset('front/assets/images/home/hero1.jpeg')}}');
                          background-size: cover;
                          background-position: center;
                          width: 100%;
                          height: 100vh;
                          position: relative;
                          animation: zoom 20s infinite alternate;
                      ">
                      </div>
                      <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <div class="curve-container n20"> <svg xmlns="http://www.w3.org/2000/svg" class="curve-container__curve curve-three" viewBox="0 0 1440 68" enable-background="new 0 0 1440 68"><path d="m1622.3 1937.7c0 0-410.7 169.1-913.4 75.5-502.7-93.6-977.7 56.3-977.7 56.3v440h1891.1v-571.8" fill="#fafafa" transform="translate(0-1977)"></path></svg> </div>                   
              <!-- SECTION ABOUT ==================================================  -->
              <section class="page-section bg_color--6 sp-top40 sp-bottom0" id="scroll-link" style="background-color:#fafafa;">
                <div class="container" style="z-index: 3; " >
                  <div class="section-title text-center ">
                    <h1 class="hs3 fw900 lp2 webfont3 sm-bottom10 color-black" data-sr="enter bottom over 0.9s and move 140px">
                      Flow limitless, flow with <br>
                      <span class="font-bold" style="color:#8ED053;">EJAB Group</span>
                    </h1>
                    <h6 class="heading heading-h6 line-height-1-62 black-text  sm-bottom10 webfont1" data-sr="enter bottom over 0.9s and move 140px">Our journey for the last 50 years was all about exploring new frontiers</h6>
                  </div>
                </div>
                <section class="aboutfact3 text-center py-5">
                  <div class="container">
                    <div class="row">
                      <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class=" d-flex flex-column align-items-center justify-content-start p-4 " style="min-height: 300px;  ">
                          <div class="mb-3 d-inline-block rounded" style="background-color: #FFE5E5; padding: 1rem;">
                            <img src="{{asset('front/assets/images/home/trophy.png')}}" alt="Yearly Turnover Icon" style="width:28px; height:28px; object-fit:contain;">
                          </div>
                          <h3 class="mt-3 mb-3 text-center" style="font-size:1.4rem; color:#000; font-weight:700; text-transform:none;">
                            Year Of  Experince
                          </h3>
                          <p class="text-center" style="max-width:600px; margin:0 auto; padding:0 30px; line-height:1.6;">
                            many of these business ideas are home-based. While they may not make you a billionaire
                          </p>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class=" d-flex flex-column align-items-center justify-content-start p-4 " style="min-height: 300px; ">
                          <!-- Icon Image -->
                          <div class="mb-3 d-inline-block rounded" style="background-color: #E0F7F1; padding: 1rem;">
                            <img src="{{asset('front/assets/images/home/icon2.png')}}" alt="Yearly Turnover Icon" style="width:28px; height:28px; object-fit:contain;">
                          </div>

                          <!-- Title Bold -->
                          <h3 class="mt-3 mb-3 text-center" style="font-size:1.4rem; color:#000; font-weight:700; text-transform:none;">
                            Forigner Value  Management
                          </h3>
                          <p class="text-center" style="max-width:600px; margin:0 auto; padding:0 30px; line-height:1.6;">
                            many of these business ideas are home-based. While they may not make you a billionaire
                          </p>
                        </div>
                      </div>
                      <!-- Column 3 -->
                      <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class=" d-flex flex-column align-items-center justify-content-start p-4 " style="min-height: 300px; ">
                          <!-- Icon Image -->
                          <div class="mb-3 d-inline-block rounded" style="background-color: #FFF6E0; padding: 1rem;">
                            <img src="{{asset('front/assets/images/home/icon3.png')}}" alt="Yearly Turnover Icon" style="width:28px; height:28px; object-fit:contain;">
                          </div>

                          <!-- Title Bold -->
                          <h3 class="mt-3 mb-3 text-center" style="font-size:1.4rem; color:#000; font-weight:700; text-transform:none;">
                            Employees
                          </h3>
                          <p class="text-center" style="max-width:600px; margin:0 auto; padding:0 30px; line-height:1.6;">
                            many of these business ideas are home-based. While they may not make you a billionaire
                          </p>
                        </div>
                      </div>
                      <!-- Column 4 -->
                      <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class=" d-flex flex-column align-items-center justify-content-start p-4 " style="min-height: 300px; ">
                          <!-- Icon Image -->
                          <div class="mb-3 d-inline-block rounded" style="background-color: #E6F4FF; padding: 1rem;">
                            <img src="{{asset('front/assets/images/home/icon4.png')}}" alt="Yearly Turnover Icon" style="width:28px; height:28px; object-fit:contain;">
                          </div>
                          <!-- Title Bold -->
                          <h3 class="mt-3 mb-3 text-center" style="font-size:1.4rem; color:#000; font-weight:700; text-transform:none;">
                            Distributors
                          </h3>
                          <p class="text-center" style="max-width:600px; margin:0 auto; padding:0 30px; line-height:1.6;">
                            many of these business ideas are home-based. While they may not make you a billionaire
                          </p>
                        </div>
                      </div>
                      <!-- Column 5 -->
                      <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class=" d-flex flex-column align-items-center justify-content-start p-4 " style="min-height: 300px; ">
                          <!-- Icon Image -->
                          <div class="mb-3 d-inline-block rounded" style="background-color: #FFF1EB; padding: 1rem;">
                            <img src="{{asset('front/assets/images/home/icon5.png')}}" alt="Yearly Turnover Icon" style="width:28px; height:28px; object-fit:contain;">
                          </div>
                          <!-- Title Bold -->
                          <h3 class="mt-3 mb-3 text-center" style="font-size:1.4rem; color:#000; font-weight:700; text-transform:none;">
                            Suppliers
                          </h3>
                          <p class="text-center" style="max-width:600px; margin:0 auto; padding:0 30px; line-height:1.6;">
                            many of these business ideas are home-based. While they may not make you a billionaire
                          </p>
                        </div>
                      </div>
                      <!-- Column 6 -->
                      <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class=" d-flex flex-column align-items-center justify-content-start p-4 " style="min-height: 300px; ">
                          <!-- Icon Image -->
                          <div class="mb-3 d-inline-block rounded" style="background-color: #F3E8FF; padding: 1rem;">
                            <img src="{{asset('front/assets/images/home/icon6.png')}}" alt="Yearly Turnover Icon" style="width:28px; height:28px; object-fit:contain;">
                          </div>
                          <!-- Title Bold -->
                          <h3 class="mt-3 mb-3 text-center" style="font-size:1.4rem; color:#000; font-weight:700; text-transform:none;">
                            Yearly Turnover
                          </h3>
                          <p class="text-center" style="max-width:600px; margin:0 auto; padding:0 30px; line-height:1.6;">
                            many of these business ideas are home-based. While they may not make you a billionaire
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </section>
              <section class="page-section   bg_color--6" style="margin-top: -30px; margin-bottom: 100px;"  >
                <div class="container" style="z-index: 3; " >
                  <div class=" sixteen columns" style="margin-bottom:0;">
                    <div class="container ">
                      <div class="eight columns">
                        <div class="">
                          <blockquote class="bk1 nomargin nopadding" data-sr="enter left right 0.9s and move 640px" 
                                    style="text-align:center; max-width:900px; margin:0 auto;">
                            <p class="hs0 fw400 webfont1 text-dark" 
                              style="font-size:20px; line-height:1.8; color:#333; font-weight:500; margin:30px 0 0 0;">
                              <i style="margin-right:6px; color:#8ED053;" class="fa fa-quote-left"></i>
                              "Excellent customer service. The process was frank. Shout out to the excellent customer service who responded promptly to more than a dozen questions I had. After a few interactions, I realized I was chatting with the same real person every time, which made the process very smooth.”
                              <i class="fa fa-quote-right" style="margin-left:6px; color:#8ED053;"></i>
                            </p>

                            <footer class="color-dark webfont1" 
                                    style="margin-top:30px; font-size:16px; text-align:left;">
                              <span style="font-weight:bold; color:#000000;">Jenny Wilson</span> &nbsp; 
                              <cite style="font-weight:bold; color:#2c2b2b;" title="Title webfont1">CEO</cite>
                            </footer>
                          </blockquote>
                        </div>
                      </div>
                       
                      <div class="eight columns">
                        <div class="blog-item clearfix sm-bottom0" data-sr="enter bottom over 0.9s and move 140px">
                          <div class="video-mask">
                            <div class="fluid-width-video-wrapper">
                              <img src="{{asset('front/assets/images/home/ceo-min.jpg')}}" alt="Chairman Image" class="w-full h-auto rounded">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <div class="curve-container n20"> <svg xmlns="http://www.w3.org/2000/svg" class="curve-container__curve curve-three" viewBox="0 0 1440 68" enable-background="new 0 0 1440 68"><path d="m1622.3 1937.7c0 0-410.7 169.1-913.4 75.5-502.7-93.6-977.7 56.3-977.7 56.3v440h1891.1v-571.8" fill="#8ED053" transform="translate(0-1977)"></path></svg> </div>                   
  
            <!------------------- Newses ------------------------------->
              <section id="blog" class="page-section  sp-top-bottom60" style="background-color:#8ED053;">
                <div class="container">                                     
                  <div class="section-title-1 text-center" data-sr="enter bottom over 0.8s and move 140px">
                    <h1 class="lp2 webfont3 sm-bottom20 font-weight-bold text-white">Business Verticals</h1>
                  </div>
                </div>
                <div class="container work-container position-relative">
                  <div id="newsSlider" class="projects-wrapper works-grid work-grid-3 work-grid-gut masonry pg3_masonry_gallery clearfix d-flex overflow-hidden" style="gap:20px;">

                    <!-- Visible Images -->
                    <div class="work-item photography" data-sr="enter left over 0.8s and move 640px">
                      <a class="work-lightbox mfp-image" href="assets/images/home/news2.png">
                        <div class="gallery-wrap">                                    
                          <img src="{{asset('front/assets/images/home/news2.png')}}" alt="" class="img-fluid" style="width:100%; height:370px; object-fit:cover;">
                        </div>                                  
                      </a>                           
                    </div>

                    <div class="work-item photography" data-sr="enter left over 0.8s and move 640px">
                      <a class="work-lightbox mfp-image" href="assets/images/home/news3.png">
                        <div class="gallery-wrap">                                    
                          <img src="{{asset('front/assets/images/home/news3.png')}}" alt="" class="img-fluid" style="width:100%; height:370px; object-fit:cover;">
                        </div>                                  
                      </a>                           
                    </div>

                    <div class="work-item photography" data-sr="enter left over 0.8s and move 640px">
                      <a class="work-lightbox mfp-image" href="assets/images/home/news1.png">
                        <div class="gallery-wrap">                                    
                          <img src="{{asset('front/assets/images/home/news1.png')}}" alt="" class="img-fluid" style="width:100%; height:370px; object-fit:cover;">
                        </div>                                  
                      </a>                           
                    </div>
                  </div>
                </div>
              </section>
              <section class="page-section sp-top60 bg_color--6" style="margin-bottom:50px; padding-top:60px; padding-bottom:60px;">

                <div class="container" style="z-index:3;">
                  <div class="container" style="margin-bottom:35px;">                              
                    <div class="section-title-1 text-center" data-sr="enter bottom over 0.8s and move 140px">
                      <h1 class="hs3 fw400 lp2 webfont3 sm-bottom10" 
                          style="margin-bottom:10px; font-size:28px; line-height:1.2;">
                        <span style="color:#8ED053; font-weight:1000 !important;">Our </span> 
                        <span style="color:black; font-weight:900 !important;">History</span>
                      </h1>
                    </div>   
                  </div>           

                  <div class="row" style="margin-bottom:0;">
                    <div class="col-12 col-md-6" 
                        style="margin-bottom:15px; padding-left:0; padding-right:15px;">
                      <blockquote class="bk1 nomargin nopadding" data-sr="enter left right 0.9s and move 640px">  
                        <h2 style="color:#272727; font-size:20px; line-height:1.6;  margin-top:0; margin-bottom:15px; text-align:left;">
                          Our Company Made
                        </h2>
                        <p style="font-size:18px; line-height:1.6; color:#333; font-weight:500; margin:0 0 10px 0; text-align:justify;">
                          In the year 1959, the late engineer Ejabuddin Ahmed started a company called “National Construction Company” (now defunct). After the success of his construction company, he dreamt to expand his repertoire to create a jute mill. The factory started being built from the year 1964, and operations started in 1968 for the National Jute.
                        </p>
                        <p style="font-size:18px; line-height:1.6; color:#333; font-weight:500; margin:0 0 10px 0; text-align:justify;">
                          After the nationalisation of the jute mill, he was offered a potato cold storage in 1974 named Himadri Limited, and started construction for the Rabeya Flour Mills Limited in 1978, which opened 2 years later. During the early years of the 1980s,
                        </p>
                      </blockquote>
                    </div>

                    <div class="col-12 col-md-6" style="padding-left:15px; padding-right:0;">
                      <div class="blog-item clearfix sm-bottom0" data-sr="enter bottom over 0.9s and move 140px">
                        <div class="video-mask" style="margin-top:10px;">
                          <div class="fluid-width-video-wrapper">
                            <img src="{{asset('front/assets/images/home/Video.svg')}}" alt="Chairman Image" 
                                class="img-fluid rounded" style="width:100%; height:auto;">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <!-- SECTION Brand ================================================== -->
              <section class="page-section   "> 
                <div class="container" style="z-index: 3; " >
                  <div class="container" style="margin-bottom:35px;">                              
                    <div class="section-title-1 text-center" data-sr="enter bottom over 0.8s and move 140px">
                      <h1 class="hs3 fw400 lp2 webfont3 sm-bottom10" style="margin-bottom:10px;">
                        <span style="color:#8ED053; font-weight:1000 !important;">Our Company  </span> 
                        <span style="color:black; font-weight:900 !important;">Timeline</span>
                      </h1>
                    </div>   
                  </div>
                </div>
                <section id="custom-timeline">
  
                  <!-- Slide Wrapper -->
                  <div id="timeline-box-wrapper" style="text-align: center; margin-bottom: 60px; position: relative; overflow: hidden; height: 180px;">
                    <div id="timeline-box" style="display: inline-block; padding: 20px; transition: transform 0.5s ease, opacity 0.5s ease;">
                      <span id="year-button" style="display: inline-block; padding: 7px 16px; border: 1px solid #fff; color: #fff; font-size: 26px; border-radius: 4px; font-weight: 600; margin-bottom: 10px;">1976</span>
                      <h2 id="timeline-title" style="font-size: 28px; font-weight: bold; margin: 0;">Northern Agricultural & Ind. Co. Ltd.</h2>
                    </div>
                  </div>

                  <!-- Timeline Line -->
                  <div style="position: absolute; bottom: 50px; left: 50%; transform: translateX(-50%); width: 90%; max-width: 1200px;">
                    <div id="timeline-line" style="position: relative; height: 4px; background: #fff; border-radius: 2px;">
                      <span id="active-dot" style="position: absolute; top: -8px; left: 0%; width: 20px; height: 20px; background: #8ED053; border-radius: 50%; transition: left 0.3s;"></span>
                    </div>

                    <div id="timeline-years" style="display: flex; padding-bottom: 20px; justify-content: space-between; margin-top: 10px; font-size: 16px; cursor: pointer; position: relative;">
                      <span data-title="Northern Agricultural & Ind. Co. Ltd." data-year="1976" data-pos="0%">1976</span>
                      <span data-title="Ejab Agricultural & Ind. Co. Ltd." data-year="1989" data-pos="12.5%">1989</span>
                      <span data-title="Northern Agricultural & Ind. Co. Ltd." data-year="1990" data-pos="25%">1990</span>
                      <span data-title="Ejab Agricultural & Ind. Co. Ltd." data-year="2000" data-pos="37.5%">2000</span>
                      <span data-title="Northern Agricultural & Ind. Co. Ltd." data-year="2014" data-pos="50%">2014</span>
                      <span data-title="Ejab Agricultural & Ind. Co. Ltd." data-year="2016" data-pos="62.5%">2016</span>
                      <span data-title="Northern Agricultural & Ind. Co. Ltd." data-year="2017" data-pos="75%">2017</span>
                      <span data-title="Ejab Agricultural & Ind. Co. Ltd." data-year="2021" data-pos="87.5%">2021</span>
                      <span data-title="Northern Agricultural & Ind. Co. Ltd." data-year="2024" data-pos="100%">2024</span>
                    </div>
                  </div>

                </section>



            
                <section class="page-section  sp-top-bottom60">
                    <div class="container" style="z-index: 3; " >
                  <div class="container" style="margin-bottom:35px;">                              
                  <div class="section-title-1 text-center" data-sr="enter bottom over 0.8s and move 140px">
                      <h1 class="hs3 fw400 lp2 webfont3 sm-bottom10" style="margin-bottom:10px;">
                          <span style="color:#8ED053; font-weight:1000 !important;">Our   </span> 
                          <span style="color:black; font-weight:900 !important;">Brands</span>
                      </h1>
                      
                  </div>   
              </div> 
                  </div> 
                  <div class="container work-container text-center"> 
                    
                    
                    <div class="projects-wrapper works-grid work-grid-3 work-grid-gut masonry pg3_masonry_gallery clearfix text-center">

                <!-- Work Item 1 -->
                <div class="work-item brand sp-top50" data-sr="enter bottom over 0.8s and move 140px" 
                    style="border:1px solid #e2e1e1; border-radius:0; display:inline-block; margin:0; box-sizing:border-box;">
              <a href="#" class="link" onclik = "return false;" style="coursor:default;">
                                <div class="gallery-wrap sm">
                                    <img class="70p"  src="{{asset('front/assets/images/home/OYO Logo.png')}}" alt="" loading="lazy" decoding="async" />
                                </div>                            
                              </a>
                </div>

                <!-- Work Item 2 -->
                <div class="work-item brand sp-top50" data-sr="enter bottom over 0.8s and move 140px" 
                    style="border:1px solid #e2e1e1; border-radius:0; display:inline-block; margin:0; box-sizing:border-box;">
                  <a href="#" class="link" onclik = "return false;" style="coursor:default;">
                                <div class="gallery-wrap sm">
                                    <img class="70p"  src="{{asset('front/assets/images/home/OLA Logo.png')}}" alt="" loading="lazy" 
                  decoding="async" />
                                </div>                            
                              </a>
                </div>

                <!-- Work Item 3 -->
                <div class="work-item brand sp-top50" data-sr="enter bottom over 0.8s and move 140px" 
                    style=" border:1px solid #e2e1e1; border-radius:0; display:inline-block; margin:0; box-sizing:border-box;">
                  <a href="#" class="link" onclik = "return false;" style="coursor:default;">
                                <div class="gallery-wrap sm">
                                    <img class="70p"  src="{{asset('front/assets/images/home/OLA Logo.png')}}" alt="" loading="lazy" decoding="async" />
                                </div>                            
                              </a>
                </div>

                <!-- Work Item 4 -->
                <div class="work-item brand sp-top50" data-sr="enter bottom over 0.8s and move 140px" 
                    style="border:1px solid #e2e1e1; border-radius:0; display:inline-block; margin:0; box-sizing:border-box;">
                  <a href="#" class="link" onclik = "return false;" style="coursor:default;">
                                <div class="gallery-wrap sm">
                                    <img class="70p"  src="{{asset('front/assets/images/home/OLA Logo.png')}}" alt="" loading="lazy" decoding="async" />
                                </div>                            
                              </a>
                </div>

                <!-- Work Item 5 -->
                <div class="work-item brand sp-top50" data-sr="enter bottom over 0.8s and move 140px" 
                    style="border:1px solid #e2e1e1; border-radius:0; display:inline-block; margin:0; box-sizing:border-box;">
                  <a href="#" class="link" onclik = "return false;" style="coursor:default;">
                                <div class="gallery-wrap sm">
                                    <img class="70p"  src="{{asset('front/assets/images/home/OLA Logo.png')}}" alt="" loading="lazy" 
                  decoding="async" />
                                </div>                            
                              </a>
                </div>

                <!-- Work Item 6 -->
                <div class="work-item brand sp-top50" data-sr="enter bottom over 0.8s and move 140px" 
                    style="border:1px solid #e2e1e1; border-radius:0; display:inline-block; margin:0; box-sizing:border-box;">
                  <a href="#" class="link" onclik = "return false;" style="coursor:default;">
                                <div class="gallery-wrap sm">
                                    <img class="70p"  src="{{asset('front/assets/images/home/OYO Logo.png')}}" alt="" loading="lazy" decoding="async" />
                                </div>                            
                              </a>
                </div>

              </div>



                  </div>   
                </section>
              </section>
 
                  <!-- CSR
                          ================================================== -->
              <section id="blog" class="page-section sp-top-bottom60" style="background-color:#fff;">
                <div class="container" style="margin-bottom:35px;">                              
                    <div class="section-title-1 text-center" data-sr="enter bottom over 0.8s and move 140px">
                        <h1 class="hs3 fw400 lp2 webfont3 sm-bottom10" style="margin-bottom:10px;">
                            <span style="color:#8ED053; font-weight:1000 !important;">Giving  </span> 
                            <span style="color:black; font-weight:900 !important;">Back</span>
                        </h1>
                        <h3 class="hs2 fw400 lp3 webfont1 sm-bottom0 color-black" style="margin-bottom:15px;">
                            It is the duty of the river to quench all drought
                        </h3>
                    </div>   
                </div>

                <div class="container work-container position-relative">
                    <div id="newsSlider" class="projects-wrapper works-grid work-grid-3 work-grid-gut masonry pg3_masonry_gallery clearfix d-flex overflow-hidden" style="gap:20px;">

                        <!-- Image Item 1 -->
                  <!-- Image Item 1 -->
              <div class="work-item photography" style="overflow:hidden; border-radius:8px; height:450px;">
                <a class="work-lightbox mfp-image" href="{{asset('front/assets/images/home/giving3.png')}}" style="display:block; position:relative; height:100%;">
                  <div class="gallery-wrap" style="height:100%; position:relative;">
                    <img src="{{asset('front/assets/images/home/n3.jpg')}}" alt=""
                        style="width:100%; height:70%; object-fit:cover; display:block; transform:none !important; transition:none !important;">
                    <div class="overlay-text" style="position:absolute; bottom:0; left:0; width:100%; color:#000; padding:10px;">
                      <div class="date" style="display:inline-flex; gap:6px; font-size:14px; margin-bottom:8px;">
                        <i class="fa fa-calendar" style="color:#8ED053;"></i>
                        <span>15 Sept 2025</span>
                      </div>
                      <h4 style="font-size:16px; margin:0; margin-top:5px;">Emergency Relief to Flood Affected Sylhet</h4>
                      <button style="margin-top:12px; letter-spacing:2px; background:none; border:none; color:#000; font-size:14px; cursor:pointer; display:flex; align-items:center; gap:6px; padding:0;">
                        Read More <i class="fa fa-arrow-right" style="color:#8ED053;"></i>
                      </button>
                    </div>
                  </div>
                </a>
              </div>

              <!-- Image Item 2 -->
              <div class="work-item photography" style="overflow:hidden; border-radius:8px; height:450px;">
                <a class="work-lightbox mfp-image" href="assets/images/home/giving2.png" style="display:block; position:relative; height:100%;">
                  <div class="gallery-wrap" style="height:100%; position:relative;">
                    <img src="{{asset('front/assets/images/home/giving2.png')}}" alt=""
                        style="width:100%; height:70%; object-fit:cover; display:block; transform:none !important; transition:none !important;">
                    <div class="overlay-text" style="position:absolute; bottom:0; left:0; width:100%; color:#000; padding:10px;">
                      <div class="date" style="display:inline-flex; gap:6px; font-size:14px; margin-bottom:8px;">
                        <i class="fa fa-calendar" style="color:#8ED053;"></i>
                        <span>15 Sept 2025</span>
                      </div>
                      <h4 style="font-size:16px; margin:0; margin-top:5px;">Emergency Relief to Flood Affected Sylhet</h4>
                      <button style="margin-top:12px; letter-spacing:2px; background:none; border:none; color:#000; font-size:14px; cursor:pointer; display:flex; align-items:center; gap:6px; padding:0;">
                        Read More <i class="fa fa-arrow-right" style="color:#8ED053;"></i>
                      </button>
                    </div>
                  </div>
                </a>
              </div>

              <!-- Image Item 3 -->
              <div class="work-item photography" style="overflow:hidden; border-radius:8px; height:450px;">
                <a class="work-lightbox mfp-image" href="assets/images/home/giving1.png" style="display:block; position:relative; height:100%;">
                  <div class="gallery-wrap" style="height:100%; position:relative;">
                    <img src="{{asset('front/assets/images/home/giving1.png')}}" alt=""
                        style="width:100%; height:70%; object-fit:cover; display:block; transform:none !important; transition:none !important;">
                    <div class="overlay-text" style="position:absolute; bottom:0; left:0; width:100%; color:#000; padding:10px;">
                      <div class="date" style="display:inline-flex; gap:6px; font-size:14px; margin-bottom:8px;">
                        <i class="fa fa-calendar" style="color:#8ED053;"></i>
                        <span>15 Sept 2025</span>
                      </div>
                      <h4 style="font-size:16px; margin:0; margin-top:5px;">Emergency Relief to Flood Affected Sylhet</h4>
                      <button style="margin-top:12px; letter-spacing:2px; background:none; border:none; color:#000; font-size:14px; cursor:pointer; display:flex; align-items:center; gap:6px; padding:0;">
                        Read More <i class="fa fa-arrow-right" style="color:#8ED053;"></i>
                      </button>
                    </div>
                  </div>
                </a>
              </div>


                    </div>
                </div>

                <!-- Mobile adjustments -->
                
              </section>

        
              <!------------------- Newses ------------------------------->
                <section id="blog" class="page-section page-section mobile-gap-reduce sp-top-bottom60" style="background-color:#fff;">
                  <div class="container" style="margin-bottom:35px;">                              
                      <div class="section-title-1 text-center" data-sr="enter bottom over 0.8s and move 140px">
                          <h1 class="hs3 fw400 lp2 webfont3 sm-bottom10" style="margin-bottom:10px;">
                              <span style="color:#8ED053; font-weight:1000 !important;">Latest News & </span> 
                              <span style="color:black; font-weight:900 !important;">Updates</span>
                          </h1>
                          <h3 class="hs2 fw400 lp3 webfont1 sm-bottom0 color-black" style="margin-bottom:15px;">
                              Our journey for the last 50 years was all about exploring new frontiers
                          </h3>
                      </div>   
                  </div>

                  <div class="container work-container position-relative">
                      <div id="newsSlider" class="projects-wrapper works-grid work-grid-3 work-grid-gut masonry pg3_masonry_gallery clearfix d-flex overflow-hidden" style="gap:20px;">

                          <!-- Image Item 1 -->
                          <div class="work-item photography" data-sr="enter left over 0.8s and move 640px" style="overflow:hidden; border-radius:8px; height:450px;">
                              <a class="work-lightbox mfp-image" href="assets/images/home/n1-min.jpg" data-sr="enter bottom over 0.8s" style="display:block; position:relative; height:100%;">
                                  <div class="gallery-wrap" style="height:100%; position:relative;">
                                      <img src="{{asset('front/assets/images/home/n1.jpg')}}" alt="" style="width:100%; height:100%; object-fit:cover; display:block;">
                                      <div style="position:absolute; bottom:0; left:0; width:100%; background:rgba(0,0,0,0.5); color:#fff; padding:10px;">
                                          <div class="date" style="font-size:14px; margin-bottom:5px; padding:4px 8px; border:1px solid #fff; border-radius:9999px; display:inline-block;">
                                              15 Sept 2025
                                          </div>
                                          <h4 class="hs1 fw400 lp1 webfont1 color-white" style="font-size:16px; margin:0; margin-top:5px;">
                                              Emergency Relief to Flood Affected Sylhet
                                          </h4>
                                      </div>
                                  </div>
                              </a>
                          </div>

                          <!-- Image Item 2 -->
                          <div class="work-item photography" data-sr="enter left over 0.8s and move 640px" style="overflow:hidden; border-radius:8px; height:450px;">
                              <a class="work-lightbox mfp-image" href="assets/images/home/n2-min.jpg" data-sr="enter bottom over 0.8s" style="display:block; position:relative; height:100%;">
                                  <div class="gallery-wrap" style="height:100%; position:relative;">
                                      <img src="{{asset('front/assets/images/home/n2.jpg')}}" alt="" style="width:100%; height:100%; object-fit:cover; display:block;">
                                      <div style="position:absolute; bottom:0; left:0; width:100%; background:rgba(0,0,0,0.5); color:#fff; padding:10px;">
                                          <div class="date" style="font-size:14px; margin-bottom:5px; padding:4px 8px; border:1px solid #fff; border-radius:9999px; display:inline-block;">
                                              15 Sept 2025
                                          </div>
                                          <h4 class="hs1 fw400 lp1 webfont1 color-white" style="font-size:16px; margin:0; margin-top:5px;">
                                              Emergency Relief to Flood Affected Sylhet
                                          </h4>
                                      </div>
                                  </div>
                              </a>
                          </div>

                          <!-- Image Item 3 -->
                          <div class="work-item photography" data-sr="enter left over 0.8s and move 640px" style="overflow:hidden; border-radius:8px; height:450px;">
                              <a class="work-lightbox mfp-image" href="assets/images/home/n3-min.jpg" data-sr="enter bottom over 0.8s" style="display:block; position:relative; height:100%;">
                                  <div class="gallery-wrap" style="height:100%; position:relative;">
                                      <img src="{{asset('front/assets/images/home/n3.jpg')}}" alt="" style="width:100%; height:100%; object-fit:cover; display:block;">
                                      <div style="position:absolute; bottom:0; left:0; width:100%; background:rgba(0,0,0,0.5); color:#fff; padding:10px;">
                                          <div class="date" style="font-size:14px; margin-bottom:5px; padding:4px 8px; border:1px solid #fff; border-radius:9999px; display:inline-block;">
                                              15 Sept 2025
                                          </div>
                                          <h4 class="hs1 fw400 lp1 webfont1 color-white" style="font-size:16px; margin:0; margin-top:5px;">
                                              Emergency Relief to Flood Affected Sylhet
                                          </h4>
                                      </div>
                                  </div>
                              </a>
                          </div>

                      </div>

                      <div style="text-align:center; margin-top:20px;">
                          <button style="background-color:#8ED053; color:#fff; padding:10px 46px; border:none; border-radius:8px; font-size:20px; cursor:pointer; display:inline-block; width:auto;">
                              See More
                          </button>
                      </div>
                  </div>
              </section>

              <div class="container py-5">
                <div class="row" style="min-height:70vh;">
                  
                  <!-- Left column -->
                  <div class="col-md-6 position-relative d-flex align-items-center justify-content-center text-center"
                      style="min-height:300px;">

                    <!-- Overlay + background image -->
                    <div style="position:absolute; top:0; left:0; width:100%; height:100%; 
                                background:  linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                                            url('{{asset("front/assets/images/home/form-min.jpg")}}');
                                background-size: cover;
                                background-position: center;
                                z-index:1;">
                    </div>

                    <!-- Text -->
                    <h2 style="position:relative; z-index:2; color:#fff; font-size:2.5rem; font-weight:700; padding:12px 20px; border-radius:6px; line-height:1.3;">
                      Feel free to contact us to learn more.
                    </h2>
                  </div>

                  <!-- Right column with gradient -->
                  <div class="col-md-6 d-flex flex-column justify-content-center align-items-center"
                      style="background: linear-gradient(to bottom,#6BAC5D, #8ED053); color:#fff; min-height:300px; padding:40px 30px;">
                    
                    <h3 class="mb-4 text-capitalize text-center">contact with us</h3>
                    
                    <form style="width:100%; max-width:500px;">
                      <div class="form-row mb-3">
                        <div class="form-group col-md-6">
                          <label for="name">Name</label>
                          <input type="text" class="form-control rounded-pill" id="name" 
                                required style="color:#fff; border:none; background:#5DAF12;">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="number">Number</label>
                          <input type="tel" class="form-control rounded-pill" id="number" 
                                required style="color:#fff; border:none; background:#5DAF12;">
                        </div>
                      </div>

                      <div class="form-row mb-3">
                        <div class="form-group col-md-6">
                          <label for="email">Email</label>
                          <input type="email" class="form-control rounded-pill" id="email" 
                                required style="color:#fff; border:none; background:#5DAF12;">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="subject">Subject</label>
                          <input type="text" class="form-control rounded-pill" id="subject" 
                                style="color:#fff; border:none; background:#5DAF12;">
                        </div>
                      </div>

                      <div class="form-group mb-3">
                        <label for="message">Message</label>
                        <textarea class="form-control rounded" id="message" rows="5" 
                                  required style="color:#fff; border:none; background:#5DAF12;"></textarea>
                      </div>

                      <button type="submit" class="btn btn-light px-4 py-2 rounded-pill">
                        Send Message
                      </button>
                    </form>
                  </div>
                </div>
              </div>
@endsection

@push('scripts')
<script>
  const years = document.querySelectorAll('#timeline-years span');
  const timelineBox = document.getElementById('timeline-box');
  const title = document.getElementById('timeline-title');
  const yearButton = document.getElementById('year-button');
  const activeDot = document.getElementById('active-dot');
  const line = document.getElementById('timeline-line');
  let activeIndex = 0;
  let autoSlideInterval;
  
  // Initialize
  function setActive(index) {
    activeDot.style.left = years[index].dataset.pos;
    activeDot.style.transform = 'translateX(-50%)';
    yearButton.textContent = years[index].dataset.year;
    title.textContent = years[index].dataset.title;
  
    years.forEach(y => y.classList.remove('active'));
    years[index].classList.add('active');
  
    activeIndex = index;
  }
  setActive(0);
  
  // Move Box
  function moveBox(newIndex) {
    if(newIndex === activeIndex) return;
  
    const isRight = newIndex > activeIndex;
    const newTitle = years[newIndex].dataset.title;
    const newYear = years[newIndex].dataset.year;
  
    timelineBox.style.transition = 'none';
    timelineBox.style.transform = isRight ? 'translateX(100%)' : 'translateX(-100%)';
    timelineBox.style.opacity = '0';
    timelineBox.offsetHeight; // force reflow
  
    title.textContent = newTitle;
    yearButton.textContent = newYear;
  
    timelineBox.style.transition = 'transform 0.5s ease, opacity 0.5s ease';
    timelineBox.style.transform = 'translateX(0)';
    timelineBox.style.opacity = '1';
  
    setActive(newIndex);
  }
  
  // Year click
  years.forEach((year, index) => {
    year.style.left = year.dataset.pos;
    year.addEventListener('click', () => {
      moveBox(index);
      startAutoSlide();
    });
  });
  
  // Line hover (desktop) + touch (mobile)
  function handleLineHover(e) {
    const rect = line.getBoundingClientRect();
    let percent = ((e.clientX - rect.left) / rect.width) * 100;
  
    let nearestIndex = 0;
    let minDiff = Infinity;
    years.forEach((year, i) => {
      let pos = parseFloat(year.dataset.pos);
      let diff = Math.abs(percent - pos);
      if (diff < minDiff) {
        minDiff = diff;
        nearestIndex = i;
      }
    });
  
    moveBox(nearestIndex);
  }
  
  line.addEventListener('mousemove', (e) => {
    handleLineHover(e);
  });
  
  // Mobile touch
  line.addEventListener('touchmove', (e) => {
    handleLineHover(e.touches[0]);
  });
  
  // Auto slide
  function startAutoSlide() {
    clearInterval(autoSlideInterval);
    autoSlideInterval = setInterval(() => {
      let nextIndex = activeIndex + 1;
      if(nextIndex >= years.length) nextIndex = 0;
      moveBox(nextIndex);
    }, 2000);
  }
  startAutoSlide();
  
  </script>

    
<script type="text/javascript">
  (function($) {
    "use strict";
    $(document).ready(function() {
  
      // ✅ 1. Set background images
      document.querySelectorAll(".timeline-slide").forEach(function (slide) {
        var photo = slide.getAttribute("data-photo");
        if (photo) {
          slide.style.backgroundImage = `url(%24%7bphoto%7d.html)`;
        }
      });
  
      // ✅ 2. Now initialize Swiper
      var timelineSwiper = new Swiper(".timeline .swiper-container", {
        direction: "vertical",
        autoplay: 3000,
        autoplayDisableOnInteraction: false,
        loop: true,
        speed: 1600,
        pagination: ".swiper-pagination",
        paginationBulletRender: function(swiper, index, className) {
          var year = document
            .querySelectorAll(".swiper-slide")
            [(index + 1)]?.getAttribute("data-year") || "N/A";
          return '<span class="' + className + '">' + year + "</span>";
        },
        paginationClickable: true,
        nextButton: ".swiper-button-next",
        prevButton: ".swiper-button-prev",
        breakpoints: {
          768: {
            direction: "horizontal"
          }
        }
      });
  
      // ✅ 3. Hover pagination bullet = trigger click
      $('.swiper-pagination-bullet').hover(function() {
        $(this).trigger("click");
      });
  
    });
  })(jQuery);
  </script>
@endpush