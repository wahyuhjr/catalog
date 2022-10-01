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
                <form method="POST" action="/datacontent" enctype="multipart/form-data" name="">
                    <!-- Title -->
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class=" text-3xl font-bold "> Create Data Content</h1>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0 ">Identify Title</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder=""> @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0 ">Identify Description</h5>
                                </div>
                                <div class="card-body">
                                    <textarea class="myTextarea  @error('desc') is-invalid @enderror" name="desc" id="myTextarea">
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
                                    <input type="text" name="about_title" class="form-control @error('about_title') is-invalid @enderror" placeholder=""> @error('about_title')
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
                                    <textarea class="myTextarea  @error('about_desc') is-invalid @enderror" name="about_desc" id="myTextarea">
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
                                    <input id="file-input" name="about_image" type="file" class="form-control @error('about_image') is-invalid @enderror" enctype="multipart/form-data" /> @error('about_image')
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