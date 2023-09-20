@extends('layout.app')
@section('pageTitle',trans('Our Member'))
@section('pageSubTitle',trans('List'))

@section('content')
<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">

            <div class="card">
                <div>
                    <a class="float-end" href="{{route(currentUser().'.ourMember.create')}}" style="font-size:1.7rem"><i class="bi bi-plus-square-fill"></i></a>
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
                                <th scope="col">{{__('Given Name')}}</th>
                                <th scope="col">{{__('Description')}}</th>
                                <th scope="col">{{__('Image')}}</th>
                                <th class="white-space-nowrap" width="100px">{{__('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($ourmember as $m)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{$m->given_name}}</td>
                                <!-- <td>{{$m->linked_in_profile}}</td>
                                <td>{{$m->facebook_profile}}</td> -->
                                <td>{{$m->details}}</td>
                                <td><img width="100px" src="{{asset('uploads/ourmember/thumb/'.$m->image)}}" alt=""></td>
                                <td class="white-space-nowrap">
                                    <a href="{{route(currentUser().'.ourMember.show',encryptor('encrypt',$m->id))}}">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{route(currentUser().'.ourMember.edit',encryptor('encrypt',$m->id))}}">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="javascript:void()" onclick="$('#form{{$m->id}}').submit()">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <form id="form{{$m->id}}" action="{{route(currentUser().'.ourMember.destroy',encryptor('encrypt',$m->id))}}" method="post">
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
                        {!! $ourmember->links()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection