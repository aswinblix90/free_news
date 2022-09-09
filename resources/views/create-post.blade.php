@extends('layout.default')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-7" style="margin: auto">
                <h1 class="mt-4 text-center">Create New Post</h1>
                <form class="my-5" method="POST" action="/posts/create" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="category">Select Article Category</label>
                        <select class="form-control" id="category" name="category">
                            <option selected>Select Category</option>
                            @foreach ($categories as $category)
                                <option {{old('category') == $category->id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Article Title</label>
                        <input type="text" class="form-control" id="title" value="{{old('title')}}" name="title">
                        @error('title')
                            <small id="title" class="form-text alert alert-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="desc">Article Desc</label>
                        <input type="text" class="form-control" id="desc" value="{{old('desc')}}" name="desc">
                        @error('desc')
                            <small id="desc" class="form-text alert alert-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                        @error('image')
                            <small id="image" class="form-text alert alert-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="body">Article body</label>
                        <textarea class="form-control" id="body" name="body" rows="3"></textarea>
                    </div>
                    @error('body')
                            <small id="body" class="form-text alert alert-danger">{{$message}}</small>
                    @enderror

                    <button type="submit" class="btn btn-primary">Post</button>
                    {{-- @if ($errors->any())
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                    </ul>
                    @endif --}}
                </form>
            </div>
        </div>
    </div>
@endsection