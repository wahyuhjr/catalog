 <nav id="sidebar" class="sidebar js-sidebar">
     <div class="sidebar-content js-simplebar">
         <a class="sidebar-brand" href="index.html">
             <span class="align-middle">Catalog</span>
         </a>

         <ul class="sidebar-nav">
             <li class="sidebar-header">
                 Pages
             </li>

             <li class="sidebar-item">
                 <a class="sidebar-link {{ Request::is('dashboard')? 'active' : '' }}" href="{{  url ('datacontent')  }}">
                     <i class="align-middle" data-feather="home"></i> <span class="align-middle">Home</span>
                 </a>
             </li>

             <li class="sidebar-item">
                 <a class="sidebar-link" href="{{  url('dashboard')  }}">
                     <i class="align-middle" data-feather="list"></i> <span class="align-middle">List Produk</span>
                 </a>
             </li>

             <li class="sidebar-item ">
                 <a class="sidebar-link" href="{{ url('') }}">
                     <i class="align-middle" data-feather="package"></i> <span class="align-middle">Detail Produk</span>
                 </a>
             </li>
         </ul>
     </div>
 </nav>

 <div class="main">
     <nav class="navbar navbar-expand navbar-light navbar-bg">
         <a class="sidebar-toggle js-sidebar-toggle">
             <i class="hamburger align-self-center"></i>
         </a>
         <div class="navbar-collapse collapse">
             <ul class="navbar-nav navbar-align">
                 <li class="nav-item dropdown">
                     <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                         <i class="align-middle" data-feather="settings"></i>
                     </a>

                     <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                         <img src="{{  asset ('assets/img/avatars/avatar.jpg')  }}" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">{{ auth()->user()->name }}</span>
                     </a>
                     <div class="dropdown-menu dropdown-menu-end">
                         <!-- <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
                         <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i>
                             Analytics</a>
                         <div class="dropdown-divider"></div>
                         <a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
                         <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i>
                             Help Center</a> -->
                         <!-- <div class="dropdown-divider"></div> -->
                         <form class="dropdown-item" method="post" action="{{  route ('logout') }}">
                             @csrf
                             <a :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                 {{ __('Log Out') }}
                             </a>
                         </form>
                     </div>
                 </li>
             </ul>
         </div>
     </nav>