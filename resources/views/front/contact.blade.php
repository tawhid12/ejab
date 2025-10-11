@extends('front.layout.front-layout')
@section('pageTitle','EJAB Group')
@section('meta')
@endsection
@section('pageSubTitle',' Contact')
@push('styles')
<style>
</style>
@endpush
@section('content')

<section class="page-section black-section innerpage-heading-2 padfix" style="background: url('{{ asset('front/assets/images/contact.jpg') }}') no-repeat center center; background-size: cover;">
  <div class="relative container">
    <div class="eight columns">
      <div class="page-heading">
        <!-- Content here -->
      </div>
    </div>
  </div>              
</section>
<div class="curve-container n20"> <svg xmlns="http://www.w3.org/2000/svg" class="curve-container__curve curve-three" viewBox="0 0 1440 68" enable-background="new 0 0 1440 68"><path d="m1622.3 1937.7c0 0-410.7 169.1-913.4 75.5-502.7-93.6-977.7 56.3-977.7 56.3v440h1891.1v-571.8" fill="#fff" transform="translate(0-1977)"></path></svg> </div>  
<!-- SECTION ABOUT==================================================  --> 
<section class="page-section bg_color--6 sp-top40 sp-bottom0" id="scroll-link" style="background-color:#fafafa;">
 <!-- fontalt4 -->
<!-- fontalt4 -->
<div class="container" style="z-index: 3;">
    <div class="section-title" style="padding-top: 5vh; padding-left: 5vw;"> <!-- উপরের ও বামের gap -->
        
    <!-- Button-like p tag -->
<p class="d-inline-block rounded px-3 py-1 mb-2 font-weight-bold text-dark border" style="cursor:default; border-color:#ccc;">
    Get In Touch
</p>

<h1 class="hs3 fw900 lp2 webfont3 sm-bottom10 color-black" 
    data-sr="enter bottom over 0.9s and move 140px">
    We’ Love To Hear From You<br>
</h1>


        <h6 class="heading heading-h6 line-height-1-62 text-dark sm-bottom10 webfont1" 
            data-sr="enter bottom over 0.9s and move 140px">
            Or Just Reach Out Manually <span class="font-bold" style="color:black;">@Ejab.com</span>
        </h6>
    </div>
</div>
<style>
  @media (max-width: 767px) {
    .aboutfact3 .card-box {
      min-height: 200px !important;  /* মোবাইলে ছোট করা */
      padding: 20px !important;       /* চাইলে paddingও ছোট করা যায় */
    }
  }

  @media (min-width: 768px) {
    .aboutfact3 .card-box {
      min-height: 300px !important;  /* ডেক্সটপে আগের মতো */
    }
  }
</style>

<section class="aboutfact3 ">
  <div class="container">
    <div class="row">

      <!-- Column 1 -->
      <div class="col-12 col-md-6 col-lg-4 mb-2 mb-md-4">
        <div class="d-flex flex-column align-items-start justify-content-start p-4 card-box">
          <div class="d-inline-block rounded-circle">
            <img src="{{ asset('front/assets/images/contact1.png') }}" alt="Email Icon" style="width:28px; height:28px; object-fit:contain;">
          </div>

          <h3 class="mt-3" style="font-size:1.4rem; font-weight:700; color:#000;">Email Support</h3>

          <p style="margin:0; line-height:1;">Our Team Can Response In Real Life</p>
          <p class="mt-2" style="font-size:0.95rem; color:#555;">@Fleetclothing.com</p>
        </div>
        <div class="container contact_bg layout_padding2-top">
          <div class="row">
            <div class="col-md-6">
              <div class="contact_form">
                <form method="post" action="{{route('contact.store')}}">
                    @csrf
                  <input type="text" name="name" placeholder="Name " required/>
                  <input type="email" name="email" placeholder="Email" required/>
                  <input
                    type="text"
                    placeholder="Message"
                    class="message_input" name="message" required
                  />
                  <input type="hidden" name="g-recaptcha-response" id="recaptchaResponse">
                  <button type="submit">Send</button>
                </form>
              </div>
            </div>
            <div class="col-md-6">
              <div class="img-box">
                <img src="{{asset('assets/images/contact-img.jpg')}}" alt="" />
              </div>
            </div>
          </div>

          <h3 class="mt-3" style="font-size:1.4rem; font-weight:700; color:#000;">Call Us Directly</h3>

          <p style="margin:0; line-height:1;">Available During Working Hours</p>
          <p class="mt-1" style="font-size:0.95rem; color:#555;">+004 0311019169</p>
          <p class="mt-1" style="font-size:0.95rem; color:#555;">+8801 0311019169</p>
        </div>
      </div>

    </div>
  </div>
