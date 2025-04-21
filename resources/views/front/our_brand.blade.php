@extends('front.layout.front-layout')
@section('pageTitle','EJAB Group')
@section('meta')
@endsection
@section('pageSubTitle',' HOME')
@push('styles')
<link rel="stylesheet" href="{{asset('front/css/brand.css')}}">
@endpush
@section('content')
<div class="ejab-overlay">
    <!-- header section strats -->
    @include('front.includes.nav')
</div>
<section class="about-support">
    <span class="shape"></span>
    <span class="shape2"></span>
    <span class="shape3"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="mb-0">All Brand</h3>
            </div>
            <div class="col-lg-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-end bg-transparent mb-0">
                        <li class="breadcrumb-item">
                            <a href="#" class="breadcrumb-item router-link-active">Our</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="">Brands</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
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
                            <a href="#" class="responsive-container-block overlay">
                                
                                    <p class="text-blk title">
                                    {{$b->title}}
                                    </p>
                                    <p class="text-blk info">
                                    {{$b->description}}
                                    </p>
                                
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
<script>
$(document).ready(function() {
  
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