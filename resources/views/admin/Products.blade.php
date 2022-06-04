@extends('layout.backlayout')
@section('isi')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><a href="add" class="btn btn-success">Add Data</a></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body overflow-auto table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Category</th>
                                <th>Deskripsi</th>
                                <th>Foto</th>
                                <th>Price</th>
                                <th>Create Date</th>
                                <th>Update Date</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->slug }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{!! $product->deskripsi !!}</td>
                                    <td>{{ $product->foto }}</td>
                                    <td>{{ $product->harga }}</td>
                                    <td>{{ $product->created_at }}</td>
                                    <td>{{ $product->updated_at }}</td>


                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
