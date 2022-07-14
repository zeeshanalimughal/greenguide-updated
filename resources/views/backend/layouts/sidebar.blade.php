         <!--APP-SIDEBAR-->
         <div class="sticky">
             <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
             <div class="app-sidebar" style="overflow-y: auto !important">
                 <div class="side-header">
                     <a class="header-brand1" href="/admins">
                         <img src="{{ asset('front/img/green-guide-logo.png') }}" style="min-width: 50px; max-width: 120px; width: 100%;"
                             class="header-brand-img" alt="logo">
                         {{-- <img src="{{asset('front/img/green-guide-logo.png')}}" class="header-brand-img toggle-logo"
                            alt="logo">
                        <img src="{{asset('front/img/green-guide-logo.png')}}" class="header-brand-img light-logo" alt="logo">
                        <img src="{{asset('front/img/green-guide-logo.png')}}" class="header-brand-img light-logo1"
                            alt="logo"> --}}
                     </a>
                     <!-- LOGO -->
                 </div>
                 <div class="main-sidemenu" style="overflow-y: auto !important">
                     <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                             fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                             <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                         </svg></div>
                     <ul class="side-menu" style="overflow-y: auto !important">
                         <li class="sub-category">
                             <h3>Main</h3>
                         </li>
                         <li class="slide">
                             <a class="side-menu__item" data-bs-toggle="slide" href="/admins"><i
                                     class="side-menu__icon fe fe-home"></i><span
                                     class="side-menu__label">Dashboard</span></a>
                         </li>
                         <li class="slide">
                             <a class="side-menu__item" data-bs-toggle="slide" href="/admins/events"><i
                                     class="side-menu__icon mdi mdi-wunderlist"></i><span
                                     class="side-menu__label">Local Events</span></a>
                         </li>
                         <li class="slide">
                             <a class="side-menu__item" data-bs-toggle="slide" href="/admins/businessdirectories"><i
                                     class="side-menu__icon fe fe-home"></i><span
                                     class="side-menu__label">Business Directory</span></a>
                         </li>
                         <li class="slide">
                             <a class="side-menu__item" data-bs-toggle="slide" href="/admins/reviews"><i
                                     class="side-menu__icon fe fe-home"></i><span
                                     class="side-menu__label">Business Directory Reviews</span></a>
                         </li>
                         <li class="slide">
                             <a class="side-menu__item" data-bs-toggle="slide" href="/admins/replys"><i
                                     class="side-menu__icon fe fe-home"></i><span
                                     class="side-menu__label">Business Directory Replys</span></a>
                         </li>
                         <li class="slide">
                             <a class="side-menu__item" data-bs-toggle="slide" href="/admins/magazine-design"><i
                                     class="side-menu__icon fe fe-home"></i><span
                                     class="side-menu__label">Magazine Design Booking</span></a>
                         </li>
                         <li class="slide">
                             <a class="side-menu__item" data-bs-toggle="slide" href="/admins/advert-design-book/"><i
                                     class="side-menu__icon fe fe-home"></i><span
                                     class="side-menu__label">Advert Booking</span></a>
                         </li>
                         <li class="slide">
                             <a class="side-menu__item" data-bs-toggle="slide" href="/admins/messages"><i
                                     class="side-menu__icon fa fa-comment-o"></i><span
                                     class="side-menu__label">Messages</span></a>
                         </li>
                       
                         <li class="slide">
                             <a class="side-menu__item" data-bs-toggle="slide" href="/admins/pages"><i
                                     class="side-menu__icon mdi mdi-animation"></i><span
                                     class="side-menu__label">Pages</span></a>
                         </li>
                          
                         <li class="slide">
                             <a class="side-menu__item" data-bs-toggle="slide" href="/admins/posts"><i
                                     class="side-menu__icon fa fa-file-text-o"></i><span
                                     class="side-menu__label">Posts</span></a>
                         </li>
                         <li class="slide">
                            <a class="side-menu__item" data-bs-toggle="slide" href="/admins/jobs"><i
                                    class="side-menu__icon mdi mdi-account-multiple-outline"></i><span
                                    class="side-menu__label">Jobs</span></a>
                        </li>
                         <li class="slide">
                             <a class="side-menu__item" data-bs-toggle="slide" href="{{url('admins/borough')}}"><i
                                     class="side-menu__icon fe fe-home"></i><span
                                     class="side-menu__label">Borough</span></a>
                         </li>
                         <li class="slide">
                             <a class="side-menu__item" data-bs-toggle="slide" href="{{url('admins/upcomming-issues')}}"><i
                                     class="side-menu__icon fe fe-home"></i><span
                                     class="side-menu__label">Upcomming Issues</span></a>
                         </li>
                         <li class="slide">
                             <a class="side-menu__item" data-bs-toggle="slide" href="{{url('admins/adverts')}}"><i
                                     class="side-menu__icon fa fa-gbp"></i><span
                                     class="side-menu__label">Advert Sizes</span></a>
                         </li>
                         <li class="slide">
                             <a class="side-menu__item" data-bs-toggle="slide" href="{{url('admins/giveaways')}}"><i
                                     class="side-menu__icon fa fa-gbp"></i><span
                                     class="side-menu__label">Giveaways</span></a>
                         </li>
                         <li class="slide">
                             <a class="side-menu__item" data-bs-toggle="slide" href="{{url('admins/feedbacks')}}"><i
                                     class="side-menu__icon fa fa-gbp"></i><span
                                     class="side-menu__label">Feedbacks</span></a>
                         </li>
                         {{-- <li class="sub-category">
                             <h3>UI Kit</h3>
                         </li> --}}
                         {{-- <li class="slide">
                             <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                     class="side-menu__icon fe fe-slack"></i><span
                                     class="side-menu__label">Apps</span><i class="angle fe fe-chevron-right"></i></a>
                             <ul class="slide-menu">
                                 <li class="side-menu-label1"><a href="javascript:void(0)">Apps</a></li>
                                 <li><a href="#" class="slide-item"> Cards design</a></li>
                                 <li><a href="#" class="slide-item"> Default calendar</a></li>
                             </ul>
                         </li> --}}

                     </ul>
                     <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                             width="24" height="24" viewBox="0 0 24 24">
                             <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                         </svg></div>
                 </div>
             </div>
             <!--/APP-SIDEBAR-->
         </div>






         <!--app-content open-->
         <div class="main-content app-content mt-0">
             <div class="side-app">

                 <!-- CONTAINER -->
                 <div class="main-container container-fluid">


                     <!-- PAGE-HEADER -->
                     <div class="page-header">
                        @stack('page-title')
                         {{-- <div>
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
                             </ol>
                         </div> --}}
                     </div>
                     <!-- PAGE-HEADER END -->
