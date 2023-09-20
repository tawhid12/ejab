@extends('layout.app')

@section('pageTitle',trans('Edit Member'))
@section('pageSubTitle',trans('Edit'))

@section('content')
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="post" enctype="multipart/form-data" action="{{route(currentUser().'.ourMember.update',encryptor('encrypt',$b->id))}}">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="uptoken" value="{{encryptor('encrypt',$b->id)}}">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" id="image" class="form-control" name="image">
                                        <span class="text-danger">(Max With/Height: 409px * 333px)</span>
                                        <img width="50px" src="{{asset('uploads/ourmember/thumb/'.$b->image)}}" alt="">
                                        @if($errors->has('image'))
                                        <span class="text-danger"> {{ $errors->first('image') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="given_name">Given Name</label>
                                        <input type="text" id="given_name" class="form-control" value="{{ old('given_name',$b->given_name)}}" name="given_name">
                                        @if($errors->has('given_name'))
                                        <span class="text-danger"> {{ $errors->first('given_name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="designation">Designation</label>
                                        <input type="text" id="designation" class="form-control" value="{{ old('designation',$b->designation)}}" name="designation">
                                        @if($errors->has('designation'))
                                        <span class="text-danger"> {{ $errors->first('designation') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="linked_in_profile">Linkedin Profile</label>
                                        <input type="text" id="linked_in_profile" class="form-control" value="{{ old('linked_in_profile',$b->linked_in_profile)}}" name="linked_in_profile">
                                        @if($errors->has('linked_in_profile'))
                                        <span class="text-danger"> {{ $errors->first('linked_in_profile') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="facebook_profile">Facebook Profile</label>
                                        <input type="text" id="facebook_profile" class="form-control" value="{{ old('facebook_profile',$b->facebook_profile)}}" name="facebook_profile">
                                        @if($errors->has('facebook_profile'))
                                        <span class="text-danger"> {{ $errors->first('facebook_profile') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="details">Description</label>
                                        <textarea id="details" class="form-control" name="details" rows="5">{{ old('details',$b->details)}}</textarea>
                                        @if($errors->has('details'))
                                        <span class="text-danger"> {{ $errors->first('details') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary my-2">Update</button>
                                    </div>
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