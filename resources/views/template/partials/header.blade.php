<!doctype html>
<!--<html lang="{{ app()->getLocale() }}">-->
<head>
    <title>Movie Time ! You get to movie movie</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="csrf_token" content="{!! csrf_token() !!}"/>
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
<header class="ht-header"  id="app">
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
                <a href="{{ route('home') }}"><img class="logo" src="{{ asset("images/logo1.png") }}" alt="" width="119" height="58"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav flex-child-menu menu-left">
                    <li class="first">
                        <a class="btn btn-default"  href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                    <li class="dropdown first">
                        <a class="btn btn-default lv1" href="{{ route('movies.index') }}">
                            My movies
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav flex-child-menu menu-right">
                    @guest
                        <li class="loginLink"><a href="{{ route('login') }}">LOG IN</a></li>
                        <li class="btn signupLink"><a href="{{ route('register') }}">Sign up</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <!-- top search form -->
        <div class="top-search">
            <input type="text" placeholder="Search for a movie" id="searchbar" data-path="{{ route('search', '') }}">
        </div>
    </div>
</header>
<!-- END | Header -->

<div class="hero common-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hero-ct">
                    <h1>Movie Time</h1>
                    <ul class="breadcumb">
                        <li class="active"><a href="#">Home</a></li>
                        <li> <span class="ion-ios-arrow-right"></span> @yield('title')</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="page-single">
    <div class="container">