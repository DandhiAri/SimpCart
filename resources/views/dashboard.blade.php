<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="" href="/images/logo.svg">
    <title>Kios Bunga | {{ $title }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <style>
        /* header {
            position: relative;
            z-index: 100;
            background-color: transparent;
            width: 100%;
            height: 42px;
            border-bottom: 1px solid rgba(235, 235, 235, 0.2);
        } */

        ul,
        li {
            list-style: none;
        }

        .navbar {
            box-shadow: 10px;
        }

        body {
            background-color: #f2f4f5;
            z-index: 10;

        }

        .tembus {
            background-color: rgba(0, 0, 0, 0.7);
        }

        .dst {
            margin-left: 10ch;
            margin-right: 10ch;
        }

        .carddesc {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-clip: border-box;
        }

        .bg-image {
            background-image: ()
        }

        .bg-gd {
            background-color: rgba(0, 0, 0, 0.4);
        }

        /* .carousel-item {
            height: 100vh;
            min-height: 300px;
            background: no-repeat scroll center scroll;
            -webkit-background-size: cover;
            background-size: cover;
        } */

        .flex {
            flex: 1;
        }

        .ft-dark {
            color: #000;
        }

        .notip {
            background-color: rgba(0, 0, 0, 0.4);
        }

        .lmao {
            justify-content: center;
        }

        .header-area {
            position: absolute;
            width: 100%;
            z-index: 999;
            top: 0;
            left: 0;
            background-color: transparent;
        }

        .card-text {
            color: gray;
        }

        .carousel-item::before {
            background-color: rgba(0, 0, 0, 0.37);
            content: '';
            display: block;
            height: 100%;
            position: absolute;
            width: 100%;
        }

        .sc-flex {
            display: flex;
            flex-wrap: wrap;
        }

        .sc-child {
            flex-grow: 1;
            margin: 2vmin;
        }

        .sc-img {
            max-height: 100%;
            min-width: 100%;
            object-fit: cover;
            vertical-align: bottom;
        }

        .sc-child:last-child {
            flex-grow: 10;
            height: 300px;
        }

        .icon-logo {
            border-radius: 50%;
        }

        .icon-nav {
            width: 10px;
            height: 10px;
        }

        .icon-footer {
            width: 10em;
            height: 10em;
        }

        .footer-area {
            position: relative;
            z-index: 1;
            color: white;
        }

        .footer-area::after {
            background-color: rgba(4, 43, 15, 0.8);
            position: absolute;
            z-index: -1;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            content: "";

        }

    </style>
</head>

<body>
    {{-- ========================================HEADER================================== --}}
    <section>
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-gd py-4">
            <h1 class="navbar-brand ml-3 @if ($active == 'home') active @endif" href="/">
                <span style="color:blue">KIOS</span>
                <span style="color:green">BUNGA</span>
            </h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex justify-content-end">
                    <li class="nav-item px-4 @if ($active == 'home') active @endif">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item px-4 @if ($active == 'about') active @endif">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle  @if ($active == 'shop') active @endif" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Shop
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/shop">Shop</a>
                            <a class="dropdown-item" href="/cart">Cart</a>
                            {{-- <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a> --}}
                        </div>
                    </li>
                    <li class="nav-item px-4 @if ($active == 'kontak') active @endif">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle @if ($active == 'login') active @endif" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Login
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/login">Login</a>
                            <a class="dropdown-item" href="/regis">Regis</a>
                            {{-- <div class="dropdown-divider"></div> --}}
                        </div>
                    </li>
                    {{-- <li class="nav-item px-4 @if ($active == 'login') active @endif">
                        <a class="nav-link" href="/login">Login</a>
                    </li> --}}
                </ul>
            </div>
        </nav>
        {{-- ========================================HEROBANNER================================== --}}
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://source.unsplash.com/1200x600?flower" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="hero-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit1.</h5>
                        <p class="hero-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://source.unsplash.com/1200x600?flower" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="hero-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit2.</h5>
                        <p class="hero-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://source.unsplash.com/1200x600?flower" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="hero-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit3.</h5>
                        <p class="hero-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="container pt-4">
            <div class="d-flex">
                <div class="mr-auto p-2">
                    <a href="#">
                        <h6>Our Gmail</h6>
                    </a>
                </div>
                <div class="p-2">
                    <h6><a href="/login" style="color:rgb(66, 96, 161);">Login</a> </h6>
                </div>
                <div class="p-2">
                    <h6><a href="/regis" style="color:rgb(46, 148, 46)">Regis</a></h6>
                </div>
            </div>
        </div>
        <b>
            <hr class="mx-5">
        </b>
        {{-- ==============================OURSERVICE====================================================== --}}
        <div style="background-color:white">
            <div class="container pb-4 my-4">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>OUR SERVICES</h2>
                        <p>We provide the perfect service for you.</p>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="carddesc text-center" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Fresh Flower</h5>
                                    <img src="images/s1.png" alt="plantpot" class="service-icon">
                                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Natus, placeat?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="carddesc text-center" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Gardening</h5>
                                    <img src="images/s2.png" alt="plantpot" class="service-icon">
                                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Natus, placeat?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="carddesc text-center" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Fast Delivery</h5>
                                    <img src="images/s3.png" alt="plantpot" class="service-icon">
                                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Natus, placeat?
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="carddesc text-center" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Great Care</h5>
                                    <img src="images/s2.png" alt="plantpot" class="service-icon">
                                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Natus, placeat?
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- ========================================ABOUT================================================= --}}
        <section class="about-us-area section-padding-100-0 my-5">
            <div class="container">
                <div class="row pb-3">
                    <div class=" flex text-center section-heading">
                        <h2>ABOUT US</h2>
                        <p>We are leading in the plants service fields.</p>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-5">
                        <!-- Section Heading -->
                        <p class="text-justify">Quisque orci quam, vulputate non commodo finibus, molestie ac ante.
                            Duis
                            in sceleri quesem. Nulla
                            sit amet varius nunc. Maecenas dui, tempeu ullam corper in.
                        </p>

                        <iframe width="400" height="200"
                            src="//www.youtube.com/embed/watch?v=hKUd8KL4FWA&ab_channel=TheGardeningChannelWithJamesPrigioni"
                            frameborder="0" allowfullscreen></iframe>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="alazea-benefits-area">
                            <div class="row">
                                <!-- Single Benefits Area -->
                                <div class="col-12 col-sm-6">
                                    <div class="single-benefits-area text-center">
                                        <img src="images/s2.png" alt="plantpot" class="service-icon">
                                        <h5>Quality Products</h5>
                                        <p>Intiam eu sagittis est, at commodo lacini libero. Praesent dignissim sed odio
                                            vel
                                            aliquam manta lagorn.</p>
                                    </div>
                                </div>

                                <!-- Single Benefits Area -->
                                <div class="col-12 col-sm-6">
                                    <div class="single-benefits-area text-center">
                                        <img src="images/s2.png" alt="plantpot" class="service-icon">
                                        <h5>Perfect Service</h5>
                                        <p>Intiam eu sagittis est, at commodo lacini libero. Praesent dignissim sed odio
                                            vel
                                            aliquam manta lagorn.</p>
                                    </div>
                                </div>

                                <!-- Single Benefits Area -->
                                <div class="col-12 col-sm-6">
                                    <div class="single-benefits-area text-center">
                                        <img src="images/s2.png" alt="plantpot" class="service-icon">
                                        <h5>100% Natural</h5>
                                        <p>Intiam eu sagittis est, at commodo lacini libero. Praesent dignissim sed odio
                                            vel
                                            aliquam manta lagorn.</p>
                                    </div>
                                </div>

                                <!-- Single Benefits Area -->
                                <div class="col-12 col-sm-6">
                                    <div class="single-benefits-area text-center">
                                        <img src="images/s2.png" alt="plantpot" class="service-icon">
                                        <h5>Environmentally friendly</h5>
                                        <p>Intiam eu sagittis est, at commodo lacini libero. Praesent dignissim sed odio
                                            vel
                                            aliquam manta lagorn.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- ========================================SHOWCASE================================================= --}}
        <div style="background-color:white">
            <div class="container mt-5">
                <div class="container">
                    <div class="col-12">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2>SHOWCASE</h2>
                            <p>We devote all of our experience and efforts for creation</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <ul class="sc-flex">
                            <li class="sc-child">
                                <img src="https://source.unsplash.com/250x150?tulip" class="sc-img" alt="">
                            </li>
                            <li class="sc-child">
                                <img src="https://source.unsplash.com/250x150?tulip" class="sc-img" alt="">
                            </li>
                            <li class="sc-child">
                                <img src="https://source.unsplash.com/250x150?rose flower" class="sc-img"
                                    alt="">
                            </li>
                            <li class="sc-child">
                                <img src="https://source.unsplash.com/250x150?rose flower" class="sc-img"
                                    alt="">
                            </li>
                            <li class="sc-child">
                                <img src="https://source.unsplash.com/250x150?rose flower" class="sc-img"
                                    alt="">
                            </li>
                            <li class="sc-child">
                                <img src="https://source.unsplash.com/250x150?rose flower" class="sc-img"
                                    alt="">
                            </li>
                            <li class="sc-child">
                                <img src="https://source.unsplash.com/250x150?flower" class="sc-img" alt="">
                            </li>
                            <li class="sc-child">
                                <img src="https://source.unsplash.com/250x150?flower" class="sc-img" alt="">
                            </li>
                            <li class="sc-child">
                                <img src="https://source.unsplash.com/250x150?flower" class="sc-img" alt="">
                            </li>
                            <li class="sc-child">
                                <img src="https://source.unsplash.com/250x150?flower" class="sc-img" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <footer class="footer-area bg-img" style="background-image: url(images/backgroundlogin.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="footer-logo mb-30">
                                <a href="#"><img src="images/logo.svg" alt="" class="icon-footer"></a>
                            </div>
                            <p>Lorem ipsum dolor sit samet, consectetur adipiscing elit. India situs atione mantor
                            </p>
                            <div class="social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>QUICK LINK</h5>
                            </div>
                            <nav class="widget-nav">
                                <ul>
                                    <li><a href="#">Purchase</a></li>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Payment</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Return</a></li>
                                    <li><a href="#">Advertise</a></li>
                                    <li><a href="#">Shipping</a></li>
                                    <li><a href="#">Career</a></li>
                                    <li><a href="#">Orders</a></li>
                                    <li><a href="#">Policities</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>BEST SELLER</h5>
                            </div>

                            <!-- Single Best Seller Products -->
                            <div class="single-best-seller-product d-flex align-items-center">
                                <div class="product-thumbnail">
                                    <a href="shop-details.html"><img src="img/bg-img/4.jpg" alt=""></a>
                                </div>
                                <div class="product-info">
                                    <a href="shop-details.html">Cactus Flower</a>
                                    <p>$10.99</p>
                                </div>
                            </div>

                            <!-- Single Best Seller Products -->
                            <div class="single-best-seller-product d-flex align-items-center">
                                <div class="product-thumbnail">
                                    <a href="shop-details.html"><img src="img/bg-img/5.jpg" alt=""></a>
                                </div>
                                <div class="product-info">
                                    <a href="shop-details.html">Tulip Flower</a>
                                    <p>$11.99</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>CONTACT</h5>
                            </div>

                            <div class="contact-information">
                                <p><span>Address:</span> Jln Raya semboro, Semboro Lor, Semboro</p>
                                <p><span>Phone:</span> +1 234 122 122</p>
                                <p><span>Email:</span> info.kiosbunga@gmail.com</p>
                                <p><span>Open hours:</span> Mon - Sun: 8 AM to 9 PM</p>
                                <p><span>Happy hours:</span> Sat: 2 PM to 4 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script>
        var owl = $('.carousel-item');
        owl.owlCarousel({
            items: 4,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 10,
        });

        // When the user scrolls the page, execute myFunction
        window.onscroll = function() {
            myFunction()
        };

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky-top")
            } else {
                navbar.classList.remove("sticky-top");
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
