@extends('layout.default')

@section('content')
    <div class="page-title wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h2><i class="fa fa-leaf bg-green"></i> Blog</h2>
                </div><!-- end col -->
                <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Blog</li>
                    </ol>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <section class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-title-area">
                            <span class="color-green"><a href="garden-category.html" title="">Gardening</a></span>
                            <h3>{{$post->title}}</h3>
                            <div class="blog-meta big-meta">
                                <small><a href="garden-single.html" title="">{{$post->created_at->diffForHumans()}}</a></small>
                                <small><a href="blog-author.html" title="">by {{$post->author->name}}</a></small>
                                {{-- <small><a href="#" title=""><i class="fa fa-eye"></i> 2344</a></small> --}}
                            </div><!-- end meta --><!-- end post-sharing -->
                        </div><!-- end title -->
                        <div class="single-post-media">
                            <img src="/storage/" alt="" class="img-fluid">
                        </div><!-- end media -->
                        <div class="blog-content">  
                            <div class="pp">
                                <p>{{$post->desc}}</p>
                            </div><!-- end pp -->
                            <img src="upload/garden_single_02.jpg" alt="" class="img-fluid img-fullwidth">
                            <div class="pp">
                                <p>{{$post->body}}</p>
                                <p>{{$post->body}}</p>
                            </div><!-- end pp -->
                        </div><!-- end content -->
                        <div class="blog-title-area">
                            <div class="tag-cloud-single">
                                <span>Tags</span>
                                <small><a href="#" title="">lifestyle</a></small>
                                <small><a href="#" title="">colorful</a></small>
                                <small><a href="#" title="">trending</a></small>
                                <small><a href="#" title="">another tag</a></small>
                            </div><!-- end meta -->
                        </div><!-- end title -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="upload/banner_01.jpg" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                        <hr class="invis1">
                        <div class="custombox authorbox clearfix">
                            <h4 class="small-title">About author</h4>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <img src="upload/author.jpg" alt="" class="img-fluid rounded-circle"> 
                                </div><!-- end col -->
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <h4><a href="#">{{$post->author->name}}</a></h4>
                                    <p>Quisque sed tristique felis. Lorem <a href="#">visit my website</a> amet, consectetur adipiscing elit. Phasellus quis mi auctor, tincidunt nisl eget, finibus odio. Duis tempus elit quis risus congue feugiat. Thanks for stop Forest Time!</p>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end author-box -->
                        <hr class="invis1">
                        <div class="custombox clearfix">
                            <h4 class="small-title">You may also like</h4>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="blog-box">
                                        <div class="post-media">
                                            <a href="garden-single.html" title="">
                                                <img src="upload/garden_single_03.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect">
                                                    <span class=""></span>
                                                </div><!-- end hover -->
                                            </a>
                                        </div><!-- end media -->
                                        <div class="blog-meta">
                                            <h4><a href="garden-single.html" title="">We are guests of ABC Design Studio</a></h4>
                                            <small><a href="blog-category-01.html" title="">Trends</a></small>
                                            <small><a href="blog-category-01.html" title="">21 July, 2017</a></small>
                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->
                                </div><!-- end col -->
                                <div class="col-lg-6">
                                    <div class="blog-box">
                                        <div class="post-media">
                                            <a href="garden-single.html" title="">
                                                <img src="upload/garden_single_02.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect">
                                                    <span class=""></span>
                                                </div><!-- end hover -->
                                            </a>
                                        </div><!-- end media -->
                                        <div class="blog-meta">
                                            <h4><a href="garden-single.html" title="">Nostalgia at work with family</a></h4>
                                            <small><a href="blog-category-01.html" title="">News</a></small>
                                            <small><a href="blog-category-01.html" title="">20 July, 2017</a></small>
                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end custom-box -->
                        <hr class="invis1">
                        <div class="custombox clearfix">
                            <h4 class="small-title">{{count($post->comments)}}  Comments</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="comments-list">
                                        @if (count($post->comments))
                                            @foreach ($post->comments as $comment)
                                                <div class="media">
                                                    <a class="media-left" href="#">
                                                        <img src="upload/author.jpg" alt="" class="rounded-circle">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading user_name">{{$comment->user->name}} <small>{{$comment->created_at->diffForHumans()}}</small></h4>
                                                        <p>{{$comment->message}}</p>
                                                        <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                        <p>no comments found</p>
                                        @endif

                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end custom-box -->
                        <hr class="invis1">
                        <div class="custombox clearfix">
                            <h4 class="small-title">Leave a Reply</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="/posts/{{$post->slug}}" method="POST" class="form-wrapper">
                                        @csrf
                                        <div class="mt-2">
                                            <input type="hidden" name="post_id" value="{{$post->id}}">
                                            <input type="hidden" name="user_id" value="{{$post->author->id}}">
                                            <input type="hidden" name="slug" value="{{$post->slug}}">
                                            <textarea class="form-control" name="message" id="message" placeholder="Your comment"></textarea>
                                            @error('message')
                                                <p class="mt-2 alert alert-danger">
                                                    {{$message}}
                                                </p>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit Comment</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- end page-wrapper -->
                </div><!-- end col -->
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <x-sidebar></x-sidebar>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@endsection