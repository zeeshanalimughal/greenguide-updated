@extends('frontend.layouts.master')
@include('backend.utils.functions')

@section('main-section')
    <div class="fixed__advertise__link">
        <a href="/magzine-design-book">Advertise with us</a>
    </div>



    <div class="contact__us__hero"
        style="
                width     : 100% !important;
                min-height: 50vh !important;
                background-image:url('{{ asset('uploads/' . $page[0]->contact_hero_image) }}') !important;
                background-repeat  : no-repeat !important;
                background-size    : cover !important;
                background-position: center !important;
                display            : flex !important;
                justify-content    : center;
                align-items        : center !important;
                padding:0 5rem;
                flex-direction     : column !important;
        "
        data-animate="fadeIn" data-animate-delay="500">
        <div class="row w-100">
            <div class="col-lg-5 col-md-12">
                <h1 class="title" data-animate="fadeInDown" data-animate-delay="700">
                    {{ $page[0]->contact_title }}

                </h1>
                <a href="#contact__title"><button class="btn__advertise" data-animate="fadeInUp"
                        data-animate-delay="800">Contact Us</button></a>

            </div>
        </div>
    </div>



    <div class="container my-5 ">
        <div class="row">
            <div class="col-12 mt-4">
                <div class="opt_section rounded py-4" style="background-color:#2B6C42;">
                    <div class="row p-4 d-flex align-items-center">
                        <div class="col-lg-2 col-md-12">
                            <h4 class="text-white">OPT OUT</h4>
                        </div>
                        <div class="col-lg-10 col-md-12">
                            <form action="" id="opt-form">
                                <div class="row d-flex align-items-center">
                                    <div class="col-lg-9 col-md-12">
                                        <div class="row mb-2">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label text-white">Name</label>
                                            <div class="col-lg-9 col-md-12">
                                                <input type="text" class="form-control" id="inputEmail3">
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label for="inputEmail3"
                                                class="col-sm-2 col-form-label text-white">Address</label>
                                            <div class="col-lg-9 col-md-12">
                                                <input type="text" class="form-control" id="inputEmail3">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-12">
                                        <button type="submit" class="btn btn-info btn-block">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-10 offset-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                <label class="form-check-label text-white" for="gridCheck1">
                                    {{ $page[0]->otp_checkbox_text }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row ps-5 p-4 pt-0 text-white">
                        @php
                            echo $page[0]->otp_bottom_text;
                        @endphp
                    </div>
                </div>
            </div>

        </div>
    </div>

    <section>
        <div class="container-fluid px-3 px-sm-10">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <h3 class="text-uppercase contact__title" id="contact__title" data-animate="fadeInDown"
                        data-animate-delay="600"> {{ $page[0]->contact_sub_title }}</h3>
                    <p class="text-justify" align="justify" data-animate="fadeInUp" data-animate-delay="700">
                        @php
                            echo $page[0]->contact_desc;
                        @endphp
                    </p>
                    @if ($form[0]->status === 'live')
                        <div class="m-t-30" data-animate="fadeInUp" data-animate-delay="900">
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
                    @else
                        <h2>Contact Form Not Available</h2>
                    @endif
                    <div class="social-icons m-t-30 social-icons-colored">
                        <ul>

                            @if ($page[0]->facebook)
                                <li class="social-facebook" data-animate="fadeInUp" data-animate-delay="800">
                                    <a href="{{ $page[0]->facebook }}"><i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                            @endif


                            @if ($page[0]->twitter)
                                <li class="social-twitter" data-animate="fadeInUp" data-animate-delay="900">
                                    <a href="{{ $page[0]->twitter }}"><i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                            @endif

                            @if ($page[0]->skype)
                                <li class="social-skype" data-animate="fadeInUp" data-animate-delay="1000"><a
                                        href="{{ $page[0]->skype }}">
                                        <i class="fab fa-skype"></i>
                                    </a>
                                </li>
                            @endif

                            @if ($page[0]->linkedin)
                                <li class="social-linkedin" data-animate="fadeInUp" data-animate-delay="1300">
                                    <a href="{{ $page[0]->linkedin }}"><i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                            @endif

                            @if ($page[0]->instagram)
                                <li class="social-instagram" data-animate="fadeInUp" data-animate-delay="1400">
                                    <a href="{{ $page[0]->instagram }}">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            @endif

                            @if ($page[0]->youtube)
                                <li class="social-youtube" data-animate="fadeInUp" data-animate-delay="1500">
                                    <a href="{{ $page[0]->youtube }}">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                            @endif

                            @if ($page[0]->vimeo)
                                <li class="social-vimeo" data-animate="fadeInUp" data-animate-delay="1600">
                                    <a href="{{ $page[0]->vimeo }}"><i class="fab fa-vimeo"></i>
                                    </a>
                                </li>
                            @endif

                        </ul>
                    </div>
                </div>
                <div class="col-lg-6" data-animate="fadeInRight" data-animate-delay="900">
                    <div class="row">
                        <div class="col-lg-6">
                            <address>
                                <strong>Finance
                                </strong><br>
                                <a href="mailto:{{ $page[0]->finance_email }}">{{ $page[0]->finance_email }}</a> <br>
                                <label title="Phone">P: {{ $page[0]->finance_phone }}
                                </label>
                            </address>
                        </div>
                        <div class="col-lg-6">
                            <address>
                                <strong>Design
                                </strong><br>
                                <a href="mailto:{{ $page[0]->design_email }}">{{ $page[0]->design_email }}</a> <br>
                                <label title="Phone">P: {{ $page[0]->design_phone }}
                                </label>
                            </address>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <address>
                                <strong>Operations
                                </strong><br>
                                <a href="mailto:{{ $page[0]->operations_email }}">{{ $page[0]->operations_email }}</a>
                                <br>
                                <label title="Phone">P: {{ $page[0]->operations_phone }}
                                </label>
                            </address>
                        </div>
                        <div class="col-lg-6">
                            <address>
                                <strong>Customer Service:
                                </strong><br>
                                <a href="mailto:{{ $page[0]->customer_email }}">{{ $page[0]->customer_email }}</a> <br>
                                <label title="Phone">P: {{ $page[0]->customer_phone }}
                                </label>
                            </address>
                        </div>
                        <div class="col-lg-6">
                            <address>
                                <strong>Sales Team:
                                </strong><br>
                                <a href="mailto:{{ $page[0]->sales_email }}">{{ $page[0]->sales_email }}</a> <br>
                                <label title="Phone">P: {{ $page[0]->sales_phone }}
                                </label>
                            </address>
                        </div>
                        <div class="col-lg-6">
                            <address>
                                <strong>Hr Development:
                                </strong><br>
                                <a href="mailto:{{ $page[0]->hr_email }}">{{ $page[0]->hr_email }}</a> <br>
                                <label title="Phone">P: {{ $page[0]->hr_phone }}
                                </label>
                            </address>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    @php
                        echo $page[0]->contact_map;
                    @endphp
                </div>
            </div>
        </div>
    </section>














    <div class="our__team__section py-5 m-t-100 team4"
        style="background-image:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)), url('{{ asset('uploads/' . $page[0]->contact_team_bg_image) }}') !important;">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-7 text-center">
                    <h3 class="mb-3" data-animate="fadeInDown" data-animate-delay="600">
                        {{ $page[0]->contact_team_title }}</h3>
                    <h6 class="subtitle desc" data-animate="fadeInUp" data-animate-delay="700">
                        {{ $page[0]->contact_team_desc }}</h6>
                </div>
            </div>
            <div class="row">
                @foreach ($teams as $team)
                    <div class="col-lg-3 mb-4" data-animate="fadeInUp" data-animate-delay="900">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center">
                                <img src="{{ asset('uploads/' . $team->image) }}" alt="wrapkit" width="200"
                                    height="200" style="object-fit: cover;" class=" rounded-circle" />
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="pt-2">
                                    <h5 class="mt-4 font-weight-medium mb-0">{{ $team->name }}</h5>
                                    <h6 class="subtitle mb-3">{{ $team->position }}</h6>
                                    <a href="mailto:{{ $team->email }}"
                                        class="btn btn-info text-white btn-outline  btn-roundeded ">Contact</a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    </div>







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
