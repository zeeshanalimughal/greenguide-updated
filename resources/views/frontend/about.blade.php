@extends('frontend.layouts.master')
@section('main-section')
    <section id="page-title" class="text-light" data-bg-parallax="{{ asset('uploads/' . $page[0]->ab_image) }}">
        <div class="container">
            <div class="breadcrumb" data-animate="fadeInUp" data-animate-delay="1300">
                <ul>
                    <li><a href="/">Home</a> </li>
                    <li class="active">{{ $page[0]->ab_title }}</li>
                </ul>
            </div>
            <div class="page-title" data-animate="fadeInUp" data-animate-delay="1300">
                <h1>{{ $page[0]->ab_title }}</h1>
                <!-- <span>Simple page title with background parallax image</span> -->
            </div>
        </div>
    </section>
    <!-- end: Page title -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="heading-text heading-section">
                        <h2>{{ $page[0]->ab_title }}</h2>

                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-6">
                            <p align="justify">{{ $page[0]->ab_desc1 }}</p>
                        </div>

                        <div class="col-lg-6">
                            <p align="justify">{{ $page[0]->ab_desc2 }}</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="box-fancy section-fullwidth text-light p-b-0">
        <div class="row">
            <div style="background-color:#4f9467" class="col-lg-4">
                <h1 class="text-lg text-uppercase">01.</h1>
                <p align="justify">{{ $page[0]->ab_box1 }}</p>

            </div>

            <div style="background-color:#437c56" class="col-lg-4">
                <h1 class="text-lg text-uppercase">02.</h1>
                <p align="justify">{{ $page[0]->ab_box2 }}</p>

            </div>

            <div style="background-color:#335e41" class="col-lg-4">
                <h1 class="text-lg text-uppercase">03.</h1>
                <p align="justify">{{ $page[0]->ab_box3 }}</p>

            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="heading-text text-center">
                <h2>{{ $page[0]->ab_company }}</h2>
                <p class="lead text-center">{{ $page[0]->ab_company_qt }}</p>
            </div>
            {{-- @if (!$distributors)
            <!-- Testimonials -->
            <div class="carousel arrows-visibile testimonial testimonial-single testimonial-left" data-items="1">

                    <!-- Testimonials item -->
                    @foreach ($distributors as $distributor)
                        <div class="testimonial-item">
                            <img src="{{ url('uploads/' . $distributor->image) }}" style="object-fit: cover"
                                alt="">
                            @php
                                echo $distributor->message;
                            @endphp
                            <span>{{ $distributor->name }}</span>
                            <span>{{ $distributor->position }}</span>
                        </div>
                    @endforeach
                </div>
                @endif --}}
            <!-- end: Testimonials -->
        </div>


    </section>





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
@endsection
