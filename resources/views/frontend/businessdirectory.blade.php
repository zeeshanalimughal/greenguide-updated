@extends('frontend.layouts.master')
@include('backend.utils.functions')

@section('main-section')
    {{-- {{$businessdirectory}} --}}
    <div class="business__directory__hero" data-animate="fadeIn" data-animate-delay="500"
        style="
              width              : 100%;
            min-height         : 100vh;
            background-image   : linear-gradient(to right, rgba(22, 73, 16, 0.9), rgba(22, 73, 16, 0.6), rgba(22, 73, 16, 0.3)),   url('{{ asset('uploads/' . $businessdirectory[0]->bd_hero_image) }}') !important;
            background-repeat  : no-repeat;
            background-size    : cover;
            background-position: center center;
            display            : flex;
            align-items        : center;
            ">
        <div class="container">
            <div class="col-lg-6 col-md-12">
                <h1 data-animate="fadeInUp" data-animate-delay="1000">{{ $businessdirectory[0]->bd_title }}</h1>
                <form action="" class="p-0 m-0 business__hero__form">
                    <div class="input" data-animate="fadeInUp" data-animate-delay="1200">
                        <i class="fas fa-city"></i>
                        <input type="text" placeholder="what are you looking for">
                    </div>
                    <div class="input" data-animate="fadeInUp" data-animate-delay="1200">
                        <i class="fas fa-location-arrow"></i>
                        <select>
                            <option value="United Kingdom">United Kingdom</option>
                        </select>
                    </div>
                    <button class="button__search" data-animate="fadeInUp" data-animate-delay="1300">
                        <i class="fas fa-search"></i>
                        Search
                    </button>
                </form>
            </div>
        </div>
    </div>




    <div class="register__business_Section m-t-100 m-b-100">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-md-12 mt-4" data-animate="fadeInLeft" data-animate-delay="1500">
                    <h1 class="title">
                        Register Your Business
                    </h1>
                    <h5 class="description" text-align="justify">
                        Want to expand your exposure to the Green Guide community?<br><br>
                        If you're a business owner and would like to add your business to the Green Guide directory, then
                        register for FREE. We want to build an expansive business directory that offers free exposure for
                        local businesses and provides an easy and helpful resource for local residents.<br><br>
                        Our online business directory listing form will only take a few minutes to complete and is easy to
                        use. When you have submitted the listing it will be reviewed and if accepted will be published live
                        onto the Green Guide website.

                        <br>


                    </h5>
                    <a href="businessdirectory/add-new-directory" class="text-white">
                        <button type="button"
                            class="btn btn-success text-white btn-roundeded btn-outline btn-reveal m-t-20"><span>Create a
                                New Listing</span><i class="fa fa-plus"></i></button>
                    </a>
                    <br>

                </div>

                <div class="col-lg-5 col-md-12" data-animate="fadeInRight" data-animate-delay="1000">
                    <div class="image" style="max-width: 800px;width:100%;height:500px; position: relative;">
                        <img style="position: absolute;top: 0;left: 0;height: 100%;width: 100%;object-fit: contain;"
                            src="{{ asset('uploads/BG_Register_your_business.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>









    <div class="businessdirectory__categories">
        <div class="container">
            <h2 class="text-white">Business Categories <span style="font-size:15px;">What's on offer</span></h2>
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                    <div class="icon__box">
                        <div class="icon">
                            <img src="{{ asset('/front/img/categories/education.png') }}" alt="">
                        </div>
                        <div class="title">
                            EDUCATION
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                    <div class="icon__box">
                        <div class="icon">
                            <img src="{{ asset('/front/img/categories/food.png') }}" alt="">
                        </div>
                        <div class="title">
                            FOOD & DRINK
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                    <div class="icon__box">
                        <div class="icon">
                            <img src="{{ asset('/front/img/categories/health.png') }}" alt="">
                        </div>
                        <div class="title">
                            HEALTH & BEAUTY
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                    <div class="icon__box">
                        <div class="icon">
                            <img src="{{ asset('/front/img/categories/leisure.png') }}" alt="">
                        </div>
                        <div class="title">
                            LEISURE
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                    <div class="icon__box">
                        <div class="icon">
                            <img src="{{ asset('/front/img/categories/services.png') }}" alt="">
                        </div>
                        <div class="title">
                            SERVICES
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 mb-4">
                    <div class="icon__box">
                        <div class="icon">
                            <img src="{{ asset('/front/img/categories/shopping.png') }}" alt="">
                        </div>
                        <div class="title">
                            SHOPPING
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div class="business__directories ps-2 mb-5">
        <div class="container mx-auto">
            <!--Post Carousel -->
            <h2 class="mb-4">Business Directories</h2>
            <div class="row">

                @foreach ($categories as $category)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="post-item business__post__item">
                            <div class="post-item-wrap business__post__item__wrap ">
                                <div class="post-image business__post__image">
                                    <a href="{{ url('/businessdirectory/category/' . strtolower($category->category)) }}">
                                        <img alt="" src="{{ asset('front/img/1520103821627.jpg') }}"></a>
                                </div>
                                <div class="post__item__details">
                                    <div class="row">
                                        <div class="col-12">
                                            <span style="font-size:17px;">{{ $category->category }} <small
                                                    style="font-size:13px; font-weight: normal;">
                                                    @php
                                                        foreach ($cat as $key => $value) {
                                                            if ($key == $category->category) {
                                                                echo '(' . $value['key'] . ' Listing)';
                                                            }
                                                        }
                                                    @endphp
                                                </small></span>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

            {{-- </div> --}}
            <!--end: Post Carousel -->
        </div>
    </div>



    <div class="business__about__section d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12" data-animate="fadeInLeft" data-animate-delay="1000">
                    <div class="image">
                        <img src="{{ asset('uploads/' . $businessdirectory[0]->bd_sec3_image) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mt-4" data-animate="fadeInRight" data-animate-delay="1500">
                    <div class="title">
                        {{ $businessdirectory[0]->bd_sec3_title }}
                    </div>
                    <div class="description" text-align="justify">
                        @php
                            echo $businessdirectory[0]->bd_sec3_desc;
                        @endphp

                    </div>
                    <a href="businessdirectory/add-new-directory" class="text-white">
                        <button type="button"
                            class="btn btn-success text-white btn-roundeded btn-outline btn-reveal m-t-20"><span>Advertise
                                Within Magazine</span><i class="fa fa-plus"></i></button>
                    </a>
                </div>
            </div>
        </div>
    </div>









    <div class="directory__benifits__section">
        <div class="container">
            <h1 class="mb-5 text-center text-white">Green Guide Directory</h1>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-2 pt-2">
                            <div class="icon-holder"><i style="font-size:4rem; color:#ffffff !important;"
                                    class="icon-check"> </i> </div>
                        </div>
                        <div class="col-9">
                            <h3 class="text-white">Premium Listing</h3>
                            <p class="text-white">Top listing are allocated to businesses that have adverts within the
                                Green Guide Magazine</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 pt-2">
                            <div class="icon-holder"><i style="font-size:4rem; color:#ffffff !important;"
                                    class="icon-check"> </i> </div>
                        </div>
                        <div class="col-9">
                            <h3 class="text-white">Company profile</h3>
                            <p class="text-white">Extensive company profile details to highlight your business to new
                                customers</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 pt-2">
                            <div class="icon-holder"><i style="font-size:4rem; color:#ffffff !important;"
                                    class="icon-check"> </i> </div>
                        </div>
                        <div class="col-9">
                            <h3 class="text-white">Quality Growth</h3>
                            <p class="text-white">Local residents use the Green Guide Directory to connect with local
                                businesses</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-2 pt-2">
                            <div class="icon-holder"><i style="font-size:4rem; color:#ffffff !important;"
                                    class="icon-check"> </i> </div>
                        </div>
                        <div class="col-9">
                            <h3 class="text-white">Reviews</h3>
                            <p class="text-white">Previous customers can rate and review your service/product</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 pt-2">
                            <div class="icon-holder"><i style="font-size:4rem; color:#ffffff !important;"
                                    class="icon-check"> </i> </div>
                        </div>
                        <div class="col-9">
                            <h3 class="text-white">Photo gallery</h3>
                            <p class="text-white">Display your logo, company images and product or services</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 pt-2">
                            <div class="icon-holder"><i style="font-size:4rem; color:#ffffff !important;"
                                    class="icon-check"> </i> </div>
                        </div>
                        <div class="col-9">
                            <h3 class="text-white">Green Guide Branding</h3>
                            <p class="text-white">Registered business can use our logo or display their reviews on personal
                                markettion products</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="directory__join__us__section">
        <div class="container px-2 px-md-5">
            <h2 class="text-center text-white pb-4">
                Join our Community
            </h2>
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <h5 class="text-white p-0 p-md-4">We want to eanble residents to know who they can go to, who they
                        can<br>turn to and to connect with, that's our route to community growth.<br>Register your business,
                        organization or community group today.</h5>
                </div>
                <div class="col-lg-4 col-md-12">
                    <a class="btn btn-primary" href="">Add an Event Listing</a><br>
                    <a class="btn btn-primary" href="">Advertise in the greenguide Magazine</a>
                </div>
            </div>
        </div>
        <div class="apply__today__row">
            <a href="businessdirectory/add-new-directory" class="btn btn-primary  mx-2 mx-sm-5">Advertise Today</a>
            <span class="text-white mx-2 mx-sm-5">or call</span>
            <div class="call mx-2 mx-sm-5">
                <h4 class="text-white"><b>0203 773 5835</b></h4>
                <div class="text-white font-italic">Mon to Fri, 9am to 6pm
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="business__about__section py-5 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-12 mt-4 mb-0">
                    <div class="title" data-animate="fadeInDown" data-animate-delay="1000">
                        GET IN TOUCH
                    </div>

                    <div class="description" text-align="justify">
                        <form action="{{ route('contact.send') }}" method="POST">
                            @csrf
                            @if (session()->has('error'))
                                @php
                                    echo message(session()->get('error'), 'danger');
                                @endphp
                            @endif
                            @if (session()->has('success'))
                                @php
                                    echo message(session()->get('success'), 'success');
                                @endphp
                            @endif
                            @if ($errors->any())
                                @php
                                    echo errorAlert($errors->all(), 'danger');
                                @endphp
                            @endif
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" aria-required="true" {{ old('name') }}
                                        class="form-control name" placeholder="Enter your Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" {{ old('email') }} aria-required="true"
                                        required="" class="form-control email" placeholder="Enter your Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="subject">Your Subject</label>
                                    <input type="text" name="subject" {{ old('subject') }} class="form-control"
                                        placeholder="Subject...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea type="text" name="message" {{ old('message') }} rows="5" class="form-control "
                                    placeholder="Enter your Message"></textarea>
                            </div>
                            <input class="btn btn-primary" type="submit" name="submit" value="Send message" />
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 d-flex justify-content-center">
                    <div class="image" data-animate="fadeInRight" data-animate-delay="1200">
                        <img src="{{ url('front/img/contact-us.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="container-fluid d-flex justify-content-center flex-column my-5">
        <div class="row d-flex justify-content-center">
            <div class="content col-lg-12 d-flex justify-content-center">
                <div class="d-flex justify-content-center bg-light">
                    <ul class="d-flex justify-content-center flex-wrap" style="list-style-type: none;">
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






@endsection
