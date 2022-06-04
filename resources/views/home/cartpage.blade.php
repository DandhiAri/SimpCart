@extends('layout/frontlayout')
@section('script')
    <script>
        function toggle(source) {
            checkboxes = document.getElementsByName('check');
            for (var i = 0, n = checkboxes.length; i < n; i++) {
                checkboxes[i].checked = source.checked;
            }
        }
    </script>
@endsection
@section('style')
    <style>
        .header {
            display: flex;
        }

        .actionremove {
            color: red;
        }

        img {
            display: block;
            width: 100%;
        }

        .grid-cart {
            display: grid;
            grid-template-columns: 60% 40%;
            grid-column-gap: 20px;
        }

        .grid-child {
            border: 1px solid rgb(122, 118, 118);
            border-radius: 10px;
        }

        .grid-child.left {
            height: 300px;
        }

        .grid-child .right {
            height: 200px;
            padding-right: 1px;
        }

        #total {
            width: 3em;
        }

        #gam {
            width: 180px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        tr {
            border-bottom: 1pt solid lightgray;
        }

        .trflex {
            display: flex;
            width: 100%;
        }

        .trflex input {
            width: 100%;
        }

        .warnaicon {
            color: #526E2A;
        }

        .flex {
            display: flex;
        }

    </style>
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item" aria-current="page">Cart</li>
        </ol>
    </nav>
    <div class="checkout_area" style="margin-bottom:100px;">
        <div class="container">
            <form method="post" action="{{ url('order') }}">
                @csrf
                <div class="row justify-content-between">

                    <div class="col-12 col-lg-7">
                        <div class="checkout_details_area clearfix">
                            <h5>Detail Penagihan</h5>
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <label for="first_name">Nama</label>
                                    <input type="text" class="form-control" id="name" value="" required>
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="company">Alamat</label>
                                    <input type="text" class="form-control" id="address" value="{{ $user->address }}"
                                        required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="state">Provinsi</label>
                                    <input type="text" class="form-control" id="state" value="" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="postcode">Kode Post</label>
                                    <input type="text" class="form-control" id="postcode" value="">
                                </div>
                                <div class="col-md-12 mb-4">
                                    <label for="order-notes">Catatan Order</label>
                                    <textarea class="form-control" id="order-notes" cols="30" rows="10"
                                        placeholder="Catatan spesial tentang pesanan mu."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="checkout-content">
                            <h5 class="align-items-center">Keranjang mu</h5>
                            <div class="products-data">
                                <h5>Products:</h5>
                                <table style="width:100%;">
                                    @if ($carts->count() > 0)
                                        @foreach ($carts as $cart)
                                            <tr>
                                                <div class="flex justify-content-between align-items-center">
                                                    <td>
                                                        <input type="text" name="product_name[]"
                                                            value="{{ $cart->product_name }}" hidden>
                                                        <p>{{ $cart->product_name }}</p>
                                                    </td>
                                                    <td>
                                                        <input class="text-center" type="number" min=" 0" step="1"
                                                            max="10" name="quantity[]" value="{{ $cart->quantity }}"
                                                            style="width:50px;">

                                                    </td>
                                                    <td>
                                                        <h6>
                                                            <input type="text" name="total" value="<?php echo $cart->price * $cart->quantity; ?>"
                                                                hidden>
                                                            <?php
                                                            $total = $cart->price * $cart->quantity;
                                                            echo 'Rp.' . $total;
                                                            ?>
                                                        </h6>
                                                    </td>

                                                </div>
                                            </tr>
                                        @endforeach
                                    @else
                                        <b>TIDAK ADA PRODUK DI KERANJANG</b>
                                    @endif
                                </table>
                                <hr>
                            </div>
                            {{-- <div class="flex justify-content-between align-items-center">
                                <h5>Subtotal</h5>
                                <input type="text" name="totals[]" value="<?php echo 'Rp.' . $total * $coll; ?>" hidden>
                            </div> --}}
                            {{-- <div class="flex justify-content-between align-items-center">
                                <h5>Shipping</h5>
                                <input type="text" name="harga_antar[]" value="20000" hidden>
                                <h5>Rp.20.000</h5>
                            </div>
                            <hr>
                            <div class="flex justify-content-between align-items-center">
                                <h5>Order Total</h5>
                                <input type="text" name="hkurir[]" value="<?php echo 'Rp.' . ($totals += 20000); ?>" hidden>
                                <h5><?php echo 'Rp.' . ($totals += 20000); ?></h5>
                            </div> --}}

                            <h4 class="mb-3">Pembayaran</h4>

                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="credit" name="payment" type="radio" value="Credit Card"
                                        class="custom-control-input" checked required>
                                    <label class="custom-control-label" for="credit">Credit card</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="paypal" name="payment" type="radio" value="paypal"
                                        class="custom-control-input" required>
                                    <label class="custom-control-label" for="paypal">Paypal</label>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="ccname">Kartu Nama</label>
                                    <input type="text" class="form-control" name="ccname" placeholder="" required>
                                    <small class="text-muted">Full name as displayed on card</small>
                                    <div class="invalid-feedback">
                                        Name on card is required
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="ccnumber">Nomer ID</label>
                                    <input type="text" class="form-control" name="ccnumber" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Credit card number is required
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="ccexpiration">Kadaluarsa</label>
                                    <input type="text" class="form-control" name="ccexpiration" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Expiration date required
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="cccvv">CVV</label>
                                    <input type="text" class="form-control" name="cccvv" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Security code required
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-btn" style="margin-top:30px;">
                                <input type="submit" class="btn btn-success w-100" nama="submit" value="Confirm Order">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- <div class="container flex justify-content-between">
        <h4 class="flex-row">Cart</h4>
        <p class=""><a href="" style="color: red"> REMOVE ALL</a></p>
    </div> --}}
    {{-- <div class="container pb-4">
        <div class="row">
            <div class="col-12">
                <table>
                    <tr>
                        <th><input type="checkbox" onClick="toggle(this)"></th>
                        <th width="100px" style="ta">Produk</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Total Harga</th>
                        <th>Tools</th>
                    </tr>
                    <form method="post" action="{{ url('order') }}">
                        @csrf
                        @foreach ($carts as $cart)
                            <tr>
                                <td><input type="checkbox" name="check"></td>
                                <td><img src="https://source.unsplash.com/200x200?{{ $cart->product_name }}"></td>
                                <td>
                                    <input type="text" name="product_name[]" value="{{ $cart->product_name }}" hidden>
                                    {{ $cart->product_name }}
                                </td>
                                <td>
                                    <input type="text" name="price[]" value="{{ $cart->price }}" hidden>
                                    Rp.{{ $cart->price }}
                                </td>
                                <td>
                                    <input class="text-center" type="number" min=" 0" step="1" max="10" name="quantity[]"
                                        value="{{ $cart->quantity }}">
                                </td>
                                <td>
                                    <input type="text" name="total" value="<?php echo $cart->price * $cart->quantity; ?>" hidden>
                                    <?php echo 'Rp.' . $cart->price * $cart->quantity; ?>
                                </td>
                                <td><a class="btn btn-danger" href="{{ url('delcart', $cart->id) }}">REMOVE</a></td>
                            </tr>
                        @endforeach

                </table>
                <div class="container">
                    <div class="row">
                        <button class="btn btn-success flex justify-content-center" type="submit">Confirm Order</button>
                    </div>
                </div>


                </form>
            </div>
            <div class="col-12 pt-4">
                <div class="grichild left" style="background-color: white">
                    <div class="container">
                        <div class="trflex">
                            <b>Keterangan Belanja</b>
                        </div>
                        <hr>
                        <div class="trflex">
                            <p>Harga Semua Barang</p>
                        </div>
                        <div class="trflex">
                            <p>Diskon barang</p>
                        </div>
                        <div class="trflex">
                            <p>Total Belanja</p>
                        </div>
                        <hr>
                        <div class="trflex">
                            <input type="submit" value="Konfirmasi beli" name="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection

@section('js')
    <script>

    </script>
@endsection
