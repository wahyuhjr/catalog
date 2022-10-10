@extends('layouts.dashboardadmin')
@section('content')
<div class="wrapper-2">
    <!-- table -->
    <div class="p-5 dashboard">
        <div class="row ">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header">
                        <h5 class="card-title mb-3">Welcome, {{ auth()->user()->name }}</h5>
                        <a href="{{  url ('selai/create')  }}" class="btn btn-primary mb-0"> <i class="align-middle" data-feather="plus"></i> Tambah Data</a>
                        @if(session()->has('success'))
                        <div class="badge bg-success" role="alert">
                            {{ session('success') }}
                        </div>
                        @endif
                    </div>
                   
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th class="d-none d-xl-table-cell">Title Product</th>
                                <th class="d-none d-xl-table-cell"> Description Product</th>
                                <th class="d-none d-xl-table-cell">Price</th>
                                <th class="d-none d-xl-table-cell">Image</th>
                                <th class="d-none d-xl-table-cell">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($selai as $produkselai)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td class="d-none d-xl-table-cell">{{ $produkselai->title_selai }}</td>
                                <td class="d-none d-xl-table-cell"><p class="cut-text">{{ $produkselai->desc_selai }}</p></td>
                                <td class="d-none d-xl-table-cell"><p class="cut-text">{{ $produkselai->harga }}</p></td>
                                <td class="d-none d-xl-table-cell">{{ $produkselai->image_selai }}</td>               
                                <td class="d-none d-xl-table-cell">
                                    <a type="submit" method="get"
                                        href="{{ url ('/selai/'.$produkselai->id_selai.'/edit')}}" class="badge bg-success">
                                        <i class="material-icons" style="font-size:16px">border_color</i>
                                    </a>
                                    <!-- <a type="submit" method="get" href="" class="badge bg-info">
                                        <i class="material-icons" style="font-size:16px">visibility</i>
                                    </a> -->
                                    <form action="{{  url ('/selai', $produkselai->id_selai)  }}" method="post"
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