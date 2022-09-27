 @extends('layouts.app')

 @php 
 
 function getContentIdentify($identify, $contents) {
    $resContent = "";
    foreach($contents as $dataContent) {
        if ($dataContent->identify == $identify) {
            $resContent = $dataContent->value;
        }
    }
    return $resContent;
 }

 @endphp
 
 @section('content')


 <!-- wrape-image -->
 <section id="home" class="relative pt-36 h-screen bg-sambal">
     <div class="container mx-auto">
         <div class="title top-1/4">
         <h1 class="font-bold text-7xl text-center text-bata mb-0 " id="title">
            SN FOOD
         </h1>
         <p class="text-white font-semibold text-2xl mt-10 max-w-4xl max-auto" id="subtitle">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro earum nobis animi nisi. Inventore, laudantium, atque maiores tenetur debitis nesciunt, possimus illum officiis repellat labore obcaecati necessitatibus odit! Non, numquam?
         </p>
         </div>
     </div>
 </section>

 <!-- end wrape-image -->

 <!-- Product List -->
 <div class="px-4 mx-auto mt-20 bg-home border border-gray-200 rounded-lg shadow-md card lg:px-0 lg:mt-0">
     <div class="max-w-2xl px-4 py-16 mx-auto sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
         <h2 class="text-2xl font-bold tracking-tight text-bata">Our product list</h2>
         <div class="grid grid-cols-1 mt-6 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">

         @foreach($products as $product)
             <div class="relative group">
                 <div
                     class="w-full overflow-hidden bg-gray-200 rounded-md min-h-80 aspect-w-1 aspect-h-1 group-hover:opacity-75 lg:aspect-none lg:h-80">
                     <img src="{{ asset($product->gambar) }}" alt="sambel"
                         class="object-cover object-center w-full h-full lg:h-full lg:w-full">
                 </div>
                 <div class="flex justify-between mt-4">
                     <div>
                         <h3 class="text-sm text-gray-700 font-medium">
                             <a href="#">
                                 <span aria-hidden="true" class="absolute inset-0"></span>
                                 {{  $product->nama  }}
                             </a>
                         </h3>
                         <p class="mt-1 text-sm text-gray-500">{{  $product->deskripsi  }}</p>
                     </div>
                     <p class="text-sm font-medium text-gray-900">Rp.{{ number_format($product->harga, 2,',','.') }}</p>
                 </div>
             </div>
             @endforeach
             <!-- More products... -->
         </div>
     </div>
 </div>
 <!-- End Product List -->

 <section class="about overflow-hidden bg-dof min-h-screen lg:max-h-screen mt-0">
     <div class="container mx-auto">
         <div class="lg:grid lg:grid-cols-2 gap-4 lg:mt-52">
             <img src="{{  asset ('assets/images/bahan.png') }}" class="md:ml-52 px-5" width="600" height="600">
             <div class="lg:mr-28 px-5 lg:mt-0  mt-5">
                 <h1 class="text-7xl font-bold text-white">  {{ getContentIdentify("ABOUT_TITLE", $contents) }}</h1>
                 <p class="mt-5 mb-20 text-oren">  {{ getContentIdentify("ABOUT_DESC", $contents) }}</p>
             </div>
         </div>
     </div>
 </section>
 <!-- end about -->

 <!-- find us -->
 <section class="find h-96 bg-home ">
 <div class="container mx-auto ">
         <div class="shop">
         <h1 class="text-4xl md:text-4xl font-bold text-center text-bata ">Find us</h1>
         <div class="grid grid-cols-3 mt-28">
             <a href="www.shopee.co.id">
                 <img src="{{  asset ('assets/images/sosmed/1.png') }}" class="px-5 lg:ml-80 lg:w-1/2">
             </a>
             <a href="www.tiktok.com">
                 <img src="{{  asset ('assets/images/sosmed/2.png') }}" class="px-5 lg:ml-28 lg:w-1/2">
             </a>
             <a href="{{ url (' www.tokopedia.com ') }}">
                 <img src="{{  asset ('assets/images/sosmed/4.png') }}" class="px-5 lg:-ml-24 lg:w-1/2">
             </a>
         </div>
         </div>
 </section>
 <!-- find us -->

 <footer class="p-4 bg-dof shadow  md:px-6     ">
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
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="https://flowbite.com/"
                class="hover:underline">Moondev</a>. All Rights Reserved.
        </span>
    </div>
 </footer>
 @endsection