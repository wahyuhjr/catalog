@extends('layouts.dashboardadmin')
@section('content')
<div class="wrapper-2">
    <!-- table -->
    <div class="p-5 dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card flex-fill ">
                    <div class="card-header">
                        
                        <a href="{{  url ('create')  }}" class="btn btn-primary mb-0"><i class="align-middle" data-feather="plus"></i>Tambah Data</a>
                        @if(session()->has('success'))
                        <div class="badge bg-success" role="alert">
                            {{ session('success') }}
                        </div>
                        @endif
                    </div>
                  
                    <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th class="d-none d-xl-table-cell">Nama Produk</th>
                                <th class="d-none d-md-table-cell">Gambar</th>
                                <th class="d-none d-xl-table-cell">Deskripsi Produk</th>
                                <th class="d-none d-md-table-cell">Harga</th>
                                <th class="d-none d-md-table-cell">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td class="d-none d-xl-table-cell">{{ $product->nama }}</td>
                                <td class="d-none d-xl-table-cell">{{ asset($product->gambar) }}</td>
                                <td class="d-none d-xl-table-cell" id="value">
                                    <p class="cut-text" id="value">
                                    {{ $product->deskripsi }}
                                    </p>
                                </td>
                                <td class="d-none d-md-table-cell">Rp.{{ number_format($product->harga, 2,',','.') }}
                                </td>
                               
                                <td class="d-none d-xl-table-cell">
                                    <a type="submit" method="get" class="badge bg-success"
                                        href="{{url ('/dashboard/'.$product->id_produk.'/edit')}}">
                                        <i class="material-icons" style="font-size:16px">border_color</i>
                                    </a>
                                    <a type="submit" method="get" href="" class="badge bg-info">
                                        <i class="material-icons" style="font-size:16px">visibility</i>
                                    </a>
                                    <form action="{{  url ('/dashboard', $product->id_produk)  }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="badge bg-danger border-0 d-inline"
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