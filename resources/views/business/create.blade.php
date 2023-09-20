@extends('layout.app')

@section('pageTitle',trans('Our Business'))
@section('pageSubTitle',trans('Create'))

@section('content')
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="post" enctype="multipart/form-data" action="{{route(currentUser().'.business.store')}}">
                            @csrf
                            <div class="row">
                                <h4 class="my-2">Business Info (Front Page)</h4>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="Picture">Image</label>
                                        <input type="file" id="Picture" class="form-control" placeholder="Picture" name="Picture">
                                        <span class="text-danger">(Max With/Height: 150px * 101px)</span>
                                        @if($errors->has('Picture'))
                                        <span class="text-danger"> {{ $errors->first('Picture') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="heading_text">Heading Text</label>
                                        <input type="text" id="heading_text" class="form-control" value="{{ old('heading_text')}}" name="heading_text" required>
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
                                <div class="border-bottom my-3"></div>
                                <h4 class="my-2">Business Info (Single Page)</h4>
                                <div class="row">
                                    <!-- <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="page_title">Page Title</label>
                                            <input type="text" id="page_title" class="form-control" value="{{ old('page_title')}}" name="page_title">
                                            @if($errors->has('page_title'))
                                            <span class="text-danger"> {{ $errors->first('page_title') }}</span>
                                            @endif
                                        </div>
                                    </div> -->
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="page_image">Image</label>
                                            <input type="file" id="page_image" class="form-control" name="page_image">
                                            <span class="text-danger">(Max With/Height: 1349px * 1349px)</span>
                                            @if($errors->has('page_image'))
                                            <span class="text-danger"> {{ $errors->first('page_image') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom my-3"></div>
                                <h4 class="my-2">Section One</h4>
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="sec_1_headline">Section Headline</label>
                                            <input type="text" id="sec_1_headline" class="form-control" value="{{ old('sec_1_headline')}}" name="sec_1_headline">
                                            @if($errors->has('sec_1_headline'))
                                            <span class="text-danger"> {{ $errors->first('sec_1_headline') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="sec_1_link">Section Link</label>
                                            <input type="text" id="sec_1_link" class="form-control" value="{{ old('sec_1_link')}}" name="sec_1_link">
                                            @if($errors->has('sec_1_link'))
                                            <span class="text-danger"> {{ $errors->first('sec_1_link') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="sec_1_image">Image</label>
                                            <input type="file" id="sec_1_image" class="form-control" name="sec_1_image">
                                            <span class="text-danger">(Max With/Height: 555px * 555px)</span>
                                            @if($errors->has('sec_1_image'))
                                            <span class="text-danger"> {{ $errors->first('sec_1_image') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="sec_1_desc">Section Description</label>
                                            <textarea id="sec_1_desc" class="form-control" name="sec_1_desc" rows="5">{{ old('sec_1_desc')}}</textarea>
                                            @if($errors->has('sec_1_desc'))
                                            <span class="text-danger"> {{ $errors->first('sec_1_desc') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <h4 class="my-2">Section Two</h4>
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="sec_2_headline">Section Headline</label>
                                            <input type="text" id="sec_2_headline" class="form-control" value="{{ old('sec_2_headline')}}" name="sec_2_headline">
                                            @if($errors->has('sec_2_headline'))
                                            <span class="text-danger"> {{ $errors->first('sec_2_headline') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="sec_2_box_text">Section Box Text</label>
                                            <input type="text" id="sec_2_box_text" class="form-control" value="{{ old('sec_2_box_text')}}" name="sec_2_box_text">
                                            @if($errors->has('sec_2_box_text'))
                                            <span class="text-danger"> {{ $errors->first('sec_2_box_text') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="sec_1_link">Section Link</label>
                                            <input type="text" id="sec_1_link" class="form-control" value="{{ old('sec_1_link')}}" name="sec_1_link">
                                            @if($errors->has('sec_1_link'))
                                            <span class="text-danger"> {{ $errors->first('sec_1_link') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="sec_2_image">Image</label>
                                            <input type="sec_2_image" id="sec_2_image" class="form-control" placeholder="" name="sec_2_image">
                                            <span class="text-danger">(Max With/Height: 555px * 277px)</span>
                                            @if($errors->has('sec_2_image'))
                                            <span class="text-danger"> {{ $errors->first('sec_2_image') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="sec_1_desc">Section Description</label>
                                            <textarea id="sec_1_desc" class="form-control" name="sec_1_desc" rows="5">{{ old('sec_1_desc')}}</textarea>
                                            @if($errors->has('sec_1_desc'))
                                            <span class="text-danger"> {{ $errors->first('sec_1_desc') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <h4 class="my-2">Section Three</h4>
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="sec_3_headline">Section Headline</label>
                                            <input type="text" id="sec_3_headline" class="form-control" value="{{ old('sec_3_headline')}}" name="sec_3_headline">
                                            @if($errors->has('sec_3_headline'))
                                            <span class="text-danger"> {{ $errors->first('sec_3_headline') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="sec_3_box_text">Section Box Text</label>
                                            <input type="text" id="sec_3_box_text" class="form-control" value="{{ old('sec_3_box_text')}}" name="sec_3_box_text">
                                            @if($errors->has('sec_3_box_text'))
                                            <span class="text-danger"> {{ $errors->first('sec_3_box_text') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="sec_3_image">Image</label>
                                            <input type="sec_3_image" id="sec_3_image" class="form-control" placeholder="" name="sec_3_image">
                                            <span class="text-danger">(Max With/Height: 555px * 277px)</span>
                                            @if($errors->has('sec_3_image'))
                                            <span class="text-danger"> {{ $errors->first('sec_3_image') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="sec_3_box_1_headline">Box Headline</label>
                                            <input type="text" id="sec_3_box_1_headline" class="form-control" value="{{ old('sec_3_box_1_headline')}}" name="sec_3_box_1_headline">
                                            @if($errors->has('sec_3_box_1_headline'))
                                            <span class="text-danger"> {{ $errors->first('sec_3_box_1_headline') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="sec_3_box_1_detl">Box Description</label>
                                            <textarea id="sec_3_box_1_detl" class="form-control" name="sec_3_box_1_detl" rows="3">{{ old('sec_3_box_1_detl')}}</textarea>
                                            @if($errors->has('sec_3_box_1_detl'))
                                            <span class="text-danger"> {{ $errors->first('sec_3_box_1_detl') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="sec_3_box_2_headline">Box Headline</label>
                                            <input type="text" id="sec_3_box_2_headline" class="form-control" value="{{ old('sec_3_box_2_headline')}}" name="sec_3_box_2_headline">
                                            @if($errors->has('sec_3_box_2_headline'))
                                            <span class="text-danger"> {{ $errors->first('sec_3_box_2_headline') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="sec_3_box_1_detl">Box Description</label>
                                            <textarea id="sec_3_box_2_detl" class="form-control" name="sec_3_box_2_detl" rows="3">{{ old('sec_3_box_2_detl')}}</textarea>
                                            @if($errors->has('sec_3_box_2_detl'))
                                            <span class="text-danger"> {{ $errors->first('sec_3_box_2_detl') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="sec_3_box_3_headline">Box Headline</label>
                                            <input type="text" id="sec_3_box_3_headline" class="form-control" value="{{ old('sec_3_box_3_headline')}}" name="sec_3_box_1_headline">
                                            @if($errors->has('sec_3_box_3_headline'))
                                            <span class="text-danger"> {{ $errors->first('sec_3_box_3_headline') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="sec_3_box_3_detl">Box Description</label>
                                            <textarea id="sec_3_box_3_detl" class="form-control" name="sec_3_box_3_detl" rows="3">{{ old('sec_3_box_3_detl')}}</textarea>
                                            @if($errors->has('sec_3_box_3_detl'))
                                            <span class="text-danger"> {{ $errors->first('sec_3_box_3_detl') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="sec_3_box_4_headline">Box Headline</label>
                                            <input type="text" id="sec_3_box_4_headline" class="form-control" value="{{ old('sec_3_box_4_headline')}}" name="sec_3_box_4_headline">
                                            @if($errors->has('sec_3_box_4_headline'))
                                            <span class="text-danger"> {{ $errors->first('sec_3_box_4_headline') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="sec_3_box_4_detl">Box Description</label>
                                            <textarea id="sec_3_box_4_detl" class="form-control" name="sec_3_box_4_detl" rows="3">{{ old('sec_3_box_4_detl')}}</textarea>
                                            @if($errors->has('sec_3_box_4_detl'))
                                            <span class="text-danger"> {{ $errors->first('sec_3_box_4_detl') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <h4 class="my-2">Section Four</h4>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="sec_4_image">Image</label>
                                            <input type="sec_4_image" id="sec_4_image" class="form-control" placeholder="" name="sec_4_image">
                                            <span class="text-danger">(Max With/Height: 555px * 277px)</span>
                                            @if($errors->has('sec_4_image'))
                                            <span class="text-danger"> {{ $errors->first('sec_4_image') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="sec_4_headline">Section Headline</label>
                                            <input type="text" id="sec_4_headline" class="form-control" value="{{ old('sec_4_headline')}}" name="sec_4_headline">
                                            @if($errors->has('sec_4_headline'))
                                            <span class="text-danger"> {{ $errors->first('sec_4_headline') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="sec_4_link1">Social Link</label>
                                            <input type="text" id="sec_4_link1" class="form-control" value="{{ old('sec_4_link1')}}" name="sec_4_link1">
                                            @if($errors->has('sec_4_link1'))
                                            <span class="text-danger"> {{ $errors->first('sec_4_link1') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="sec_4_link2">Social Link</label>
                                            <input type="text" id="sec_4_link2" class="form-control" value="{{ old('sec_4_link2')}}" name="sec_4_link2">
                                            @if($errors->has('sec_4_link2'))
                                            <span class="text-danger"> {{ $errors->first('sec_4_link2') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="sec_4_link3">Social Link</label>
                                            <input type="text" id="sec_4_link3" class="form-control" value="{{ old('sec_4_link3')}}" name="sec_4_link3">
                                            @if($errors->has('sec_4_link3'))
                                            <span class="text-danger"> {{ $errors->first('sec_4_link3') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="sec_4_link3">Photo Gallery</label>
                                            <select class="form-control" name="gallery_id">
                                                <option value="">Select</option>
                                                @forelse($photo_gal_cat as $p)
                                                <option value="{{$p->id}}">{{$p->name}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                            @if($errors->has('gallery_id'))
                                            <span class="text-danger"> {{ $errors->first('gallery_id') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <h4 class="my-2">Google Map Preview</h4>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="map">Map Code</label>
                                            <textarea id="map" class="form-control" name="map" rows="5">{{ old('map')}}</textarea>
                                            @if($errors->has('map'))
                                            <span class="text-danger"> {{ $errors->first('map') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <h4 class="my-2">Contact Information</h4>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="map">Email</label>
                                            <input type="text" id="footer_email" class="form-control" value="{{ old('footer_email')}}" name="footer_email">
                                            @if($errors->has('footer_email'))
                                            <span class="text-danger"> {{ $errors->first('footer_email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="map">Mobile</label>
                                            <input type="text" id="footer_contact" class="form-control" value="{{ old('footer_contact')}}" name="footer_contact">
                                            @if($errors->has('footer_contact'))
                                            <span class="text-danger"> {{ $errors->first('footer_contact') }}</span>
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