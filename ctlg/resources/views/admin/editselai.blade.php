@extends('layouts.dashboardadmin') @section('content')


<style>
    .btn {
        width: 200px;
    }
</style>
<div>
    <div class="flex flex-col items-center min-h-screen p-3 bg-gray-100 sm:justify-start sm:pt-0 ">
        <div class="w-full px-16 py-5 overflow-hidden bg-white rounded-lg">
            <div class="mb-4">

            </div>

            <div class="w-full px-6 bg-white rounded shadow-md ">
                <form method="POST" action="{{  url ('selai/'.$selai->id_selai)  }}" enctype="multipart/form-data" name="">
                    <!-- Title -->
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class=" text-3xl font-bold text-center"> Update Product Selai</h1>
                            <div class="card">
                                <div class="card-header">
                                    <h1 class="card-title text-xl mb-5">Product Selai</h1>
                                    <h5 class="card-title mb-0 ">Title</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" name="title_selai" class="form-control @error('title_selai') is-invalid @enderror" placeholder="" value="{{ $selai->title_selai }}"> @error('title_selai')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="card-header">
                                    <h5 class="card-title mb-0 ">Description Product</h5>
                                </div>
                                <div class="card-body">
                                    <textarea class="myTextarea  @error('desc_selai') is-invalid @enderror" name="desc_selai" id="myTextarea" value="{{ $selai->title_selai }}">
                                        {{ $selai->desc_selai }}
                                    </textarea> @error('desc_selai')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="card-header">
                                    <h5 class="card-title mb-0 ">Image</h5>
                                </div>
                                <div class="card-body">
                                    <input id="file-input" name="image_selai" type="file" class="form-control @error('image_selai') is-invalid @enderror" enctype="multipart/form-data" 
                                    value="{{ $selai->image_selai }}"/> @error('image_selai')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Harga</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" placeholder="" value="{{ $selai->harga }}"> @error('harga')
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