@extends('layout.app')

@section('pageTitle','Notice List')
@section('pageSubTitle','List')

@section('content')


    <!-- Bordered table start -->
    <section class="section">
        <div class="row" id="table-bordered">
            <div class="col-12">
                <div class="card">
                        <!-- <ul class="pagination justify-content-end">
                            <form action="{{route(currentUser().'.notice.index')}}" role="search" class="d-flex">
                                @csrf
                                <input type="text" placeholder="Search Notice.." name="search" class="form-control">
                                <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
                            </form>
                        </ul> -->
                        <!-- table bordered -->
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                            <a class="btn btn-sm btn-primary float-end" href="{{route(currentUser().'.notice.create')}}"><i class="bi bi-pencil-square"></i></a>
                                <thead>
                                    <tr>
                                        <th scope="col">{{__('#SL')}}</th>
                                        <th scope="col">{{__('Subject')}}</th>
                                        <th scope="col">{{__('Details')}}</th>
                                        <th scope="col">{{__('Status')}}</th>
                                        <th class="white-space-nowrap">{{__('ACTION')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($notices as $n)
                                    <tr>
                                    <th scope="row">{{ ++$loop->index }}</th>
                                        <td>{{$n->notice_subject}}</td>
                                        <td>{{$n->notice_details}}</td>
                                        <td>@if($n->status == 1) {{__('Active') }} @else {{__('Inactive') }} @endif</td>
                                        <td class="white-space-nowrap">
                                            <a href="{{route(currentUser().'.notice.edit',encryptor('encrypt',$n->id))}}">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <form id="form{{$n->id}}" action="{{route(currentUser().'.notice.destroy',encryptor('encrypt',$n->id))}}" method="post">
                                                @csrf
                                                @method('delete')
                                                
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <th colspan="4" class="text-center">No Notice Found</th>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="pt-2">
                            {{ $notices->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
    </section>
    <!-- Bordered table end -->
</div>

@endsection

