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
                        <form class="form" method="post" enctype="multipart/form-data" action="{{route(currentUser().'.setting.update',encryptor('encrypt',$setting->id))}}">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="uptoken" value="{{encryptor('encrypt',$setting->id)}}">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" id="image" class="form-control" name="image">
                                        <span class="text-danger">(Max Width/Height: 80px * 88px)</span>
                                        <img width="50px" src="{{asset('uploads/setting/thumb/'.$setting->image)}}" alt="">
                                        @if($errors->has('image'))
                                        <span class="text-danger"> {{ $errors->first('image') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="image">Payment Image</label>
                                        <input type="file" id="payment_logo" class="form-control" name="payment_logo">
                                        <span class="text-danger">(Max With/Height: 555px * 89px)</span>
                                        <img width="50px" src="{{asset('uploads/payment_logo/thumb/'.$setting->payment_logo)}}" alt="">
                                        @if($errors->has('payment_logo'))
                                        <span class="text-danger"> {{ $errors->first('payment_logo') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="memeber_logo_1">Member Logo One</label>
                                        <input type="file" id="memeber_logo_1" class="form-control" name="memeber_logo_1">
                                        <span class="text-danger">(Max With/Height: 106px * 51px)</span>
                                        <img width="50px" src="{{asset('uploads/memeber_logo_1/thumb/'.$setting->memeber_logo_1)}}" alt="">
                                        @if($errors->has('memeber_logo_1'))
                                        <span class="text-danger"> {{ $errors->first('memeber_logo_1') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="memeber_logo_2">Member Logo Two</label>
                                        <input type="file" id="memeber_logo_2" class="form-control" name="memeber_logo_2">
                                        <span class="text-danger">(Max With/Height: 106px * 51px)</span>
                                        <img width="50px" src="{{asset('uploads/memeber_logo_2/thumb/'.$setting->memeber_logo_2)}}" alt="">
                                        @if($errors->has('memeber_logo_2'))
                                        <span class="text-danger"> {{ $errors->first('memeber_logo_2') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" id="email" class="form-control" value="{{ old('email',$setting->email)}}" name="email">
                                        @if($errors->has('email'))
                                        <span class="text-danger"> {{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="designation">Contact</label>
                                        <input type="text" id="contact" class="form-control" value="{{ old('contact',$setting->contact)}}" name="contact">
                                        @if($errors->has('contact'))
                                        <span class="text-danger"> {{ $errors->first('contact') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <!-- <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="facebook_profile">Facebook Profile</label>
                                        <input type="text" id="facebook_profile" class="form-control" value="" name="facebook_profile">
                                        @if($errors->has('facebook_profile'))
                                        <span class="text-danger"> {{ $errors->first('facebook_profile') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-group">
                                        <label for="details">Description</label>
                                        <textarea id="details" class="form-control" name="details" rows="5"></textarea>
                                        @if($errors->has('details'))
                                        <span class="text-danger"> {{ $errors->first('details') }}</span>
                                        @endif
                                    </div>
                                </div> -->
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