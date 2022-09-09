<div class="collapse top-search" id="collapseExample">
    <div class="card card-block">
        <div class="newsletter-widget text-center">
            <form class="form-inline">
                <input type="text" class="form-control" placeholder="What you are looking for?">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </form>
        </div><!-- end newsletter -->
    </div>
</div><!-- end top-search -->

<div class="topbar-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 hidden-sm-down">
                <div class="topsocial">
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i
                            class="fa fa-facebook"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i
                            class="fa fa-youtube"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i
                            class="fa fa-pinterest"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i
                            class="fa fa-twitter"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Flickr"><i
                            class="fa fa-flickr"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i
                            class="fa fa-instagram"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><i
                            class="fa fa-google-plus"></i></a>
                </div><!-- end social -->
            </div><!-- end col -->

            <div class="col-lg-4">
                <div class="text-center">
                    @auth
                        Welcome {{auth()->user()->username}}
                    @endauth
                </div>
            </div><!-- end col -->

            @guest
            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                <div class="topsearch text-center">
                    <a class="nav-link color-green-hover" href="/login">Login</a>
                </div><!-- end search -->
            </div>
            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                <div class="topsearch text-center">
                    <a class="nav-link color-green-hover" href="/register">Register</a>
                </div><!-- end search -->
            </div>
            @endguest
            @auth
                <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                    <div class="topsearch text-center">
                        <a class="nav-link color-green-hover" href="/logout">Logout</a>
                    </div><!-- end search -->
                </div>
            @endauth
        </div><!-- end row -->
    </div><!-- end header-logo -->
</div><!-- end topbar -->

<div class="header-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo">
                    <a href="/"><img src="images/version/garden-logo.png" alt=""></a>
                </div><!-- end logo -->
            </div>
        </div><!-- end row -->
    </div><!-- end header-logo -->
</div><!-- end header -->

<header class="header">
    <div class="container">
        <nav class="navbar navbar-inverse navbar-toggleable-md">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Forest Timemenu"
                aria-controls="Forest Timemenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-center" id="Forest Timemenu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link color-green-hover" href="/">Home</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link color-green-hover" href="/posts/create">Add post</a>
                        </li>
                    @endauth
                    <li class="nav-item">
                        <a class="nav-link color-green-hover" href="garden-category.html">Outdoor Living</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-green-hover" href="garden-category.html">Indoor Living</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-green-hover" href="garden-category.html">Shopping Guides</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-green-hover" href="garden-contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div><!-- end container -->
</header><!-- end header -->