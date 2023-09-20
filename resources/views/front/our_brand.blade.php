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
            <div class="row gallery photo">
                @forelse ($brands as $b)
                <div class="col-lg-4 text-center">
                        <div class="card shadow-sm mb-3">
                            <div class="card-gallery">
                                <img class="img-fluid" src="{{asset('uploads/brand/thumb/'.$b->image)}}" alt="">
                            </div>
                        </div>
                </div>
                @empty
                <div class="col-lg-4 text-center">
                    <div class="text-center">
                        <h3 class="mt-5">There is no Brand uploaded yet</h3>
                    </div>
                </div>
                @endforelse
            </div>
            <div class="my-3">
                {!! $brands->links()!!}
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>

</script>

@endpush