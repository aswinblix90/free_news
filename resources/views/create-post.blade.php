@extends('layout.default')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-7" style="margin: auto">
                <h1 class="mt-4 text-center">Create New Post</h1>
                <form class="my-5" method="POST" action="/posts/create" enctype="multipart/form-data">
                    @csrf
                    <x-form.field>
                        <x-form.label name="category"/>
                        <select class="form-control" id="category" name="category">
                            <option selected>Select Category</option>
                            @foreach ($categories as $category)
                                <option {{old('category') == $category->id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </x-form.field>
                    <x-form.input name="title"/>

                    <x-form.input name="desc"/>

                    <x-form.input name="image" type="file"/>

                    <x-form.textarea name="body"/>

                    <x-form.button>Post</x-form.button>
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