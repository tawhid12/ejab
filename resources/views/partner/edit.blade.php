@extends('layout.app')

@section('pageTitle',trans('Edit Partner'))
@section('pageSubTitle',trans('Create'))

@section('content')
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="post" enctype="multipart/form-data" action="{{route(currentUser().'.partner.update',encryptor('encrypt',$p->id))}}">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="uptoken" value="{{encryptor('encrypt',$p->id)}}">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="Picture">Image</label>
                                        <input type="file" id="Picture" class="form-control" placeholder="Picture" name="Picture">
                                        <img width="50px" src="{{asset('uploads/partners/thumb/'.$p->image)}}" alt="">
                                        @if($errors->has('Picture'))
                                        <span class="text-danger"> {{ $errors->first('Picture') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="short_text">Short Text</label>
                                        <input type="text" id="short_text" class="form-control" value="{{ old('short_text',$p->short_text)}}" name="short_text">
                                        @if($errors->has('short_text'))
                                        <span class="text-danger"> {{ $errors->first('short_text') }}</span>
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