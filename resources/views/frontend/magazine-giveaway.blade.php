@extends('frontend.layouts.master')
@section('main-section')
    <div class="advertise__hero advert__design__hero"
        style="background-image:linear-gradient(to right, rgba(0,0,0,0.6),rgba(0,0,0,0.4)), url('{{ asset('uploads/' . $page->hero_image) }}') !important;"
        data-animate="fadeIn" data-animate-delay="500">
        <h1 class="title" data-animate="fadeInDown" data-animate-delay="700">
            {{ $page->hero_title }}
        </h1>
        <div class="container">
            <p class="description" style="font-size:17px; color:#fff; margin-top: 20px; text-align: center"
                data-animate="fadeInUp" data-animate-delay="800">
                {{ $page->hero_subtitle }}
            </p>
        </div>

    </div>








    <div class="container  pt-5 pb-3 my-5">

        <div class="page-title  my-3" style="text-align:left;">

            @php
                
                echo $page->section2_text;
                
            @endphp
        </div>


        @if (session()->has('success'))
            <div class="col-lg-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session()->get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif
        @if (session()->has('error'))
            <div class="col-lg-12">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session()->get('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif
        @if($form[0]->status==='live') 
        <form class="row g-3" id="form" method="post" action="{{ route('magzine-giveaway.submit') }}">
            <h1 class="text-center">{{ $page->section2_heading }}</h1>
            @csrf
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Issue Number - Present</label>
                <select id="inputState" name="upcomingIssue" class="form-select">
                    @foreach ($issues as $issue)
                        <option value="{{ $issue->id }}">{{ $issue->issue }} - {{ $issue->deadline }}
                        </option>
                    @endforeach
                </select>
                @if ($errors->has('issue'))
                    <div class="text-danger">{{ $errors->first('issue') }}</div>
                @endif
            </div>
            <div class="col-md-6">
                <label for="inputName" class="form-label">Name</label>
                <input type="text" class="form-control" value="{{ old('name') }}" name="name" id="inputName">
                @if ($errors->has('name'))
                    <div class="text-danger">{{ $errors->first('name') }}</div>
                @endif
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Contact Number</label>
                <input type="text" class="form-control" value="{{ old('contact') }}" name="contact" id="inputCity">
                @if ($errors->has('contact'))
                    <div class="text-danger">{{ $errors->first('contact') }}</div>
                @endif
            </div>

            <div class="col-md-6">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" value="{{ old('email') }}" name="email" id="inputEmail">
                @if ($errors->has('email'))
                    <div class="text-danger">{{ $errors->first('email') }}</div>
                @endif
            </div>


            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" value="{{ old('address') }}" name="address" id="inputAddress"
                    placeholder="1234 Main St">
                @if ($errors->has('address'))
                    <div class="text-danger">{{ $errors->first('address') }}</div>
                @endif
            </div>


            <div class="col-12">
                <label for="inputAddress" class="form-label">Answer</label>
                <textarea name="answer" class="form-control" cols="30" rows="4">{{ old('answer') }}</textarea>
                @if ($errors->has('answer'))
                    <div class="text-danger">{{ $errors->first('answer') }}</div>
                @endif
            </div>

            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                    <label class="form-check-label" for="gridCheck">
                        Tick box – I have read and agree to Competition Terms & Conditions
                    </label>
                </div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>

        @else
        <h2>Magazine Giveaway Form Is Not Available</h2>
        @endif
    </div>



    <div style="background:#ededed;padding:2rem 0;width:100%;">
        <div class="container  py-5">
            <div class="row">

                <div class="col-lg-7 col-md-12 px-3">
                    <h2 class="text-left">{{ $page->section3_heading }}</h2>
                    <h1 style="text-align: left; fonts-size:3.5rem;color:green;">{{ $page->section3_sponser_name }}</h1>
                    <p class="text-left">{{ $page->section3_subtitle }} </p>

                    <div class="row d-flex my-5">
                        <div class="col-lg-5">
                            <div class="product-image">
                                <!-- Carousel slider -->
                                <div class="carousel dots-inside dots-dark arrows-visible" data-items="1"
                                    data-loop="true" data-autoplay="true" data-animate-in="fadeIn"
                                    data-animate-out="fadeOut" data-autoplay="2500" data-lightbox="gallery">
                                    @foreach ($page->section3_gift_images as $images)
                                        <a href="{{ asset('uploads/' . $images['name']) }}" data-lightbox="image"
                                            title="Shop product image!"><img alt="Shop product image!"
                                                src="{{ asset('uploads/' . $images['name']) }}">
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-5 col-md-12 px-3">
                    @php
                        
                        echo $page->section3_hamper_content;
                        
                    @endphp
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
