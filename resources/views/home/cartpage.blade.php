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
            <li class="breadcrumb-item active" aria-current="page">Cart</li>
        </ol>
    </nav>
    <div class="container flex justify-content-between">
        <h4 class="flex-row">Cart</h4>
        <p class=""><a href="" style="color: red"> REMOVE ALL</a></p>
    </div>
    <div class="container pb-4">
        <div class="row">
            <div class="col-12">
                <table>
                    <tr>
                        {{-- <th><input type="checkbox" onClick="toggle(this)"></th> --}}
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
                                {{-- <td><input type="checkbox" name="check"></td> --}}
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
            {{-- <div class="col-12 pt-4">
                <div class="grid-child left" style="background-color: white">
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
            </div> --}}
        </div>
    </div>
@endsection

@section('js')
    <script>

    </script>
@endsection
