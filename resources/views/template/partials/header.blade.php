<!doctype html>
<!--<html lang="{{ app()->getLocale() }}">-->
<head>
    <title>Movie Time ! You get to movie movie</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500%7CNunito:300,400,600' />
    <!-- Mobile specific meta -->
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone-no">

    <!-- CSS files -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/template.css')}}">
    <link rel="stylesheet" href="{{asset('css/templateplugins.css')}}">

    <script src="{{asset('js/app.js')}}"></script>

</head>
<body>

<!--preloading
<div id="preloader">
    <img class="logo" src="{{ asset('images/logo1.png')}}" alt="" width="119" height="58">
    <div id="status">
        <span></span>
        <span></span>
    </div>
</div>-->

<!-- BEGIN | Header -->
<header class="ht-header">
    <div class="container">
        <nav class="navbar navbar-default navbar-custom">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header logo">
                <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <div id="nav-icon1">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <a href="/"><img class="logo" src="{{ asset("images/logo1.png") }}" alt="" width="119" height="58"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav flex-child-menu menu-left">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="dropdown first">
                        <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown">
                            Home <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu level1">
                            <li><a href="index.html">Home 01</a></li>
                            <li><a href="homev2.html">Home 02</a></li>
                            <li><a href="homev3.html">Home 03</a></li>
                        </ul>
                    </li>
                    <li class="dropdown first">
                        <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                            movies<i class="fa fa-angle-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu level1">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Movie grid<i class="ion-ios-arrow-forward"></i></a>
                                <ul class="dropdown-menu level2">
                                    <li><a href="moviegrid.html">Movie grid</a></li>
                                    <li><a href="moviegridfw.html">movie grid full width</a></li>
                                </ul>
                            </li>
                            <li><a href="movielist.html">Movie list</a></li>
                            <li><a href="moviesingle.html">Movie single</a></li>
                            <li class="it-last"><a href="seriessingle.html">Series single</a></li>
                        </ul>
                    </li>
                    <li class="dropdown first">
                        <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                            news <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu level1">
                            <li><a href="bloglist.html">blog List</a></li>
                            <li><a href="bloggrid.html">blog Grid</a></li>
                            <li class="it-last"><a href="blogdetail.html">blog Detail</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav flex-child-menu menu-right">
                    <li><a href="#">Help</a></li>
                    <li class="loginLink"><a href="/login">LOG In</a></li>
                    <li class="btn signupLink"><a href="/register">sign up</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <!-- top search form -->
        <div class="top-search">
            <select>
                <option value="united">TV show</option>
                <option value="saab">Others</option>
            </select>
            <input type="text" placeholder="Search for a movie, TV Show or celebrity that you are looking for">
        </div>
    </div>
</header>
<!-- END | Header -->

<div class="hero common-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hero-ct">
                    <h1>Movie Listing</h1>
                    <ul class="breadcumb">
                        <li class="active"><a href="#">Home</a></li>
                        <li> <span class="ion-ios-arrow-right"></span> movie listing</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>