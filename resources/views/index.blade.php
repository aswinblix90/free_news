@extends('layout.default')

@section('content')
    <section class="section first-section">
        <div class="container-fluid">
            <x-featured-post :posts="$posts"></x-featured-post>
        </div>
    </section>
    <section class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-list clearfix">
                            @foreach ($posts->skip(3) as $post)
                                <x-blog-box :post="$post"></x-blog-box>
                            @endforeach
                        </div>
                    </div>
                    <hr class="invis">
                    <div class="row">
                        <div class="col-md-12">
                            <nav aria-label="Page navigation">
                                <x-pagination></x-pagination>
                            </nav>
                        </div><!-- end col -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <x-sidebar :categories="$categories"></x-sidebar>
                </div>

            </div>
        </div>
    </section>                
@endsection