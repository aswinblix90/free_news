@props(['posts'])
<div class="masonry-blog clearfix">
    <div class="left-side">
        <div class="masonry-box post-media">
            <img src="upload/garden_cat_01.jpg" alt="" class="img-fluid">
            <div class="shadoweffect">
                <div class="shadow-desc">
                    <div class="blog-meta">
                        <span class="bg-aqua"><a href="blog-category-01.html" title="">{{$posts[0]->category->name}}</a></span>
                        <h4><a href="garden-single.html" title="">{{$posts[0]->title}}</a>
                        </h4>
                        <small><a href="garden-single.html" title="">{{$posts[0]->created_at->diffForHumans()}}</a></small>
                        <small><a href="#" title="">by {{$posts[0]->author->name}}</a></small>
                    </div><!-- end meta -->
                </div><!-- end shadow-desc -->
            </div><!-- end shadow -->
        </div><!-- end post-media -->
    </div><!-- end left-side -->

    <div class="center-side">
        <div class="masonry-box post-media">
            <img src="upload/garden_cat_02.jpg" alt="" class="img-fluid">
            <div class="shadoweffect">
                <div class="shadow-desc">
                    <div class="blog-meta">
                        <span class="bg-aqua"><a href="blog-category-01.html" title="">{{$posts[1]->category->name}}</a></span>
                        <h4><a href="garden-single.html" title="">{{$posts[1]->title}}</a></h4>
                        <small><a href="garden-single.html" title="">{{$posts[2]->created_at->diffForHumans()}}</a></small>
                        <small><a href="#" title="">by {{$posts[1]->author->name}}</a></small>
                    </div><!-- end meta -->
                </div><!-- end shadow-desc -->
            </div><!-- end shadow -->
        </div><!-- end post-media -->
    </div><!-- end left-side -->

    <div class="right-side hidden-md-down">
        <div class="masonry-box post-media">
            <img src="upload/garden_cat_03.jpg" alt="" class="img-fluid">
            <div class="shadoweffect">
                <div class="shadow-desc">
                    <div class="blog-meta">
                        <span class="bg-aqua"><a href="blog-category-01.html" title="">{{$posts[2]->category->name}}</a></span>
                        <h4><a href="garden-single.html" title="">{{$posts[2]->title}}</a></h4>
                        <small><a href="garden-single.html" title="">{{$posts[2]->created_at->diffForHumans()}}</a></small>
                        <small><a href="#" title="">by {{$posts[2]->author->name}}</a></small>
                    </div><!-- end meta -->
                </div><!-- end shadow-desc -->
            </div><!-- end shadow -->
        </div><!-- end post-media -->
    </div><!-- end right-side -->
</div><!-- end masonry -->