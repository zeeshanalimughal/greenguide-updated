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
                    <div class="col-lg-5" style="margin-top: -20px">
                      
                        <div style="display: flex; flex-wrap: wrap; align-items: center;">
                            {{-- @foreach ($issues as $issue) --}}
                            
                                <div style="width:200px;display:flex; align-items: center; gap:10px;">
                                    <input type="checkbox" name="issue" style="width:15px; height:15px; accent-color:green;margin-bottom: 5px;" id="Q2-2023" value="Q2 2023">
                                    <label for="Q2-2023">Q2 2023</label>
                                </div>
                     
                                <div style="width:200px;display:flex; align-items: center; gap:10px;">
                                    <input type="checkbox" name="issue" style="width:15px; height:15px; accent-color:green;margin-bottom: 5px;" id="Q3-2023" value="Q3 2023">
                                    <label for="Q3-2023">Q3 2023</label>
                                </div>
                     
                                <div style="width:200px;display:flex; align-items: center; gap:10px;">
                                    <input type="checkbox" name="issue" style="width:15px; height:15px; accent-color:green;margin-bottom: 5px;" id="Q4-2023" value="Q4 2023">
                                    <label for="Q4-2023">Q4 2023</label>
                                </div>
                     
                                <div style="width:200px;display:flex; align-items: center; gap:10px;">
                                    <input type="checkbox" name="issue" style="width:15px; height:15px; accent-color:green;margin-bottom: 5px;" id="Q1-2024" value="Q1 2024">
                                    <label for="Q1-2024">Q1 2024</label>
                                </div>
                     


                            {{-- @endforeach --}}
                        </div>

                        @if ($errors->has('upcomingIssue'))
                            <div class="text-danger">{{ $errors->first('upcomingIssue') }}</div>
                        @endif
                    </div>

                </div>
                {{-- <div class="row my-4">
                    <div class="col-12 d-flex justify-content-end">
                        <button type="button" class="btn btn-info btn-sm" id="btn-add-size-quantity">Add More Sizes</button>
                    </div>
                </div> --}}
                <div class="form-group row" id="size-quantity-container">
                    <div id="adverts-quantity-box">
                    </div>


                    
                  


                    


                    <div class="col-lg-12 my-3 d-flex align-items-center">
                        <input type="checkbox" id="wantDesignAddvertise" style="width:20px; height:20px; accent-color:green; margin-bottom: 5px;">
                        <label for="wantDesignAddvertise" class=" col-form-label ms-4">I will need you to design the advertisement/s</label>
                    </div>
                    <label id="wantDesignAddvertiseMessage" style="display:none; font-size: 19px;" class="mb-4">The Local Green Guide team will be in contact about your design brief once the order has been placed.</label>



                    <div class="col-lg-12 my-3 d-flex align-items-center">
                        <input type="checkbox" id="submittingMyWork" style="width:20px; height:20px; accent-color:green; margin-bottom: 5px;">
                        <label for="submittingMyWork" class=" col-form-label ms-4">I will be submitting my artwork/s by</label>
                    </div>
                    <ul id="submittingMyWorkResult" style="display:none" class="text-dark">

                    </ul>

                    

                    <label for="example-text-input" class="col-lg-12 col-form-label"><b>Sizes of Adverts</b></label>

                    <div class="advertSizesContainer">
                        {{-- <div class="advertSizesWrapper">
                            <div class="col-lg-12">
                                <select class="form-select" name="advertSize[]" >
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
                        </div> --}}
                    </div>



                </div>



                <br>
                {{-- <button type="submit" id="submit_order" class="btn btn-primary btn-block mt-4">Book Now</button> --}}




                <div class="col-md-8" style="display:none;" id="order_details_box">
                    <div class="card">
                        <div class="card-body p-4">
                            <h2 class="h3 mb-2">Order Summary</h2>
                            <div class="media align-items-center mb-2">
                                {{-- <div class="mr-3 mt-3">
                                    <h4 class=" font-weight-normal mb-0">Quantity Total</h4>
                                </div>
                                <h4 class="media-body text-right">
                                    <span id="totQty">$39.98</span>
                                </h4> --}}
                                <ul class="text-dark mt-4" id="replicatedOrderSummery">
                                   
                                </ul>
                            </div>
                            <h2 class="h3 mb-2">Quantity Total: </h2>
                            <div class="media align-items-center mb-2">
                                {{-- <div class="mr-3 mt-3">
                                    <h4 class=" font-weight-normal mb-0">Quantity Total</h4>
                                </div>
                                <h4 class="media-body text-right">
                                    <span id="totQty">$39.98</span>
                                </h4> --}}
                                <ul class="text-dark mt-4" id="orderQuantityTotal">
                                   
                                </ul>
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
                                <label for="account_toggle" class="col-lg-4 col-form-label ">Do You Want To Create Account ? </label>
                                <span class="col-lg-5">
                                    <input type="checkbox" name="check_account" value="0" id="account_toggle" style="width:20px;height: 20px;" />
                                </span>
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

                            <div class="form-group row d-flex align-items-center">
                                <label for="cofirmTermsAndConditions" class="col-lg-7 col-form-label ">I have read and understood Local Green Guide <span id="openTermsAndConditionsPopup" class="text-info" style="cursor: pointer;">terms & conditions</span> </label>
                                <span class="col-lg-4">
                                    <input type="checkbox" name="cofirmTermsAndConditions" id="cofirmTermsAndConditions" style="width:20px;height: 20px;" /><br>
                                </span>
                                <div id="errorNotOpenTerms"></div>
                            </div>


                            <button type="submit" id="submit_order" class="btn btn-primary btn-block mt-4">Book Now</button>
                        </div>
                    </div>
                </div>



               




                <br>
                <div class="form-group row" id="adver_submit_btn">
                    {{-- <div class="col-3"> <h5>Need Us to Design your Advert?</h5></div> --}}
                    <div class="col-lg-5">
                        <button class="btn btn-shadow btn-block" id="submit_advert_btn" type="submit" >Process Order</button>
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
        <div id="termsAndConditionsContainer" style="position:fixed !important;width:100%;height:100%;top:0;left:0;background-color:#00000044;justify-content: center;align-items: center;z-index:1000">
            <div class="termsAndConditionsBox" style="max-width:500px;width: 100%;min-height: 400px; background:#fff;padding:20px;border-radius: 20px;display:flex !important;text-align: center;justify-content: center;align-items: center;position: relative;">
                <button id="closeTermsAndConditionsPopup" style="position: absolute;top:20px;right: 20px;border:none; outline: none;background-color:transparent;font-size: 25px;">
                   <i class="fa fa-times"></i> 
                </button>
              <p>  Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis iusto distinctio amet natus sapiente? Unde officiis, consequuntur repellendus nihil, neque quisquam commodi ducimus quaerat ut necessitatibus maiores aperiam suscipit! Suscipit dolores, soluta modi accusamus ut odio quis necessitatibus officiis consequuntur.</p>
            </div>
        </div>
    </section>


    <script src="{{ url('front/js/jquery.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/js/swiper.min.js"></script>
    <script>



        const wantDesignAddvertise = document.getElementById("wantDesignAddvertise");
        const wantDesignAddvertiseMessage = document.getElementById("wantDesignAddvertiseMessage");
        wantDesignAddvertise.addEventListener('click', function() {
            if(wantDesignAddvertise.checked) {
                wantDesignAddvertiseMessage.style.display="block"
            }else{
                
                wantDesignAddvertiseMessage.style.display="none"
            }
        })

        const adver_submit_btn = document.querySelector("#adver_submit_btn");

        const submit_advert_btn = document.querySelector("#submit_advert_btn");
        const adver_form = document.querySelector("#adver_form");
        let issuesInput = Array.from(document.getElementsByName("issue"));
        // const advertsQuantity = document.getElementById("advertsQuantity")



      


        const submittingMyWork = document.getElementById("submittingMyWork")
        const submittingMyWorkResult = document.getElementById("submittingMyWorkResult")

        const adverts_quantity_box = document.getElementById("adverts-quantity-box")


        const advertSizesContainer = document.querySelector(".advertSizesContainer")
        // const advertSizesWrapper = document.querySelector(".advertSizesWrapper")



        const advertSubmitionDates = new Map([
            ['Q2 2023', '6th February 2023'],
            ['Q3 2023', '8th May 2023'],
            ['Q4 2023', '14th August 2023'],
            ['Q1 2024', '6th November 2023']
        ])
        const issuesArray = []
        issuesInput.forEach(function(issue) {
            issue.addEventListener("input", function(event) {
                if(event.target.checked) {
                    issuesArray.push(event.target.value)
                }else{
                    issuesArray.splice(issuesArray.indexOf(event.target.value),1)
                }

                // issuesArray[0] = event.target.value
                submittingMyWorkResult.innerHTML=""
                adverts_quantity_box.innerHTML=''
                for(i of issuesArray){
                    for (j of advertSubmitionDates.keys()) {
                        if(i===j){
                        const li = document.createElement('li')
                        const text = document.createTextNode(i+'->'+advertSubmitionDates.get(i))
                        li.appendChild(text)
                        submittingMyWorkResult.appendChild(li);
                        // ${i} ${advertSubmitionDates.get(i)}
                        const advertsHtmlCode = `
                        <div class="col-12">
                        <label for="example-text-input" class="col-lg-12 col-form-label">How many adverts would you like within ${i} ${advertSubmitionDates.get(i)}?</label>
                            <div class="col-lg-12">
                            <select data-attr="${i}" class="form-select advertsQuantity" name="advertsQuantity[]" id="advertsQuantity">
                                <option value="" disabled selected="selected">Select Quantity</option>
                                <option value="${i}|1">1</option>
                                <option value="${i}|2">2</option>
                                <option value="${i}|3">3</option>
                                <option value="${i}|4">4</option>
                                <option value="${i}|5">5</option>
                            </select>
                            @if ($errors->has('advertsQuantity'))
                                <div class="text-danger">{{ $errors->first('advertsQuantity') }}</div>
                            @endif
                            </div> </div>`
                            adverts_quantity_box.insertAdjacentHTML('afterbegin',advertsHtmlCode)
                        }
                    }
                }


                // Adverts Quantity Change 
                const advertsQuantity = document.querySelectorAll(".advertsQuantity")
                advertsQuantity.forEach(function(quantity){
                    quantity.addEventListener("change", function(event){
                        // console.log(quantity.hasAttribute('data-attr'))

                        advertSizesContainer.querySelectorAll(".advertSizesWrapper select").forEach(function(child){
                        if(child.getAttribute('data-attr')===quantity.getAttribute('data-attr')){
                            // console.log(child.parentNode)
                            child.parentNode.remove()
                        }
                     })

                        // advertSizesContainer.innerHTML=''

                       const advertSizesWrapper = document.createElement("div");
                       advertSizesWrapper.className = "advertSizesWrapper";
                       advertSizesWrapper.setAttribute("data-attr", event.target.value)
                       let htmlSizes = ``
                       for(i=0;i < +event.target.value.split('|')[1];i++){
                        htmlSizes+=`
                         <div class="col-lg-12">
                            <label for="example-text-input" class="col-lg-12 col-form-label my-3">Advertisement size for ${event.target.value.split('|')[0]} - ${i+1}</label>
                                <select data-attr="${event.target.value.split('|')[0]}" class="form-select advertSizefFinal" name="advertSize[]" >
                                    <option value="">Select a Size of Advert</option>
                                    @foreach ($adverts_sizes as $size)
                                        <option value="{{$size->advert_size}}|{{ $size->id }}">
                                            {{ $size->advert_size }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('advertSize'))
                                    <div class="text-danger">{{ $errors->first('advertSize') }}</div>
                                @endif
                            </div>`
                       }
                       advertSizesWrapper.innerHTML = htmlSizes
                       advertSizesContainer.appendChild(advertSizesWrapper)

                    })
                })
            })
        })
            
       
        submittingMyWork.addEventListener('click', function() {
            if(submittingMyWork.checked) {
                submittingMyWorkResult.style.display="block"
            }else{
                submittingMyWorkResult.style.display="none"
            }
        })
        

        const AMOUTN_WITHOUT_VAT = [
        {
            A6:{
                standard:525,
                Q2_2023:498.75,
                two_issues:498.75,
                three_issues:485.65,
                four_issues:472.5,
            },
            A5:{
                standard:950,
                Q2_2023:902.5,
                two_issues:902.5,
                three_issues:878.75,
                four_issues:855,
            },
            A4:{
                standard:1800,
                Q2_2023:1710,
                two_issues:1710,
                three_issues:1665,
                four_issues:1620,
            },
            A3:{
                standard:3200,
                Q2_2023:3040,
                two_issues:3040,
                three_issues:2960,
                four_issues:2880,
            },
            A4_premium:{
                standard:2400,
                Q2_2023:2280,
                two_issues:2280,
                three_issues:2220,
                four_issues:2160,
            }, 
            Voucher:{
                standard:180,
                Q2_2023:171,
                two_issues:171,
                three_issues:166.5,
                four_issues:162,
            }
        }
        ]


            

        const AMOUTN_WITH_VAT = [
        {
            A6:{
                standard:630,
                Q2_2023:598.5,
                two_issues:598.5,
                three_issues:582.78,
                four_issues:567,
            },
            A5:{
                standard:1140,
                Q2_2023:1083,
                two_issues:1083,
                three_issues:1054.5,
                four_issues:1026,
            },
            A4:{
                standard:2160,
                Q2_2023:2052,
                two_issues:2052,
                three_issues:1998,
                four_issues:1944,
            },
            A3:{
                standard:3840,
                Q2_2023:3648,
                two_issues:3648,
                three_issues:3552,
                four_issues:3456,
            },
            A4_premium:{
                standard:2880,
                Q2_2023:2736,
                two_issues:2736,
                three_issues:2664,
                four_issues:2592,
            }, 
            Voucher:{
                standard:216,
                Q2_2023:205.2,
                two_issues:205.2,
                three_issues:199.8,
                four_issues:194.4,
            }
        }
        ]


        const AMOUTN_WITH_DICCOUNT = [
        {
            A6:{
                standard:63,
                Q2_2023:59.85,
                two_issues:59.85,
                three_issues:58.278,
                four_issues:56.7,
            },
            A5:{
                standard:114,
                Q2_2023:108.3,
                two_issues:108.3,
                three_issues:105.45,
                four_issues:102.6,
            },
            A4:{
                standard:216,
                Q2_2023:205.2,
                two_issues:205.2,
                three_issues:199.8,
                four_issues:194.4,
            },
            A3:{
                standard:384,
                Q2_2023:364.8,
                two_issues:364.8,
                three_issues:355.2,
                four_issues:345.6,
            },
            A4_premium:{
                standard:288,
                Q2_2023:273.6,
                two_issues:273.6,
                three_issues:266.4,
                four_issues:259.2,
            }, 
            Voucher:{
                standard:21.6,
                Q2_2023:20.52,
                two_issues:20.52,
                three_issues:19.98,
                four_issues:19.44,
            }
        }
        ]


        const adver_cancel_btn = document.querySelector("#adver_cancel_btn");

        adver_cancel_btn.addEventListener("click", function(){
            window.location.reload();
        })




            let is_terms_and_conditions_viewed = false
                

                const termsAndConditionsContainer = document.getElementById("termsAndConditionsContainer")
                const cofirmTermsAndConditions = document.getElementById("cofirmTermsAndConditions")
                termsAndConditionsContainer.style.display = "none"
                const openTermsAndConditionsPopup = document.getElementById("openTermsAndConditionsPopup")
                const closeTermsAndConditionsPopup = document.getElementById("closeTermsAndConditionsPopup")
                const errorNotOpenTerms = document.getElementById("errorNotOpenTerms")

                openTermsAndConditionsPopup.addEventListener("click", function(e){
                    e.preventDefault();
                    termsAndConditionsContainer.style.display ="flex"
                    if(!is_terms_and_conditions_viewed){
                        is_terms_and_conditions_viewed = true
                        cofirmTermsAndConditions.checked = true;
                        errorNotOpenTerms.innerHTML=""
                    }
                })
                closeTermsAndConditionsPopup.addEventListener("click", function(e){
                        termsAndConditionsContainer.style.display ="none"
                })
            

        submit_advert_btn.addEventListener("click", function(event){
            adver_submit_btn.style.display = 'none';
            event.preventDefault();
            const advertSizefFinal = document.querySelectorAll(".advertSizefFinal")
    
            const issues = []
            const advertSizefFinalValues = []
            issuesInput.forEach(function(issue) {
            if(issue.checked) {
                issues.push(issue.value)
            }
            })
            advertSizefFinal.forEach(function(advertSize) {
                advertSizefFinalValues.push(advertSize.value)
            })
    
            // issues[]
            // advertsQuantity.value
    
        order_details_box.style.display = "block";

        const combinedSizesOfAdverts = {};
            advertSizefFinalValues.forEach(element => {
                combinedSizesOfAdverts[element.split("|")[0]] = (combinedSizesOfAdverts[element.split("|")[0]] || 0) + 1;
            });
        const replicateCountOfSelection = []

        const advertSizesWrapper = document.querySelectorAll(".advertSizesWrapper")
        advertSizesWrapper.forEach(sizeWrapper => {
            if(issues.indexOf(sizeWrapper.getAttribute("data-attr").split("|")[0]) !== -1){
                sizeWrapper.querySelectorAll("select").forEach((select) => {
                    let key = select.value.split("|")[0]
                    let value = sizeWrapper.getAttribute("data-attr").split("|")[0]
                    replicateCountOfSelection.push({[key]:value})
                })
            
            }
        })

        const replicatedOrderSummery = document.getElementById("replicatedOrderSummery")
        
        replicatedOrderSummery.innerHTML=""
        replicateCountOfSelection.forEach((orderSummery) => {
            let size,issue = ''
                for (const [key, value] of Object.entries(orderSummery)) {
                size = key
                issue = value
                }
            const li = document.createElement("li")
            const text = document.createTextNode(`${size} in the ${issue} issue`)
            li.appendChild(text)
            li.style.marginBottom ="8px"
            replicatedOrderSummery.style.listStyleType = "none"
            replicatedOrderSummery.style.fontSize = "18px"
            replicatedOrderSummery.appendChild(li)
        })

            const orderQuantityTotal = document.getElementById("orderQuantityTotal")
            orderQuantityTotal.innerHTML=""
            let size,quantity = ''
                for (const [key, value] of Object.entries(combinedSizesOfAdverts)) {
                    size = key
                    quantity = value
                    const li = document.createElement("li")
                    const text = document.createTextNode(`${size} : ${quantity}`)
                    li.appendChild(text)
                    li.style.marginBottom ="8px"
                    orderQuantityTotal.style.listStyleType = "none"
                    orderQuantityTotal.style.fontSize = "18px"
                    orderQuantityTotal.appendChild(li)
                }
    
               

  

        })

        adver_form.addEventListener("submit", function(event){
            event.preventDefault();
                if(!is_terms_and_conditions_viewed){
                    errorNotOpenTerms.innerHTML = "<div style='color:red;width:100%;margin-top:10px;'>Please read terms & conditions before order proceeding</div>"
                }else{
                    if(!cofirmTermsAndConditions.checked){
                        errorNotOpenTerms.innerHTML = "<div style='color:red;width:100%;margin-top:10px;'>Please Accept Our Terms And Conditions!</div>"
                    }else{
                        errorNotOpenTerms.innerHTML =""
                        console.log("OK")
                    }
                }
        })

        



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




