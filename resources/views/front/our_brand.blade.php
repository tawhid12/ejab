@extends('front.layout.front-layout')
@section('pageTitle','EJAB Group')
@section('meta')
@endsection
@section('pageSubTitle',' HOME')
@push('styles')
<link rel="stylesheet" href="{{asset('front/css/brand.css')}}">
<!-- Magnific Popup core CSS file -->
<link rel="stylesheet" href="{{asset('front/magnific-popup/dist/magnific-popup.css')}}">
@endpush
@section('content')
<div class="ejab-overlay">
    <!-- header section strats -->
    @include('front.includes.nav')
</div>

<div class="container py-4">
    <div class="row">
        <div class="col-lg-12 px-2 ">
            <div class="featured_projects" unique-script-id="w-w-dm-id">
                <div class="container-block bg">
                    <p class="text-blk heading">Our Brands</p>
                    <div class="responsive-container-block opt-cont">
                        <p class="text-blk tab tab-active pb-0 mb-0" data-filter="all">All</p>
                        @foreach ($our_business as $ob)
                            <p class="text-blk tab pb-0 mb-0" data-filter="{{$ob->id}}">
                                {{$ob->heading_text}}
                            </p>
                        @endforeach
                    </div>
                    <div class="responsive-container-block content mt-5 mb-5">
                        @foreach($brands as $b)
                            <div class="responsive-container-block img {{$b->our_business_id}}">
                                <img class="im image-block" src="{{asset('uploads/brands/'.$b->image)}}">
                                <a href="javascript:void(0)" class="responsive-container-block overlay">
                                    <p class="text-blk title">{{$b->title}}</p>
                                    <p class="text-blk info">{{$b->description}}</p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- Magnific Popup core JS file -->
<script src="{{asset('front/magnific-popup/dist/jquery.magnific-popup.js')}}"></script>
<script>
$(document).ready(function() {
  $('.responsive-container-block img').magnificPopup({
    type: 'image',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1],
    },
  });
  $("[unique-script-id='w-w-dm-id'] .tab").click(function() {
    const value = $(this).attr('data-filter');
    if (value == 'all') {
      $("[unique-script-id='w-w-dm-id'] .img").show('5000');
    } else {
      $("[unique-script-id='w-w-dm-id'] .img").not('.' + value).hide('5000');
      $("[unique-script-id='w-w-dm-id'] .img").filter('.' + value).show('5000');
    }
  });

  $("[unique-script-id='w-w-dm-id'] .tab").click(function() {
    $(this).addClass('tab-active').siblings().removeClass('tab-active');
  });
})
</script>

@endpush