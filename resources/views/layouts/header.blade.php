<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('magz/scripts/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('magz/scripts/owlcarousel/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('magz/scripts/owlcarousel/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('magz/scripts/magnific-popup/dist/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('magz/scripts/sweetalert/dist/sweetalert.css') }}" rel="stylesheet">
    <link href="{{ asset('magz/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('magz/css/skins/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
</head>
<body>
<header class="primary">
    <div class="firstbar">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="brand">
                        <a href="index.html">
                            <img height="63px" src="/magz/images/logo.png" alt="haitaostyle">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <form class="search" autocomplete="off">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" name="q" class="form-control" placeholder="">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary"><i class="ion-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="help-block">
                            <div>热门:</div>
                            <ul>
                                <li><a href="#">PHP</a></li>
                                <li><a href="#">Laravel</a></li>
                                <li><a href="#">Yii2</a></li>
                                <li><a href="#">Linux</a></li>
                                <li><a href="#">Redis</a></li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-12 text-right">
                    <ul class="navbar-right nav-icons">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('register') }}"><i class="ion-person-add"></i><div>注册</div></a></li>
                            <li><a href="{{ route('login') }}"><i class="ion-person"></i><div>登录</div></a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    <i class="ion-person"></i>{{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <i class="ion-flag"></i><a href="{{ route('logout') }}"
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
            </div>
        </div>
    </div>

    <!-- Start nav -->
    <nav class="menu">
        <div class="container">
            <div class="brand">
                <a href="#">
                    <img src="/magz/images/logo.png" alt="haitaostyle">
                </a>
            </div>
            <div class="mobile-toggle">
                <a href="#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
            </div>
            <div class="mobile-toggle">
                <a href="#" data-toggle="sidebar" data-target="#sidebar"><i class="ion-ios-arrow-left"></i></a>
            </div>
            <div id="menu-list">
                <ul class="nav-list">
                    <li class="for-tablet nav-title"><a>菜单</a></li>
                    <li class="for-tablet"><a href="login.html">登录</a></li>
                    <li class="for-tablet"><a href="register.html">注册</a></li>
                    <li><a href="{{ route('home') }}">主页</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- End nav -->
</header>