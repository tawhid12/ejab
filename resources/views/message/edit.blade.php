@extends('layout.app')

@section('pageTitle',trans('Edit Message'))
@section('pageSubTitle',trans('Edit'))

@section('content')
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="post" enctype="multipart/form-data" action="{{route(currentUser().'.message.update',encryptor('encrypt',$m->id))}}">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="uptoken" value="{{encryptor('encrypt',$m->id)}}">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">Overview Image</label>
                                        <input type="file" id="image" class="form-control" name="overview_image">
                                        <span class="text-danger">(Max Width/Height: 555px * 374px)</span>
                                        <img width="50px" src="{{asset('uploads/overview_image/thumb/'.$m->overview_image)}}" alt="">
                                        @if($errors->has('overview_image'))
                                        <span class="text-danger"> {{ $errors->first('overview_image') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="overview">Overview HeadLine</label>
                                        <input type="text" class="form-control" id="overview_headline" name="overview_headline" value="{{ old('overview_headline',$m->overview_headline)}}">

                                        @if($errors->has('overview_headline'))
                                        <span class="text-danger"> {{ $errors->first('overview_headline') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="overview">Overview</label>
                                        <textarea rows="5" class="form-control" id="overview" name="overview">{{ old('overview',$m->overview)}}</textarea>

                                        @if($errors->has('overview'))
                                        <span class="text-danger"> {{ $errors->first('overview') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">Founder Image</label>
                                        <input type="file" id="image" class="form-control" name="founder_image">
                                        <span class="text-danger">(Max Width/Height: 555px * 374px)</span>
                                        <img width="50px" src="{{asset('uploads/founder_image/thumb/'.$m->founder_image)}}" alt="">
                                        @if($errors->has('founder_image'))
                                        <span class="text-danger"> {{ $errors->first('founder_image') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="overview">Founder HeadLine</label>
                                        <input type="text" class="form-control" id="founder_headline" name="founder_headline" value="{{ old('founder_headline',$m->founder_headline)}}">

                                        @if($errors->has('founder_msg'))
                                        <span class="text-danger"> {{ $errors->first('founder_msg') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="overview">Founder Message </label>
                                        <textarea rows="5" class="form-control" id="founder_msg" name="founder_msg">{{ old('founder_msg',$m->founder_msg)}}</textarea>

                                        @if($errors->has('founder_msg'))
                                        <span class="text-danger"> {{ $errors->first('founder_msg') }}</span>
                                        @endif
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">Chairman Image</label>
                                        <input type="file" id="image" class="form-control" name="chairman_image">
                                        <span class="text-danger">(Max Width/Height: 555px * 374px)</span>
                                        <img width="50px" src="{{asset('uploads/chairman_image/thumb/'.$m->chairman_image)}}" alt="">
                                        @if($errors->has('chairman_image'))
                                        <span class="text-danger"> {{ $errors->first('chairman_image') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="overview">Chairman HeadLine</label>
                                        <input type="text" class="form-control" id="chariman_headline" name="chairman_headline" value="{{ old('chairman_headline',$m->chairman_headline)}}">

                                        @if($errors->has('chariman_headline'))
                                        <span class="text-danger"> {{ $errors->first('chariman_headline') }}</span>
                                        @endif
                                    </div>
                                </div>                               

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="overview">Chairmen Message </label>
                                        <textarea rows="5" class="form-control" id="chariman_msg" name="chariman_msg">{{ old('chariman_msg',$m->chariman_msg)}}</textarea>

                                        @if($errors->has('chariman_msg'))
                                        <span class="text-danger"> {{ $errors->first('chariman_msg') }}</span>
                                        @endif
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">Maniging Director Image</label>
                                        <input type="file" id="image" class="form-control" name="md_image">
                                        <span class="text-danger">(Max Width/Height: 555px * 374px)</span>
                                        <img width="50px" src="{{asset('uploads/md_image/thumb/'.$m->md_image)}}" alt="">
                                        @if($errors->has('md_image'))
                                        <span class="text-danger"> {{ $errors->first('md_image') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="overview">Maniging Direcgtor HeadLine</label>
                                        <input type="text" class="form-control" id="md_headline" name="md_headline" value="{{ old('md_headline',$m->md_headline)}}">

                                        @if($errors->has('md_headline'))
                                        <span class="text-danger"> {{ $errors->first('md_headline') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="overview">Maniging Director Message </label>
                                        <textarea rows="5" class="form-control" id="md_msg" name="md_msg">{{ old('md_msg',$m->md_msg)}}</textarea>

                                        @if($errors->has('md_msg'))
                                        <span class="text-danger"> {{ $errors->first('md_msg') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">Mission And Vission Image</label>
                                        <input type="file" id="image" class="form-control" name="mission_vission_image">
                                        <span class="text-danger">(Max Width/Height: 555px * 374px)</span>
                                        <img width="50px" src="{{asset('uploads/mission_vission_image/thumb/'.$m->mission_vission_image)}}" alt="">
                                        @if($errors->has('mission_vission_image'))
                                        <span class="text-danger"> {{ $errors->first('mission_vission_image') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="overview">Mission and Vision HeadLine</label>
                                        <input type="text" class="form-control" id="mission_vission_headline" name="mission_vission_headline" value="{{ old('mission_vission_headline',$m->mission_vission_headline)}}">

                                        @if($errors->has('mission_vission_headline'))
                                        <span class="text-danger"> {{ $errors->first('mission_vission_headline') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="overview">Mission and Vision</label>
                                        <textarea rows="5" class="form-control" id="mission_vission" name="mission_vission">{{ old('mission_vission',$m->mission_vission)}}</textarea>

                                        @if($errors->has('mission_vission'))
                                        <span class="text-danger"> {{ $errors->first('mission_vission') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">Key Management Image</label>
                                        <input type="file" id="image" class="form-control" name="key_management_image">
                                        <span class="text-danger">(Max Width/Height: 555px * 374px)</span>
                                        <img width="50px" src="{{asset('uploads/key_management_image/thumb/'.$m->key_management_image)}}" alt="">
                                        @if($errors->has('key_management_image'))
                                        <span class="text-danger"> {{ $errors->first('key_management_image') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="overview">Key Management HeadLine</label>
                                        <input type="text" class="form-control" id="key_management_headline" name="key_management_headline" value="{{ old('key_management_headline',$m->key_management_headline)}}">

                                        @if($errors->has('key_management_headline'))
                                        <span class="text-danger"> {{ $errors->first('key_management_headline') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="overview">Key Management Text</label>
                                        <textarea rows="5" class="form-control" id="key_management" name="key_management">{{ old('key_management',$m->key_management)}}</textarea>

                                        @if($errors->has('key_management'))
                                        <span class="text-danger"> {{ $errors->first('key_management') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">CSR Image</label>
                                        <input type="file" id="image" class="form-control" name="csr_image">
                                        <span class="text-danger">(Max Width/Height: 555px * 374px)</span>
                                        <img width="50px" src="{{asset('uploads/csr_image/thumb/'.$m->csr_image)}}" alt="">
                                        @if($errors->has('csr_image'))
                                        <span class="text-danger"> {{ $errors->first('csr_image') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="overview">CSR HeadLine</label>
                                        <input type="text" class="form-control" id="csr_headline" name="csr_headline" value="{{ old('csr_headline',$m->csr_headline)}}">

                                        @if($errors->has('csr_headline'))
                                        <span class="text-danger"> {{ $errors->first('csr_headline') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="overview">CSR Text</label>
                                        <textarea rows="5" class="form-control" id="csr" name="csr">{{ old('csr',$m->csr)}}</textarea>

                                        @if($errors->has('csr'))
                                        <span class="text-danger"> {{ $errors->first('csr') }}</span>
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