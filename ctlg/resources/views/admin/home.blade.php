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
                        <a href="{{  url ('datacontent/create')  }}" class="btn btn-primary mb-0"> <i class="align-middle" data-feather="plus"></i> Tambah Data</a>
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
                                <th class="d-none d-xl-table-cell">Edintify Content</th>
                                <th class="d-none d-xl-table-cell">Value Content</th>
                                <th class="d-none d-xl-table-cell">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($contents as $datacontent)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td class="d-none d-xl-table-cell">{{ $datacontent->identify }}</td>
                                <td class="d-none d-xl-table-cell">{{ $datacontent->value }}</td>
                                <td class="d-none d-xl-table-cell">
                                    <a type="submit" method="get"
                                        href="{{url ('/datacontent/'.$datacontent->id.'/edit')}}">
                                        <i class="material-icons" style="font-size:16px">border_color</i>
                                    </a>
                                    <a type="submit" method="get" href="">
                                        <i class="material-icons p-3" style="font-size:16px">visibility</i>
                                    </a>
                                    <form action="{{  url ('/datacontent', $datacontent->id)  }}" method="post"
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