@props(['name'])    

@error($name)
<small id="{{$name}}" class="form-text alert alert-danger">{{$message}}</small>
@enderror