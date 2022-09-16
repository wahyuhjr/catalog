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
         <div class="text-about text-2xl font-bold text-midnight max-w-lg mt-10 lg:col-span-5 ">
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed mollitia quia at illum incidunt dicta
             eius, repellendus ut a vero deserunt minus quo. Reprehenderit nobis aspernatur sit, quaerat ipsa ut.
         </div>
     </div>
     <div class="container">
     </div>
 </div>
 <!-- end about -->