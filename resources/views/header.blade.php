<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Christ - Christmas Gift Shop HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('res/img/favicon.ico')}}">
    <!-- Google Fonts -->
    <link href="{{asset('res/https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i')}}" rel="stylesheet"> 
    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('res/css/bootstrap.min.css')}}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('res/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('res/css/ionicons.min.css')}}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('res/css/plugins.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('res/style.css')}}">
    <!-- Modernizer JS -->
    <script src="{{asset('res/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>

<!-- Main Wrapper Start -->
<div id="main-wrapper" class="section">
    

    <!-- Header Section Start -->
    <div class="header-section section">
       
        <!-- Header Top Start -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <!-- Header Top Wrapper Start -->
                        <div class="header-top-wrapper">
                            <div class="row">

                                <!-- Header Social -->
                                <div class="header-social col-md-4 col-12">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                </div>

                                <!-- Header Logo -->
                                <div class="header-logo col-md-4 col-12">
                                    <a href="index" class="logo"><img src="{{asset('res/img/logo.png')}}" alt="logo"></a>
                                </div>

                                <!-- Account Menu -->
                                <div class="account-menu col-md-4 col-12">
                                    <ul>
                                        <li><a href="#">My Account</a></li>
                                        <li><a href="wishlist">Wishlist</a></li>
                                        <li><a href="#" data-toggle="dropdown"><i class="fa fa-shopping-cart"></i><span class="num">2</span></a>
                                            
                                            <!-- Mini Cart -->
                                            <div class="mini-cart-brief dropdown-menu text-left">
                                                <!-- Cart Products -->
                                                <div class="all-cart-product clearfix">
                                                    <div class="single-cart clearfix">
                                                        <div class="cart-image">
                                                            <a href="product-details"><img src="{{asset('res/img/cart/1.jpg')}}" alt=""></a>
                                                        </div>
                                                        <div class="cart-info">
                                                            <h5><a href="product-details">Holiday Candle</a></h5>
                                                            <p>1 x ??9.00</p>
                                                            <a href="#" class="cart-delete" title="Remove this item"><i class="fa fa-trash-o"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="single-cart clearfix">
                                                        <div class="cart-image">
                                                            <a href="product-details"><img src="{{asset('res/img/cart/2.jpg')}}" alt=""></a>
                                                        </div>
                                                        <div class="cart-info">
                                                            <h5><a href="product-details">Christmas Tree</a></h5>
                                                            <p>1 x ??9.00</p>
                                                            <a href="#" class="cart-delete" title="Remove this item"><i class="fa fa-trash-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Cart Total -->
                                                <div class="cart-totals">
                                                    <h5>Total <span>??12.00</span></h5>
                                                </div>
                                                <!-- Cart Button -->
                                                <div class="cart-bottom  clearfix">
                                                    <a href="checkout">Check out</a>
                                                </div>
                                            </div>
                                            
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div><!-- Header Top Wrapper End -->

                    </div>
                </div>
            </div>
        </div><!-- Header Top End -->
        
        <!-- Header Bottom Start -->
        <div class="header-bottom section">
            <div class="container">
                <div class="row">
                   
                    <!-- Header Bottom Wrapper Start -->
                    <div class="header-bottom-wrapper text-center col">

                        <!-- Header Bottom Logo -->
                        <div class="header-bottom-logo">
                            <a href="index" class="logo"><img src="{{asset('res/img/logo.png')}}" alt="logo"></a>
                        </div>

                        <!-- Main Menu -->
                        <nav id="main-menu" class="main-menu">
                            <ul>
                                <li class="active"><a href="index">home</a></li>
                                <li><a href="shop">shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop">shop page</a></li>
                                        <li><a href="product-details">product details</a></li>
                                    </ul>
                                </li>
                                <li><a href="about">about</a></li>
                                <li><a href="#">pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="cart">cart</a></li>
                                        <li><a href="checkout">checkout</a></li>
                                        <li><a href="wishlist">wishlist</a></li>
										<li><a href="under-construction">Under Construction</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog">blog page</a></li>
                                        <li><a href="blog-details">blog-details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact">contact</a></li>
                            </ul>
                        </nav>

                        <!-- Header Search -->
                        <div class="header-search">
                            
                            <!-- Search Toggle -->
                            <button class="search-toggle"><i class="ion-ios-search-strong"></i></button>
                            
                            <!-- Search Form -->
                            <div class="header-search-form">
                                <form action="#">
                                    <input type="text" placeholder="Search...">
                                    <button><i class="ion-ios-search-strong"></i></button>
                                </form>
                            </div>
                            
                        </div>
                        
                        <!-- Mobile Menu -->
                        <div class="mobile-menu section d-md-none"></div>

                    </div><!-- Header Bottom Wrapper End -->
                    
                </div>
            </div>
        </div><!-- Header Bottom End -->
        
    </div><!-- Header Section End -->