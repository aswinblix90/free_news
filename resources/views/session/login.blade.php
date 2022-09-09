@extends('layout.default')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-7" style="margin: auto">
                <form class="my-5 " method="POST" action="/login">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email address *</label>
                        <input type="email" class="form-control" id="email" value="{{old('email')}}" name="email">
                        @error('email')
                        <small id="email" class="form-text alert alert-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password *</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @error('password')
                        <small id="password" class="form-text alert alert-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection