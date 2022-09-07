@props(['categories'])
<ul>
    @foreach ($categories as $category)
        <li><a href="#">{{$category->name}} <span>({{$category->posts_count}})</span></a></li>
    @endforeach
</ul>