@extends('layout.frontlayout')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kios Bunga | {{ $title }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    @section('style')
        <style>
            .shop-sorting-data {
                position: relative;
                z-index: 1;
                padding-bottom: 25px;
                margin-bottom: 50px;
                border-bottom: 1px solid #ebebeb;
            }

            .shop-sorting-data .search_by_terms {
                position: relative;
                z-index: 1;
            }

            .shop-sorting-data .search_by_terms select {
                width: 180px;
                height: 40px;
                color: #51545f;
                font-size: 16px;
                background-color: #f5f5f5;
                border: 1px px solid #ebebeb;
                border-radius: 2px;
                margin-left: 30px;
            }

        </style>
    @endsection
</head>

<body>
    @section('content')
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shop</li>
            </ol>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop-sidebar-area">

                        <!-- Shop Widget -->
                        {{-- <div class="shop-widget price mb-50">
                            <h4 class="widget-title">Prices</h4>
                            <div class="widget-desc">
                                <div class="slider-range">
                                    <div data-min="8" data-max="30" data-unit="$"
                                        class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                        data-value-min="8" data-value-max="30" data-label-result="Price:">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all first-handle"
                                            tabindex="0" style="left: 0%;"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"
                                            style="left: 100%;"></span>
                                        <div class="ui-slider-range ui-corner-all ui-widget-header"
                                            style="left: 0%; width: 100%;"></div>
                                    </div>
                                    <input type="range" name="harga" id="">
                                    <div class="range-price">Price: $8 - $30</div>

                                </div>
                            </div>
                        </div> --}}

                        <!-- Shop Widget -->
                        <div class="shop-widget catagory mb-50">
                            <h4 class="widget-title">Categories</h4>
                            <div class="widget-desc">
                                <!-- Single Checkbox -->
                                @foreach ($categories as $item)
                                    <a href="/categories/{{ $item->slug }}"
                                        class=" custom-control custom-checkbox d-flex align-items-center mb-2">
                                        <label class="custom-control-label" for="customCheck1">{{ $item->name }}</label>
                                    </a>
                                @endforeach
                                <a href="/media" class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                    <label class="custom-control-label" for="customCheck1">Lain nya</label>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-9">
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="card mb-4" style="width: 15rem; height:27rem;">
                                    <img class="card-img-top" height="270px" src="images/bunga/{{ $product->foto }}"
                                        alt=" Card image cap">
                                    <div class="card-body text-center">
                                        <h5 class="card-text">
                                            <a href="/shop/{{ $product->slug }}" style="color:rgb(38, 151, 34)">
                                                {{ $product->name }}
                                            </a>
                                        </h5>
                                        <p class="card-text">Rp.{{ $product->harga }}</p>
                                    </div>
                                    <div class="flex justify-content-center">
                                        <form action="{{ url('cart', $product->id) }}" method="post">
                                            @csrf
                                            <input type="number" name="quantity" value="1" min="1" class="form-control"
                                                style="width:87px">
                                            <input class="btn btn-success" type="submit" value="Add Cart">
                                        </form>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                        <div class="container">
                            <div class="row">
                                <div class="flex justify-content-center">
                                    {{ $products->links() }}

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endsection
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
