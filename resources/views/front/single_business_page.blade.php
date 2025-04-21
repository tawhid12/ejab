@include('front.includes.header')
@section('pageTitle','')
@section('meta')
@endsection
@section('pageSubTitle','')

@section('content')
<div class="about_area" style="background-image:url({{asset('uploads/page_image/thumb/'.$data->page_image)}})">
  <div class="ejab-overlay home">
    @include('front.includes.nav')

    <div class="container">
      <p class="joint-text">About {{$data->heading_text}}</p>
    </div>
  </div>
</div>

<div class="">
  <!-- Section one -->
  <div class="container my-5 animated">
    <div class="row">
      <div class="col-sm-6 align-items-center d-flex">
        <div>
          <p class="h1 text-info font-weight-bold">{{$data->sec_1_headline}}</p>
          <p class="my-5 text-justify">{{$data->sec_1_desc}}</p>
          <div class="my-4">
            <a class="read-more" href="{{$data->sec_1_link}}">Read More </a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 d-flex align-items-center">
        <img class="rounded-lg img-fluid" src="{{asset('uploads/sec_1_image/thumb/'.$data->sec_1_image)}}" alt="" />
      </div>
    </div>
  </div>
  <!-- Section Two -->
  <div class="py-5 about-section-bg animated">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 d-flex align-items-center">
          <img class="rounded-lg img-fluid" src="{{asset('uploads/sec_2_image/thumb/'.$data->sec_2_image)}}" alt="" />
        </div>
        <div class="col-sm-6 align-items-center d-flex">
          <div>
            <div class="mark-point">{{$data->sec_2_box_text}}</div>
            <p class="h1 text-info font-weight-bold">{{$data->sec_2_headline}}</p>
            <p class="my-5 text-justify">{{$data->sec_2_desc}}</p>
            <div class="my-4">
              <a class="read-more" href="{{$data->sec_2_link}}">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Section Product -->
  @forelse($data->brand as $brand)
  <div class="py-5 mt-5 about-section-bg animated">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <!-- Replace the Related Products section with this -->
            <section class="related-products">
              <div class="container">
                  <h2> Products</h2>
                  <div class="owl-carousel product-carousel">
                      @foreach($brand->products as $p)
                      <div class="item">
                          <div class="related-product-card">
                              <img src="{{asset('uploads/products/thumb/'.$p->image)}}" alt="{{$p->name}}" class="related-product-image">
                              
                          </div>
                      </div>
                      @endforeach
                      @foreach($brand->products as $p)
                      <div class="item">
                          <div class="related-product-card">
                              <img src="{{asset('uploads/products/thumb/'.$p->image)}}" alt="{{$p->name}}" class="related-product-image">
                              
                          </div>
                      </div>
                      @endforeach
                      @foreach($brand->products as $p)
                      <div class="item">
                          <div class="related-product-card">
                              <img src="{{asset('uploads/products/thumb/'.$p->image)}}" alt="{{$p->name}}" class="related-product-image">
                              
                          </div>
                      </div>
                      @endforeach
                  </div>
              </div>
            </section>
            
        </div>
        <div class="col-sm-6 align-items-center d-flex">
          <div>
            <div class="mark-point"></div>
            <p class="h1 text-info font-weight-bold">{{$brand->title}}</p>
            <p class="my-5 text-justify">{{$brand->description}}</p>
            <div class="my-4">
              <a class="read-more" href="{{route('product')}}?brand={{$brand->id}}">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @empty
  @endforelse
  <!-- Section Three -->
  <div class="py-5 bg-ligh animated">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div>
            <div class="mark-point">{{$data->sec_3_box_text}}</div>
            <p class="h1 text-info font-weight-bold">{{$data->sec_3_headline}}</p>
            <div class="d-flex mt-5 border-bottom border-3">
              <i class="bi bi-hand-thumbs-up-fill about-icon"></i>
              <div>
                <p class="text-info mb-2 about-point-title mt-1">{{$data->sec_3_box_1_headline}}</p>
                <p>{{$data->sec_3_box_1_detl}}</p>
              </div>
            </div>
            <div class="d-flex mt-5 border-bottom border-3">
              <i class="bi bi-hand-thumbs-up-fill about-icon"></i>
              <div>
                <p class="text-info mb-2 about-point-title mt-1">{{$data->sec_3_box_2_headline}}</p>
                <p>{{$data->sec_3_box_2_detl}}</p>
              </div>
            </div>
            <div class="d-flex mt-5 border-bottom border-3">
              <i class="bi bi-hand-thumbs-up-fill about-icon"></i>
              <div>
                <p class="text-info mb-2 about-point-title mt-1">{{$data->sec_3_box_3_headline}}</p>
                <p>{{$data->sec_3_box_3_detl}}</p>
              </div>
            </div>
            <div class="d-flex mt-5 border-bottom border-3">
              <i class="bi bi-hand-thumbs-up-fill about-icon"></i>
              <div>
                <p class="text-info mb-2 about-point-title mt-1">{{$data->sec_3_box_4_headline}}</p>
                <p>{{$data->sec_3_box_4_detl}}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 align-items-center d-flex">
          <img class="rounded-lg img-fluid" src="{{asset('uploads/sec_3_image/thumb/'.$data->sec_3_image)}}" alt="" />
        </div>
      </div>
    </div>
  </div>
  <!-- Section Four -->
  <div class="py-5 about-section-bg animated">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <img class="rounded-lg img-fluid" src="{{asset('uploads/sec_4_image/thumb/'.$data->sec_4_image)}}" alt="" />
        </div>
        <div class="col-sm-6 align-items-center d-flex">
          <div>
            <p class="h1 text-info font-weight-bold">Connet With Us</p>
            <div class="my-5 about-social-icon">
              <a href="{{$data->sec_4_link1}}"><i class="bi bi-facebook"></i></a>
              <a href="{{$data->sec_4_link2}}"><i class="bi bi-twitter"></i></a>
              <a href="{{$data->sec_4_link3}}"><i class="bi bi-youtube"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Section Five -->
  <div class="container my-5 animated">
    <div class="row">
      <div>
        <p class="h1 text-info font-weight-bold">Our Galary</p>
        <div class="my-5 galary">
          <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-3 mb-3">
              <img class="img-fluid rounded shadow" src="https://images.pexels.com/photos/3844533/pexels-photo-3844533.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" />
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3 mb-3">
              <img class="img-fluid rounded shadow" src="https://images.pexels.com/photos/3844533/pexels-photo-3844533.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" />
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3 mb-3">
              <img class="img-fluid rounded shadow" src="https://images.pexels.com/photos/3844533/pexels-photo-3844533.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" />
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3 mb-3">
              <img class="img-fluid rounded shadow" src="https://images.pexels.com/photos/3844533/pexels-photo-3844533.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" />
            </div>
          </div>
        </div>
        <div class="my-4">
          <a class="read-more" href=""> See More </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Section Six -->
  <div class="container my-5 animated">
    <div class="row">
      <div class="col-sm-12">
        <p class="h1 text-info font-weight-bold text-center">Our Map</p>
        <div class="my-5">
          {!!$data->map!!}
        </div>
      </div>
    </div>
  </div>
</div>

<!-- footer section -->
<section class="container-fluid footer_section animated">
  <div class="row">
    <div class="col-sm-6">
      <p>Copyright &copy; 2023 All Rights Reserved</p>
    </div>
    <div class="col-sm-6 justify-content-end">
      <p>Email - {{$data->footer_email}}, Phone - {{$data->footer_contact}}</p>
    </div>
  </div>
</section>
<!-- footer section end -->
<script src="{{asset('front/js/app.js')}}"></script>

<script type="text/javascript" src="{{asset('front/js/jquery-3.4.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/bootstrap.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
<script>
  $(document).ready(function() {
    $(".owl-carousel").owlCarousel({
      autoPlay: 3000,
      items: 3,
      itemsDesktop: [1199, 2],
      itemsDesktopSmall: [979, 1],
      center: true,
      nav: true,
      loop: true,
      responsive: {
        600: {
          items: 1,
        },
      },
    });
    
  });
</script>

