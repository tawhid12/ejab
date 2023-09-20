@extends('layout.app')
@section('pageTitle',trans('Company Profile'))
@section('pageSubTitle',trans('List'))

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

                                <th scope="col">{{__('Email')}}</th>
                                <th scope="col">{{__('Contact')}}</th>
                                <th scope="col">{{__('Logo')}}</th>
                                <th class="white-space-nowrap" width="100px">{{__('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            <tr>

                                <td>{{$setting->email}}</td>
                                <td>{{$setting->contact}}</td>
                                <td><img width="100px" src="{{asset('uploads/setting/thumb/'.$setting->company_logo)}}" alt=""></td>
                                <td class="white-space-nowrap">
                                    <a href="{{route(currentUser().'.setting.show',encryptor('encrypt',$setting->id))}}">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="{{route(currentUser().'.setting.edit',encryptor('encrypt',$setting->id))}}">
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