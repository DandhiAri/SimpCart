@extends('layout.frontlayout')

<!DOCTYPE html>
<html lang="en">

<head>
    @section('style')
        <style>
            body {
                background-color: #f2f4f5;
            }

            card-img-top {
                height: 100px;
                width
            }

            @media (min-width: 768px) {}

        </style>
    @endsection
</head>


<body>
    {{-- ========================================HEADER================================== --}}
    <section>
        @section('content')
            {{-- ========================================HEROBANNER================================== --}}
            <div id="heroplantbanner" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="https://source.unsplash.com/1200x600?orchid flower"
                            alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="hero-text">Welcome to Our Flower Shop Website</h2>
                            <h4 class="hero-text">Kita menyediakan bunga yang segar dan cantik.</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://source.unsplash.com/1200x600?tulip flower"
                            alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="hero-text">Welcome to Our Flower Shop Website</h2>
                            <h4 class="hero-text">Harga Bunga yang Terjangkau.</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="https://source.unsplash.com/1200x600?rose flower"
                            alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h2 class="hero-text">Welcome to Our Flower Shop Website</h2>
                            <h4 class="hero-text">Kini anda bisa memesan barang di dimana saja dan barang akan diantar
                                ke
                                rumahmu.</h4>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#heroplantbanner" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#heroplantbanner" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            {{-- =====================================border=========================================== --}}
            <section class="products-area section-padding-100-0 mt-4">
                <div class="container">
                    <div class="d-flex">
                        <div class="mr-auto p-2">
                            <a href="#">
                                <h6>Our Gmail</h6>
                            </a>
                        </div>
                        <div class="p-2">
                            <h6>+62 821-4179-4249</h6>
                        </div>
                        {{-- @auth
                        @else
                            <div class="p-2">
                                <h6><a href="/login" style="color:rgb(66, 96, 161);">Login</a> </h6>
                            </div>
                            <div class="p-2">
                                <h6><a href="/regis" style="color:rgb(46, 148, 46)">Regis</a></h6>
                            </div>
                        @endauth --}}
                    </div>
                </div>
                <b>
                    <hr class="mx-5">
                </b>
            </section>
            {{-- ========================================ABOUT================================================= --}}
            <section class="about-us-area section-padding-100-0 my-5">
                <div class="container">
                    <div class="container">
                        <div class="col-12">
                            <!-- Section Heading -->
                            <div class="section-heading text-center">
                                <h2>TENTANG</h2>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="flex justify-content-center section-heading">
                                <p></p>
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-12 col-lg-5">
                                <!-- Section Heading -->
                                <p class="text-justify">
                                    Situs ini menjual bervariasi tanaman bunga dan tanaman buah. Usaha kami sudah
                                    berjalan
                                    selama 12 tahun.
                                    Kami menjaga dan merawat tanaman-tanaman dengan sangat baik.
                                </p>

                                {{-- <iframe width="400" height="200"
                                src="//www.youtube.com/embed/watch?v=hKUd8KL4FWA&ab_channel=TheGardeningChannelWithJamesPrigioni"
                                frameborder="0" allowfullscreen></iframe> --}}
                            </div>

                            <div class="col-12 col-lg-6">
                                <div class="alazea-benefits-area">
                                    <div class="row">
                                        <!-- Single Benefits Area -->
                                        <div class="col-12 col-sm-6">
                                            <div class="single-benefits-area text-center">
                                                <img src="images/s2.png" alt="plantpot" class="service-icon">
                                                <h5>Produk Berkualitas Tinggi</h5>
                                                <p>Kami merawat tanaman dengan sangat baik dan Kami membuat produk media
                                                    kami sangat berkualitas</p>
                                            </div>
                                        </div>

                                        <!-- Single Benefits Area -->
                                        <div class="col-12 col-sm-6">
                                            <div class="single-benefits-area text-center">
                                                <img src="images/s2.png" alt="plantpot" class="service-icon">
                                                <h5>Pelayanan Sempurna</h5>
                                                <p>Kami berusaha menyediakan pelayanan yang sempurna menurut kemampuan
                                                    kami
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Single Benefits Area -->
                                        <div class="col-12 col-sm-6">
                                            <div class="single-benefits-area text-center">
                                                <img src="images/s2.png" alt="plantpot" class="service-icon">
                                                <h5>100% Natural</h5>
                                                <p>Tanaman-tanaman dan media kami 100% tanpa bahan kimia</p>
                                            </div>
                                        </div>

                                        <!-- Single Benefits Area -->
                                        <div class="col-12 col-sm-6">
                                            <div class="single-benefits-area text-center">
                                                <img src="images/s2.png" alt="plantpot" class="service-icon">
                                                <h5>Hasil tanaman yg memuaskan</h5>
                                                <p>Hasil bunga dijamin sangat cantik dan segar dan buah-buahan kami
                                                    dijamin
                                                    enak rasanya dan sangat segar</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            {{-- ==============================OURSERVICE====================================================== --}}
            <div style="background-color:white">
                <div class="container pb-4 my-4">
                    <div class="col-12">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2>ISI TOKO</h2>
                            <p>Kita menyediakan produk terbaik untuk anda.</p>
                        </div>
                    </div>
                    <div class="container grid-container grid-collumn">
                        @foreach ($products as $item)
                            <div class="card" style="width: 15rem;">
                                <img class="card-img-top" height="270px" src="images/bunga/{{ $item->foto }}"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->name }}</h5>
                                    <p class="card-text">Rp.{{ $item->harga }}</p>
                                    <a href="#" class="btn btn-primary">Lihat Detail-nya....</a>
                                </div>
                            </div>
                        @endforeach
                        {{-- <a href="/shop" class="container"
                        style="text-decoration: none; font-size:20px; padding-top:20px;">
                        <div class="flex">
                            <p class="more">more</p><img src="images/panah.png" class="more-img">
                        </div>
                    </a> --}}
                    </div>
                    <button type="button" class="btn btn-success" data-toggle="button" aria-pressed="false"
                        autocomplete="off" style="width:200px; margin-left:15px; margin-top:10px;">
                        More...
                    </button>
                </div>
            </div>
            {{-- ========================================SHOWCASE================================================= --}}
            <div class="container mt-5">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>HASIL KARYA</h2>
                        <p>Kami menunjukan semua pengalaman dan perjuangan ke karya kami</p>
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
                            <img src="https://source.unsplash.com/250x150?rose flower" class="sc-img" alt="">
                        </li>
                        <li class="sc-child">
                            <img src="https://source.unsplash.com/250x150?rose flower" class="sc-img" alt="">
                        </li>
                        <li class="sc-child">
                            <img src="https://source.unsplash.com/250x150?rose flower" class="sc-img" alt="">
                        </li>
                        <li class="sc-child">
                            <img src="https://source.unsplash.com/250x150?rose flower" class="sc-img" alt="">
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
        @endsection
    </section>


    @section('script')
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
    @endsection
</body>

</html>
