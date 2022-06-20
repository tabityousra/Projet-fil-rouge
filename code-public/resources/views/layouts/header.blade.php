<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tomato Responsive Restaurant HTML5 Template</title>
    <meta name="author" content="Surjith S M">

    <!-- SEO -->
    <meta name="description" content="Tomato is a Responsive HTML5 Template for Restaurants and food related services.">
    <meta name="keywords" content="tomato, responsive, html5, restaurant, template, food, reservation">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

    <!-- Responsive Tag -->
    <meta name="viewport" content="width=device-width">

    <!-- CSS Files -->

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugin.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
        <![endif]-->
</head>

<body data-scroll-animation="true">
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

    <!-- Preloder-->
    {{-- <div class="preloder animated">
        <div class="scoket">
            <img src="img/preloader.svg" alt="" />
        </div>
    </div> --}}

    <div class="body">

        <div class="main-wrapper">
            <!-- Navigation-->
            <nav class="navbar navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="./index">
                            <img src="{{asset('img/5587830.png')}}" style="width: 49px" alt="nav-logo">
                        </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="/index" >Accueil</a>
                                <ul class="dropdown-menu">
                                   
                                </ul>

                            </li>
                            <li class="dropdown">
                                <a href="{{asset('#menu')}}" >Menu</a>
                               
                            </li>
                            <li class="dropdown">
                                <a href="{{asset('./reservation')}}" >Reservation</a>
                                <ul class="dropdown-menu">
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="{{asset('#about')}}" >A propos de nous</a>
                             
                            </li>
                            <li><a href="{{asset('./contact')}}">Contact</a></li>
                    <!--/.navbar-collapse -->
                </div>
            </nav>