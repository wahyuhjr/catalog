@extends('layouts.dashboardadmin')
@section('content')

<style>
.btn {
    width: 200px;
}
</style>
<div>
    <div class="flex flex-col items-center min-h-screen p-3 bg-gray-100 sm:justify-start sm:pt-0 ">
        <div class="w-full px-16 py-5 overflow-hidden bg-white rounded-lg">
            <div class="mb-4">
                <h1 class="text-3xl font-bold ">
                    Edit Post Produk
                </h1>
            </div>

            <div class="w-full px-6 py-4 bg-white rounded shadow-md ">
                <form method="post" action="{{  url('dashboard/'.$product->id_produk)  }}"
                    enctype="multipart/form-data">
                    <!-- Title -->
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0 ">Nama Produk</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" name="nama"
                                        class="form-control @error('nama') is-invalid @enderror" placeholder=""
                                        value="{{ $product->nama }}">
                                    @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Gambar</h5>
                                </div>
                                <div class="card-body">
                                    <input id="file-input" name="gambar" type="file"
                                        class="form-control @error('gambar') is-invalid @enderror" />
                                    @error('gambar')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Deskripsi</h5>
                                </div>
                                <div class="card-body">
                                    <!-- <input id="deskripsi" type="hidden" name="deskripsi"> -->
                                    <textarea class="ckeditor form-control @error('deskripsi') is-invalid @enderror"
                                        name="deskripsi" id="editor">{{ $product->deskripsi }}
                                    </textarea>
                                    @error('deskripsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Harga</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" name="harga"
                                        class="form-control @error('harga') is-invalid @enderror" placeholder=""
                                        value="{{ $product->harga }}">
                                    @error('harga')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection