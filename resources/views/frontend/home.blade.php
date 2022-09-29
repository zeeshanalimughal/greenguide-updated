@extends('frontend.layouts.master')

@push('home-css')
    <link rel="stylesheet" href="{{ url('front/css/home.css') }}">
@endpush

<style>
    .containerGrid {
        margin: auto !important;
        width: 70%;
        min-height: 80vh;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-rows: 1fr 1fr 1fr;
        grid-column-gap: 0px;
        grid-row-gap: 0px;
        /* justify-content: center; */
        justify-items: center;
        align-items: center;
        justify-content: center;
    }

    .containerGrid .box {
        width: 100%;
        height: 100%;
        background: green;
    }

    .containerGrid .box:nth-child(2n+1) {
        background: orange;
    }

    .containerGrid .box:nth-child(3n+2) {
        background: red;
    }

    .containerGrid .box:nth-child(5) {
        width: 100%;
        min-height: 85%;
        background: pink;
        grid-column-start: 2;
        grid-column-end: 3;
        grid-row-start: 2;
        grid-row-end: 4;
    }
</style>

@section('main-section')
    <!-- Particle stars -->
    <section
        style="min-height: 95vh; background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)), url('{{ asset('uploads/' . $page[0]->hero_image) }}') !important; background-repeat: no-repeat; background-size: cover; background-position:center center; display:flex;align-items: center;">
        <div id="particles-stars" class="particles"></div>
        <div class="container ">
            <div class="">
                <div class="home_hero_animated_text">
                    <h1 class="mb-4 text-center"> {{ $page[0]->hero_title1 }}</h1>
                    <h2 class="mt-5"><span> {{ $page[0]->hero_title2 }}</span>
                        @php
                            $animatedTextArray = explode('|', $page[0]->hero_animated_title);
                            // print_r($animatedTextArray);
                        @endphp
                        @php
                            echo $animatedTextArray[0];
                        @endphp

                        <span style="color:green !important;font-size: 4rem !important;">
                            <span class="txt-rotate" style="font-weight: 800" data-period="2000"
                                data-rotate='[@for ($i = 1; $i < sizeof($animatedTextArray) ; $i++) "@php echo trim($animatedTextArray[$i]); @endphp" @if ($i < sizeof($animatedTextArray) - 1), @endif @endfor]'>

                            </span>
                        </span>
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <!-- end: Particle stars -->














    <!-- CATEGORIES -->
    <section class="p-t-0 p-b-40 mt-5">
        <div class="container mt-4">

            <div class="row">
                <div class="col-lg-4">
                    <div class="highlight-image">
                        <img src="{{ asset('uploads/' . $page[0]->post_category_image1) }}" alt="">
                        <div class="highlight-title">
                            {{ $page[0]->post_category_title1 }}
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
                <div class="col-lg-4">
                    <div class="highlight-image">
                        <img src="{{ asset('uploads/' . $page[0]->post_category_image2) }}" alt="">
                        <div class="highlight-title">
                            {{ $page[0]->post_category_title2 }}
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
                <div class="col-lg-4">
                    <div class="highlight-image">
                        <img src="{{ asset('uploads/' . $page[0]->post_category_image3) }}" alt="">
                        <div class="highlight-title">
                            {{ $page[0]->post_category_title3 }}
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






    <!-- Content -->
    <section id="page-content" style="margin-top:50px">

        {{-- <div class="containerGrid">
                @foreach ($galleryData as $gallery)
                            <div class="box">
                            </div>
                @endforeach
    </div> --}}
        <div class="container">
            <!-- post content -->
            <!-- Page title -->
            <div class="page-title">
                {{-- <h1>Blog - Three Columns</h1> --}}
            </div>
            <!-- end: Page title -->
            <!-- Blog -->
            <div id="blog" class="grid-layout post-3-columns m-b-30" style="min-height: 85vh !important" data-item="post-item">

                @foreach ($galleryData as $gallery)
                    <!-- Post item YouTube-->
                    <div class="post-item border" style="max-height: 260px;position: relative;">
                        <div class="post-item-wrap" style="max-height: 560px;">
                            <div class="post-item-wrap hero__post__back" style="max-height: 560px;">
                                @if ($gallery->file_type === 'image')
                                <div class="post-slider" style="max-height: 260px;">
                                    <div class="carousel dots-inside arrows-visible arrows-only" data-autoplay="2600"
                                        data-animate-in="fadeIn" data-animate-out="fadeOut" data-items="1" data-loop="true"
                                        data-autoplay="true" data-lightbox="gallery" style="max-height: 460px;">

                                        @if ($gallery->images)
                                            @if ($gallery->file_type === 'image')
                                                @foreach ($gallery->images as $image)
                                                    <a href="{{ asset('uploads/') }}/{{ $image['name'] }}"
                                                        data-lightbox="gallery-image">
                                                        <img style="max-height: 260px; object-fit:cover;" alt=""
                                                            src="{{ asset('uploads/') }}/{{ $image['name'] }}">
                                                    </a>
                                                @endforeach

                                               
                                            @endif
                                        @endif
                                    </div>

                                </div>

                                @else
                                <div style="background: transparent;width:100%;height:1570px;border-radius: 20px;position: relative;">

                                    <video style="width:100%;position: absolute;top: 0;left: 0;"  controls>
                                        <source src="{{ asset('uploads/'.$gallery->images[0]['name']) }}">
                                    </video>
                                </div>
                            
                                @endif
                                @if ($gallery->desc)
                                    <div class="post__back" style="display: flex;justify-content: center;align-items: center;flex-direction: column;text-align: center;">
                                        <p>{{ $gallery->desc }}
                                        </p>
                                        <div>
                                            <a href="{{ $gallery->link }}" class="btn btn-info">Read More</a>
                                        </div>
                                    </div>
                                @endif

                                @if ($gallery->desc == null)
                                <div style="display: flex;justify-content: center;align-items: center;flex-direction: column;text-align: center;padding:20px;">

                                    <h3>{{ $gallery->title }}</h3>
                                    <div class="text-center">
                                        <a href="{{ $gallery->link }}" class="btn btn-success">Find Out</a>
                                    </div>
                                </div>
                                @endif
 
                            </div>

                        </div>
                    </div>
                    <!-- end: Post item YouTube-->
                @endforeach

            </div>
            <!-- end: Blog -->
        </div>
        <!-- end: post content -->
    </section>
    <!-- end: Content -->








    <!-- CAROUSEL -->
    <section class="background-colored">
        <div class="container">
            <div class="text-medium text-light" data-animate="fadeInDown" data-animate-delay="600">
                {{ $page[0]->highlight_title }}
            </div>
            <div class="grid-articles carousel post-carousel m-b-20" data-dots="false" data-lightbox="gallery">

                @foreach ($highlights as $highlight)
                    <article class="post-entry" data-animate="fadeInUp" data-animate-delay="900">
                        <a href="#" class="post-image"><img alt=""
                                src="{{ asset('uploads/') }}/{{ $highlight->image }}"></a>
                        <div class="post-entry-overlay">
                            <div class="post-entry-meta">
                                <div class="post-entry-meta-category">
                                    <span class="badge bg-danger">{{ $highlight->category_name }}</span>
                                </div>
                                <div class="post-entry-meta-title">
                                    <h2><a href="#">{{ $highlight->title }}</a></h2>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach

            </div>
            <div class="text-light text-end">
                <a class="read-more" href="#">
                    {{ $page[0]->highlight_link_text }} <i class="fa fa-long-arrow-alt-right"></i></a>
            </div>
        </div>
    </section>
    <!-- end: CAROUSEL -->






    <div class="links__cards__section">
        <div class="container">
            <div class="row">


                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="link__card">
                        <div class="card__image">
                            <img src="{{ asset('uploads/' . $links[0]->image1) }}" alt="">
                        </div>
                        <div class="card__body">
                            <h3 class="card__title">
                                {{ $links[0]->title1 }}
                            </h3>
                            <p align="justify" class="card__content">
                                {{ $links[0]->details1 }}
                            </p>
                            <a href=" {{ url('') }}/{{ $links[0]->link1 }}" class="btn btn-dark">Advertise Today
                                <i class="ps-3 fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="link__card">
                        <div class="card__image">
                            <img src="{{ asset('uploads/' . $links[0]->image2) }}" alt="">
                        </div>
                        <div class="card__body">
                            <h3 class="card__title">
                                {{ $links[0]->title2 }}
                            </h3>
                            <p align="justify" class="card__content">
                                {{ $links[0]->details2 }}
                            </p>
                            <a href=" {{ url('') }}/{{ $links[0]->link2 }}" class="btn btn-dark">Business Listing
                                <i class="ps-3 fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="link__card">
                        <div class="card__image">
                            <img src="{{ asset('uploads/' . $links[0]->image3) }}" alt="">
                        </div>
                        <div class="card__body">
                            <h3 class="card__title">
                                {{ $links[0]->title3 }}
                            </h3>
                            <p align="justify" class="card__content">
                                {{ $links[0]->details3 }}
                            </p>
                            <a href=" {{ url('') }}/{{ $links[0]->link3 }}" class="btn btn-dark">Events Listing <i
                                    class="ps-3 fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    @push('particles')
        <!-- Partical js base file  -->
        <script src="{{ asset('front/plugins/particles/particles.js') }}" type="text/javascript"></script>
        <!--Particles stars-->
        <script src="{{ asset('front/plugins/particles/particles-stars.js') }}" type="text/javascript"></script>
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
