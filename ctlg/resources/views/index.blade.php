 @extends('layouts.app')
 @section('content')

 <!-- wrape-image -->
 <div class="wrape-image lg:w-full">
     <img src="{{  asset ('assets/images/ex-img.jpg') }}">
 </div>
 <!-- end wrape-image -->

 <!-- about -->
 <div class="about mt-24">
     <div class="lg:grid overflow-hidden lg:grid-cols-12 ">
         <div class="about-img lg:col-span-3 lg:col-end-6 ">
             <img src="{{  asset ('assets/images/ex-about.jpg') }}">
         </div>
         <div class="text-about text-2xl font-bold text-midnight max-w-lg mt-20 lg:col-span-5 ml-10 ">
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed mollitia quia at illum incidunt dicta
             eius, repellendus ut a vero deserunt minus quo. Reprehenderit nobis aspernatur sit, quaerat ipsa ut.
         </div>
     </div>
     <div class="container">
     </div>
 </div>
 <!-- end about -->

 <!-- Product List -->
 <div class="mx-auto max-w-7xl px-4 card bg-white border rounded-lg  border-gray-200 shadow-md mt-20 ">
     <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
         <h2 class="text-2xl font-bold tracking-tight text-gray-900">Our product list</h2>
         <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
             <div class="group relative">
                 <div
                     class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
                     <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                         alt="Front of men&#039;s Basic Tee in black."
                         class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                 </div>
                 <div class="mt-4 flex justify-between">
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
             <div class="group relative">
                 <div
                     class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
                     <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                         alt="Front of men&#039;s Basic Tee in black."
                         class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                 </div>
                 <div class="mt-4 flex justify-between">
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
             <div class="group relative">
                 <div
                     class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
                     <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                         alt="Front of men&#039;s Basic Tee in black."
                         class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                 </div>
                 <div class="mt-4 flex justify-between">
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
             <div class="group relative">
                 <div
                     class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
                     <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                         alt="Front of men&#039;s Basic Tee in black."
                         class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                 </div>
                 <div class="mt-4 flex justify-between">
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