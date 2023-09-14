@extends('layout.app')

@section('pageTitle',trans('Our Blog'))
@section('pageSubTitle',trans('Create'))

@section('content')
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="post" enctype="multipart/form-data" action="{{route(currentUser().'.blog.store')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="Picture">Image</label>
                                        <input type="file" id="Picture" class="form-control" placeholder="Picture" name="Picture">
                                        <span class="text-danger">(Max With/Height: 358px * 239px)</span>
                                        @if($errors->has('Picture'))
                                        <span class="text-danger"> {{ $errors->first('Picture') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="heading_text">Heaing Text</label>
                                        <input type="text" id="heading_text" class="form-control" value="{{ old('heading_text')}}" name="heading_text">
                                        @if($errors->has('heading_text'))
                                        <span class="text-danger"> {{ $errors->first('heading_text') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea id="description" class="form-control" name="description" rows="5">{{ old('description')}}</textarea>
                                        @if($errors->has('description'))
                                        <span class="text-danger"> {{ $errors->first('description') }}</span>
                                        @endif
                                    </div>
                                </div>
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