@extends('layout.auth')

@section('content')
<!-- <h1 class="auth-title">Login</h1> -->
@if(Session::has('response'))
    {!!Session::get('response')['message']!!}
@endif
<form action="{{route('login.check')}}" method="post">
    @csrf
    <div class="form-group position-relative has-icon-left mb-3">
        <input name="username" value="{{old('username')}}" type="text" class="form-control form-control-sm" placeholder="Email">
        <div class="form-control-icon">
            <i class="bi bi-envelope"></i>
        </div>
        @if($errors->has('username'))
            <small class="d-block text-danger">
                {{$errors->first('username')}}
            </small>
        @endif
    </div>
    <div class="form-group position-relative has-icon-left mb-3">
        <input type="password" name="password" class="form-control form-control-sm" placeholder="Password">
        <div class="form-control-icon">
            <i class="bi bi-shield-lock"></i>
        </div>
        @if($errors->has('password'))
            <small class="d-block text-danger">
                {{$errors->first('password')}}
            </small>
        @endif
    </div>
    <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-2">Login</button>
</form>



@endsection