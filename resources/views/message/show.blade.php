@extends('layout.app')
@section('pageTitle','Business Profile Show')
@section('pageSubTitle','View')
@push('styles')
<style>
    th,
    td {
        padding: 2px !important;
        border: 1px solid #d6d6d6 !important;
    }

    .bg {
        background-color: #f8f8f8 !important;
    }

    .bg-danger-subtle {
        border: 1px solid #d6d6d6;
        font-size: 14px;
        text-align: center;
        height: 30px;
    }
</style>
@endpush
@section('content')
<!-- Bordered table start -->
<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">
            <div class="card">
                <!-- table bordered -->
                <div class="row">
                    <div class="col-md-12">

                        <table class="table table-sm table-bordered text-center" style="font-size: smaill;">
                            <thead>
                                <tr>
                                    <th colspan="4" scope="col">
                                        {{$b->heading_text}} - Details
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="bg">Page title</th>
                                    <td>
                                        <h5>{{$b->heading_text}}</h5>
                                    </td>
                                    <th class="bg">Logo</th>
                                    <td><img width="60px" src="{{asset('uploads/business/thumb/'.$b->image)}}" alt=""></td>
                                </tr>
                                <tr>
                                    <th class="bg">Description (Front Page)</th>
                                    <td colspan="3">
                                        <p class="text-justify m-0 p-1">{{$b->description}}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <h6>Page Info</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="bg">Image (Single Page)</th>
                                    <td colspan="3">
                                        <img width="400px" src="{{asset('uploads/page_image/thumb/'.$b->page_image)}}" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">
                                        <h6>Section One</h6>
                                    </td>
                                </tr>
                            </tbody>
                        </table>






                    </div>

                </div>
            </div>
        </div>
</section>
<!-- Bordered table end -->
</div>

@endsection