// $("#passwords__container").css({
//             "display": "none"
//         });
//         $("#account_toggle").on('change', function() {
//             if (this.checked) {
//                 $("#passwords__container").css({
//                     "display": "flex"
//                 });
//                 $("#account_toggle").val("1")
//             } else {
//                 $("#passwords__container").css({
//                     "display": "none"
//                 });
//                 $("#account_toggle").val("0")
//             }
//         });
//         const btn_add = document.getElementById("btn-add-size-quantity");
//         const size_quantity = document.getElementById("size-quantity-container");

//             if(btn_add){
//                 btn_add.addEventListener("click", function() {
//                     size_quantity.insertAdjacentHTML('beforeend', `
//                             <label for="example-text-input" class="col-lg-1 col-form-label">Quantity</label>
//                             <div class="col-lg-5">
//                                 <select class="form-select quantity"  name="quantity[]" required="required">
//                                     <option value="">Select Quantity</option>
                                
//                                         <option value="1">1</option>
//                                         <option value="2">2</option>
//                                         <option value="3">3</option>
//                                         <option value="4">4</option>
//                                         <option value="5">5</option>
//                                         <option value="6">6</option>
//                                         <option value="7">7</option>
//                                         <option value="8">8</option>
//                                         <option value="9">9</option>
//                                         <option value="10">10</option>
                        
//                                 </select>
//                                 @if ($errors->has('quantity'))
//                                     <div class="text-danger">{{ $errors->first('quantity') }}</div>
//                                 @endif
//                             </div>
//                             <label for="example-text-input" class="col-lg-1 col-form-label">Size of Advert</label>
//                             <div class="col-lg-5">
//                                 <select class="form-select" name="advertSize[]" required="required">
//                                     <option value="">Select a Size of Advert</option>
//                                     @foreach ($adverts_sizes as $size)
//                                         <option value="{{ $size->id }}">
//                                             {{ $size->advert_size }}-{{ $size->advert_price }}{{ $size->currency }}</option>
//                                     @endforeach
//                                 </select>
//                                 @if ($errors->has('advertSize'))
//                                     <div class="text-danger">{{ $errors->first('advertSize') }}</div>
//                                 @endif
//                             </div>
//                     `);
//                 })
//             }

//         const adver_form = document.querySelector("#adver_form");
//         const adver_submit_btn = document.querySelector("#adver_submit_btn");
//         const submit_advert_btn = document.querySelector("#submit_advert_btn");
//         const order_details_box = document.querySelector("#order_details_box");
//         const adver_cancel_btn = document.querySelector("#adver_cancel_btn");

//         const quantity = document.getElementsByName("quantity[]");
//         const advertPrice = document.getElementsByName("advertSize[]");
//         if(adver_cancel_btn){

//         adver_cancel_btn.addEventListener("click", function(){
//             window.location.reload();
//         })
             
//     }
//     if(adver_cancel_btn){
//         adver_form.addEventListener('submit', function(event) {
//             event.preventDefault();
        
//             let totalPrice = 0;
        
//             let tot_qty = 0;
//             const quantity_array = []
//             quantity.forEach((q) => {
//                 tot_qty += +q.value;
//                 quantity_array.push(q.value);
//             }) 

//             let arr = [];
//             advertPrice.forEach((price) => {
//                 arr.push(price.value);
//             })
//             console.log(quantity_array)

//             for (let i = 0; i < arr.length; i++) {
//                 $.ajax({
//                     url: "/get-advert-price-total/" + arr[i],
//                     type: "GET",
//                     async: true,
//                     processData: false,
//                     contentType: false,
//                     success: function(response) {
//                         console.log(response[0][0])
//                         let price = quantity_array[i]*parseInt(response[0][0].advert_price)
//                         totalPrice+= price

//                     },
//                     error: function(error) {
//                         console.log(error);
//                     }
//                 });
//             }
//             submit_advert_btn.innerHTML = 'processing...';
//             setTimeout(() => {
//                 adver_submit_btn.style.display = 'none';
//                 order_details_box.style.display = 'block';
//                 $("#totQty").html(tot_qty);
//                 $("#amountTot").html(totalPrice+"£");
//             //     console.log(tot_qty);
//             // console.log(totalPrice);
//             }, 2000);
//             $("#submit_order").on("click", function() {
//                 adver_form.submit();
//             })
//         })
//     }







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
