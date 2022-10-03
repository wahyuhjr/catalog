@extends('layouts.dashboardadmin') @section('content')


</script>
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

            <div class="w-full px-6 py-4 bg-white rounded shadow-md ">
                <form method="POST" action="{{  url ('datacontent/'.$contents->id)  }}" enctype="multipart/form-data" name="">
                    <!-- Title -->
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class=" text-3xl font-bold "> Edit Data Content</h1>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0 "> Title</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="" 
                                    value="{{ $contents->title }}">
                                     @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0 "> Description</h5>
                                </div>
                                <div class="card-body">
                                    <textarea class="myTextarea  @error('desc') is-invalid @enderror" name="desc" id="myTextarea" value="{{ $contents->desc }}">
                                    {{ $contents->desc }}    
                                </textarea> @error('desc')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>


                            <h1 class="font-bold p-3">About Section</h1>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0 ">About Title</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" name="about_title" class="form-control @error('about_title') is-invalid @enderror" placeholder="" value="{{ $contents->about_title }}"> @error('about_title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0 ">About Description</h5>
                                </div>
                                <div class="card-body">
                                    <textarea class="myTextarea  @error('about_desc') is-invalid @enderror" name="about_desc" id="myTextarea" value="{{ $contents->about_desc }}">{{ $contents->about_desc }}
                                    </textarea> @error('desc')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0 ">About Image</h5>
                                </div>
                                <div class="card-body">
                                    <input id="file-input" name="about_image" type="file" class="form-control @error('about_image') is-invalid @enderror" enctype="multipart/form-data" value="{{ $contents->about_image }}"/> @error('about_image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0 ">Link Tokpedia</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" name="link_tokped" class="form-control @error('link_tokped') is-invalid @enderror" placeholder="" value="{{ $contents->link_tokped }}"> @error('about_title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0 ">Link Tiktok</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" name="link_tiktok" class="form-control @error('link_tiktok') is-invalid @enderror" placeholder="" value="{{ $contents->link_tiktok }}"> @error('about_title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0 ">Link Shopee</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" name="link_shopee" class="form-control @error('link_shopee') is-invalid @enderror" placeholder="" value="{{ $contents->link_shopee }}"> @error('about_title')
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