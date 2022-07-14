

    @extends("frontend.layouts.master")
@section('main-section')
    <section id="page-title"
        class="text-light green-initiative-hero community-growth-hero d-flex justify-content-center align-items-center" data-animate="fadeIn" data-animate-delay="500"
        style="
         position:relative;
  width     : 100%;
  min-height: 100vh;
  background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
  url('{{ asset('uploads/' . $communitygrowth[0]->cg_hero_image) }}') !important;
  background-repeat  : no-repeat;
  background-size    : cover;
  background-position: center;
        "
        >
        <div class="container d-flex justify-content-center align-items-center flex-column">
            <div class="page-title" data-animate="fadeInUp" data-animate-delay="1300">
                <h2 class="community-growth-title" style="text-align: center; color: white;">{{$communitygrowth[0]->cg_title}}</h2>
                <p class="font-size-lg">{{$communitygrowth[0]->cg_subtitle}}</p>
            </div>

            <a href="/add-new-directory" data-animate="fadeInUp" data-animate-delay="1500"><button class="btn__advertise px-5 py-3">Advertise within Green Guide magazine</button></a>
        </div>
    </section>





    <!-- end: Page title -->



    <!-- Recycling Section -->
    <section class="resycling my-4 bg-white py-5">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-4 col-md-12 col-sm-12 mt-3" data-animate="fadeInLeft" data-animate-delay="500">
                    <div class="img-container position-relative w-100 bg-success">
                        <img src="{{ url('uploads/'.$communitygrowth[0]->cg_sec2_image) }}" class="border img-responsive w-100"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 mt-3 mt-sm-0">
                    <h2 class=" line-height-l font-weight-600 text-left" data-animate="fadeInRight" data-animate-delay="500">
                        {{$communitygrowth[0]->cg_sec2_title}}
                    </h2>
                    <div class="text-dark  font-size-lg line-height-l text-left" align="justify" data-animate="fadeInRight" data-animate-delay="700">
                      @php
                        echo $communitygrowth[0]->cg_sec2_desc
                      @endphp
                    </div>
                </div>

            </div>
        </div>
    </section>





    <div class="why__choose__greenguide">
        <div class="container">
            <h2 class="title" data-animate="fadeInDown" data-animate-delay="500">
              {{$communitygrowth[0]->cg_sec3_title}}
            </h2>
            @php
            $communitygrowth = explode('|', $communitygrowth[0]->cg_sec3_desc);
            $size = sizeof($communitygrowth) / 2;
        @endphp
            <div class="row">
               
                 <div class="col-lg-6 col-md-12 p-1 p-sm-4 ">
                    @for ($i = 1; $i <= $size; $i++)
                        <div class="list__items" data-animate="fadeInLeft"
                            data-animate-delay="{{ $i == 1 ? 800 : 450 * $i }}">
                            <div class="icon">

                                <img src="{{ url('front/img/list-image-' . $i . '.png') }}" alt="">

                            </div>
                            <div class="text text-white" style="font-size:16px !important;">

                                @php
                                    echo $i == 1 ? $communitygrowth[0] : $communitygrowth[$i - 1];
                                @endphp
                            </div>
                        </div>
                    @endfor
                </div>

                @php
                    $size = sizeof($communitygrowth);
                    $newSize = $size / 2;
                @endphp
                <div class="col-lg-6 col-md-12 p-1 p-sm-4 ">
                    @for ($i = $newSize + 1; $i <= $size; $i++)
                        <div class="list__items" data-animate="fadeInRight" data-animate-delay="{{ 200 * $i }}">
                            <div class="icon">

                                <img src="{{ url('front/img/list-image-' . $i . '.png') }}" alt="">

                            </div>
                            <div class="text">
                                @php
                                    echo $communitygrowth[$i - 1];
                                @endphp
                            </div>
                        </div>
                    @endfor
                </div>

            </div>
        </div>
    </div>













    <section class="hyperlinks d-flex justify-content-center m-0">
        <div class="container text-center m-0 ">
            <div class="grid-layout post-3-columns" data-item="post-item">
                <div class="post-item  " >
                    <a href="/businessdirectory" class="text-muted font-weight-600">
                        <div class="post-item-wrap p-t-100 p-b-100 bg-light font-size-xl m-0 font-weight-600" data-animate="fadeInUp" data-animate-delay="600">

                            Business Directory
                        </div>
                    </a>
                </div>

                <div class="post-item  " >
                    <a href="/advertise" class="text-muted font-weight-600">
                        <div class="post-item-wrap p-t-100 p-b-100 bg-light font-size-xl m-0 font-weight-600 " data-animate="fadeInUp" data-animate-delay="800">

                            <!-- <br> -->
                            Advertise
                        </div>
                    </a>
                </div>

                <div class="post-item  " >
                    <a href="/localevents" class="text-muted font-weight-600">
                        <div class="post-item-wrap p-t-100 p-b-100 bg-light font-size-xl m-0 font-weight-600" data-animate="fadeInUp" data-animate-delay="1000">

                            Local Events
                        </div>
                    </a>
                </div>


            </div>
        </div>
    </section>



    <div class="container-fluid d-flex justify-content-center flex-column my-5">
        <div class="row d-flex justify-content-center">
            <div class="content col-lg-12 d-flex justify-content-center">
                <div class="d-flex justify-content-center bg-light">
                    <ul class="d-flex justify-content-center flex-wrap" style="list-style-type: none;">
                        <li>
                            <a href="#"><img style="width:200px; height: 200px; margin:20px 40px" alt="" src="{{ url('front/img/logos/logo2.png') }}"></a>
                        </li>
                        <li>
                            <a href="#"><img style="width:200px; height: 200px; margin:20px 40px" alt="" src="{{ url('front/img/logos/logo3.png') }}"></a>
                        </li>
                        <li>
                            <a href="#"><img style="width:200px; height: 200px; margin:20px 40px" alt="" src="{{ url('front/img/logos/logo1.png') }}"></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    


    </section> -->
    <!-- end: CONTENT -->







    






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

