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
    <div class="">
      <div class="ejab-overlay">
        <!-- header section strats -->
        @include('front.includes.nav')
      </div>
      <!-- end header section -->
    </div>

    <div class="body_bg layout_padding">
      <!-- contact section -->

      <section class="contact_section animated">
        <div class="container">
          <div class="heading_container">
            <h2>Let's Get In Touch!</h2>
          </div>
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
        </div>
      </section>

      <!-- end contact section -->
    </div>
    <!-- info section -->

    <section class="pt-5 animated">
      <h4 class="card-title font-weight-bold text-center">Contact Us</h4>
      <div class="d-flex justify-content-center m-4">
        <div class="border w-25 border-danger"></div>
      </div>
      <div class="container mb-4">
        <div>
          <div class="row">
            <div class="col-sm-12 col-md-6 col-xl-4 mb-3">
              <div class="d-flex justify-content-center mb-3">
                <img src="images/location.png" alt="" class="img-1" />
              </div>

              <p class="text-dark text-center">
                Address : House #13, Level#02, Halishahar, Chittgong
              </p>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-4 mb-3">
              <div class="d-flex justify-content-center mb-3">
                <img src="images/call.png" alt="" class="img-1" />
              </div>
              <p class="text-dark text-center">Mobile : +8801234567890</p>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-4 mb-3">
              <div class="d-flex justify-content-center mb-3">
                <img src="images/envelope.png" alt="" class="img-1" />
              </div>
              <p class="text-dark text-center">Email : info@ejabgroup.com</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    @endsection
@push('scripts')
<script>

</script>

@endpush