@extends('layout.default')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-7" style="margin: auto">
                <form class="my-5 " method="POST" action="/login">
                    @csrf
                    <x-form.input name="email" type="email"/>
                    {{-- <div class="form-group">
                        <label for="email">Email address *</label>
                        <input type="email" class="form-control" id="email" value="{{old('email')}}" name="email">
                        @error('email')
                        <small id="email" class="form-text alert alert-danger">{{$message}}</small>
                        @enderror
                    </div> --}}
                    <x-form.input name="password" type="password"/>
                    <x-form.button>Login</x-form.button>
                </form>
            </div>
        </div>
    </div>
@endsection