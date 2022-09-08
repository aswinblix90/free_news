@props(['post'])
<div class="blog-box row">
    <div class="col-md-4">
        <div class="post-media">
            <a href="garden-single.html" title="">
                <img src="upload/garden_sq_01.jpg" alt="" class="img-fluid">
                <div class="hovereffect"></div>
            </a>
        </div><!-- end media -->
    </div><!-- end col -->
    <div class="blog-meta big-meta col-md-8">
        <span class="bg-aqua"><a href="garden-category.html" title="">{{$post->category->name}}</a></span>
        <h4><a href="/posts/{{$post->slug}}" title="">{{$post->title}}</a></h4>
        <p>{{$post->desc}}</p>
        {{-- <small><a href="garden-category.html" title=""><i class="fa fa-eye"></i> 1887</a></small> --}}
        <small><a href="garden-single.html" title="">{{$post->created_at->diffForHumans()}}</a></small>
        <small><a href="#" title="">by {{$post->author->name}}</a></small>
    </div><!-- end meta -->
</div><!-- end blog-box -->
<hr class="invis">