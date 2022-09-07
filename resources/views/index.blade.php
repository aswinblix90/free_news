@extends('layout.default')

@section('content')
    <section class="section first-section">
        <div class="container-fluid">
            <x-featured-post></x-featured-post>
        </div>
    </section>
    <section class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-list clearfix">
                            <x-blog-box></x-blog-box>
                            <x-blog-box></x-blog-box>
                            <x-blog-box></x-blog-box>
                            <x-blog-box></x-blog-box>
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
                    <x-sidebar></x-sidebar>
                </div>

            </div>
        </div>
    </section>                
@endsection