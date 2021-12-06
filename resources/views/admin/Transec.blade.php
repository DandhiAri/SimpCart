@extends('layout.backlayout')
@section('isi')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Transaction</h3><br>

                    {{-- <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div> --}}
                    <a href="/transecs/print" target="_blank" class="btn btn-primary">Print ro Printer</a>
                    <a href="/transecs/printpdf" target="_blank" class="btn btn-success">Print PDF</a>

                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>nama</th>
                                <th>Address</th>
                                <th>Name Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Status</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transecs as $trans)
                                <tr>
                                    <td>{{ $trans->id }}</td>
                                    <td>{{ $trans->name }}</td>
                                    <td>{{ $trans->address }}</td>
                                    <td>{{ $trans->product_name }}</td>
                                    <td>{{ $trans->price }}</td>
                                    <td>{{ $trans->quantity }}</td>
                                    <td>{{ $trans->status }}</td>
                                    <td>{{ $trans->total }}</td>
                                    <td><a href="{{ url('updatetrans', $trans->id) }}"
                                            class="btn btn-success">Delivered</a>
                                    </td>
                                </tr>
                            @endforeach

                            <tr>
                                <td>2</td>
                                <td>Inv-02</td>
                                <td>200.000</td>
                                <td>0</td>
                                <td>27.000</td>
                                <td>227.000</td>
                                <td>Belum dibayar</td>
                                <td> Checkout</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-info mb-2">
                                        Detail
                                    </a>
                                    <a href="" class="btn btn-sm btn-primary mb-2">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Inv-02</td>
                                <td>200.000</td>
                                <td>0</td>
                                <td>27.000</td>
                                <td>227.000</td>
                                <td>Belum dibayar</td>
                                <td> Checkout</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-info mb-2">
                                        Detail
                                    </a>
                                    <a href="" class="btn btn-sm btn-primary mb-2">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                            {{-- @foreach ($trans as $tran)
                                <tr>
                                    <td>{{ $tran->name }}</td>
                                    <td>{{ $tran->email }}</td>
                                    <td>{{ $tran->role }}</td>
                                    <td>{{ $tran->email_verified_at }}</td>
                                    <td>{{ $tran->remember_token }}</td>
                                    <td>{{ $tran->create_at }}</td>
                                    <td>{{ $tran->updated_at }}</td>

                                </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            Data Transaksi
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Invoice</th>
                                        <th>Sub Total</th>
                                        <th>Diskon</th>
                                        <th>Ongkir</th>
                                        <th>Total</th>
                                        <th>Status Pembayaran</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Inv-01</td>
                                        <td>200.000</td>
                                        <td>
                                            0
                                        </td>
                                        <td>
                                            27.000
                                        </td>
                                        <td>
                                            227.000
                                        </td>
                                        <td>
                                            Belum dibayar
                                        </td>
                                        <td>
                                            Checkout
                                        </td>
                                        <td>
                                            {{-- <a href="{{ route('transaksi.show', 1) }}" class="btn btn-sm btn-info mb-2">
                                                Detail
                                            </a>
                                            <a href="{{ route('transaksi.edit', 1) }}"
                                                class="btn btn-sm btn-primary mb-2">
                                                Edit
                                            </a> --}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2
                                        </td>
                                        <td>
                                            Inv-02
                                        </td>
                                        <td>
                                            200.000
                                        </td>
                                        <td>
                                            0
                                        </td>
                                        <td>
                                            27.000
                                        </td>
                                        <td>
                                            227.000
                                        </td>
                                        <td>
                                            Belum dibayar
                                        </td>
                                        <td>
                                            Checkout
                                        </td>
                                        <td>
                                            {{-- <a href="{{ route('transaksi.show', 2) }}" class="btn btn-sm btn-info mb-2">
                                                Detail
                                            </a>
                                            <a href="{{ route('transaksi.edit', 2) }}"
                                                class="btn btn-sm btn-primary mb-2">
                                                Edit
                                            </a> --}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            3
                                        </td>
                                        <td>
                                            Inv-03
                                        </td>
                                        <td>
                                            200.000
                                        </td>
                                        <td>
                                            0
                                        </td>
                                        <td>
                                            27.000
                                        </td>
                                        <td>
                                            227.000
                                        </td>
                                        <td>
                                            Belum dibayar
                                        </td>
                                        <td>
                                            Checkout
                                        </td>
                                        <td>
                                            {{-- <a href="{{ route('transaksi.show', 3) }}" class="btn btn-sm btn-info mb-2">
                                                Detail
                                            </a>
                                            <a href="{{ route('transaksi.edit', 3) }}"
                                                class="btn btn-sm btn-primary mb-2">
                                                Edit
                                            </a> --}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            4
                                        </td>
                                        <td>
                                            Inv-04
                                        </td>
                                        <td>
                                            200.000
                                        </td>
                                        <td>
                                            0
                                        </td>
                                        <td>
                                            27.000
                                        </td>
                                        <td>
                                            227.000
                                        </td>
                                        <td>
                                            Belum dibayar
                                        </td>
                                        <td>
                                            Checkout
                                        </td>
                                        <td>
                                            {{-- <a href="{{ route('transaksi.show', 4) }}" class="btn btn-sm btn-info mb-2">
                                                Detail
                                            </a>
                                            <a href="{{ route('transaksi.edit', 4) }}"
                                                class="btn btn-sm btn-primary mb-2">
                                                Edit
                                            </a> --}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            5
                                        </td>
                                        <td>
                                            Inv-05
                                        </td>
                                        <td>
                                            200.000
                                        </td>
                                        <td>
                                            0
                                        </td>
                                        <td>
                                            27.000
                                        </td>
                                        <td>
                                            227.000
                                        </td>
                                        <td>
                                            Belum dibayar
                                        </td>
                                        <td>
                                            Checkout
                                        </td>
                                        <td>
                                            {{-- <a href="{{ route('transaksi.show', 5) }}" class="btn btn-sm btn-info mb-2">
                                                Detail
                                            </a>
                                            <a href="{{ route('transaksi.edit', 5) }}"
                                                class="btn btn-sm btn-primary mb-2">
                                                Edit
                                            </a> --}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
