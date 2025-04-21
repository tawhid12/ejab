
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
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="our_business_id">Our Business</label>
                                            <select id="our_business_id" class="form-control" name="our_business_id">
                                                @foreach($ourBusinesses as $ourBusiness)
                                                    <option value="{{ $ourBusiness->id }}">{{ $ourBusiness->heading_text }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" id="title" class="form-control" placeholder="Title" name="title">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="Picture">Image</label>
                                            <input type="file" id="Picture" class="form-control" placeholder="Picture" name="Picture">
                                            <span class="text-danger">(Max With/Height: 254px * 143px)</span>
                                            @if($errors->has('Picture'))
                                                <span class="text-danger"> {{ $errors->first('Picture') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea id="description" class="form-control" placeholder="Description" name="description"></textarea>
                                        </div>
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
