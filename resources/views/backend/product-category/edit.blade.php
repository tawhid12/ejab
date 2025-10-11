
@extends('layout.app')

@section('pageTitle',trans('Edit Product Category'))
@section('pageSubTitle',trans('Edit'))

@section('content')
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" enctype="multipart/form-data" action="{{route(currentUser().'.product-category.update',encryptor('encrypt',$category->id))}}">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="uptoken" value="{{encryptor('encrypt',$category->id)}}">
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="parent_id">Parent</label>
                                            <select name="parent_id" id="parent_id" class="form-control">
                                                <option value="">Select Parent</option>
                                                @foreach($categories as $cat)
                                                    <option value="{{$cat->id}}" {{ $cat->id == $category->parent_id ? 'selected' : '' }}>{{$cat->name}}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('parent_id'))
                                                <span class="text-danger"> {{ $errors->first('parent_id') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" class="form-control" placeholder="Name" name="name" value="{{$category->name}}">
                                            @if($errors->has('name'))
                                                <span class="text-danger"> {{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="slug">Slug</label>
                                            <input type="text" id="slug" class="form-control" placeholder="Slug" name="slug" value="{{$category->slug}}">
                                            @if($errors->has('slug'))
                                                <span class="text-danger"> {{ $errors->first('slug') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                            <label for="image">Image</label>
                                            <input type="file" id="image" class="form-control" placeholder="Image" name="image">
                                            <span class="text-danger">(Max With/Height: 1520px * 520px)</span>
                                            @if($errors->has('image'))
                                                <span class="text-danger"> {{ $errors->first('image') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea id="description" class="form-control" placeholder="Description" name="description">{{$category->description}}</textarea>
                                            @if($errors->has('description'))
                                                <span class="text-danger"> {{ $errors->first('description') }}</span>
                                            @endif
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
