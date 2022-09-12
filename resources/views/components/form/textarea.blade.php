@props(['name'])
<x-form.field>
    <x-form.label name="{{$name}}"/>
    <textarea class="form-control" id="{{$name}}" name="{{$name}}" rows="3"></textarea>
    <x-form.error name="{{$name}}"/>
</x-form.field>