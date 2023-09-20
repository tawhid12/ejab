@extends('layout.app')
@section('pageTitle',trans('Report'))
@section('pageSubTitle',trans('List'))

@section('content')
<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">

            <div class="card">
                <div>

                </div>
                @if(Session::has('response'))
                {!!Session::get('response')['message']!!}
                @endif
                <!-- table bordered -->
                <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                        <a class="float-end" href="{{route(currentUser().'.report.create')}}" style="font-size:1.7rem"><i class="bi bi-plus-square-fill"></i></a>
                        <thead>
                            <tr>
                                <th scope="col">{{__('#SL')}}</th>
                                <!-- <th scope="col">{{__('Title')}}</th> -->
                                <th scope="col">{{__('Publish Date')}}</th>
                                <th scope="col">{{__('UnPublish Date')}}</th>
                                <th scope="col">{{__('File')}}</th>
                                <th class="white-space-nowrap">{{__('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($reports as $r)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <!-- <th scope="row">{{ $r->title }}</th> -->
                                <td>{{$r->published_date}}</td>
                                <td>{{$r->unpublished_date}}</td>
                                <td><a width="100px" href="{{asset('uploads/report/'.$r->upload_file)}}">File</a></td>

                                <td class="white-space-nowrap">
                                    <a href="javascript:void()" onclick="$('#form{{$r->id}}').submit()">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <form id="form{{$r->id}}" action="{{route(currentUser().'.report.destroy',encryptor('encrypt',$r->id))}}" method="post">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>

                            </tr>
                            @empty
                            <tr>
                                <th colspan="8" class="text-center">No Data Found</th>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="my-3">
                        {!! $reports->links()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection