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
<div class="finance-report">
    <div class="ejab-overlay home">
        <!-- header section strats -->
        @include('front.includes.nav')
        <div class="container animated">
            <p class="joint-text">This Our Financial Statement</p>
        </div>
    </div>
</div>

<div class="body_bg layout_padding">
    <div class="service_section">
        <div class="container animated">
            <h4 class="card-title font-weight-bold text-center">
                Financial Statement
            </h4>
            <div class="d-flex justify-content-center m-4">
                <div class="border w-25 border-danger"></div>
            </div>
        </div>
        <div class="container animated">
            <object data="{{asset('uploads/report/'.$report->upload_file)}}" type="application/pdf" width="100%" height="900px">
                <p>
                    Unable to display PDF file.
                    <a href="{{asset('uploads/report/'.$report->upload_file)}}">Download</a>
                    instead.
                </p>
            </object>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script>

</script>

@endpush