</section>

   </section>


          


          

   


<div class="container py-5">
  <div class="row" style="min-height:70vh;">
    
    <!-- Left column -->
    <div class="col-md-6 position-relative d-flex align-items-center justify-content-center text-center"
         style="min-height:300px; ">

      <!-- Overlay + background image -->
      <div style="position:absolute; border-radius: 5px; top:0; left:0; width:100%; height:100%; 
                  background:  linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                              url('{{ asset('front/assets/images/home/form-min.jpg') }}');
                  background-size: cover;
                  background-position: center;
                  z-index:1;">
      </div>

      <!-- Text -->
      <h2 style="position:relative; z-index:2; color:#fff; font-size:2.5rem; font-weight:700;
                 padding:12px 20px; border-radius:6px; line-height:1.3;">
        Feel free to contact us to learn more.
      </h2>
    </div>

    <!-- Right column with gradient -->
<div class="col-md-6 d-flex flex-column justify-content-start align-items-start"
     style="background-color:#fff; color:#000; min-height:300px; padding:40px 30px;">

  <!-- Heading start -->
  <h1 class="hs3 fw900 lp2 webfont3 sm-bottom10 " 
      data-sr="enter bottom over 0.9s and move 140px" style="color:#8ED053;">
    Ready To Discuss  <br>
    <span class="color-black font-bold" >Your
Project With Us</span>
  </h1>

  <!-- Form -->
  <form style="width:100%; max-width:500px; margin-top:30px;">

    <!-- Name -->
    <div class="form-group mb-3">
      <label for="name">Name</label>
      <input type="text" class="form-control b rounded-pill" id="name" 
             required style="color:#000;  background:#fff;">
    </div>

    <!-- Email -->
    <div class="form-group mb-3">
      <label for="email">Email</label>
      <input type="email" class="form-control rounded-pill" id="email" 
             required style="color:#000;  background:#fff;">
    </div>

    <!-- Number -->
    <div class="form-group mb-3">
      <label for="number">Number</label>
      <input type="tel" class="form-control rounded-pill" id="number" 
             required style="color:#000;  background:#fff;">
    </div>

    <!-- Message -->
    <div class="form-group mb-3">
      <label for="message">Message</label>
      <textarea class="form-control rounded" id="message" rows="5" 
                required style="color:#000;  background:#fff;"></textarea>
    </div>

    <!-- Submit -->
<div class="text-center" style="margin-top:10px;">
  <button type="submit" 
          class="btn btn-light  d-inline-flex align-items-center" 
          style="width:auto;background-color: #8ED053; border-radius: 24px; color: white; padding:10px 20px; font-size:0.95rem;">
    Send Message <i class="fa fa-paper-plane ml-2" aria-hidden="true"></i>
  </button>
</div>


  </form>
</div>

  </div>
</div>




            <!-- End Contact Form  -->  
     <!---   footer page include here layouts.footer   include--->
      
   
     

 
 

    @endsection
@push('scripts')
<script src="https://www.google.com/recaptcha/api.js?render={{ env('GOOGLE_RECAPTCHA_SITE') }}"></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('{{ env('GOOGLE_RECAPTCHA_SITE') }}', {action: 'submit'}).then(function(token) {
            document.getElementById('recaptchaResponse').value = token;
        });
    });
</script>
@endpush