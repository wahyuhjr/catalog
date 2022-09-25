@extends('layouts.dashboardadmin')
@section('content')
<div class="wrapper-2">
    <!-- table -->
    <div class="container dashboard">
        <div class="row ">
            <div class="col-lg-12 ">
                <div class="card flex-fill ">
                    <div class="card-header">
                        <h5 class="card-title mb-3">Welcome, {{ auth()->user()->name }}</h5>
                        <a href="{{  url ('create')  }}" class="btn btn-primary mb-0">Tambah Data</a>
                        @if(session()->has('success'))
                        <div class="badge bg-success" role="alert">
                            {{ session('success') }}
                        </div>
                        @endif
                    </div>
                    <!-- <p>@json($products)</p> -->
                    <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th class="d-none d-xl-table-cell">Nama Produk</th>
                                <th class="d-none d-md-table-cell">Gambar</th>
                                <th class="d-none d-xl-table-cell">Deskripsi Produk</th>
                                <th class="d-none d-md-table-cell">Harga</th>
                                <th class="d-none d-md-table-cell">Created at</th>
                                <th class="d-none d-md-table-cell">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td class="d-none d-xl-table-cell">{{ $product->nama }}</td>
                                <td class="d-none d-xl-table-cell">{{ $product->gambar }}</td>
                                <td class="d-none d-xl-table-cell">{{ $product->deskripsi }}</td>
                                <td class="d-none d-md-table-cell">{{ $product->harga }}</td>
                                <td class="d-none d-xl-table-cell">{{ $product->created_at }}</td>
                                <td class="d-none d-xl-table-cell">
                                    <a type="submit" method="get" href="">
                                        <i class="material-icons" style="font-size:16px">border_color</i>
                                    </a>
                                    <a type="submit" method="get" href="">
                                        <i class="material-icons p-3" style="font-size:16px">visibility</i>
                                    </a>
                                    <form action="{{  url ('/dashboard', $product->id_produk)  }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="badge bg-danger border-0"
                                            onclick="return confirm('Yakin hapus data ?')">
                                            <i class="material-icons" style="font-size:16px">delete_sweep</i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection