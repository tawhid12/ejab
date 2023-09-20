
@extends('layout.app')

@section('pageTitle',trans('Create Brand'))
@section('pageSubTitle',trans('Create'))

@section('content')
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" enctype="multipart/form-data" action="{{route(currentUser().'.brand.store')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="Picture">Image</label>
                                            <input type="file" id="Picture" class="form-control"
                                                placeholder="Picture" name="Picture">
                                                <span class="text-danger">(Max With/Height: 254px * 143px)</span>
                                                @if($errors->has('Picture'))
                                                    <span class="text-danger"> {{ $errors->first('Picture') }}</span>
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
