@extends('layout.app')

@section('pageTitle',trans('Upload Report'))
@section('pageSubTitle',trans('Create'))

@section('content')
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="post" enctype="multipart/form-data" action="{{route(currentUser().'.report.store')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="Picture">Upload File</label>
                                        <input type="file" id="upload_file" class="form-control" name="upload_file">
                                        @if($errors->has('upload_file'))
                                        <span class="text-danger"> {{ $errors->first('upload_file') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-6">
                                    <label for="public date"><b>{{__('Published date')}}<span class="text-danger">*</span></b></label>
                                    <input type="date" value="{{ old('published_date')}}" class="form-control" name="published_date" required>
                                </div>
                                <div class="col-6">
                                    <label for="unpublic date"><b>{{__('Unpublished date')}}<span class="text-danger">*</span></b></label>
                                    <input type="date" value="{{ old('unpublished_date')}}" class="form-control" name="unpublished_date" required>


                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary my-2">Save</button>

                                        </div>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection