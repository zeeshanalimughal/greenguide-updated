@extends('frontend.layouts.master')
@section('main-section')
    <div class="advertise__hero" data-animate="fadeIn" data-animate-delay="500"
        style="
                                                               width     : 100%;
                                                            min-height: 80vh;
                                                            /* padding:3rem 0; */
                                                            background-image: linear-gradient(to right, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.2)),
                                                            url('{{ asset('uploads/' . $page->hero_image) }}') !important;
                                                            background-repeat  : no-repeat;
                                                            background-size    : cover;
                                                            background-position: center;
                                                            display            : flex;
                                                            justify-content    : center;
                                                            align-items        : center;
                                                            flex-direction     : column;
                                                            align-items        : center;
                                                            ">
        <h1 class="title" data-animate="fadeInDown" data-animate-delay="1000">
            {{ $page->hero_heading }}
        </h1>
        <h3 class="subtitle" data-animate="fadeInDown" data-animate-delay="1100">
            {{ $page->hero_subheading }}
        </h3>
        <a href="/download-media-pack" data-animate="fadeInUp" data-animate-delay="1200"><button
                class="btn__advertise">The Latest Issue</button></a>
    </div>







    <div class="advert__in__design__section">
        <div class="container my-5">
            <div class="row my-5">
                <div class="col-lg-6 col-md-12 p-2 p-sm-3">
                    <div class="image">
                        <img style="z-index:100; display: flex !important;" width="100%"
                            src="{{ asset('uploads/' . $page->sec1_image) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 p-2 p-sm-3">
                    {{-- <h3 class="heading " style="font-weight: 600">
                        Green Guide Croydon Magazine
                    </h3>
                    <p class="desc" style="font-size:18px; " align="justify">
                        We're helping build lives and livelihoods by combining our specialist
                        knowledge in distribution with close collaborations with businesses
                        to help local residents discover what amenities and services are at
                        their disposal. The Green Guide Magazine will be posted to
                        residents based in the London Borough of Croydon (~156,000
                        households) with the aim to help build community growth.
                    </p> --}}

                    @php
                        
                        echo $page->sec1_content;
                        
                    @endphp
                    <div class="text-center mt-3">
                        <a href="/download-media-pack" class="btn btn-outline-primary">Media Pack <i
                                class="ps-3 fa fa-download"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-dark py-5" style="margin:5rem 0;">
            <div class=" my-5">
                <div class="row my-5 d-flex justify-content-around">

                    <div class="col-lg-4 col-md-12  text-white">
                        {{-- <h2 class="heading " style="font-weight: 600">
                            Upcoming Issues
                        </h2>
                        <p class="desc" style="font-size:18px; " align="justify">
                            The Green Guide magazine is a quarterly publication of local messages, community initiatives and
                            a business directory which will be distributed across the London Borough of Croydon. We offer a
                            range of advert sizes to accommodate any marketing budget.
                        </p> --}}

                        @php
                            
                            echo $page->sec2_content;
                            
                        @endphp


                        <div class="text-center mt-5">
                            <a href="/advert-design-book/#book__addvertise" class="btn btn-outline-primary">Book Now <i
                                    class="ps-3 fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 ">
                        <div class="table-responsive">
                            <table class="table text-white">
                                <thead>
                                    <tr>
                                        <th>Issue</th>
                                        <th>Artwork and Payment Deadline</th>
                                        <th>Distribution Commencement</th>
                                        <th>Book</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($latestIssues as $issue)
                                        <tr>
                                            <td>{{ $issue->issue }}</td>
                                            <td>{{ $issue->deadline }}</td>
                                            <td>{{ $issue->commencement }}</td>
                                            <td><a href="/advert-design-book/#book__addvertise" class="btn btn-primary">Book
                                                    Now</a></td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        {{-- @php

                            echo $page->sec2_table

                        @endphp --}}
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div class="media_preview_file">

        <embed src="{{ asset('/front/media/Media-Pack.pdf') }}" style="width:100%;height:100%;">

    </div>




    {{--

    <div class="upcomming__issues pt-5">
        <div class="container">
            <div class="row p-0 m-0 d-flex justify-content-between">
                <div class="col-lg-5 col-md-12 p-0 m-0 animate__animated animate__fadeInLeft visible"
                    data-animate="fadeInLeft" data-animate-delay="600">
                    <h2 class="title">Upcoming Issues
                    </h2>
                    <p class="description">The Green Guide magazine is a unified publication of local messages, community
                        initiatives and a business directory. Connecting residents with their local market to establish a
                        pathway for community growth. Download the latest issue or access our archives.

                    </p>
                </div>
                <div class="col-lg-6 col-md-12 p-0 m-0 animate__animated animate__fadeInRight visible"
                    data-animate="fadeInRight" data-animate-delay="700">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">{{ $settings[0]->ui_heading_one }}</th>
                                    <th class="wd-15p border-bottom-0">{{ $settings[0]->ui_heading_two }}</th>
                                    <th class="wd-15p border-bottom-0">{{ $settings[0]->ui_heading_three }}
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($issues as $issue)
                                    <tr>
                                        <td>{{ $issue->issue }}</td>
                                        <td>{{ $issue->deadline }}</td>
                                        <td>{{ $issue->commencement }}</td>

                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}







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
                            <a href=" {{ url('') }}/{{ $links[0]->link1 }}" class="btn btn-dark">Advertise Today <i
                                    class="ps-3 fa fa-arrow-right"></i></a>
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
                            <a href=" {{ url('') }}/{{ $links[0]->link2 }}" class="btn btn-dark">Business Listing <i
                                    class="ps-3 fa fa-arrow-right"></i></a>
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













    <script src="{{ url('front/js/jquery.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/js/swiper.min.js"></script>

    <script>
        $(document).on("scroll", function() {
            if ($(document).scrollTop() > 100) {
                setTimeout(() => {
                    $(".fixed__advertise__link").addClass("active")
                }, 400);
            } else {
                setTimeout(() => {
                    $(".fixed__advertise__link").removeClass("active")
                }, 400);
            }
        });
    </script>
@endsection
