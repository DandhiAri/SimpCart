@extends('layout.frontlayout')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @section('styles')
    @endsection
</head>
@section('content')

    <body>
        <table>
            <th>id</th>
            <th>nama</th>
            <th>alamat</th>
            <th>provinsi</th>
            <th>nama produk</th>
            <th>jumlah produk</th>
            <th>harga</th>
            <th>harga total</th>
            <th>jenis pembayaran</th>
            <th>ID pembayaran</th>
            <th>nomer pembayaran</th>
            <th>Tanggal Expired</th>
            <th>CCV</th>
            @foreach ($transecs as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->user->name }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->province }}</td>
                    <td>{{ $item->product_name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->payment }}</td>
                    <td>{{ $item->ccname }}</td>
                    <td>{{ $item->ccnumber }}</td>
                    <td>{{ $item->ccexpiration }}</td>
                    <td>{{ $item->cccvv }}</td>
                    <td>{{ $item->status }}</td>
                </tr>
            @endforeach
        </table>
    </body>
@endsection

</html>
