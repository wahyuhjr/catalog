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
                    Create Post Produk
                </h1>
            </div>

            <div class="w-full px-6 py-4 bg-white rounded shadow-md ">
                <form method="post" action="/dashboard" enctype="multipart/form-data">
                    <!-- Title -->
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
                                        required>
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
                                        class="form-control @error('gambar') is-invalid @enderror" required />
                                    @error('gambar')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Deskripsi</h5>
                                </div>
                                <div class="card-body">
                                    <textarea class="myTextarea form-control @error('deskripsi') is-invalid @enderror"
                                        name="deskripsi" required id="myTextarea">
                                    @error('deskripsi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    </textarea>
                                </div>
                            </div> -->
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection