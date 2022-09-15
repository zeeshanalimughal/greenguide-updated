@extends('frontend.layouts.master')
@section('main-section')
    <div class="fixed__advertise__link">
        <a href="/magzine-design-book">Advertise with us</a>
    </div>

    {{-- {{$advertise}} --}}


    <div class="advertise__hero" data-animate="fadeIn" data-animate-delay="500"
        style="
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
        <a href="#book__addvertise" data-animate="fadeInUp" data-animate-delay="1200"><button
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
                                            echo $desc_arr;
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
                        <img src="{{ url('uploads/' . $advertise[0]->ad_sec2_image1) }}" class="img-1 img-responsive w-100"
                            alt="" data-animate="fadeInRight" data-animate-delay="900">
                        <div class="inner-image" data-animate="fadeInUp" data-animate-delay="1100">
                            <img src="{{ url('uploads/' . $advertise[0]->ad_sec2_image2) }}" class="image" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <div class="add__slider__section my-5 d-flex justify-content-center"
        style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.2)),
    url('{{ asset('uploads/' . $advertise[0]->add_carusel_bg_image) }}') !important;">
        <div class="container">
            <!-- Slider main container -->
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->

                    @foreach ($carousel_images as $carousel)
                        <div class="swiper-slide">
                            <div class="picture">
                                <img src="{{ url('uploads/' . $carousel->image) }}" alt="">
                            </div>
                            <div class="detail">
                                <h3>{{ $carousel->title }}</h3>
                            </div>
                        </div>
                    @endforeach

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
                        <img src="{{ url('uploads/' . $advertise[0]->ad_pathway_image) }}" alt="">
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
            <div class="title" data-animate="fadeInDown" data-animate-delay="500">
                {{ $advertise[0]->add_service_title }}</div>

            <div class="desc" data-animate="fadeInUp" data-animate-delay="600">
                @php
                    echo '<p style="font-size:18px !important; font-weight:500 !important;">' . $advertise[0]->ad_service_desc . '</p>';
                @endphp
            </div>



            <div class="pen">

                @php
                    if ($advertise[0]->add_services_images) {
                        $chunks = array_chunk($advertise[0]->add_services_images, 4);
                    } else {
                        $chunks = [];
                    }
                @endphp
                @for ($i = 0; $i < sizeof($chunks); $i++)
                    <div class="stage mb-2">
                        @foreach ($chunks[$i] as $image)
                            <div class="element" data-animate="fadeInDown" data-animate-delay="500"
                                style="background: url('{{ url('uploads/' . $image['name']) }}') 45% 0 no-repeat;
                                                            background-size: cover;">
                            </div>
                        @endforeach
                    </div>
                @endfor
            </div>
        </div>
    </div>








    <div class="why__choose__greenguide benifits__of__adds">
        <div class="container">
            <h1 style="font-size: 45px !important" class="title" data-animate="fadeInDown" data-animate-delay="700">
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
                    echo '<p style="font-size:18px !important; font-weight:500 !important;">' . $advertise[0]->ad_prices_desc . '</p>';
                @endphp
            </div>
            <div class="row pricing-table">
                @foreach ($prices as $key => $price)
                    <div class="col" data-animate="fadeInDown" data-animate-delay="1000">
                        <div class="plan @if ($key == 2) featured @endif">
                            <div class="plan-header">
                                <h4>Your Plan</h4>
                                <p class="text-muted">{{ $price->advert_size }}</p>
                                <div class="plan-price">
                                    <sup>{{ $price->currency }}</sup>{{ $price->advert_price }}<span><br>+VAT/mo</span>
                                </div>
                                <a class="btn @if ($key == 2) btn-primary @else btn-light @endif"
                                    href="/advert-design-book#book__addvertise"><i class="icon-shopping-cart"></i> Book
                                    Now</a>
                            </div>
                            <div class="plan-list">

                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col" data-animate="fadeInDown" data-animate-delay="1000">
                    <div class="plan">
                        <div class="plan-header">
                            <h4>Your Plan</h4>
                            <p class="text-muted">A6</p>
                            <div class="plan-price"><sup>£</sup>475<span><br>+VAT/mo</span> </div>
                            <a class="btn btn-light" href="/advert-design-book#book__addvertise"><i
                                    class="icon-shopping-cart"></i> Book Now</a>
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
                            <a class="btn btn-light" href="/advert-design-book#book__addvertise"><i
                                    class="icon-shopping-cart"></i> Book Now</a>
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
                            <a class="btn btn-primary" href="/advert-design-book#book__addvertise"><i
                                    class="icon-shopping-cart"></i> Book Now</a>
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
                            <a class="btn btn-light" href="/advert-design-book#book__addvertise"><i
                                    class="icon-shopping-cart"></i> Book Now</a>
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
                            <a class="btn btn-light" href="/advert-design-book#book__addvertise"><i
                                    class="icon-shopping-cart"></i> Book Now</a>
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
                            <a class="btn btn-light" href="/advert-design-book#book__addvertise"><i
                                    class="icon-shopping-cart"></i> Book Now</a>
                        </div>
                        <div class="plan-list">

                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>





    <div class="book__now d-flex justify-content-center align-items-center my-5">
        <div class="container text-center">
            <h1 data-animate="fadeInDown" data-animate-delay="500">
                {{ $advertise[0]->add_booking_title }}

            </h1>
            <h4 data-animate="fadeInDown" data-animate-delay="600">
                @php
                    echo $advertise[0]->add_booking_desc;
                @endphp
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
                    <p style="font-size: 19px">
                        @php
                            echo $advertise[0]->add_further_info_text;
                        @endphp</p>
                    <a href="/download-media-pack" class="btn btn-info px-5 mt-4" style="font-size:20px;">Download pdf <i
                            class="ps-4 fa fa-download"></i></a>
                </div>
                <div class="col-lg-5 col-sm-12 ">
                    <img src="{{ asset('uploads/' . $advertise[0]->add_further_info_image) }}" class="book__image"
                        style="max-width:500px; margin-top: -12rem" alt="">
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























    


    <section id="book__addvertise"     style="background-image:linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)), url('https://img.freepik.com/free-vector/green-fluid-background-frame_53876-114482.jpg?w=1380&t=st=1657950361~exp=1657950961~hmac=15fa091901ad81b23d9bc3eaad7ca0c2fd69b2c11338295a47876fe658f83c33'); background-repeat: no-repeat;background-size:cover;background-attachment:fixed;color:#fff !important;">
        <div class="container">
            <h1 class="text-center" data-animate="fadeInUp" data-animate-delay="600">BOOK NOW</h1>
            @if (session()->has('success'))
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                {{session()->forget('success')}}
            @endif
          
            @if (session()->has('error'))
                <div class="col-lg-12">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session()->get('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                {{session()->forget('error')}}
            @endif
            @if($form[0]->status==='live') 
            <form method="POST" id="adver_form" class="form-validate" action="{{ route('advert.submit-advert') }}"
                enctype="multipart/form-data" data-animate="fadeInUp" data-animate-delay="800">
                @csrf
                <div class="text-center">
                    <h4>Contact Information</h4>
                </div>
                <br>
                <div class="form-group row">
                    <label for="example-text-input" class="col-lg-1 col-form-label">Company Name</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" name="company_name"
                            value="{{ isset($userDetails) ? $userDetails->company_name : '' }}" />
                    </div>

                    <label for="example-text-input" class="col-lg-1 col-form-label">Contact Name</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" name="contact_name"
                            value="{{ auth()->check() ? auth()->user()->name : '' }}" />
                    </div>

                </div>
                <div class="form-group row">

                    <label for="example-text-input" class="col-lg-1 col-form-label">Company Number</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" name="company_reg_no"
                            value="{{ isset($userDetails) ? $userDetails->company_reg_no : '' }}" />
                    </div>

                    <label for="example-text-input" class="col-lg-1 col-form-label">Contact Number</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" name="contact_phone"
                            value="{{ isset($userDetails) ? $userDetails->phone : '' }}" />
                    </div>
                </div>
                <div class="form-group row">

                    <label for="example-text-input" class="col-lg-1 col-form-label">Company Email</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="email" name="company_email"
                            value="{{ auth()->check() ? auth()->user()->email : '' }}" />
                    </div>

                    <label for="example-text-input" class="col-lg-1 col-form-label">Contact Email</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="email" name="contact_email"
                            value="{{ auth()->check() ? auth()->user()->email : '' }}" />
                    </div>

                    <label for="example-text-input" class="col-lg-1 col-form-label">Charity Number</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" name="charity_number"
                            value="{{ isset($userDetails) ? $userDetails->charity_number : '' }}" />
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <hr>
                <div class="text-center">
                    <h4>Basic Information</h4>
                </div>
                <br>
                <div class="form-group row">
                    <label for="example-text-input" class="col-lg-1 col-form-label">Borough</label>
                    <div class="col-lg-5">
                        <select class="form-select" name="borough" required="required">
                            <option value="" disabled>Select Borough</option>
                            @foreach ($borough as $boro)
                                <option value="{{ $boro->id }}">{{ $boro->borough }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('borough'))
                            <div class="text-danger">{{ $errors->first('borough') }}</div>
                        @endif
                    </div>

                    <label for="example-text-input" class="col-lg-1 col-form-label">Issue</label>
                    <div class="col-lg-5 ">
                        <select class="form-select" name="upcomingIssue" required="required">
                            <option value="">Select a Issue</option>
                            @foreach ($issues as $issue)
                                <option value="{{ $issue->id }}">{{ $issue->issue }} - {{ $issue->deadline }}
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->has('upcomingIssue'))
                            <div class="text-danger">{{ $errors->first('upcomingIssue') }}</div>
                        @endif
                    </div>

                </div>
                <div class="row my-4">
                    <div class="col-12 d-flex justify-content-end">
                        <button type="button" class="btn btn-info btn-sm" id="btn-add-size-quantity">Add More Sizes</button>
                    </div>
                </div>
                <div class="form-group row" id="size-quantity-container">
                    <label for="example-text-input" class="col-lg-1 col-form-label">Quantity</label>
                    <div class="col-lg-5">
                        <select class="form-select quantity" name="quantity[]" required="required">
                            <option value="">Select Quantity</option>

                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>

                        </select>
                        @if ($errors->has('quantity'))
                            <div class="text-danger">{{ $errors->first('quantity') }}</div>
                        @endif
                    </div>
                    <label for="example-text-input" class="col-lg-1 col-form-label">Size of Advert</label>
                    <div class="col-lg-5">
                        <select class="form-select" name="advertSize[]" required="required">
                            <option value="">Select a Size of Advert</option>
                            @foreach ($adverts_sizes as $size)
                                <option value="{{ $size->id }}">
                                    {{ $size->advert_size }}-{{ $size->advert_price }}{{ $size->currency }}
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->has('advertSize'))
                            <div class="text-danger">{{ $errors->first('advertSize') }}</div>
                        @endif
                    </div>
                </div>



                <br>

                <div class="col-md-6" style="display:none;" id="order_details_box">
                    <div class="card">
                        <div class="card-body p-4">
                            <h2 class="h3 mb-0">Order summary</h2>
                            <div class="media align-items-center mb-2">
                                <div class="mr-3 mt-3">
                                    <h4 class=" font-weight-normal mb-0">Quantity Total</h4>
                                </div>
                                <h4 class="media-body text-right">
                                    <span id="totQty">$39.98</span>
                                </h4>
                            </div>
        
                            <hr class="my-4">
                            <div class="media align-items-center">
                                <div class="mr-3">
                                    <h4 class="h4">Total Amount</h4>
                                </div>
                                <div class="media-body text-right">
                                    <span class="text-dark h4" id="amountTot">$46.76</span>
                                </div>
                            </div>
                            @if (!auth()->check())     
                            <br>
                            <div class="form-group row d-flex align-items-center">
                                <label for="account_toggle" class="col-lg-12 col-form-label ">Do You Want To Create Account ? </label>
                                <div class="col-lg-12">
                                    <input type="checkbox" name="check_account" value="0" id="account_toggle" style="width:20px;height: 20px;" />
                                </div>
                            </div>
                            <div class="form-group row" id="passwords__container">
                                <label for="example-text-input" class="col-lg-12 col-form-label ">Password</label>
                                <div class="col-lg-12">
                                    <input class="form-control" type="password" name="password"  />
                                    @if ($errors->has('password'))
                                        <div class="text-danger">{{ $errors->first('password') }}</div>
                                    @endif
                                </div>
                                <label for="example-text-input" class="col-lg-12 col-form-label ">Confirm Password</label>
                                <div class="col-lg-12">
                                    <input class="form-control" type="password" name="confirm_password" />
                                    @if ($errors->has('confirm_password'))
                                        <div class="text-danger">{{ $errors->first('confirm_password') }}</div>
                                    @endif
                                </div>
                            </div>
                            @endif
                            <button type="submit" id="submit_order" class="btn btn-primary btn-block mt-4">Book Now</button>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group row" id="adver_submit_btn">
                    <div class="col-3"> <h5>Need Us to Design your Advert?</h5></div>
                    <div class="col-lg-5">
                        <button class="btn btn-shadow btn-block" id="submit_advert_btn" type="submit" >Yes</button>
                    </div>
                    <div class="col-lg-4">
                        <button class="btn btn-danger btn-shadow btn-block" type="button" id="adver_cancel_btn">No</button>
                    </div>
                </div>
            </form>
            @else
            <h2 class="text-center mt-5">Advert Design Form Is Not Available</h2>
            @endif
        </div>
    </section>














    <script src="{{ url('front/js/jquery.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/js/swiper.min.js"></script>

    <script>



$("#passwords__container").css({
            "display": "none"
        });
        $("#account_toggle").on('change', function() {
            if (this.checked) {
                $("#passwords__container").css({
                    "display": "flex"
                });
                $("#account_toggle").val("1")
            } else {
                $("#passwords__container").css({
                    "display": "none"
                });
                $("#account_toggle").val("0")
            }
        });
        const btn_add = document.getElementById("btn-add-size-quantity");
        const size_quantity = document.getElementById("size-quantity-container");

            if(btn_add){
                btn_add.addEventListener("click", function() {
                    size_quantity.insertAdjacentHTML('beforeend', `
                            <label for="example-text-input" class="col-lg-1 col-form-label">Quantity</label>
                            <div class="col-lg-5">
                                <select class="form-select quantity"  name="quantity[]" required="required">
                                    <option value="">Select Quantity</option>
                                
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                        
                                </select>
                                @if ($errors->has('quantity'))
                                    <div class="text-danger">{{ $errors->first('quantity') }}</div>
                                @endif
                            </div>
                            <label for="example-text-input" class="col-lg-1 col-form-label">Size of Advert</label>
                            <div class="col-lg-5">
                                <select class="form-select" name="advertSize[]" required="required">
                                    <option value="">Select a Size of Advert</option>
                                    @foreach ($adverts_sizes as $size)
                                        <option value="{{ $size->id }}">
                                            {{ $size->advert_size }}-{{ $size->advert_price }}{{ $size->currency }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('advertSize'))
                                    <div class="text-danger">{{ $errors->first('advertSize') }}</div>
                                @endif
                            </div>
                    `);
                })
            }

        const adver_form = document.querySelector("#adver_form");
        const adver_submit_btn = document.querySelector("#adver_submit_btn");
        const submit_advert_btn = document.querySelector("#submit_advert_btn");
        const order_details_box = document.querySelector("#order_details_box");
        const adver_cancel_btn = document.querySelector("#adver_cancel_btn");

        const quantity = document.getElementsByName("quantity[]");
        const advertPrice = document.getElementsByName("advertSize[]");
        if(adver_cancel_btn){
       
        adver_cancel_btn.addEventListener("click", function(){
            window.location.reload();
        })
             
    }
    if(adver_cancel_btn){
        adver_form.addEventListener('submit', function(event) {
            event.preventDefault();
        
            let totalPrice = 0;
        
            let tot_qty = 0;
            const quantity_array = []
            quantity.forEach((q) => {
                tot_qty += +q.value;
                quantity_array.push(q.value);
            }) 

            let arr = [];
            advertPrice.forEach((price) => {
                arr.push(price.value);
            })
            console.log(quantity_array)

            for (let i = 0; i < arr.length; i++) {
                $.ajax({
                    url: "/get-advert-price-total/" + arr[i],
                    type: "GET",
                    async: true,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        console.log(response[0][0])
                        let price = quantity_array[i]*parseInt(response[0][0].advert_price)
                        totalPrice+= price

                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }
            submit_advert_btn.innerHTML = 'processing...';
            setTimeout(() => {
                adver_submit_btn.style.display = 'none';
                order_details_box.style.display = 'block';
                $("#totQty").html(tot_qty);
                $("#amountTot").html(totalPrice+"£");
            //     console.log(tot_qty);
            // console.log(totalPrice);
            }, 2000);
            $("#submit_order").on("click", function() {
                adver_form.submit();
            })
        })
    }







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
