@extends('layout.default')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-7" style="margin: auto">
                <form class="mb-5" method="POST" action="/register" enctype="multipart/form-data">
                    @csrf

                    <x-form.input name="name"/>
                    <x-form.input name="email" type="email"/>
                    <x-form.input name="username"/>
                    <x-form.input name="thumbnail" type="file"/>
                    <x-form.textarea name="bio"/>
                    <x-form.input name="password" type="password"/>
                    <x-form.button>Register</x-form.button>

                </form>
            </div>
        </div>
    </div>
@endsection