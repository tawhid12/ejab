@extends('layout.app')
@section('pageTitle',trans('Message'))
@section('pageSubTitle',trans(''))

@section('content')
<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">

            <div class="card">
                @if(Session::has('response'))
                {!!Session::get('response')['message']!!}
                @endif
                <!-- table bordered -->
                <div class="table-responsive">
                    <table class="table table-bordered mb-0">

                        <thead>
                            <tr>

                                <th scope="col">{{__('Overview')}}</th>
                                <th scope="col">{{__('Founder Message')}}</th>
                                <th scope="col">{{__('Chairman Message')}}</th>
                                <th scope="col">{{__('Maniging Director Message')}}</th>
                                <th scope="col">{{__('Mission and Vision')}}</th>
                                <th class="white-space-nowrap" width="100px">{{__('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            <tr>

                                <td>{{$m->overview}}</td>
                                <td>{{$m->founder_msg}}</td>
                                <td>{{$m->chariman_msg}}</td>
                                <td>{{$m->md_msg}}</td>
                                <td>{{$m->mission_vission}}</td>
                                <td class="white-space-nowrap">
                                    <a href="{{route(currentUser().'.message.show',encryptor('encrypt',$m->id))}}">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{route(currentUser().'.message.edit',encryptor('encrypt',$m->id))}}">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>

                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection