<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="LGG" />
    <meta name="description" content="Green Guide">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('front/img/green-guide-logo.png') }}">
    <link rel="icon" sizes="180x180" href="{{ url('front/img/green-guide-logo.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>Green Guide</title>
    <!-- Stylesheets & Fonts -->

    <link href="{{ url('front/plugins/datatables/datatables.min.css') }}" rel='stylesheet' />

    <link href="{{ url('front/css/plugins.css') }}" rel="stylesheet">
    <link href="{{ url('front/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('front/css/new-pages.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/css/swiper.min.css" rel="stylesheet">

    <script src="{{ url('front/js/jquery.js') }}"></script>

    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

    @stack('home-css')
    <!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->
    <style type="text/css">
        .error>p {
            color: red !important;
        }

        .account-nav {
            margin-left: -20px;
            list-style: none;
        }

        .account-nav>li {
            padding: 10px 0px;
            border-bottom: 2px solid grey !important;
        }

        .account-nav>li>a {
            color: #000;
        }

        .active {
            color: #2250fc !important;
        }
    </style>
</head>

<body>

    <div class="body-inner">
        <header id="header" data-fullwidth="true" class="header-mini">
            <div class="header-inner">
                <div class="container d-flex justify-content-center">
                    <!--Logo-->
                    <div id="logo"> <a href="/"><span class="logo-default"><img class="img-fluid"
                                    width="100px" height="60px"
                                    src="{{ url('front/img/green-guide-logo.png') }}"></span></a> </div>
                    <!--End: Logo-->
                    <!-- Search -->
                    <div id="search"><a id="btn-search-close" class="btn-search-close"
                            aria-label="Close search form"><i class="icon-x"></i></a>
                        <form class="search-form" action="search-results-page.html" method="get">
                            <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                            <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                        </form>
                    </div>
                    <!-- end: search -->
                    <!--Header Extras-->
                    <!-- <div class="header-extras">
                        <ul>
                            <li>
                                <a id="btn-search" href="#"> <i class="icon-search"></i></a>
                            </li>
                            <li>
                                <div class="p-dropdown"> <a href="#"><i class="icon-globe"></i><span>EN</span></a>
                                    <ul class="p-dropdown-content">
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Spanish</a></li>
                                        <li><a href="#">English</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div> -->
                    <!--end: Header Extras-->
                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger"> <a class="lines-button x"><span class="lines"></span></a>
                    </div>
                    <!--end: Navigation Resposnive Trigger-->
                    <!--Navigation-->
                    <div id="mainMenu" class="d-sm-flex flex-grow-1 justify-content-sm-center">
                        <div class="container d-sm-flex justify-content-sm-center align-items-sm-center">
                            <nav>
                                <ul>
                                    {{-- <li class="{{ Request::url() === route('/') ? 'active' : '' }}"><a
                                            href="/">Home</a></li> --}}
                                    <li class="{{ Request::url() === route('about') ? 'active' : '' }}"><a
                                            href="/about">About</a></li>
                                    <!-- <li><a href="/advertise">Advertise</a></li> -->
                                    <li class="{{ Request::url() === route('advertise') ? 'active' : '' }}">
                                        <div class="p-dropdown"><a href="{{ route('advertise') }}" id="advertise-home"
                                                class="py-2 px-3 font-weight-600">Advertise <i
                                                    class="fa fa-chevron-down"></i></a></a>
                                            <ul class="p-dropdown-content">
                                                <li
                                                    class="{{ Request::url() === route('advertise') ? 'active' : '' }}">
                                                    <a href="/magzine-design-book">Magazine Advertize</a>
                                                </li>
                                                <li
                                                    class="{{ Request::url() === route('advertise') || Request::url() === route('advert.advert-book') ? 'active' : '' }}">
                                                    <a href="/advert-design-book/">Advert Design</a>
                                                </li>
                                                {{-- <li
                                                    class="{{ Request::url() === route('advertise-in-magazine') ? 'active' : '' }}">
                                                    <a href="/advertise-in-magazine">Advertise in magazine</a>
                                                </li> --}}

                                                <li
                                                    class="{{ Request::url() === route('advertise') ? 'active' : '' }}">
                                                    <a href="/archives">Archives</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="{{ Request::url() === route('croydon-delivery') ? 'active' : '' }}">
                                        <div class="p-dropdown"><a href="#" id="advertise-home"
                                                class="py-2 px-3 font-weight-600">Magazine <i
                                                    class="fa fa-chevron-down"></i></a></a>
                                            <ul class="p-dropdown-content">
                                                <li
                                                    class="{{ Request::url() === route('croydon-delivery') ? 'active' : '' }}">
                                                    <a href="magazine/croydon-delivery">Crydon</a></li>
                                                <li
                                                    class="{{ Request::url() === route('croydon-delivery') ? 'active' : '' }}">
                                                    <a href="/about#circulation__area__section">Enfield</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="{{ Request::url() === route('localevents') ? 'active' : '' }}"><a
                                            href="/localevents">Local Events</a></li>
                                    <li
                                        class="{{ Request::url() === route('businessdirectory') || Request::url() === route('businessdirectory.add-new-directory') ? 'active' : '' }}">
                                        <a href="/businessdirectory">Business Directory</a>
                                    </li>
                                    {{--
                                    <li
                                        class="{{ Request::url() === route('residents-corner') ? 'active': '' }}">
                                        <a href="/residents-corner">Residents Corner</a>
                                    </li> --}}

                                    <li class="{{ Request::url() === route('residents-corner') ? 'active' : '' }}">
                                        <div class="p-dropdown"><a href="{{ route('advert_home') }}"
                                                id="advertise-home" class="py-2 px-3 font-weight-600">Residents Corner
                                                <i class="fa fa-chevron-down"></i></a>
                                            <ul class="p-dropdown-content">
                                                <li
                                                    class="{{ Request::url() === route('residents-corner') ? 'active' : '' }}">
                                                    <a href="/magzine-competition">Magazine Competitions </a>
                                                </li>
                                                <li
                                                    class="{{ Request::url() === route('residents-corner') || Request::url() === route('advert.advert-book') ? 'active' : '' }}">
                                                    <a href="{{ url('/magzine-giveaway') }}">Magazine Giveaway</a>
                                                </li>

                                                <li
                                                    class="{{ Request::url() === route('residents-corner') ? 'active' : '' }}">
                                                    <a href="/feedback">Feedback </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="{{ Request::url() === route('greeninitiative') ? 'active' : '' }}"><a
                                            href="/greeninitiative">Green Initiative</a></li>
                                    {{-- <li  class="{{ Request::url() === route('communitygrowth') ? 'active' : '' }}"><a href="/communitygrowth">Comunity Growth</a></li> --}}
                                    <li class="{{ Request::url() === route('jobs') ? 'active' : '' }}"><a
                                            href="/jobs">Jobs</a></li>
                                    <li class="{{ Request::url() === route('contact') ? 'active' : '' }}"><a
                                            href="/contact">Contact</a></li>

                                    @guest
                                        <li class="{{ Request::url() === route('login') ? 'active' : '' }}"><a
                                                href="/login">login</a></li>
                                    @else
                                        <li class="{{ Request::url() === route('account') ? 'active' : '' }}"><a
                                                href="/account">Account</a></li>
                                        <li><a href="/signout">logout</a></li>
                                    @endguest
                                    {{-- <?php if(isset($user_data) && !empty($user_data)){ ?>
                                        <li ><a href="/account">Account</a></li>
                                    <?php }else{ ?>
                                        <li ><a href="/login">Login</a></li>
                                    <?php } ?> --}}

                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <script>
            $('#advertise-home').on('click', function() {
                window.location.replace("{{ route('advertise') }}");
            })
        </script>
        <!-- end: Header -->
