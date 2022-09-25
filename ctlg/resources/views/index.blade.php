 @extends('layouts.app')
 @section('content')


 <!-- wrape-image -->
 <section id="home" class="pt-36 h-screen bg-dof">
     <div class="container">
         <div class="flex flex-wrap">
             <div class="w-full selft-center px-4 lg:w-1/2">
                 <h5 class="text-cream text-bold text-xl">
                     Sambal Dengan Ikan Teri Renyah
                 </h5>
                 <h1 class="text-cream font-semibold text-7xl">
                     Crispy Fish Chili
                 </h1>
                 <p class="text-cream w-full mt-3">
                     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, consequuntur vero nobis temporibus
                     voluptatem nesciunt quas suscipit facere. Id molestiae eius assumenda impedit placeat aperiam esse
                     voluptates? Amet, suscipit in.
                 </p>
                 <div class="mt-8">
                     <a href=""
                         class="text-base font-semibold rounded-full px-8 py-3 text-white bg-bata w-72 hover:opacity-80 transition duration-300 ease-in-out">
                         Explore now
                     </a>
                 </div>
             </div>
             <div class="w-full self-end px-4 lg:w-1/2 overflow-hidden">
                 <div class="relative mt-20 lg:-mt-10 lg:right-0">
                     <img src="{{  asset ('assets/images/banner-2.png') }}" width="600" height="600"
                         class="max-w-full mx-auto hidden md:block banner" alt="banner" id="banner">
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- end wrape-image -->

 <!-- Product List -->
 <div class="px-4 mx-auto mt-20 bg-home border border-gray-200 rounded-lg shadow-md max-w-7xl card">
     <div class="max-w-2xl px-4 py-16 mx-auto sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
         <h2 class="text-2xl font-bold tracking-tight text-gray-900">Our product list</h2>
         <div class="grid grid-cols-1 mt-6 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
             <div class="relative group">
                 <div
                     class="w-full overflow-hidden bg-gray-200 rounded-md min-h-80 aspect-w-1 aspect-h-1 group-hover:opacity-75 lg:aspect-none lg:h-80">
                     <img src="{{ asset('assets/images/1.png') }}" alt="sambel"
                         class="object-cover object-center w-full h-full lg:h-full lg:w-full">
                 </div>
                 <div class="flex justify-between mt-4">
                     <div>
                         <h3 class="text-sm text-gray-700 font-medium">
                             <a href="#">
                                 <span aria-hidden="true" class="absolute inset-0"></span>
                                 Crispy Fish Chili
                             </a>
                         </h3>
                         <p class="mt-1 text-sm text-gray-500">Pedas</p>
                     </div>
                     <p class="text-sm font-medium text-gray-900">Rp.30.000</p>
                 </div>
             </div>
             <div class="relative group">
                 <div
                     class="w-full overflow-hidden bg-gray-200 rounded-md min-h-80 aspect-w-1 aspect-h-1 group-hover:opacity-75 lg:aspect-none lg:h-80">
                     <img src="{{ asset('assets/images/2.png') }}" alt="sambel"
                         class="object-cover object-center w-full h-full lg:h-full lg:w-full">
                 </div>
                 <div class="flex justify-between mt-4">
                     <div>
                         <h3 class="text-sm text-gray-700">
                             <a href="#">
                                 <span aria-hidden="true" class="absolute inset-0"></span>
                                 Basic Tee
                             </a>
                         </h3>
                         <p class="mt-1 text-sm text-gray-500">Black</p>
                     </div>
                     <p class="text-sm font-medium text-gray-900">$35</p>
                 </div>
             </div>
             <div class="relative group">
                 <div
                     class="w-full overflow-hidden bg-gray-200 rounded-md min-h-80 aspect-w-1 aspect-h-1 group-hover:opacity-75 lg:aspect-none lg:h-80">
                     <img src="{{ asset('assets/images/4.png') }}" alt="sambel"
                         class="object-cover object-center w-full h-full lg:h-full lg:w-full">
                 </div>
                 <div class="flex justify-between mt-4">
                     <div>
                         <h3 class="text-sm text-gray-700">
                             <a href="#">
                                 <span aria-hidden="true" class="absolute inset-0"></span>
                                 Basic Tee
                             </a>
                         </h3>
                         <p class="mt-1 text-sm text-gray-500">Black</p>
                     </div>
                     <p class="text-sm font-medium text-gray-900">$35</p>
                 </div>
             </div>
             <div class="relative group">
                 <div
                     class="w-full overflow-hidden bg-gray-200 rounded-md min-h-80 aspect-w-1 aspect-h-1 group-hover:opacity-75 lg:aspect-none lg:h-80">
                     <img src="{{ asset('assets/images/3.png') }}" alt="sambel"
                         class="object-cover object-center w-full h-full lg:h-full lg:w-full">
                 </div>
                 <div class="flex justify-between mt-4">
                     <div>
                         <h3 class="text-sm text-gray-700">
                             <a href="#">
                                 <span aria-hidden="true" class="absolute inset-0"></span>
                                 Basic Tee
                             </a>
                         </h3>
                         <p class="mt-1 text-sm text-gray-500">Black</p>
                     </div>
                     <p class="text-sm font-medium text-gray-900">$35</p>
                 </div>
             </div>
             <!-- More products... -->
         </div>
     </div>
 </div>
 <!-- End Product List -->

 <section class="about overflow-hidden bg-dof min-h-screen lg:mt-20 mt-0">
     <div class="container ">
         <div class="lg:grid lg:grid-cols-2 gap-4 lg:mt-20">
             <img src="{{  asset ('assets/images/bahan.png') }}" class="md:ml-52 px-5" width="600" height="600">
             <div class="lg:mr-28 px-5 lg:mt-0 text-cream mt-5">
                 <h1 class="text-7xl font-bold">Cita Rasa Nusantara</h1>
                 <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quaerat earum aliquid
                     suscipit!
                     Perspiciatis molestias dolorum possimus. Velit quaerat sit reiciendis, reprehenderit aliquid, id
                     aspernatur animi officia eos voluptatum eum!</p>
             </div>
         </div>
     </div>
 </section>
 <!-- end about -->

 <!-- find us -->
 <section class="find mt-20 h-auto ">
     <div class="container mx-auto">
         <h1 class="text-4xl md:text-4xl font-bold text-center text-brown">Find us</h1>
         <div class="grid grid-cols-3 mt-20">
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
 </section>
 <!-- find us -->

 <footer class="p-4 bg-dof shadow container-fluid md:px-6 md:py-8 container mx-auto mt-20">
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
 </footer>
 @endsection