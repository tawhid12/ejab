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

<body>
    <div class="our-team_area">
        <div class="ejab-overlay home">
            <!-- header section strats -->
            @include('front.includes.nav')
            <div class="container animated">
                <p class="joint-text">Our Honorable Leaders</p>
            </div>
        </div>
    </div>

    <div class="body_bg layout_padding animated">
        <div class="service_section">
            <div class="container">
                <h4 class="card-title font-weight-bold text-center">
                    Meet The Visionaries
                </h4>
                <div class="d-flex justify-content-center m-4">
                    <div class="border w-25 border-danger"></div>
                </div>
            </div>
            <div class="container animated">
                <div class="row">
                    @forelse($our_team as $m)
                    <div class="col-sm-6 mb-5 animated">
                        <div class="leaders">
                            <img class="img-fluid" src="{{asset('uploads/ourmember/thumb/'.$m->image)}}" alt="" />
                        </div>
                        <div class="mt-3">
                            <p class="h6 text-info font-weight-bold">{{$m->given_name}}</p>
                            <p class="">{{$m->designation}}</p>
                        </div>
                        <div class="leader-social">
                            <i class="bi bi-linkedin"></i>
                            <i class="bi bi-facebook"></i>
                        </div>
                        <div class="leader-text">
                            <p>
                            {{$m->details}}
                            </p>
                        </div>
                    </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>


    @endsection
    @push('scripts')
    <script>

    </script>

    @endpush