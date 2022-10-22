 @extends('layouts.app')
 @section('content')


 <!-- wrape-image -->
 <section id="home" class="relative pt-36 h-screen bg-sambal" id="home">
     <div class="container mx-auto">
         @foreach ($contents as $datacontent)
         <div class="title lg:top-1/4" >
         <h1 class="font-bold text-5xl lg:text-7xl text-center text-bata mb-0" id="title" data-aos="zoom-in" data-aos-duration="1200">
            {{   $datacontent->title   }}
        </h1>
        <div class="text-white font-semibold text-2xl  max-w-4xl max-auto mt-5" id="subtitle" data-aos="zoom-in" data-aos-duration="2000">
        {!! $datacontent->desc !!}
            </div>
        </div>
        @endforeach
     </div>
 </section>

 <!-- end wrape-image -->

 <!-- Product List -->
 <div class="px-4 mx-auto  bg-home border border-gray-200 rounded-lg shadow-md card lg:px-0 lg:mt-0" id="product">
     <div class=" px-4 py-16 mx-auto sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
         <h2 class="text-2xl font-bold tracking-tight text-bata">Our product list</h2>
         
         <div class="grid grid-cols-1 mt-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
         @foreach($products as $product)
             <div class="group relative ">
                 <a href="#${{ $product->id_produk }}">
                 <div class="min-h-full aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80" >
                     <img src="{{ asset($product->gambar) }}" alt="sambel"
                         class="object-cover object-center w-full h-full lg:h-full lg:w-full">
                 </div> 
                 </a>
                 <div class="flex justify-center mt-4 " data-aos="fade-up" data-aos-duration="1000">
                     <div class="text-center">
                         <h3 class="text-lg text-bata font-bold">
                             <a href="#">
                                 {{  $product->nama  }}
                             </a>
                         </h3>
                        <div class="deskripsi text-center">
                        <!-- <div class="mt-1 text-sm text-bata" id="deskripsi">{!!  $product->deskripsi  !!}</div> -->
                        </div>
                         <p class="text-sm font-medium text-bata mt-2"></p>
                        </div>
                 </div>
             </div>
             @endforeach
             <!-- More products... -->
         </div>
     </div>
 </div>
 <!-- End Product List -->

 <section class="about overflow-hidden h-min-screen bg-dof" >
 <h1 class="overflow-hidden title-2 text-bata text-center text-4xl mt-10 lg:text-6xl lg:mt-52 px-auto p-3 lg:mb-20 font-bold bg-white w-full mx-auto lg:h-18 " id="$2">Sambal</h1>
     <div class=" mx-auto " >
         <!-- Sambal -->
         <div class="lg:grid lg:grid-cols-3"  data-aos="fade-up" data-aos-duration="1200">
             @foreach ($details as $detailproduk)
            <div class="lg:grid lg:grid-cols-2 gap-2 lg:mt-0 mb-10 ml-10">
            <img src="{{  asset ($detailproduk->image_detail) }}" class="object-cover object-center " width="400" height="400">
            <div class="lg:mr-10  lg:mt-0  mt-5" id="about-text">
                 <h1 class="title-2 text-4xl font-bold text-bata">{{ $detailproduk->title_detail }}</h1>
                 <div class="mt-5 mb-5 md:mb-10 text-white">{!! $detailproduk->desc_detail !!}</div>
                 <h3 class="text-white bg-bata w-28 text-center rounded-md p-1">IDR {{ $detailproduk->harga }}</h3>
             </div>
            </div>         
            @endforeach
        </div>

        <!-- Selai -->
        <h1 class="overflow-hidden selai title-2 text-bata text-center text-4xl lg:text-6xl lg:mt-20 p-3 lg:mb-20 font-bold bg-white w-full lg:px-auto mx-auto h-18 mt-32 lg:h-18 " id="$3">Selai</h1>
        <div class="lg:grid lg:grid-cols-3"  data-aos="fade-up" data-aos-duration="1200">
             @foreach ($selai as $produkselai)
            <div class="lg:grid lg:grid-cols-2 gap-2 lg:mt-0 mb-10 ml-10">
            <img src="{{  asset ($produkselai->image_selai) }}" class=" object-cover object-center w-full h-full lg:h-full lg:w-full" width="100" height="100">
            <div class="lg:mr-10  lg:mt-0  mt-5" id="about-text">
                 <h1 class="title-2 text-4xl font-bold text-bata">{{ $produkselai->title_selai }}</h1>
                 <div class="mt-5 mb-5 md:mb-10 text-white">{!! $produkselai->desc_selai !!}</div>
                 <h3 class="text-white bg-bata w-28 text-center rounded-md p-1">{{ $produkselai->harga }}</h3>
             </div>
            </div> 
            @endforeach
        </div>

        <!-- Bumbu -->
        <h1 class="overflow-hidden title-2 text-bata text-center text-4xl lg:text-6xl p-3 lg:mt-20 lg:mb-20 font-bold bg-white w-full mx-auto h-18 mt-32 lg:h-18 " id="$4">Bumbu</h1>
        <div class="lg:grid lg:grid-cols-3" data-aos="fade-up" data-aos-duration="1200" >
             @foreach ($bumbu as $produkbumbu)
            <div class="lg:grid lg:grid-cols-2 gap-2 lg:mt-0 mb-10 ml-10">
            <img src="{{  asset ($produkbumbu->image_bumbu) }}" class=" object-cover object-center w-full h-full lg:h-full lg:w-full" width="100" height="100" >
            <div class="lg:mr-10  lg:mt-0  mt-5" id="about-text">
                 <h1 class="title-2 text-4xl font-bold text-bata">{{ $produkbumbu->title_bumbu }}</h1>
                 <div class="mt-5 mb-5 md:mb-10 text-white">{!! $produkbumbu->desc_bumbu !!}</div>
                 <h3 class="text-white bg-bata w-28 text-center rounded-md p-1">{{ $produkbumbu->harga }}</h3>
             </div>
            </div> 
            @endforeach
        </div>
    </div>    
 </section>
 
 <!-- end about -->

 <!-- Purchase us -->
 <section class="find lg:h-96 bg-white mt-10 lg:mt-20 h-48" id="shop">
   
    <div class="container mx-auto " data-aos="fade-up" data-aos-duration="1200">
         <div class="shop ">
         <div class="text-2xl md:text-4xl font-bold text-center text-bata ">Purchase on </div>
         <div class="grid grid-cols-3 lg:mt-28 mt-10">
             <a href=" ">
                 <img src="{{  asset ('assets/images/sosmed/1.png') }}" class="px-5 lg:ml-80 lg:w-1/2">
             </a>
             <a href=" ">
                 <img src="{{  asset ('assets/images/sosmed/2.png') }}" class="px-5 lg:ml-28 lg:w-1/2">
             </a>
             <a href=" ">
                 <img src="{{  asset ('assets/images/sosmed/4.png') }}" class="px-5 lg:-ml-24 lg:w-1/2">
             </a>
         </div>
    </div>
    
 </section>
 <!-- find us -->

 <footer class="p-4 lg:h-40 h-96 bg-dof shadow  md:px-6">
    <div class="container mx-auto">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="" class="flex items-center mb-4 sm:mb-0">
                <img src="{{ asset ('assets/images/logo.jpg')}}" width="50" height="50">
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-cream px-3">SN FOOD</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm text-cream sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 ">Shopee</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">Tokopedia</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 ">Instagram</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Tiktok</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-300 sm:mx-auto lg:my-8">
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="#home"
                class="hover:underline">Moondev</a>. All Rights Reserved.
        </span>
    </div>
 </footer>
 @endsection