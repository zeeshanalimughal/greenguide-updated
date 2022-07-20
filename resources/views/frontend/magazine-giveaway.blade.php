@extends('frontend.layouts.master')
@section('main-section')
    <div class="advertise__hero advert__design__hero"  style="background-image:linear-gradient(to right, rgba(0,0,0,0.6),rgba(0,0,0,0.4)), url('https://img.freepik.com/free-photo/gift-box-with-flowers-green-background_185193-72157.jpg?w=1380&t=st=1657952559~exp=1657953159~hmac=935259c186eaafd992df3edf73507939bbab05be3b61197b6c2186eaa2ec5817') !important;"  data-animate="fadeIn" data-animate-delay="500">
        <h1 class="title" data-animate="fadeInDown" data-animate-delay="700">
            Green Guide Giveaway
        </h1>
        <div class="container">
            <p class="description" style="font-size:17px; color:#fff; margin-top: 20px; text-align: center"
                data-animate="fadeInUp" data-animate-delay="800">
                In every publication of the Green Guide magazine there will be an interactive competition for all residents.
                To be in with a chance to win the Quarterly Giveaway fill out the Competition form below.
            </p>
        </div>

    </div>




 



    <div class="container  pt-5 pb-3 my-5">

     <div class="page-title  my-3" style="text-align:left;">
                To enter your answer to our magazine giveway online fill out the below form. A prize will be drawn at random
                from the successful entries and contacted by email or phone. <br>Alternatively you can write to us, Unit 1
                Georgiou Business Park, Second Avenue, N18 2PG, entries must be recieved by midnight on the stated date.
                Please read our <a href="/competition-terms-conditions">Competition Terms & Conditions</a> before entry
                submission.

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
        <form class="row g-3" id="form" method="post" action="{{ route('magzine-giveaway.submit') }}">
            <h1 class="text-center">Green Guide Giveaway</h1>
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
    </div>



<div style="background:#ededed;padding:2rem 0;width:100%;">
    <div class="container  py-5" >
        <div class="row">

            <div class="col-lg-7 col-md-12 px-3">
                <h2 class="text-left">The latest
                        issue giveaway is
                        proudly sponsored
                        by:</h2>
                    <h1 style="text-align: left; fonts-size:3.5rem;color:green;">John Lewis</h1>
                    <p class="text-left">The Summer 2022 issue prize is proudly donated by John Lewis </p>

                    <div class="row d-flex my-5">
                        <div class="col-lg-5">
                            <div class="product-image">
                                <!-- Carousel slider -->
                                <div class="carousel dots-inside dots-dark arrows-visible" data-items="1" data-loop="true"
                                    data-autoplay="true" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="2500"
                                    data-lightbox="gallery">
                                    <a href="{{ asset('front/img/hamper.jpg') }}" data-lightbox="image"
                                        title="Shop product image!"><img alt="Shop product image!"
                                            src="{{ asset('front/img/hamper.jpg') }}">
                                    </a>
                                    <a href="{{ asset('front/img/hamper2.jpg') }}" data-lightbox="image"
                                        title="Shop product image!"><img alt="Shop product image!"
                                            src="{{ asset('front/img/hamper2.jpg') }}">
                                    </a>
                                </div>
                                <!-- Carousel slider -->
                            </div>
                        </div>
                    </div>

            </div>
            <div class="col-lg-5 col-md-12 px-3">
            
                <h2>The hamper contains;</h2>
                <ul>
                    <li>Orange Grove Merlot Spain, 75cl, 13.5%</li>
                    <li>Story White Grape & Elderflower Sparkling Fruit Pressé, 75cl</li>
                    <li>Teoni’s Chocolate Oat Crumble Biscuits, 200g</li>
                    <li>Mr Filbert’s Kalamata Olives, 65g</li>
                    <li>Cottage Delight Orange Marmalade, 227g plus Wooden Spoon</li>
                    <li>Cottage Delight Sweet Apple Chutney 210gm plus Wooden Spoon</li>
                    <li>The Dormen Dry Roasted Peanuts, 100g</li>
                    <li>Linden Lady Handmade Vanilla Fudge, 115g</li>
                    <li>Grate Britain All British Cheddar Biscuits, 100g</li>
                    <li>The Original Cake Company 4” Round Fruit</li>
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
