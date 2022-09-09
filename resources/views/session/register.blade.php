@extends('layout.default')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-7" style="margin: auto">
                <form class="mb-5" method="POST" action="/register" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name *</label>
                        <input type="text" class="form-control" id="name" value="{{old('name')}}" name="name">
                        @error('name')
                        <small id="name" class="form-text alert alert-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email address *</label>
                        <input type="email" class="form-control" id="email" value="{{old('email')}}" name="email">
                        @error('email')
                        <small id="email" class="form-text alert alert-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="username">User Name *</label>
                        <input type="text" class="form-control" id="username" value="{{old('username')}}" name="username">
                        @error('username')
                        <small id="username" class="form-text alert alert-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="thumbnail">Upload Thumbnail</label>
                        <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                        @error('thumbnail')
                        <small id="thumbnail" class="form-text alert alert-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="bio">About me</label>
                        <textarea class="form-control" id="bio" name="bio" rows="3"></textarea>
                        @error('bio')
                        <small id="bio" class="form-text alert alert-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password *</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @error('password')
                        <small id="password" class="form-text alert alert-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
@endsection