 @extends('layouts.app')
 @include('layouts.navbar')
 @section('content')

 <!-- wrape-image -->
 <div class="wrape-image lg:w-full">
     <img src="{{  asset ('assets/images/ex-img.jpg') }}">
 </div>
 <!-- end wrape-image -->

 <!-- about -->
 <div class="mt-24 about">
     <div class="overflow-hidden lg:grid lg:grid-cols-12 ">
         <div class="about-img lg:col-span-3 lg:col-end-6 ">
             <img src="{{  asset ('assets/images/ex-about.jpg') }}">
         </div>
         <div class="max-w-lg mt-20 ml-10 text-2xl font-bold text-about text-midnight lg:col-span-5 ">
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed mollitia quia at illum incidunt dicta
             eius, repellendus ut a vero deserunt minus quo. Reprehenderit nobis aspernatur sit, quaerat ipsa ut.
         </div>
     </div>
     <div class="container">
     </div>
 </div>
 <!-- end about -->

 <!-- Product List -->
 <div class="px-4 mx-auto mt-20 bg-white border border-gray-200 rounded-lg shadow-md max-w-7xl card ">
     <div class="max-w-2xl px-4 py-16 mx-auto sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
         <h2 class="text-2xl font-bold tracking-tight text-gray-900">Our product list</h2>
         <div class="grid grid-cols-1 mt-6 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
             <div class="relative group">
                 <div class="w-full overflow-hidden bg-gray-200 rounded-md min-h-80 aspect-w-1 aspect-h-1 group-hover:opacity-75 lg:aspect-none lg:h-80">
                     <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="object-cover object-center w-full h-full lg:h-full lg:w-full">
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
                 <div class="w-full overflow-hidden bg-gray-200 rounded-md min-h-80 aspect-w-1 aspect-h-1 group-hover:opacity-75 lg:aspect-none lg:h-80">
                     <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="object-cover object-center w-full h-full lg:h-full lg:w-full">
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
                 <div class="w-full overflow-hidden bg-gray-200 rounded-md min-h-80 aspect-w-1 aspect-h-1 group-hover:opacity-75 lg:aspect-none lg:h-80">
                     <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="object-cover object-center w-full h-full lg:h-full lg:w-full">
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
                 <div class="w-full overflow-hidden bg-gray-200 rounded-md min-h-80 aspect-w-1 aspect-h-1 group-hover:opacity-75 lg:aspect-none lg:h-80">
                     <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="object-cover object-center w-full h-full lg:h-full lg:w-full">
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

 <footer class="p-4 bg-white rounded-lg shadow container-fluid md:px-6 md:py-8">
     <div class="sm:flex sm:items-center sm:justify-between">
         <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0">
             <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo">
             <span class="self-center text-2xl font-semibold whitespace-nowrap ">Flowbite</span>
         </a>
         <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0 dark:text-gray-400">
             <li>
                 <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
             </li>
             <li>
                 <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
             </li>
             <li>
                 <a href="#" class="mr-4 hover:underline md:mr-6 ">Licensing</a>
             </li>
             <li>
                 <a href="#" class="hover:underline">Contact</a>
             </li>
         </ul>
     </div>
     <hr class="my-6 border-gray-300 sm:mx-auto lg:my-8">
     <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="https://flowbite.com/" class="hover:underline">Moondev</a>. All Rights Reserved.
     </span>
 </footer>