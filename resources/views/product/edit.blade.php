
@extends('layout.app')

@section('pageTitle',trans('Edit Product'))
@section('pageSubTitle',trans('Edit'))

@section('content')
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" enctype="multipart/form-data" action="{{route(currentUser().'.product.update',encryptor('encrypt',$product->id))}}">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="uptoken" value="{{encryptor('encrypt',$product->id)}}">
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="brand_id">Brand</label>
                                            <select id="brand_id" class="form-control" name="brand_id">
                                                @foreach($brands as $brand)
                                                    <option value="{{ $brand->id }}" {{ $product->brand_id == $brand->id ? 'selected' : '' }}>{{ $brand->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" class="form-control" placeholder="Name" name="name" value="{{ $product->name }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="barcode">Barcode</label>
                                            <input type="text" id="barcode" class="form-control" placeholder="Barcode" name="barcode" value="{{ $product->barcode }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="weight">Weight</label>
                                            <input type="text" id="weight" class="form-control" placeholder="Weight" name="weight" value="{{ $product->weight }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="width">Width</label>
                                            <input type="text" id="width" class="form-control" placeholder="Width" name="width" value="{{ $product->width }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="height">Height</label>
                                            <input type="text" id="height" class="form-control" placeholder="Height" name="height" value="{{ $product->height }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="length">Length</label>
                                            <input type="text" id="length" class="form-control" placeholder="Length" name="length" value="{{ $product->length }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <label for="image">Image</label>
                                        <input type="file" id="image" class="form-control" placeholder="Image" name="image">
                                        <span class="text-danger">(Max With/Height: 254px * 143px)</span>
                                        @if($errors->has('image'))
                                            <span class="text-danger"> {{ $errors->first('image') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea id="description" class="form-control" placeholder="Description" name="description">{{ $product->description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary my-2">Update</button>
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
