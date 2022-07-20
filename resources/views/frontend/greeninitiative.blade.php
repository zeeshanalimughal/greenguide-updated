@extends("frontend.layouts.master")
@section('main-section')
    <section id="page-title" class="text-light green-initiative-hero d-flex justify-content-center align-items-center"
        data-animate="fadeIn" data-animate-delay="500" style="
              width              : 100%;
            min-height         : 100vh;
            background-image   : url('{{ asset('uploads/' . $page[0]->gi_hero_image) }}') !important;
            background-repeat  : no-repeat;
            background-size    : cover;
            background-position: center center;
            display            : flex;
            align-items        : center;
            ">
        <div class="container d-flex justify-content-center align-items-center flex-column">
            <div class="page-title" data-animate="fadeInUp" data-animate-delay="1300">
                <h2 style="text-align: center; color: white;">{{$page[0]->gi_title}}</h2>
                <p class="font-size-lg">{{$page[0]->gi_subtitle}}</p>
            </div>
            <div class="row mt-5 w-100 d-flex justify-content-center">
                <div class="col-lg-4 col-md-6 me-0 me-sm-4 text-center p-t-20 p-b-20 my-2 transparent border border-2  border-white"
                    data-animate="fadeInUp" data-animate-delay="1800">
                    <p>Green Guide Magazine Printed</p>
                    <h3 class="coloured-count counter"><span data-from="0" data-to="156000" data-speed="1000"
                            data-refresh-interval="5000"></span></h3>
                </div>
                <div class="col-lg-4 col-md-6  text-center p-t-20 p-b-20 my-2 transparent border border-2  border-white"
                    data-animate="fadeInUp" data-animate-delay="1800">
                    <p>TOTAL TREES PLANTED TO DATE
                    </p>
                    <h3 class="coloured-count counter"><span data-from="1" data-to="15" data-speed="1"
                            data-refresh-interval="5000"></span>
                    </h3>
                </div>
            </div>
            <div class="text-center" data-animate="fadeInUp" data-animate-delay="2000">
                <p class="font-size-lg mt-8">{{$page[0]->gi_desc}}</p>
            </div>
        </div>
    </section>

    <!-- end: Page title -->





    <section class="green__guide__forest">
        <div class="container d-flex justify-content-center">
            <div class="row">
                <div class="col-lg-6 col-md-12 ">
                      <h3 class="mb-2 p-0 text-center">Track the offset with trees planted with  Forest Nation.</h3>

                    <div class="green__guide__box bg-dark text-white">
                        <div class="logo"><img  style="width:120px" src="{{asset('front/img/green-guide-logo.png')}}" alt=""></div>
                        <h2>Green Guide</h2>
                        <div class="row mb-4">
                            <div class="col-12 d-flex align-items-center">
                                <img style="width:70px; margin-right: 12px; object-fit: cover;" src="{{asset('front/img/edenproject-150x150.png')}}" alt="">
                                <h2 class="p-0 m-0" style="line-height: 20px">100 |<span style="font-size:16px;"> Trees Planted</span></h2>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-12 d-flex align-items-center">
                                <img style="width:70px; margin-right: 12px; object-fit: cover;" src="{{asset('front/img/edenproject-150x150.png')}}" alt="">
                                <h2 class="p-0 m-0" style="line-height: 20px">3.75 |<span style="font-size:16px;"> Tons of CO2 absorbed yearly</span></h2>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-12 d-flex align-items-center">
                                <img style="width:70px; margin-right: 12px; object-fit: cover;" src="{{asset('front/img/edenproject-150x150.png')}}" alt="">
                                <h2 class="p-0 m-0" style="line-height: 20px">15.00 |<span style="font-size:16px;"> Tons of Oxygen created yearly</span></h2>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-12 d-flex align-items-center">
                            <a href="#" class="btn btn-info rounded">See More Impact</a>
                            </div>
                        </div>

                    </div>
                </div>
     
                <div class="col-lg-6 col-md-12 ">
                    <h3 class="mb-2 p-0 text-center">Help fund our reforestation project</h3>
                    <div class="green__guide__box bg-dark text-white">
                        <div class="logo"><img  style="width:120px" src="{{asset('front/img/green-guide-logo.png')}}" alt=""></div>
                        <h2 class="text-center">Green Guide <br>Forest</h2>
                        <div class="row mb-4">
                            <div class="col-12 d-flex align-items-center">
                                <img style="width:70px; margin-right: 12px; object-fit: cover;" src="{{asset('front/img/edenproject-150x150.png')}}" alt="">
                                <h2 class="p-0 m-0" style="line-height: 20px">100 |<span style="font-size:16px;"> Trees Planted</span></h2>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-12 d-flex align-items-center">
                                <img style="width:70px; margin-right: 12px; object-fit: cover;" src="{{asset('front/img/edenproject-150x150.png')}}" alt="">
                                <h2 class="p-0 m-0" style="line-height: 20px">3.75 |<span style="font-size:16px;"> Tons of CO2 absorbed yearly</span></h2>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-12 d-flex align-items-center">
                                <img style="width:70px; margin-right: 12px; object-fit: cover;" src="{{asset('front/img/edenproject-150x150.png')}}" alt="">
                                <h2 class="p-0 m-0" style="line-height: 20px">15.00 |<span style="font-size:16px;"> Tons of Oxygen created yearly</span></h2>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-12 d-flex align-items-center">
                            <a href="#" class="btn btn-warning rounded">Plant Here</a>
                            </div>
                        </div>

                    </div>
                </div>
     
            </div>
        </div>
    </section>




    <!-- Recycling Section -->
    <section class="resycling my-4 bg-white py-5">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-5 col-md-12 col-sm-12 mt-3" data-animate="fadeInLeft" data-animate-delay="800">
                    <div class="img-container position-relative w-100 bg-primary">
                        <img src="{{ url('uploads/'.$page[0]->gi_sec2_image) }}" class="img-responsive w-100"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 mt-3 mt-sm-0" data-animate="fadeInRight" data-animate-delay="800">
                    <h1 class=" line-height-l font-weight-600 text-left">{{$page[0]->gi_sec2_title}}</h1>
                    <div class="text-dark  font-size-lg line-height-l text-left" align="justify">
                       @php
                           echo $page[0]->gi_sec2_desc;
                       @endphp
                    </div>
                </div>

            </div>
        </div>
    </section>




    <section class="resycling-importance d-flex justify-content-center align-items-center"
        style="background-image: linear-gradient(rgba(36,94,27,0.8),rgba(36,94,27,.8)),url({{ url('front/img/recycling-and-envoinament.jpg') }}); background-repeat: no-repeat background-size: cover; background-position: center center; background-attachment: fixed;">
        <div class="container d-flex justify-content-center align-items-center flex-column ">
            <div class="heaging mb-5" data-animate="fadeInDown" data-animate-delay="800">
                <p class="font-size-lg line-height-l fw-600 text-warning">
                    IMPORTANCE OF
                </p>
                <h2 class="display-4 font-weight-600 text-white">{{$page[0]->gi_sec3_title}}</h2>
            </div>

            <div class="text-white font-size-lg line-height-l text-left w-100" align="justify" data-animate="fadeInDown"
                data-animate-delay="900">
                @php
                echo $page[0]->gi_sec3_desc;
            @endphp
            </div>

        </div>
    </section>





    <section>
        <div class="container">
            <div class="row d-flex justify-content-between">

                <div class="col-lg-6 col-md-12 col-sm-12 mt-3 mt-sm-0">
                    <h1 class=" line-height-l font-weight-600 text-left" data-animate="fadeInUp" data-animate-delay="800">
                        {{$page[0]->gi_sec4_title}}</h1>
                    <div class="text-dark font-size-lg line-height-l text-justify" align="justify" data-animate="fadeInUp"
                        data-animate-delay="1000">
                        @php
                        echo $page[0]->gi_sec4_desc;
                    @endphp
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mt-5" data-animate="fadeInRight" data-animate-delay="1200">
                    <div class="img-container position-relative w-100 bg-primary">
                        <img src="{{ url('uploads/'.$page[0]->gi_sec4_image) }}" class="img-responsive w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>







    <section class="resycling-importance d-flex justify-content-center align-items-center"
        style="background-image: linear-gradient(rgba(36,94,27,0.8),rgba(36,94,27,.8)),url({{ url('front/img/carbon-footprint.jpg') }}); background-repeat: no-repeat background-size: cover; background-position: center center; background-attachment: fixed;">
        <div class="container d-flex justify-content-center align-items-center flex-column text-start">
            <div class="heaging mb-5" data-animate="fadeInDown" data-animate-delay="800">
                <h2 class="display-4 font-weight-600 text-white">{{$page[0]->gi_sec5_title}} </h2>
            </div>

            <div class="text-white font-size-lg line-height-l" align="justify" data-animate="fadeInUp"
                data-animate-delay="900">
                @php
                echo $page[0]->gi_sec5_desc;
            @endphp
            </div>

        </div>
    </section>




    <section>
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-6 col-md-12 col-sm-12 mt-5" data-animate="fadeInLeft" data-animate-delay="500">
                    <div class="img-container position-relative w-100 bg-primary">
                        <img src="{{url('uploads/'.$page[0]->gi_sec6_image)  }}" class="img-responsive w-100" alt="">

                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 mt-3 mt-sm-0">
                    <h2 data-animate="fadeInDown" data-animate-delay="500">{{$page[0]->gi_sec6_title}} </h2>
                    <div class="font-size-lg text-muted text-justify " align="justify" data-animate="fadeInUp"
                        data-animate-delay="600"> 
                        @php
                        echo $page[0]->gi_sec6_desc;
                    @endphp
                    </div>
                </div>
            </div>
        </div>
    </section>






    <section class="bg-light mt-5 py-4">
        <div class="container text-center">
            <h2 class="text-success" data-animate="fadeInUp" data-animate-delay="500">
                OUR GREEN PARTNERS
            </h2>
            <p class="text-dark font-size-lg line-height-l" data-animate="fadeInUp" data-animate-delay="500">
                Woodland Trust, Green Pop & Eden Reforestation
            </p>

        </div>
    </section>
    <div class="container d-flex justify-content-center my-5" data-animate="fadeInUp" data-animate-delay="600">
        <div class="row m-t-10 d-flex justify-content-center w-100">
            <div class="col-1"></div>
            <div class="col-lg-3 d-flex justify-content-center col-sm-12 ">
                <div class="img-container d-flex justify-content-center position-relative w-100">
                    <img width="150" src="{{ url('front/img/Woodland-Trust-Logo-150x150.jpg') }}" alt="">

                </div>
            </div>
            <div class="col-lg-3 d-flex justify-content-center col-sm-12 ">
                <div class="img-container d-flex justify-content-center position-relative w-100">
                    <img width="150" src="{{ url('front/img/green-pop-logo-150x150.jpg') }}" alt="">

                </div>
            </div>
            <div class="col-lg-3 d-flex justify-content-center col-sm-12 ">
                <div class="img-container d-flex justify-content-center position-relative w-100">
                    <img width="150" src="{{ url('front/img/edenproject-150x150.png') }}" alt="">

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


   
@endsection
