@extends('frontend.layouts.master')





@section('main-section')


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
                                    <tr>
                                        <td>Christmas Special</td>
                                        <td>1st Oct 2022</td>
                                        <td>1st Nov 2022</td>
                                        <td><a href="/advert-design-book/#book__addvertise" class="btn btn-primary">Book
                                                Now</a></td>
                                    </tr>
                                    <tr>
                                        <td>Spring 2023</td>
                                        <td>15th Feb 2023</td>
                                        <td>15th Mar 2023</td>
                                        <td><a href="/advert-design-book/#book__addvertise" class="btn btn-primary">Book
                                                Now</a></td>
                                    </tr>
                                    <tr>
                                        <td>Summer 2023</td>
                                        <td>15th May 2023</td>
                                        <td>15th Jun 2023</td>
                                        <td><a href="/advert-design-book/#book__addvertise" class="btn btn-primary">Book
                                                Now</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="container my-5">
            <div class="row my-5">
                <div class="col-lg-6 col-md-12 p-2 p-sm-3">
                    <div class="image">
                        <img style="z-index:100; display: flex !important;" width="100%"
                            src="{{ asset('uploads/' . $page->sec3_image) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 p-2 p-sm-3">
                    @php
                        echo $page->sec3_content;
                    @endphp
                    <div class="text-center mt-3">
                        <a href="/download-media-pack" class="btn btn-outline-primary">Media Pack <i
                                class="ps-3 fa fa-download"></i></a>
                    </div>
                </div>
            </div>
        </div>





        <div class="container-fluid bg-dark py-5" style="margin:5rem 0;">
            <div class="container my-5">
                <div class="row my-5 d-flex justify-content-around">

                    <div class="col-lg-6 col-md-12  text-white">


                        @php
                            echo $page->sec4_content;
                        @endphp

                        <div class="text-center mt-3">
                            <a href="/magzine-design-book" class="btn btn-outline-primary">Find out More <i
                                    class="ps-3 fa fa-download"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 ">
                        <div class="image">
                            <img style="z-index:100; display: flex !important;" width="100%"
                                src="{{ asset('uploads/' . $page->sec4_image) }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>











        <div class="container my-5">
            <div class="row my-5">
                <div class="col-lg-6 col-md-12 p-2 p-sm-3">
                    <div class="image">
                        <img style="z-index:100; display: flex !important;" width="100%"
                            src="{{ asset('uploads/' . $page->sec5_image) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 p-2 p-sm-3">
                    @php
                        echo $page->sec5_content;
                    @endphp
                    <div class="text-center mt-3">
                        <a href="/advert-design-book" class="btn btn-outline-primary">Find out more</a>
                    </div>
                </div>
            </div>
        </div>













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
                                <a href=" {{ url('') }}/{{ $links[0]->link2 }}" class="btn btn-dark">Business
                                    Listing <i class="ps-3 fa fa-arrow-right"></i></a>
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
                                <a href=" {{ url('') }}/{{ $links[0]->link3 }}" class="btn btn-dark">Events
                                    Listing <i class="ps-3 fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>








    </div>










    <script src="{{ url('front/js/jquery.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/js/swiper.min.js"></script>
@endsection
