@extends('front.layout.front-layout')
@section('pageTitle','EJAB Group')
@section('meta')
@endsection
@section('pageSubTitle',' Founder Message')
@push('styles')
<style>
</style>
@endpush
@section('content')
<div class="ejab-overlay">
    <!-- header section strats -->
    @include('front.includes.nav')
</div>
<div class="container my-5 animated">
    <div class="row">
        <div class="col-sm-6 align-items-center d-flex">
            <div>
                <p>Overview</p>
                <p class="h1 text-info font-weight-bold">
                    {{$m->founder_headline}}
                </p>
                <p class="my-5 text-justify">
                    {{$m->founder_msg}}
                </p>
                <!-- <div class="my-4">
                        <a class="read-more" href=""> Read More </a>
                    </div> -->
            </div>
        </div>
        <div class="col-sm-6">
            <img class="rounded-lg img-fluid" src="{{asset('uploads/founder_image/thumb/'.$m->founder_image)}}" alt="" />
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script>

</script>

@endpush