@extends('layout.app')
@section('pageTitle',trans('Our Business'))
@section('pageSubTitle',trans('List'))

@section('content')
<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">

            <div class="card">
                <div>
                <a class="float-end" href="{{route(currentUser().'.business.create')}}"style="font-size:1.7rem"><i class="bi bi-plus-square-fill"></i></a>
                </div>
                @if(Session::has('response'))
                    {!!Session::get('response')['message']!!}
                @endif
                <!-- table bordered -->
                <div class="table-responsive">
                    <table class="table table-bordered mb-0">

                        <thead>
                            <tr>
                                <th scope="col">{{__('#SL')}}</th>
                                <th scope="col">{{__('Image')}}</th>
                                <th scope="col">{{__('Heading Text')}}</th>
                                <th scope="col">{{__('Description')}}</th>
                                {{--<th scope="col">{{__('Link')}}</th>--}}
                                <th class="white-space-nowrap">{{__('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($business as $b)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td><img width="100px" src="{{asset('uploads/business/thumb/'.$b->image)}}" alt=""></td>
                                <td>{{$b->heading_text}}</td>
                                <td>{{$b->description}}</td>
                                <td class="white-space-nowrap">
                                    <a href="{{route(currentUser().'.business.edit',encryptor('encrypt',$b->id))}}">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="javascript:void()" onclick="$('#form{{$b->id}}').submit()">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <form id="form{{$b->id}}" action="{{route(currentUser().'.business.destroy',encryptor('encrypt',$b->id))}}" method="post">
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
                        {!! $business->links()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
