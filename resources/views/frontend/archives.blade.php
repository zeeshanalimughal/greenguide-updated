@extends('frontend.layouts.master')
@section('main-section')

    <div class="advert__in__design__section">
        <div class="container my-5">
            <div class="row my-5">
                <div class="col-lg-6 col-md-12 p-2 p-sm-3">
                    <div class="image">
                        <img style="z-index:100; display: flex !important;" width="100%"
                            src="{{ asset('front/img/advertise-in-design.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 p-2 p-sm-3">
                    <h3 class="heading " style="font-weight: 600">
                        Green Guide Croydon Magazine
                    </h3>
                    <p class="desc" style="font-size:18px; " align="justify">
                        We're helping build lives and livelihoods by combining our specialist
                        knowledge in distribution with close collaborations with businesses
                        to help local residents discover what amenities and services are at
                        their disposal. The Green Guide Magazine will be posted to
                        residents based in the London Borough of Croydon (~156,000
                        households) with the aim to help build community growth.
                    </p>
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
                        <h2 class="heading " style="font-weight: 600">
                            Upcoming Issues
                        </h2>
                        <p class="desc" style="font-size:18px; " align="justify">
                            The Green Guide magazine is a quarterly publication of local messages, community initiatives and
                            a business directory which will be distributed across the London Borough of Croydon. We offer a
                            range of advert sizes to accommodate any marketing budget.
                        </p>
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
    </div>






    <div class="media_preview_file">

        <embed src="{{ asset('/front/media/Media-Pack.pdf') }}" style="width:100%;height:100%;">

    </div>






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
                                    <th scope="col">Issue</th>
                                    <th scope="col">Artwork and Payment Deadline</th>
                                    <th scope="col">Distribution Commencement</th>
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
    </div>





    <div class="container-fluid d-flex justify-content-center flex-column my-5">
        <div class="row d-flex justify-content-center">
            <div class="content col-lg-12 d-flex justify-content-center">
                <div class="d-flex justify-content-center bg-light">
                    <ul class="d-flex justify-content-center" style="list-style-type: none;">
                        <li>
                            <a href="#"><img style="width:200px; height: 200px; margin:20px 40px" alt=""
                                    src="{{ url('front/img/logos/logo2.png') }}"></a>
                        </li>
                        <li>
                            <a href="#"><img style="width:200px; height: 200px; margin:20px 40px" alt=""
                                    src="{{ url('front/img/logos/logo3.png') }}"></a>
                        </li>
                        <li>
                            <a href="#"><img style="width:200px; height: 200px; margin:20px 40px" alt=""
                                    src="{{ url('front/img/logos/logo1.png') }}"></a>
                        </li>
                        {{-- <li>
                            <a href="#"><img style="width:200px; height: 200px; margin:20px 40px" alt="" src="{{ url('front/img/logos/logo1.png') }}"></a>
                        </li> --}}
                    </ul>
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
