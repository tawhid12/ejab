@extends('front.layout.front-layout')
@section('pageTitle','EJAB Group')
@section('meta')
@endsection
@section('pageSubTitle',' HOME')
@push('styles')
<style>
</style>
@endpush
@section('content')
<div class="hero_area">
    <div class="ejab-overlay home">
        @include('front.includes.nav')
        <!-- marqyuee -->
        <section class="container animated">

            <marquee onmouseover="this.stop();" onmouseout="this.start();">
                @forelse ($scroll_notice as $sn)
                {{$sn->text}}
                @empty
                @endforelse
            </marquee>

        </section>
        <!-- slider section -->
        <section class="slider_section position-relative">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <!-- <ol class="carousel-indicators">
              <li
                data-target="#carouselExampleIndicators"
                data-slide-to="0"
                class="active"
              >
                01
              </li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1">
                02
              </li>
            </ol> -->
                <div class="carousel-inner animated">
                    @forelse ($slider as $slide)
                    <div class="carousel-item {{$loop->index==0?'active':''}}">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="detail-box">
                                        <div>
                                            <h1>{{$slide->short_title}}</h1>
                                            <p>{{$slide->long_title}}</p>
                                            <div class="btn-box">
                                                <a href="" class="btn-1"> Contact Us </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    @endforelse
                </div>
                <div class="custom_carousel-control animated">
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>
        <!-- end slider section -->
    </div>
</div>

<!-- about section -->

<section class="about_section layout_padding animated">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>About Us</h2>
                    </div>
                    <p>
                        {{$about->description}}
                    </p>
                    <a href=""> Get Started </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-box">
                    <img src="{{asset('uploads/aboutus/'.$about->image)}}" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about section end -->
<!-- Brand Section -->
<section class="about_section layout_padding animated">
    <div class="container">
        <div class="container text-center my-3">
            <div class="row mx-auto my-auto justify-content-center">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card shadow rounded-lg">
                        <div class="card-body">
                            <h4 class="card-title font-weight-bold">Our Brands</h4>
                            <div class="d-flex justify-content-center m-4">
                                <div class="border w-25 border-danger"></div>
                            </div>

                            <div class="owl-carousel">

                                @forelse ($brands as $b)
                                <div class="item">
                                    <a href="">
                                        <img src="{{asset('uploads/brands/thumb/'.$b->image)}}" alt="image" />
                                    </a>
                                </div>
                                @empty
                                @endforelse

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end brand section -->
<!-- start our partner section -->
<section class="container mt-3 mb-3 animated">
    <h4 class="card-title font-weight-bold text-center">
        Our Business Partner
    </h4>
    <div class="d-flex justify-content-center m-4">
        <div class="border w-25 border-danger"></div>
    </div>
    <!-- Logo and Discription -->
    <div class="py-5 animated">
        <div class="row">
            @forelse ($partners as $p)
            <div class="col-sm-12 col-md-6 col-xl-4">
                <a class="text-decoration-none text-dark" href="">
                    <div class="partner-logo d-flex justify-content-center mb-3">
                        <img class="img-fluid" src="{{asset('uploads/partners/thumb/'.$p->image)}}" alt="" />
                    </div>

                    <p class="text-center">{{$p->short_text}}</p>
                </a>
            </div>
            @empty
            @endforelse
        </div>
    </div>
</section>
<!-- end our partner section -->
<div class="body_bg layout_padding animated">
    <!-- service section -->

    <section class="service_section">
        <div class="container">
            <div class="heading_container">
                <h2>Our Company's</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @forelse ($our_business as $b)
                <div class="col-md-6">
                    <div class="box">
                        <div class="img-box project-icon">
                            <img src="{{asset('uploads/business/thumb/'.$b->image)}}" alt="" />
                        </div>
                        <h4>{{$b->heading_text}}</h4>
                        <p>{{$b->description}}</p>
                        <a href=""> Read More </a>
                    </div>
                </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>

    <!-- end service section -->

    <!-- quote section -->

    <section class="quote_section layout_padding animated">
        <div class="container">
            <div class="box">
                <div class="detail-box">
                    <h3>Get Your Quote Today!</h3>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="exm@exm.com" aria-label="Recipient's username" aria-describedby="basic-addon2" />
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">Subcribe Today</span>
                        </div>
                    </div>
                </div>
                <div class="btn-box">
                    <a href=""> Subcribe </a>
                </div>
            </div>
        </div>
    </section>

    <!-- end quote section -->

    <!-- client section -->

    <section class="client_section layout_padding-top container animated">
        <div>
            <h4 class="card-title font-weight-bold text-center">
                Our Recent News
            </h4>
            <div class="d-flex justify-content-center m-4">
                <div class="border w-25 border-danger"></div>
            </div>
        </div>
        <!-- recent post  -->
        <div class="row">
            @forelse ($blogs as $b)
            <div class="col-sm-12 col-md-6 col-xl-4 mb-3">
                <div class="card shadow">
                    <img src="{{asset('uploads/blogs/thumb/'.$b->image)}}" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 class="card-title">{{$b->heading_text}}</h5>
                        <p class="card-text">{{$b->description}}</p>
                        <a href="#" class="read-more mt-3">Read More</a>
                    </div>
                </div>
            </div>
            @empty
            @endforelse
        </div>
    </section>

    <!-- end client section -->
</div>
@endsection
@push('scripts')
<script>

</script>

@endpush