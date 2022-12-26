 <link href="{{ asset (' assets/css/home.css ') }}" rel="stylesheet">


 <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
 <div class="w-full bg-bata dark-mode:text-midnight-200 dark-mode:bg-bata-800 scroll-smooth text-white " id="nav"
     style="position:fixed;">
     <div x-data="{ open: false }"
         class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
         <div class="p-4 flex flex-row items-center justify-between">
             <a href="/"
                 class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline"><img
                     src="{{ asset ('assets/images/logo.jpg') }}" width="70" height="50">
             </a>
             <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                 <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                     <path x-show="!open" fill-rule="evenodd"
                         d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                         clip-rule="evenodd"></path>
                     <path x-show="open" fill-rule="evenodd"
                         d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                         clip-rule="evenodd"></path>
                 </svg>
             </button>
         </div>
         <nav :class="{'flex': open, 'hidden': !open}"
             class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-center md:flex-row" id="besar">
             <a class="px-4 py-2 mt-2 MD:text-2xl font-bold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-bata-600 dark-mode:focus:bg-bata-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-midnight-200 focus:shadow-outline hover:bg-white hover:text-bata focus:bg-bata-200 focus:text-white focus:outline-none md:mt-0 md:ml-4"
                 href="#home">HOME</a>
             <a class="px-4 py-2 mt-2 MD:text-2xl font-bold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-bata-600 dark-mode:focus:bg-bata-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-midnight-200 focus:shadow-outline hover:bg-white hover:text-bata focus:bg-bata-200 focus:text-white focus:outline-none md:mt-0 md:ml-4"
                 href="#product">PRODUCT</a>
             <a class="px-4 py-2 mt-2 MD:text-2xl font-bold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-bata-600 dark-mode:focus:bg-bata-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-midnight-200 focus:shadow-outline hover:bg-white hover:text-bata focus:bg-bata-200 focus:text-white focus:outline-none md:mt-0 md:ml-4"
                 href="{{ url('about') }}">ABOUT US</a>
             <a class="px-4 py-2 mt-2 MD:text-2xl font-bold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-bata-600 dark-mode:focus:bg-bata-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-midnight-200 focus:shadow-outline hover:bg-white hover:text-bata focus:bg-bata-200 focus:text-white focus:outline-none md:mt-0 md:ml-4"
                 href="#shop">SHOP</a>
             <a class="px-4 py-2 mt-2 MD:text-2xl font-bold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-bata-600 dark-mode:focus:bg-bata-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-midnight-200 focus:shadow-outline hover:bg-white hover:text-bata focus:bg-bata-200 focus:text-white focus:outline-none md:mt-0 md:ml-4"
                 href="#shop">CONTACT</a>
         </nav>

     </div>
 </div>
 </div>