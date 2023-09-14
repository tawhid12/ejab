  @extends('layout.app')

  @section('pageTitle','Create Notice')
@section('pageSubTitle','Notice')

  @section('content')
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" enctype="multipart/form-data" action="{{route(currentUser().'.notice.store')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="notice_subject">Notice Subject</label>
                                            <input type="text" id="notice_subject" class="form-control" placeholder="Notice Subject" name="notice_subject">
                                        </div>
                                        @if($errors->has('notice_subject'))
                                        <span class="text-danger"> {{ $errors->first('notice_subject') }}</span>
                                        @endif
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="name">Notice Details</label>
                                            <textarea rows="5" id="notice_details" name="notice_details" class="form-control" placeholder="Notice Details"></textarea>
                                        </div>
                                    </div>
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
    <!-- // Basic multiple Column Form section end -->
</div>
@endsection