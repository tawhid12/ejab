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
            <p class="joint-text">This Our Price Sensitive Information</p>
        </div>
    </div>
</div>

<div class="body_bg layout_padding">
    <div class="service_section">
        <div class="container animated">
            <h4 class="card-title font-weight-bold text-center">
                Price Sensitive Information
            </h4>
            <div class="d-flex justify-content-center m-4">
                <div class="border w-25 border-danger"></div>
            </div>
        </div>
        <div class="container animated">
            <table class="table">
                <tr>
                    <td>Title</td>
                    <td>File</td>
                </tr>
                @forelse($report as $r)
                <tr>
                    <td>{{$r->title}}</td>
                    <td><a target="_blank" href="{{asset('uploads/report/'.$r->upload_file)}}">Download <i class="bi bi-file-pdf-fill"></i></a></td>
                </tr>
                @empty
                <tr>
                    <td colspan="2">No report found</td>
                </tr>
                @endforelse
            </table>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script>

</script>

@endpush