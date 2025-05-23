@extends('layout.app')
@section('pageTitle',trans('Product'))
@section('pageSubTitle',trans('List'))

@section('content')
<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">

            <div class="card">
                <div>
                <a class="float-end" href="{{route(currentUser().'.product.create')}}"style="font-size:1.7rem"><i class="bi bi-plus-square-fill"></i></a>
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
                                <th scope="col">{{__('Brand')}}</th>
                                <th scope="col">{{__('Name')}}</th>
                                <th scope="col">{{__('Description')}}</th>
                                <th scope="col">{{__('Barcode')}}</th>
                                <th scope="col">{{__('Image')}}</th>
                                <th scope="col">{{__('Weight')}}</th>
                                <th scope="col">{{__('Width')}}</th>
                                <th scope="col">{{__('Height')}}</th>
                                <th scope="col">{{__('Length')}}</th>
                                <th class="white-space-nowrap">{{__('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($products as $b)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{$b->brand->title}}</td>
                                <td>{{$b->name}}</td>
                                <td>{{$b->description}}</td>
                                <td>{{$b->barcode}}</td>
                                <td><img width="100px" src="{{asset('uploads/products/thumb/'.$b->image)}}" alt=""></td>
                                <td>{{$b->weight}}</td>
                                <td>{{$b->width}}</td>
                                <td>{{$b->height}}</td>
                                <td>{{$b->length}}</td>
                                <td class="white-space-nowrap">
                                    <a href="{{route(currentUser().'.product.edit',encryptor('encrypt',$b->id))}}">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="javascript:void()" onclick="$('#form{{$b->id}}').submit()">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <form id="form{{$b->id}}" action="{{route(currentUser().'.product.destroy',encryptor('encrypt',$b->id))}}" method="post">
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
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
