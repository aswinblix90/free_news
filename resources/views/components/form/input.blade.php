@props(['name', 'type' => 'text'])
<x-form.field>
    <x-form.label name="{{$name}}"/>
    <input type="{{$type}}" class="form-control" id="{{$name}}" value="{{old($name)}}" name="{{$name}}">
    @error($name)
    <small id="{{$name}}" class="form-text alert alert-danger">{{$message}}</small>
    @enderror
</x-form.field>