@extends('layout.app')
@section('pageTitle',trans('Contact'))
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
                        
                        <thead>
                            <tr>
                                <th scope="col">{{__('#SL')}}</th>
                                <th scope="col">{{__('Name')}}</th>
                                <th scope="col">{{__('Email')}}</th>
                                <th scope="col">{{__('Message')}}</th>
                                <th class="white-space-nowrap">{{__('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($contacts as $c)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <th scope="row">{{ $c->name }}</th>
                                <td>{{$c->email}}</td>
                                <td>{{$c->message}}</td>

                                <td class="white-space-nowrap">
                                    <a href="javascript:void()" onclick="$('#form{{$c->id}}').submit()">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <form id="form{{$c->id}}" action="{{route(currentUser().'.contact.destroy',encryptor('encrypt',$c->id))}}" method="post">
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
                        {!! $contacts->links()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection