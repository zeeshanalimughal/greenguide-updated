@extends("frontend.layouts.master")
@section('main-section')
    <div class="fixed__advertise__link">
        <a href="/magzine-design-book">Advertise with us</a>
    </div>

    {{-- {{$advertise}} --}}


    <div class="advertise__hero" data-animate="fadeIn" data-animate-delay="500" style="
                                                               width     : 100%;
                                                            min-height: 80vh;
                                                            /* padding:3rem 0; */
                                                            background-image: linear-gradient(to right, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.2)),
                                                            url('{{ asset('uploads/' . $advertise[0]->add_hero_image) }}') !important;
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
            {{ $advertise[0]->ad_title }}
        </h1>
        <h3 class="subtitle" data-animate="fadeInDown" data-animate-delay="1100">
            {{ $advertise[0]->ad_subtitle }}
        </h3>
        <a href="/advert-design-book#book__addvertise" data-animate="fadeInUp" data-animate-delay="1200"><button
                class="btn__advertise">Advertise Now</button></a>
    </div>







    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12 pe-5">
                    <h1 class="job-section-two-title" data-animate="fadeInDown" data-animate-delay="800">
                        {{ $advertise[0]->ad_sec2_heading }}

                    </h1>


                    <div class="job-desc" data-animate="fadeInLeft" data-animate-delay="900">
                        <div class="text-left">
                            <ul>
                                @php
                                    $add_sec2_desc_arr = explode('|', $advertise[0]->ad_sec2_desc);
                                @endphp
                                @foreach ($add_sec2_desc_arr as $desc_arr)
                                    <li class="mb-3">
                                        @php 
                                        echo $desc_arr ;
                                        @endphp
                                    </li>
                                @endforeach

                            </ul>

                        </div>
                        <div class="text-left" data-animate="fadeInUp" data-animate-delay="700"><a
                                href="http://greenguide.atwebpages.com/advertise/advertise_book_now"
                                class="h-100 btn btn-success btn-shadow btn-rounded rounded-circle btn-iconed text-center py-2 py-sm-3 px-4 mt-4">Book
                                Now!</a></div>
                    </div>


                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="job-image-container advertise-side-image position-relative w-100">
                        <img src="{{ url('front/img/business-strategy.png') }}" class="img-1 img-responsive w-100" alt=""
                            data-animate="fadeInRight" data-animate-delay="900">
                        <div class="inner-image" data-animate="fadeInUp" data-animate-delay="1100">
                            <img src="{{ url('front/img/1520103821627.jpg') }}" class="image" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


























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
                        High exposure, low cost marketing approach
                    </h3>
                    <p class="desc" style="font-size:18px; " align="justify">
                        Green Guide Magazine is a high quality, informative magazine that is posted to residents of the
                        London Borough of Croydon on a quarterly basis. Take advantage of this amazing marketing avenue by
                        placing your advert in a high exposure magazine that is delivered to ~156,000 households.
                    </p>
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
                        <h2 class="heading " style="font-weight: 600">
                            Increase Your Sales
                        </h2>
                        <p class="desc" style="font-size:18px; " align="justify">
                            A magazine delivers informative and useful information to the local resident which drives, brand
                            awareness. Green Guide is a product that is focussed on building relationships with the audience
                            which increases the level of trust for the adverts displayed within and exposes the businesses
                            to a high volume of potential, customers.
                        </p>
                        <div class="text-center mt-3">
                            <a href="/magzine-design-book" class="btn btn-outline-primary">Find out More <i
                                    class="ps-3 fa fa-download"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 ">
                        <div class="image">
                            <img style="z-index:100; display: flex !important;" width="100%"
                                src="{{ asset('front/img/advertise-in-design.jpg') }}" alt="">
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
                            src="{{ asset('front/img/advertise-in-design.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 p-2 p-sm-3">
                    <h3 class="heading " style="font-weight: 600">
                        Premium Advert Designs
                    </h3>
                    <p class="desc" style="font-size:18px; " align="justify">
                        Our professional designers can create a powerful and engaging advertisement at a low cost. All ads
                        are printed on paper with a glossy finish to produce high quality advertisements. To ensure a
                        memorable advert a sleek and creative design with a targeted message can help your brand flourish.
                    </p>
                    <div class="text-center mt-3">
                        <a href="/advert-design-book" class="btn btn-outline-primary">Find out more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



















    <div class="add__slider__section my-5 d-flex justify-content-center">
        <div class="container">
            <!-- Slider main container -->
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="picture">
                            <img src="{{ url('front/img/advertisements/ad1.jpg') }}" alt="">
                        </div>
                        <div class="detail">
                            <h3>Know Your Borough</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="picture">
                            <img src="{{ url('front/img/advertisements/ad-2.jpg') }}" alt="">
                        </div>
                        <div class="detail">
                            <h3>What’s on Calendar</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="picture">
                            <img src="{{ url('front/img/advertisements/ad-3.jpg') }}" alt="">
                        </div>
                        <div class="detail">
                            <h3>Puzzles</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="picture">
                            <img src="{{ url('front/img/advertisements/ad-4.jpg') }}" alt="">
                        </div>
                        <div class="detail">
                            <h3>Vouchers</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="picture">
                            <img src="{{ url('front/img/advertisements/ad-5.jpg') }}" alt="">
                        </div>
                        <div class="detail">
                            <h3>Councillors</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="picture">
                            <img src="{{ url('front/img/advertisements/ad-6.jpg') }}" alt="">
                        </div>
                        <div class="detail">
                            <h3>Spotlights</h3>
                        </div>
                    </div>
  
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

         
                <div class="swiper-scrollbar"></div>
            </div>
        </div>
    </div>








    <div class="business__about__section d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12" data-animate="fadeInLeft" data-animate-delay="500">
                    <div class="image">
                        <img src="{{ url('front/img/TL-Portfolio-graphic.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 mt-4" data-animate="fadeInRight" data-animate-delay="500">
                    <div class="title">
                        {{ $advertise[0]->ad_pathway_heading }}
                    </div>
                    <div class="description" text-align="justify">
                        <div class="text-left">
                            <ul>

                                @php
                                    $ad_pathway_desc = explode('|', $advertise[0]->ad_pathway_desc);
                                @endphp
                                @foreach ($ad_pathway_desc as $path_desc)
                                    <li class="mb-3" style="color:#333">
                                        @php 
                                        echo $path_desc;
                                         @endphp
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="advertise__prices my-5 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="title" data-animate="fadeInDown" data-animate-delay="500">Our Services</div>

            <div class="desc" data-animate="fadeInUp" data-animate-delay="600">
                @php
                    echo '<p style="font-size:18px !important; font-weight:500 !important;">'.$advertise[0]->ad_service_desc.'</p>';
                @endphp
            </div>

            <div class="pen">
                <div class="stage">
                    <div class="element" data-animate="fadeInDown" data-animate-delay="500" style="background: url('{{ url('front/img/advertisements/ad-2.jpg') }}') 45% 0 no-repeat;
                                                                    background-size: cover;"></div>
                    <div class="element" data-animate="fadeInUp" data-animate-delay="600" style="background: url('{{ url('front/img/advertisements/ad-3.jpg') }}') 45% 0 no-repeat;
                                                                    background-size: cover;"></div>
                    <div class="element" data-animate="fadeInDown" data-animate-delay="700" style="background: url('{{ url('front/img/advertisements/ad-4.jpg') }}') 45% 0 no-repeat;
                                                                    background-size: cover;"></div>
                    <div class="element" data-animate="fadeInUp" data-animate-delay="800" style="background: url('{{ url('front/img/advertisements/ad-5.jpg') }}') 45% 0 no-repeat;
                                                                    background-size: cover;"></div>

                </div>
                <div class="stage mt-2">
                    <div class="element" data-animate="fadeInUp" data-animate-delay="900" style="background: url('{{ url('front/img/advertisements/ad-6.jpg') }}') 45% 0 no-repeat;
                                                                    background-size: cover;"></div>
                    <div class="element" data-animate="fadeInDown" data-animate-delay="1000" style="background: url('{{ url('front/img/advertisements/ad-7.jpg') }}') 45% 0 no-repeat;
                                                                    background-size: cover;"></div>
                    <div class="element" data-animate="fadeInUp" data-animate-delay="1100" style="background: url('{{ url('front/img/advertisements/ad1.jpg') }}') 45% 0 no-repeat;
                                                                    background-size: cover;"></div>
                    <div class="element" data-animate="fadeInDown" data-animate-delay="1200" style="background: url('{{ url('front/img/advertisements/ad-2.jpg') }}') 45% 0 no-repeat;
                                                                    background-size: cover;"></div>

                </div>
            </div>
        </div>
    </div>





    <div class="upcomming__issues">
        <div class="container">
            <div class="row p-0 m-0 d-flex justify-content-between">
                <div class="col-lg-5 col-md-12 p-0 m-0" data-animate="fadeInLeft" data-animate-delay="600">
                    <h2 class="title">Upcoming Issues
                    </h2>
                    <p class="description">The Green Guide magazine is a unified publication of local messages, community
                        initiatives and a business directory. Connecting residents with their local market to establish a
                        pathway for community growth. Download the latest issue or access our archives.

                    </p>
                </div>
                <div class="col-lg-6 col-md-12 p-0 m-0" data-animate="fadeInRight" data-animate-delay="700">
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
    </div>








    <div class="why__choose__greenguide benifits__of__adds">
        <div class="container">
            <h1 class="title" data-animate="fadeInDown" data-animate-delay="700">
                {{ $advertise[0]->ad_benifits_title }}
            </h1>
            @php
                $ad_benifits = explode('|', $advertise[0]->ad_benifits);
                $size = sizeof($ad_benifits) / 2;
            @endphp
            <div class="row">

                <div class="col-lg-6 col-md-12 p-1 p-sm-4 ">
                    @for ($i = 1; $i <= $size; $i++)
                        <div class="list__items" data-animate="fadeInLeft" data-animate-delay="800">
                            <div class="icon">

                                <img src="{{ url('front/img/list-image-' . $i . '.png') }}" alt="">

                            </div>
                            <div class="text" style="font-size:18px !important;">
                                <b style="font-size:17px !important;">
                                    
                                @php
                                    echo $i == 1 ? $ad_benifits[0] : $ad_benifits[$i - 1];
                                @endphp
                                </b>
                            </div> 
                        </div>
                    @endfor
                </div>

                @php
                    $size = sizeof($ad_benifits);
                    $newSize = $size / 2;
                @endphp
                <div class="col-lg-6 col-md-12 p-1 p-sm-4 ">
                    @for ($i = $newSize + 1; $i <= $size; $i++)
                        <div class="list__items" data-animate="fadeInLeft" data-animate-delay="800">
                            <div class="icon">

                                <img src="{{ url('front/img/list-image-' . $i . '.png') }}" alt="">

                            </div>
                            <div class="text">
                                <b style="font-size:17px !important;">
                                @php
                                    echo $ad_benifits[$i - 1];
                                @endphp
                                </b>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>






    <div class="priceing__section d-flex justify-centent-center align-items-center" data-animate="fadeIn"
        data-animate-delay="500">
        <div class="container-fluid mt-5">
            <h1 class="title m-b-50" data-animate="fadeInDown" data-animate-delay="700">
                Advert Prices
            </h1>
            <div class="desc m-b-100" data-animate="fadeInDown" data-animate-delay="900">
                @php
                    echo '<p style="font-size:18px !important; font-weight:500 !important;">'.$advertise[0]->ad_prices_desc.'</p>';
                @endphp
            </div>
            <div class="row pricing-table">
                <div class="col" data-animate="fadeInDown" data-animate-delay="1000">
                    <div class="plan">
                        <div class="plan-header">
                            <h4>Your Plan</h4>
                            <p class="text-muted">A6</p>
                            <div class="plan-price"><sup>£</sup>475<span><br>+VAT/mo</span> </div>
                            <a class="btn btn-light" href="#"><i class="icon-shopping-cart"></i> Add to Cart</a>
                        </div>
                        <div class="plan-list">

                        </div>
                    </div>
                </div>
                <div class="col" data-animate="fadeInDown" data-animate-delay="1100">
                    <div class="plan">
                        <div class="plan-header">
                            <h4>Your Plan</h4>
                            <p class="text-muted">A5</p>
                            <div class="plan-price"><sup>£</sup>800<span><br>+VAT/mo</span> </div>
                            <a class="btn btn-light" href="#"><i class="icon-shopping-cart"></i> Add to Cart</a>
                        </div>
                        <div class="plan-list">

                        </div>
                    </div>
                </div>
                <div class="col" data-animate="fadeInDown" data-animate-delay="1200">
                    <div class="plan featured">
                        <div class="plan-header">
                            <h4>Your Plan</h4>
                            <p class="text-muted">A4</p>
                            <div class="plan-price"><sup>£</sup>1500<span><br>+VAT/mo</span> </div>
                            <a class="btn btn-primary" href="#"><i class="icon-shopping-cart"></i> Add to Cart</a>
                        </div>
                        <div class="plan-list">

                        </div>
                    </div>
                </div>
                <div class="col" data-animate="fadeInDown" data-animate-delay="1300">
                    <div class="plan">
                        <div class="plan-header">
                            <h4>Your Plan</h4>
                            <p class="text-muted">Double Spread </p>
                            <div class="plan-price"><sup>£</sup>2800<span><br>+VAT/mo</span> </div>
                            <a class="btn btn-light" href="#"><i class="icon-shopping-cart"></i> Add to Cart</a>
                        </div>
                        <div class="plan-list">

                        </div>
                    </div>
                </div>
                <div class="col" data-animate="fadeInDown" data-animate-delay="1400">
                    <div class="plan">
                        <div class="plan-header">
                            <h4>Your Plan</h4>
                            <p class="text-muted">Voucher</p>
                            <div class="plan-price"><sup>£</sup>180<span><br>+VAT/mo</span> </div>
                            <a class="btn btn-light" href="#"><i class="icon-shopping-cart"></i> Add to Cart</a>
                        </div>
                        <div class="plan-list">

                        </div>
                    </div>
                </div>
                <div class="col" data-animate="fadeInDown" data-animate-delay="1500">
                    <div class="plan">
                        <div class="plan-header">
                            <h4>Your Plan</h4>
                            <p class="text-muted">Premium Pages (A4) </p>
                            <div class="plan-price"><sup>£</sup>1800<span><br>+VAT/mo</span> </div>
                            <a class="btn btn-light" href="#"><i class="icon-shopping-cart"></i> Add to Cart</a>
                        </div>
                        <div class="plan-list">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="book__now d-flex justify-content-center align-items-center my-5">
        <div class="container text-center">
            <h1 data-animate="fadeInDown" data-animate-delay="500">Booking Form

            </h1>
            <h4 data-animate="fadeInDown" data-animate-delay="600"> In printed magazines, your adverts can reach new
                audiences, particularly local residents who do not
                regularly access online content.
            </h4>
            <div class="text-center" data-animate="fadeInUp" data-animate-delay="700"><a href="/advert-design-book"
                    class="h-100 btn btn-success btn-shadow btn-rounded rounded-circle btn-iconed text-center py-2 py-sm-3 px-4 mt-4">Book
                    Now!</a>
            </div>
        </div>
    </div>


    


    <div class="py-5 " style="background: rgba(243, 243, 243, 0.76);margin-top: 10rem">
        <div class="container">
          <div class="row">
              <div class="col-lg-7 col-sm-12 my-2">
                  <p style="font-size: 19px"><b>For further information about Green Guide Croydon, </b> please refer to the Media Pack document available to download.</p>
                  <a href="/download-media-pack" class="btn btn-info px-5 mt-4" style="font-size:20px;">Download pdf <i class="ps-4 fa fa-download"></i></a>
              </div>
              <div class="col-lg-5 col-sm-12 ">
                  <img src="{{asset('front/img/book-cover.png')}}" class="book__image"  style="max-width:500px; margin-top: -12rem" alt="">
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
                            <img src="{{ asset('uploads/'.$links[0]->image1) }}" alt="">
                        </div>
                        <div class="card__body">
                            <h3 class="card__title">
                                {{$links[0]->title1}}
                            </h3>
                            <p align="justify" class="card__content">
                                {{$links[0]->details1}}
                            </p>
                            <a href=" {{url('')}}/{{$links[0]->link1}}" class="btn btn-dark">Advertise Today <i
                                    class="ps-3 fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="link__card">
                        <div class="card__image">
                            <img src="{{ asset('uploads/'.$links[0]->image2) }}" alt="">
                        </div>
                        <div class="card__body">
                            <h3 class="card__title">
                                {{$links[0]->title2}}
                            </h3>
                            <p align="justify" class="card__content">
                                {{$links[0]->details2}}
                            </p>
                            <a href=" {{url('')}}/{{$links[0]->link2}}" class="btn btn-dark">Business Listing <i
                                    class="ps-3 fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="link__card">
                        <div class="card__image">
                            <img src="{{ asset('uploads/'.$links[0]->image3) }}" alt="">
                        </div>
                        <div class="card__body">
                            <h3 class="card__title">
                                {{$links[0]->title3}}
                            </h3>
                            <p align="justify" class="card__content">
                                {{$links[0]->details3}}
                            </p>
                            <a href=" {{url('')}}/{{$links[0]->link3}}" class="btn btn-dark">Events Listing <i
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
        $('.element').each(function() {
            $(this).mouseover(function() {
                $(this).addClass('active');
                $('.stage').children('.element').not('.active').addClass('inactive');
            });
            $(this).mouseleave(function() {
                $(this).removeClass('active');
                $('.stage').children('.element').not('.active').removeClass('inactive');
            });
        });
        var swiper = new Swiper(".swiper-container", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            loop: true,
            autoplay: {
                delay: 5000,
            },
            coverflowEffect: {
                rotate: 20,
                stretch: 0,
                depth: 350,
                modifier: 1,
                slideShadows: true
            },
            pagination: {
                el: ".swiper-pagination"
            }
        });
    </script>
@endsection
