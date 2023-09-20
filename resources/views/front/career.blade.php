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
<div class="career_area">
    <div class="ejab-overlay home">
        <!-- header section strats -->
        @include('front.includes.nav')
        <div class="container">
            <p class="joint-text">Joint Our Team</p>
        </div>
    </div>
</div>

<div class="body_bg layout_padding animated">
    <div class="service_section">
        <div class="container">
            <h4 class="card-title font-weight-bold text-center">
                Submit Your CV
            </h4>
            <div class="d-flex justify-content-center m-4">
                <div class="border w-25 border-danger"></div>
            </div>
        </div>
        <div class="container">
            <form class="form" method="post" enctype="multipart/form-data" action="{{route('car.store')}}">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <select name="bus_id" class="form-control form-control-sm" required>
                            <option>Select Your Group</option>
                            @forelse($data as $b)
                            <option value="{{$b->id}}">{{$b->heading_text}}</option>
                            @empty
                            @endforelse
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile02" name="upload_file" required/>
                                <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Upload Your CV</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6 d-flex justify-content-end mt-3">
                        <div class="btn-box">
                            <button type="submit" class="read-more"> Submit </button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>

</script>

@endpush