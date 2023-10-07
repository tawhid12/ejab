@extends('front.layout.front-layout')
@section('pageTitle','EJAB Group ')
@section('meta')
@endsection
@section('pageSubTitle',' Overview')
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
        @forelse($our_team as $m)
        <div class="col-sm-4 mb-5 animated">
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

@endsection
@push('scripts')
<script>

</script>

@endpush