@extends('frontend.layouts.master')

@push('home-css')
    <link rel="stylesheet" href="{{ url('front/css/home.css') }}">
@endpush

@section('main-section')


    <!-- Particle stars -->
    <section
        style="min-height: 95vh; background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url({{ asset('front/img/herohome.jpg') }}); background-repeat: no-repeat; background-size: cover; background-position:center center; display:flex;align-items: center;">
        <div id="particles-stars" class="particles"></div>
        <div class="container ">
            <div class="">
                <div class="home_hero_animated_text">
                    <h1 class="mb-4 text-center"> Green
                        Guide Croydon Magazine

                    </h1>
                    <h2 class="mt-5"><span style="font-size:6.5rem">We want to empower</span> residents to know who the can
                        <span style="color:green !important;">
                            <span class="txt-rotate" style="font-weight: 800" data-period="2000"
                                data-rotate='[ "go to.", "turn to.", "connect with."]'>
                            </span>
                        </span>
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <!-- end: Particle stars -->
















    <!-- Content -->
    <section id="page-content" style="margin-top:50px">
        <div class="container">
            <!-- post content -->
            <!-- Page title -->
            <div class="page-title">
                {{-- <h1>Blog - Three Columns</h1> --}}
            </div>
            <!-- end: Page title -->
            <!-- Blog -->
            <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
                <!-- Post item-->
                <div class="post-item border" style="max-height: 260px;position: relative;">
                    <div class="post-item-wrap hero__post__back">
                        <div class="post-image">
                            <a href="#">
                                <img style="height: 100%;" alt="" src="{{ asset('front/img/hero/5@2x.png') }}">
                            </a>

                        </div>
                        <div class="post__back">
                            <p>Borough specific magzine with reliable information for the residents of the Crovdon Borough
                            </p>
                            <div>
                                <a href="/archives" class="btn btn-info">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: Post item-->
                <!-- Post item-->
                <div class="post-item border" style="max-height: 260px;position: relative;">
                    <div class="post-item-wrap hero__post__back">
                        <div class="post-slider">
                            <div class="carousel dots-inside arrows-visible arrows-only" data-items="1" data-loop="true"
                                data-autoplay="true" data-lightbox="gallery">
                                <a href="{{ asset('front/img/advertisements/ad-2.jpg') }}" data-lightbox="gallery-image">
                                    <img style="max-height: 260px; object-fit:contain;" alt=""
                                        src="{{ asset('front/img/advertisements/ad-2.jpg') }}">
                                </a>
                                <a href="{{ asset('front/img/advertisements/ad-3.jpg') }}" data-lightbox="gallery-image">
                                    <img style="max-height: 260px; object-fit:contain;" alt=""
                                        src="{{ asset('front/img/advertisements/ad-3.jpg') }}">
                                </a>
                                <a href="{{ asset('front/img/advertisements/ad-4.jpg') }}" data-lightbox="gallery-image">
                                    <img style="max-height: 260px; object-fit:contain;" alt=""
                                        src="{{ asset('front/img/advertisements/ad-4.jpg') }}">
                                </a>
                                <a href="{{ asset('front/img/advertisements/ad-5.jpg') }}" data-lightbox="gallery-image">
                                    <img style="max-height: 260px; object-fit:contain;" alt=""
                                        src="{{ asset('front/img/advertisements/ad-5.jpg') }}">
                                </a>
                            </div>
                            <div class="post__back">
                                <p>Green Guide magazine is a high end quality printed magazine that is distributed through
                                    Croydon Borough.</p>
                                <div>
                                    <a href="/advertise" class="btn btn-info">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end: Post item-->


                <!-- Post item-->
                <div class="post-item border" style="max-height: 260px;position: relative;">
                    <div class="post-item-wrap">
                        <div class="post-image bordered p-3 bg-light">
                            <h2>What's on in
                                the Croydon Borough ?</h2>
                            <div class="text-center">
                                <a href="/localevents" class="btn btn-success">Find Out</a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end: Post item-->


                <!-- Post item YouTube-->
                <div class="post-item border" style="max-height: 260px;position: relative;">
                    <div class="post-item-wrap" style="max-height: 260px;">
                        <div class="post-item-wrap hero__post__back" style="max-height: 260px;">
                            <div class="post-slider" style="max-height: 260px;">
                                <div class="carousel dots-inside arrows-visible arrows-only" data-autoplay="2600"
                                    data-animate-in="fadeIn" data-animate-out="fadeOut" data-items="1" data-loop="true"
                                    data-autoplay="true" data-lightbox="gallery" style="max-height: 260px;">
                                    <a href="{{ asset('front/img/events/1.jpg') }}" data-lightbox="gallery-image">
                                        <img style="max-height: 260px; object-fit:cover;" alt=""
                                            src="{{ asset('front/img/events/1.jpg') }}">
                                    </a>
                                    <a href="{{ asset('front/img/events/2.jpg') }}" data-lightbox="gallery-image">
                                        <img style="max-height: 260px; object-fit:cover;" alt=""
                                            src="{{ asset('front/img/events/2.jpg') }}">
                                    </a>
                                    <a href="{{ asset('front/img/events/3.jpg') }}" data-lightbox="gallery-image">
                                        <img style="max-height: 260px; object-fit:cover;" alt=""
                                            src="{{ asset('front/img/events/3.jpg') }}">
                                    </a>
                                    <a href="{{ asset('front/img/events/4.jpg') }}" data-lightbox="gallery-image">
                                        <img style="max-height: 260px; object-fit:cover;" alt=""
                                            src="{{ asset('front/img/events/4.jpg') }}">
                                    </a>
                                </div>

                            </div>
                            <div class="post__back">
                                <p>Green Guide magazine is produced and distributed by Green Guide t/a LLG Marketing team
                                </p>
                                <div>
                                    <a href="/about" class="btn btn-info">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end: Post item YouTube-->
                <!-- Post item Vimeo-->
                <div class="post-item border" style="max-height: 260px;position: relative;">
                    <div class="post-item-wrap">

                        <div class="post-image">
                            <div class="post-image bordered p-3">
                                <h2>Low cost, high exposure</h2>
                                <div class="text-center">

                                    <a href="/advertise" class="btn btn-primary">Read More</a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <!-- end: Post item Vime-->
                <!-- Post item HTML5 Audio-->
                <div class="post-item border" style="max-height: 260px;position: relative;">
                    <div class="post-item-wrap hero__post__back" style="max-height: 260px;">
                        <div class="post-image" style="max-height: 260px;">
                            <a href="#">
                                <img alt="" style="height: 100%; object-fit: cover;"
                                    src="{{ asset('front/img/aerial-view-business.jpg') }}">
                            </a>
                        </div>
                        <div class="post__back">
                            <p>We are doing our part to offset the production of the Green Guide Magazine.</p>
                            <div>
                                <a href="/greeninitiative" class="btn btn-info">Read More</a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end: Post item-->



                <!-- Post item-->
                <div class="post-item border" style="max-height: 260px;position: relative;">
                    <div class="post-item-wrap" style="max-height: 260px;">

                        <div class="post-video" style="height: 100%">
                            <div class="ratio ratio-16x9" style="height: 100%">
                                {{-- <iframe src="{{ url('/front/video/pexels-workout.mp4') }}" width="560" height="376" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> --}}
                                <video style="height: 100%" src="{{ url('/front/video/pexels-workout.mp4') }}" loop
                                    muted autoplay>
                                </video>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- end: Post item-->




                <!-- Post item-->
                <div class="post-item border" style="max-height: 260px;position: relative;">
                    <div class="post-item-wrap hero__post__back">
                        <div class="post-slider">
                            <div class="carousel dots-inside arrows-only" data-autoplay="2600" data-animate-in="fadeIn"
                                data-animate-out="fadeOut" data-items="1" data-loop="true" data-autoplay="true"
                                data-lightbox="gallery">
                                <a href="{{ asset('front/img/1520103821627.jpg') }}" data-lightbox="gallery-image">
                                    <img alt=""
                                        src="{{ asset('front/img/shutterstock_457521961-632x474.jpg') }}">
                                </a>
                            </div>

                        </div>
                        <div class="post__back">
                            <p>Strengthen your companies online exposure by registering on our local directory.</p>
                            <div>
                                <a href="/businessdirectory" class="btn btn-info">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: P
                           <!-- Post item-->
                <div class="post-item border" style="max-height: 260px;position: relative;">
                    <div class="post-item-wrap">
                        <div class="post-image bordered p-3">
                            <h2>Community is key</h2>
                            <div class="text-center">
                                <a href="/communitygrowth" class="btn btn-primary">Read More</a>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- end: Post item-->
            </div>
            <!-- end: Blog -->
        </div>
        <!-- end: post content -->
    </section>
    <!-- end: Content -->


































    <!-- CAROUSEL -->
    <section class="background-colored">
        <div class="container">
            <div class="text-medium text-light" data-animate="fadeInDown" data-animate-delay="600">Magazine Highlights
            </div>
            <div class="grid-articles carousel post-carousel m-b-20" data-dots="false">
                <article class="post-entry" data-animate="fadeInUp" data-animate-delay="900">
                    <a href="#" class="post-image"><img alt=""
                            src="{{ url('front/img/highlights/1.png') }}"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="badge bg-danger">NEWS</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#">Know Your Borough</a></h2>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post-entry" data-animate="fadeInUp" data-animate-delay="900">
                    <a href="#" class="post-image"><img alt=""
                            src="{{ url('front/img/highlights/2.png') }}"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="badge bg-danger">LIFESTYLE</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#">What's on Calendar</a></h2>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post-entry" data-animate="fadeInUp" data-animate-delay="900">
                    <a href="#" class="post-image"><img alt=""
                            src="{{ url('front/img/highlights/3.png') }}"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="badge bg-danger">LIFESTYLE</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#">Puzzles</a></h2>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post-entry" data-animate="fadeInUp" data-animate-delay="900">
                    <a href="#" class="post-image"><img alt=""
                            src="{{ url('front/img/highlights/4.png') }}"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="badge bg-danger">World</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#">Vouchers</a></h2>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post-entry" data-animate="fadeInUp" data-animate-delay="900">
                    <a href="#" class="post-image"><img alt=""
                            src="{{ url('front/img/highlights/1.png') }}"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="badge bg-danger">World</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#">Free directory Listing</a></h2>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post-entry" data-animate="fadeInUp" data-animate-delay="900">
                    <a href="#" class="post-image"><img alt=""
                            src="{{ url('front/img/highlights/2.png') }}"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="badge bg-danger">World</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#">Green Guide</a></h2>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post-entry" data-animate="fadeInUp" data-animate-delay="900">
                    <a href="#" class="post-image"><img alt=""
                            src="{{ url('front/img/highlights/3.png') }}"></a>
                    <div class="post-entry-overlay">
                        <div class="post-entry-meta">
                            <div class="post-entry-meta-category">
                                <span class="badge bg-danger">World</span>
                            </div>
                            <div class="post-entry-meta-title">
                                <h2><a href="#">The most happiest time of the day!</a></h2>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="text-light text-end">
                <a class="read-more" href="#">
                    All stories in Highlights <i class="fa fa-long-arrow-alt-right"></i></a>
            </div>
        </div>
    </section>
    <!-- end: CAROUSEL -->






    <!-- CATEGORIES -->
    <section class="p-t-0 p-b-40 mt-5">
        <div class="container mt-4">

            <div class="row">
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="600">
                    <div class="highlight-image">
                        <img src="{{ url('front/img/highlights/1.png') }}" alt="">
                        <div class="highlight-title">
                            Spotlights
                        </div>
                    </div>
                    <div class="post-thumbnail-list">


                        @foreach ($posts as $post)
                            @if ($post->post_category == 'Spotlights')
                                <div class="post-thumbnail-entry">
                                    <img alt="" src="{{ asset('uploads') }}/{{ $post->post_image }}">
                                    <div class="post-thumbnail-content">
                                        <a href="/post/{{ $post->id }}">{{ $post->post_title }}</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach




                




                    </div>

                </div>
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="800">
                    <div class="highlight-image">
                        <img src="{{ url('front/img/highlights/2.png') }}" alt="">
                        <div class="highlight-title">
                            Companies
                        </div>
                    </div>
                    <div class="post-thumbnail-list">


                        @foreach ($posts as $post)
                            @if ($post->post_category == 'Companies')
                                <div class="post-thumbnail-entry">
                                    <img alt="" src="{{ asset('uploads') }}/{{ $post->post_image }}">
                                    <div class="post-thumbnail-content">
                                        <a href="/post/{{ $post->id }}">{{ $post->post_title }}</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach


                    </div>
                </div>
                <div class="col-lg-4" data-animate="fadeInUp" data-animate-delay="1000">
                    <div class="highlight-image">
                        <img src="{{ url('front/img/highlights/3.png') }}" alt="">
                        <div class="highlight-title">
                            LGG Team
                        </div>
                    </div>
                    <div class="post-thumbnail-list">


                        @foreach ($posts as $post)
                            @if ($post->post_category == 'LGG Team')
                                <div class="post-thumbnail-entry">
                                    <img alt="" src="{{ asset('uploads') }}/{{ $post->post_image }}">
                                    <div class="post-thumbnail-content">
                                        <a href="/post/{{ $post->id }}">{{ $post->post_title }}</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: CATEGORIES -->






    <!-- CALL TO ACTION -->
    <div class="call-to-action call-to-action-colored background-colored m-b-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-10" data-animate="fadeInUp" data-animate-delay="600">
                    <h3>{{ $page[0]->dir_title }}</h3>
                    <p>{{ $page[0]->dir_desc }}</p>
                </div>
                <div class="col-lg-2"> <a href="/businessdirectory" class="btn btn-light btn-outline">View
                        Directory</a> </div>
            </div>
        </div>
    </div>
    <!-- END: CALL TO ACTION -->












    <div class="links__cards__section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="link__card">
                        <div class="card__image">
                            <img src="{{ asset('front/img/links_image-2.jpg') }}" alt="">
                        </div>
                        <div class="card__body">
                            <h3 class="card__title">
                                Advertise in Magazine
                            </h3>
                            <p align="justify" class="card__content">
                                Be ahead of your competition and have your
                                brand, valves, message or offers broadcast
                                across the London Borough of Croydon. The
                                Green Guide Magazine is a platform to help you
                                achieve your business goals.
                            </p>
                            <a href="/magzine-design-book" class="btn btn-dark">Advertise Today <i
                                    class="ps-3 fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="link__card">
                        <div class="card__image">
                            <img src="{{ asset('front/img/lilnks-image-1.jpg') }}" alt="">
                        </div>
                        <div class="card__body">
                            <h3 class="card__title">
                                Business Listing
                            </h3>
                            <p align="justify" class="card__content">
                                Promote your business by registering your FREE
                                business listing on our online busines directory.
                                We want you to positively communicate and
                                engage within your local market and the Green
                                Guide Directory is a tool for you to reach more customers.
                            </p>
                            <a href="/businessdirectory" class="btn btn-dark">Advertise Today <i
                                    class="ps-3 fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="link__card">
                        <div class="card__image">
                            <img src="{{ asset('front/img/links_image-3.jpg') }}" alt="">
                        </div>
                        <div class="card__body">
                            <h3 class="card__title">
                                Events Calendar
                            </h3>
                            <p align="justify" class="card__content">
                                Embrace and enhance community spirt by
                                offering a free inclusive calendar to update local
                                residents of what is going on in their local area. If
                                you have an event or activity you can register for
                                FREE.

                            </p>
                            <a href="/localevents" class="btn btn-dark">Events Listing <i
                                    class="ps-3 fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








@push('particles')
     <!-- Partical js base file  -->
 <script src="{{asset('front/plugins/particles/particles.js')}}" type="text/javascript"></script>
 <!--Particles stars-->
 <script src="{{asset('front/plugins/particles/particles-stars.js')}}" type="text/javascript"></script>
@endpush





    <script>
        var TxtRotate = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtRotate.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

            var that = this;
            var delta = 60;

            if (this.isDeleting) {
                delta /= 2;
            }

            if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 60;
            }

            setTimeout(function() {
                that.tick();
            }, delta);
        };

        window.onload = function() {
            var elements = document.getElementsByClassName('txt-rotate');
            for (var i = 0; i < elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-rotate');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                    new TxtRotate(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #66;color:green }";
            document.body.appendChild(css);
        };
    </script>
@endsection
