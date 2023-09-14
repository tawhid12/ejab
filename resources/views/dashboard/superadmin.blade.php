@extends('layout.app')
@section('pageTitle',trans('Profile Statistics'))

@section('content')
<div class="card-header">
    <h4 class="card-title">Example Content</h4>
</div>
<div class="card-body">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quas omnis laudantium tempore
    exercitationem, expedita aspernatur sed officia asperiores unde tempora maxime odio reprehenderit
    distinctio incidunt! Vel aspernatur dicta consequatur!
</div>
@endsection

@push('scripts')

<!-- Need: Apexcharts -->
<script src="{{ asset('/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('/assets/js/pages/dashboard.js') }}"></script>
@endpush