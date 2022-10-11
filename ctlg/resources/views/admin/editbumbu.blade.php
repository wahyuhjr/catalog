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
                <form method="POST" action="{{  url ('bumbu/'.$bumbu->id)  }}" enctype="multipart/form-data" name="">
                    <!-- Title -->
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class=" text-3xl font-bold text-center"> Update Product bumbu</h1>
                            <div class="card">
                                <div class="card-header">
                                    <h1 class="card-title text-xl mb-5">Product bumbu</h1>
                                    <h5 class="card-title mb-0 ">Title</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" name="title_bumbu" class="form-control @error('title_bumbu') is-invalid @enderror" placeholder="" value="{{ $bumbu->title_bumbu }}"> @error('title_bumbu')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="card-header">
                                    <h5 class="card-title mb-0 ">Description Product</h5>
                                </div>
                                <div class="card-body">
                                    <textarea class="myTextarea  @error('desc_bumbu') is-invalid @enderror" name="desc_bumbu" id="myTextarea" value="{{ $bumbu->title_bumbu }}">
                                        {{ $bumbu->desc_bumbu }}
                                    </textarea> @error('desc_bumbu')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="card-header">
                                    <h5 class="card-title mb-0 ">Image</h5>
                                </div>
                                <div class="card-body">
                                    <input id="file-input" name="image_bumbu" type="file" class="form-control @error('image_bumbu') is-invalid @enderror" enctype="multipart/form-data" 
                                    value="{{ $bumbu->image_bumbu }}"/> @error('image_bumbu')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Harga</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror" placeholder="" value="{{ $bumbu->harga }}"> @error('harga')
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