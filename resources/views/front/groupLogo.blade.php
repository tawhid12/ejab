@extends('front.layout.front-layout')
@section('pageTitle','EJAB Group ')
@section('meta')
@endsection
@section('pageSubTitle',' Group Logo')
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
        @forelse($logo as $l)
        <div class="col-sm-3 mb-5 animated">
            <div class="leaders">
                <img class="img-fluid" src="{{asset('uploads/business/thumb/'.$l->image)}}" alt="" />
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