@extends('layout.app')
@section('pageTitle',trans('Dashboard'))

@section('content')
<div class="card-header">
    <h4 class="card-title">Welcome!</h4>
</div>
<div class="card-body">
    
</div>
@endsection

@push('scripts')

<!-- Need: Apexcharts -->
<script src="{{ asset('/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('/assets/js/pages/dashboard.js') }}"></script>
@endpush