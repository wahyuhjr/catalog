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
                <form method="POST" action="{{  url ('datacontent/'.$contents->id)  }}" enctype="multipart/form-data"
                    name="">
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
                                    <input type="text" name="title"
                                        class="form-control @error('title') is-invalid @enderror" placeholder=""
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
                                    <textarea class="myTextarea  @error('desc') is-invalid @enderror" name="desc"
                                        id="myTextarea" value="{{ $contents->desc }}">
                                    {{ $contents->desc }}
                                    </textarea> @error('desc')
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
                                    <input type="text" name="link_tokped"
                                        class="form-control @error('link_tokped') is-invalid @enderror" placeholder=""
                                        value="{{ $contents->link_tokped }}"> @error('about_title')
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
                                    <input type="text" name="link_tiktok"
                                        class="form-control @error('link_tiktok') is-invalid @enderror" placeholder=""
                                        value="{{ $contents->link_tiktok }}"> @error('about_title')
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
                                    <input type="text" name="link_shopee"
                                        class="form-control @error('link_shopee') is-invalid @enderror" placeholder=""
                                        value="{{ $contents->link_shopee }}"> @error('about_title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0 ">Link Instagram</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" name="link_instagram"
                                        class="form-control @error('link_instagram') is-invalid @enderror"
                                        placeholder="" value="{{ $contents->link_instagram }}"> @error('about_title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0 ">Link WA</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" name="link_wa"
                                        class="form-control @error('link_wa') is-invalid @enderror" placeholder=""
                                        value="{{ $contents->link_wa }}"> @error('about_title')
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