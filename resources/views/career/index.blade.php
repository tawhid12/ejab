@extends('layout.app')
@section('pageTitle',trans('Career'))
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
                                <th scope="col">{{__('Group Name')}}</th>
                                <th scope="col">{{__('File')}}</th>
                                <th class="white-space-nowrap">{{__('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($career as $c)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <th scope="row">{{ $c->bus_id }}</th>
                                <td><a width="100px" href="{{asset('uploads/career/'.$c->upload_file)}}" >File</a></td>
                                <td class="white-space-nowrap">
                                  
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
                        {!! $career->links()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
