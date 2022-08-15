@extends('frontend.layouts.master')
@section('main-section')
    <div class="fixed__advertise__link">
        <a href="#book__addvertise">Advertise with us</a>
    </div>




    <div class="advertise__hero advert__design__hero" data-animate="fadeIn" data-animate-delay="500">
        <h1 class="title" data-animate="fadeInDown" data-animate-delay="700">
            Green Guide magazine
        </h1>
        <h3 class="subtitle" data-animate="fadeInUp" data-animate-delay="800">
            Our professional design team can generate a high quality <br>advert for your business


        </h3>
        <a href="#book__addvertise"><button class="btn__advertise" data-animate="fadeInUp" data-animate-delay="1000">Book
                Now</button></a>
    </div>






    <div class="business__about__section d-flex justify-content-center align-items-center bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12" data-animate="fadeInLeft" data-animate-delay="700">
                    <div class="image">
                        <img src="{{ url('front/img/TL-Portfolio-graphic.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 mt-3 mt-sm-6">
                    <div class="title" data-animate="fadeInUp" data-animate-delay="700">
                        Advert Design
                    </div>
                    <h5 class="description text-dark mb-3" data-animate="fadeInUp" data-animate-delay="800">
                        Readers and customers want an advert to catch their eye and we recommend that your advert consists
                        of content that a reader can gain useful information from. To maximise your exposure we recommend
                        that your advert;
                    </h5>
                    <div class="description" text-align="justify" data-animate="fadeInUp" data-animate-delay="900">
                        <div class="text-left">
                            <ul>
                                <li class="mb-1 text-dark">Be original.</li>
                                <li class="mb-1 text-dark">High-quality images and content.
                                </li>
                                <li class="mb-1 text-dark">Insightful content with the subliminal impact of selling a
                                    product or service.
                                </li>
                                <li class="mb-1 text-dark">Call to action
                                </li>
                                <li class="mb-1 text-dark">Trackable code to measure your ROI
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>






    <div class="addvertise__gallery d-flex justify-content-center align-items-center"
        style="background:#ededed;padding:3rem 0;">
        <div class="container">
            <h4 class="text-center text-dark mb-6" data-animate="fadeInDown" data-animate-delay="500">To maximise your
                exposure and capture the readers eye we recommend that your advert design should be high quality images and
                insightful content that is beneficial to the reader</h4>
            <div class="row p-0 m-0" data-animate="fadeInUp" data-animate-delay="700">
                <div class="col-lg-4 col-sm-6 p-0 m-0">
                    <a href="{{ url('front/img/advertisements/add1.jpg') }}">
                        <div class="image_box">
                            <img src="{{ url('front/img/advertisements/add1.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 p-0 m-0">
                    <a href="{{ url('front/img/advertisements/add2.jpg') }}">

                        <div class="image_box">
                            <img src="{{ url('front/img/advertisements/add2.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 p-0 m-0">
                    <a href="{{ url('front/img/advertisements/add3.jpg') }}">
                        <div class="image_box">
                            <img src="{{ url('front/img/advertisements/add3.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 p-0 m-0">
                    <a href="{{ url('front/img/advertisements/add4.jpg') }}">
                        <div class="image_box">
                            <img src="{{ url('front/img/advertisements/add4.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 p-0 m-0">
                    <a href="{{ url('front/img/advertisements/add5.jpg') }}">
                        <div class="image_box">
                            <img src="{{ url('front/img/advertisements/add5.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 p-0 m-0">
                    <a href="{{ url('front/img/advertisements/add6.jpg') }}">
                        <div class="image_box">
                            <img src="{{ url('front/img/advertisements/add6.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 p-0 m-0">
                    <a href="{{ url('front/img/advertisements/add7.jpg') }}">
                        <div class="image_box">
                            <img src="{{ url('front/img/advertisements/add7.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 p-0 m-0">
                    <a href="{{ url('front/img/advertisements/add8.jpg') }}">
                        <div class="image_box">
                            <img src="{{ url('front/img/advertisements/add8.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 p-0 m-0">
                    <a href="{{ url('front/img/advertisements/add9.jpg') }}">
                        <div class="image_box">
                            <img src="{{ url('front/img/advertisements/add9.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 p-0 m-0">
                    <a href="{{ url('front/img/advertisements/add16.jpg') }}">
                        <div class="image_box">
                            <img src="{{ url('front/img/advertisements/add16.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 p-0 m-0">
                    <a href="{{ url('front/img/advertisements/add11.jpg') }}">
                        <div class="image_box">
                            <img src="{{ url('front/img/advertisements/add11.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 p-0 m-0">
                    <a href="{{ url('front/img/advertisements/add12.jpg') }}">
                        <div class="image_box">
                            <img src="{{ url('front/img/advertisements/add12.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 p-0 m-0">
                    <a href="{{ url('front/img/advertisements/add13.jpg') }}">
                        <div class="image_box">
                            <img src="{{ url('front/img/advertisements/add13.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 p-0 m-0">
                    <a href="{{ url('front/img/advertisements/add14.jpg') }}">
                        <div class="image_box">
                            <img src="{{ url('front/img/advertisements/add14.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 p-0 m-0">
                    <a href="{{ url('front/img/advertisements/add17.jpg') }}">
                        <div class="image_box">
                            <img src="{{ url('front/img/advertisements/add17.jpg') }}" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>









    <div class="container mt-5">
        <div class="text-center">
            <h2>Advert Prices</h2>
            <p class="lead">
                Although the internet is packed full of marketing noise, which we generally filter, a magazine only has a
                few advertisements per page. Thus, when advertising in a magazine, exposure increases substantially.
            </p>
        </div>
    </div>







    <section id="page-content" class="px-5">

        <div id="blog" class="grid-layout post-3-columns m-b-30 m-t-30 grid-loaded" data-item="post-item"
            style="margin: 0px -20px -20px 0px; position: relative; height: 1486px;">

            <!-- Post item-->
            <div class="post-item" style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">

                <div class="post-item-wrap">
                    <div class="row">
                        <div class="col-9 text-center">
                            <h4>A6 (height: 210mm x widht:148mm)</h4>
                        </div>
                    </div>
                    <div class="post-image ad-post-image">
                        <img alt="" src="{{ asset('/front/img/advertisements/ad1.jpg') }}">

                    </div>
                    <div class="row">
                        <div class="col-9 text-center">
                            <h3>£100+VAT</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: Post item-->



            <!-- Post item-->
            <div class="post-item" style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">

                <div class="post-item-wrap">
                    <div class="row">
                        <div class="col-9 text-center">
                            <h4>A5 (height: 210mm x widht:148mm)</h4>
                        </div>
                    </div>
                    <div class="post-image ad-post-image">
                        <img alt="" src="{{ asset('/front/img/advertisements/ad-2.jpg') }}">

                    </div>
                    <div class="row">
                        <div class="col-9 text-center">
                            <h3>£120+VAT</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: Post item-->




            <!-- Post item-->
            <div class="post-item" style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">

                <div class="post-item-wrap">
                    <div class="row">
                        <div class="col-9 text-center">
                            <h4>A4 (height: 210mm x widht:148mm)</h4>
                        </div>
                    </div>
                    <div class="post-image ad-post-image">
                        <img alt="" src="{{ asset('/front/img/advertisements/ad-3.jpg') }}">

                    </div>
                    <div class="row">
                        <div class="col-9 text-center">
                            <h3>£150+VAT</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: Post item-->





            <!-- Post item-->
            <div class="post-item" style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">

                <div class="post-item-wrap">
                    <div class="row">
                        <div class="col-9 text-center">
                            <h4>Double Spread (height: 210mm x widht:148mm)</h4>
                        </div>
                    </div>
                    <div class="post-image ad-post-image">
                        <img alt="" src="{{ asset('/front/img/advertisements/ad-4.jpg') }}">

                    </div>
                    <div class="row">
                        <div class="col-9 text-center">
                            <h3>£200+VAT</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: Post item-->



            <!-- Post item-->
            <div class="post-item" style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">

                <div class="post-item-wrap">
                    <div class="row">
                        <div class="col-9 text-center">
                            <h4>Voucher (height: 210mm x widht:148mm)</h4>
                        </div>
                    </div>
                    <div class="post-image ad-post-image">
                        <img alt="" src="{{ asset('/front/img/advertisements/ad-5.jpg') }}">

                    </div>
                    <div class="row">
                        <div class="col-9 text-center">
                            <h3>£50+VAT</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: Post item-->



            <!-- Post item-->
            <div class="post-item" style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">

                <div class="post-item-wrap">
                    <div class="row">
                        <div class="col-9 text-center">
                            <h4>Voucher (height: 210mm x widht:148mm)</h4>
                        </div>
                    </div>
                    <div class="post-image ad-post-image">
                        <img alt="" src="{{ asset('/front/img/advertisements/ad-6.jpg') }}">

                    </div>
                    <div class="row">
                        <div class="col-9 text-center">
                            <h3>£50+VAT</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: Post item-->


            <div class="grid-loader"></div>
        </div>

    </section>







    <section class="background-grey">
        <div class="container">
            <div class="text-center">

                <p class="lead">
                    In printed magazines, your adverts can reach new audiences, particularly local residents who do not
                    regularly access online content.
                </p>

            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Product Type</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($adverts as $advert)
                        <tr>
                            <td>{{ $advert->advert_size }}</td>
                            <td>{{ $advert->currency }}{{ $advert->advert_price }}+VAT</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </section>









    <div class="upcomming__issues" style="background-color: #fff;">
        <div class="container">
            <div class="row p-0 m-0 d-flex justify-content-between">
                <div class="col-lg-5 col-md-12 p-0 m-0 animate__animated animate__fadeInLeft visible"
                    data-animate="fadeInLeft" data-animate-delay="600">
                    <h2 class="title">Upcoming Issues
                    </h2>
                    <p class="description">The Green Guide magazine is a unified publication of local messages,
                        community initiatives and a business directory. Connecting residents with their local market to
                        establish a pathway for community growth. Download the latest issue or access our archives.

                    </p>
                </div>
                <div class="col-lg-6 col-md-12 p-0 m-0 animate__animated animate__fadeInRight visible"
                    data-animate="fadeInRight" data-animate-delay="700">
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








    <!-- Page Menu -->
    <section id="book__addvertise"
        style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('https://img.freepik.com/free-photo/closeup-shot-moss-plants-growing-tree-branch-forest_181624-14091.jpg?w=1380&t=st=1657948838~exp=1657949438~hmac=db4920fd199fe7941007d6067a3224566f9dda4982d12f0e58977f0939050b7c'); background-repeat: no-repeat;background-size:cover;background-attachment:fixed;color:#fff !important;">
        <div class="container">
            <h1 class="text-center text-white" data-animate="fadeInUp" data-animate-delay="600">BOOK NOW</h1>
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
            <form method="POST" class="form-validate" action="{{ route('design.submit-design') }}"
                enctype="multipart/form-data" data-animate="fadeInUp" data-animate-delay="800">
                @csrf
                <div class="text-center text-white">
                    <h4>Contact Information</h4>
                </div>
                <br>
                <div class="form-group row">
                    <label for="example-text-input" class="col-lg-1 col-form-label text-white">Company Name</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" name="company_name"
                            value="{{ isset($userDetails) ? $userDetails->company_name : '' }}" />
                    </div>

                    <label for="example-text-input" class="col-lg-1 col-form-label text-white">Contact Name</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" name="contact_name"
                            value="{{ auth()->check() ? auth()->user()->name : '' }}" />
                    </div>

                </div>
                <div class="form-group row">

                    <label for="example-text-input" class="col-lg-1 col-form-label text-white">Company Number</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" name="company_reg_no"
                            value="{{ isset($userDetails) ? $userDetails->company_reg_no : '' }}" />
                    </div>

                    <label for="example-text-input" class="col-lg-1 col-form-label text-white">Contact Number</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" name="contact_phone"
                            value="{{ isset($userDetails) ? $userDetails->phone : '' }}" />
                    </div>
                </div>
                <div class="form-group row">

                    <label for="example-text-input" class="col-lg-1 col-form-label text-white">Company Email</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="email" name="company_email"
                            value="{{ auth()->check() ? auth()->user()->email : '' }}" />
                    </div>

                    <label for="example-text-input" class="col-lg-1 col-form-label text-white">Contact Email</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="email" name="contact_email"
                            value="{{ auth()->check() ? auth()->user()->email : '' }}" />
                    </div>

                    <label for="example-text-input" class="col-lg-1 col-form-label text-white">Charity Number</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" name="charity_number"
                            value="{{ isset($userDetails) ? $userDetails->charity_number : '' }}" />
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <hr>
                <div class="text-center text-white">
                    <h4 class="text-white">Basic Information</h4>
                </div>
                <br>
                <div class="form-group row">
                    <label for="example-text-input" class="col-lg-1 col-form-label text-white">Design Breif</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" name="brief_desc" />
                        @if ($errors->has('brief_desc'))
                            <div class="text-danger">{{ $errors->first('brief_desc') }}</div>
                        @endif
                    </div>
                    <label for="example-text-input" class="col-lg-1 col-form-label text-white">Size of Advert</label>
                    <div class="col-lg-5">
                        <select class="form-select" name="advertSize">
                            <option value="">Select a Size of Advert</option>
                            @foreach ($adverts_sizes as $size)
                                <option value="{{ $size->id }}">{{ $size->advert_size }} -
                                    {{ $size->advert_price }}{{ $size->currency }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('advertSize'))
                            <div class="text-danger">{{ $errors->first('advertSize') }}</div>
                        @endif
                        {{-- <div class="text-danger">* Premium page is only available to accounts that are assigned Marketing, Communication, Nationwide in their My Profile section – assigned by Office Admin</div> --}}
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-lg-1 col-form-label text-white">Issue</label>
                    <div class="col-lg-5">
                        <select class="form-select" name="upcomingIssue">
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
                    <label for="example-text-input" class="col-lg-1 col-form-label text-white">Logo</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="file" name="logo" accept="image/x-png,image/jpeg" />
                        @if ($errors->has('logo'))
                            <div class="text-danger">{{ $errors->first('logo') }}</div>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-lg-1 col-form-label text-white">Content</label>
                    <div class="col-lg-11">
                        <textarea class="form-control" type="text" name="content"></textarea>
                        @if ($errors->has('content'))
                            <div class="text-danger">{{ $errors->first('content') }}</div>
                        @endif
                    </div>
                    <script>
                        CKEDITOR.replace('content');
                    </script>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-lg-1 col-form-label text-white">Images</label>
                    <div class="col-lg-11">
                        <input class="form-control" type="file" name="images[]" accept="image/x-png,image/jpeg"
                            multiple="multiple" />
                        @if ($errors->has('images'))
                            <div class="text-danger">{{ $errors->first('images') }}</div>
                        @endif
                    </div>
                </div>
                <br>
                <hr>
                <div class="text-center text-white">
                    <h4 class="text-white">Trading Hours</h4>
                </div>
                <br>
                <div class="form-group row">
                    <label for="example-text-input" class="col-lg-1 col-form-label text-white">Monday</label>
                    <div class="col-lg-3">
                        <input class="form-control" type="time" name="monday_open" />
                        @if ($errors->has('monday_open'))
                            <div class="text-danger">{{ $errors->first('monday_open') }}</div>
                        @endif
                    </div>
                    <div class="col-lg-2">
                        <input class="form-control" type="time" name="monday_close" />
                        @if ($errors->has('monday_close'))
                            <div class="text-danger">{{ $errors->first('monday_close') }}</div>
                        @endif
                    </div>

                    <label for="example-text-input" class="col-lg-1 col-form-label text-white">Tuesday</label>
                    <div class="col-lg-2">
                        <input class="form-control" type="time" name="tuesday_open" />
                        @if ($errors->has('tuesday_open'))
                            <div class="text-danger">{{ $errors->first('tuesday_open') }}</div>
                        @endif
                    </div>

                    <div class="col-lg-3">
                        <input class="form-control" type="time" name="tuesday_close" />
                        @if ($errors->has('tuesday_close'))
                            <div class="text-danger">{{ $errors->first('tuesday_close') }}</div>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-lg-1 col-form-label text-white">Wednesday</label>
                    <div class="col-lg-3">
                        <input class="form-control" type="time" name="wednesday_open" />
                        @if ($errors->has('wednesday_open'))
                            <div class="text-danger">{{ $errors->first('wednesday_open') }}</div>
                        @endif
                    </div>
                    <div class="col-lg-2">
                        <input class="form-control" type="time" name="wednesday_close" />
                        @if ($errors->has('wednesday_close'))
                            <div class="text-danger">{{ $errors->first('wednesday_close') }}</div>
                        @endif
                    </div>

                    <label for="example-text-input" class="col-lg-1 col-form-label text-white">Thursday</label>
                    <div class="col-lg-2">
                        <input class="form-control" type="time" name="thursday_open" />
                        @if ($errors->has('thursday_open'))
                            <div class="text-danger">{{ $errors->first('thursday_open') }}</div>
                        @endif
                    </div>

                    <div class="col-lg-3">
                        <input class="form-control" type="time" name="thursday_close" />
                        @if ($errors->has('thursday_close'))
                            <div class="text-danger">{{ $errors->first('thursday_close') }}</div>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-lg-1 col-form-label text-white">Friday</label>
                    <div class="col-lg-3">
                        <input class="form-control" type="time" name="friday_open" />
                        @if ($errors->has('friday_open'))
                            <div class="text-danger">{{ $errors->first('friday_open') }}</div>
                        @endif
                    </div>
                    <div class="col-lg-2">
                        <input class="form-control" type="time" name="friday_close" />
                        @if ($errors->has('friday_close'))
                            <div class="text-danger">{{ $errors->first('friday_close') }}</div>
                        @endif
                    </div>

                    <label for="example-text-input" class="col-lg-1 col-form-label text-white">Saturday</label>
                    <div class="col-lg-2">
                        <input class="form-control" type="time" name="saturday_open" />
                        @if ($errors->has('saturday_open'))
                            <div class="text-danger">{{ $errors->first('saturday_open') }}</div>
                        @endif
                    </div>

                    <div class="col-lg-3">
                        <input class="form-control" type="time" name="saturday_close" />
                        @if ($errors->has('saturday_close'))
                            <div class="text-danger">{{ $errors->first('saturday_close') }}</div>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-lg-1 col-form-label text-white">Sunday</label>
                    <div class="col-lg-3">
                        <input class="form-control" type="time" name="sunday_open" />
                        @if ($errors->has('sunday_open'))
                            <div class="text-danger">{{ $errors->first('sunday_open') }}</div>
                        @endif
                    </div>
                    <div class="col-lg-2">
                        <input class="form-control" type="time" name="sunday_close" />
                        @if ($errors->has('sunday_close'))
                            <div class="text-danger">{{ $errors->first('sunday_close') }}</div>
                        @endif
                    </div>

                    <label for="example-text-input" class="col-lg-1 col-form-label text-white">Bank Holiday</label>
                    <div class="col-lg-2">
                        <input class="form-control" type="time" name="holiday_open" />
                        @if ($errors->has('holiday_open'))
                            <div class="text-danger">{{ $errors->first('holiday_open') }}</div>
                        @endif
                    </div>

                    <div class="col-lg-3">
                        <input class="form-control" type="time" name="holiday_close" />
                        @if ($errors->has('holiday_close'))
                            <div class="text-danger">{{ $errors->first('holiday_close') }}</div>
                        @endif
                    </div>
                </div>
                <br>
                <hr>
                <div class="text-center text-white">
                    <h4 class="text-white">Social Media</h4>
                </div>
                <br>
                <div class="form-group row">
                    <label for="example-text-input" class="col-lg-1 col-form-label text-white">Website</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" name="website"  />
                        @if ($errors->has('website'))
                            <div class="text-danger">{{ $errors->first('website') }}</div>
                        @endif
                    </div>
                    <label for="example-text-input" class="col-lg-1 col-form-label text-white">Facebook</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" name="fb" />
                        @if ($errors->has('fb'))
                            <div class="text-danger">{{ $errors->first('fb') }}</div>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-lg-1 col-form-label text-white">Instagram</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" name="ins"  />
                        @if ($errors->has('ins'))
                            <div class="text-danger">{{ $errors->first('ins') }}</div>
                        @endif
                    </div>
                    <label for="example-text-input" class="col-lg-1 col-form-label text-white">Twitter</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" name="tw" />
                        @if ($errors->has('tw'))
                            <div class="text-danger">{{ $errors->first('tw') }}</div>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-lg-1 col-form-label text-white">Youtube</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" name="yt"  />
                        @if ($errors->has('yt'))
                            <div class="text-danger">{{ $errors->first('yt') }}</div>
                        @endif
                    </div>
                </div>

                @if (!auth()->check())     
                <br>
                <div class="form-group row d-flex align-items-center">
                    <label for="account_toggle" class="col-lg-2 col-form-label text-white">Do You Want To Create Account ?</label>
                    <div class="col-lg-7">
                        <input type="checkbox" name="check_account" value="0" id="account_toggle" style="width:20px;height: 20px;" />
                    </div>
                </div>
                <div class="form-group row" id="passwords__container">
                    <label for="example-text-input" class="col-lg-1 col-form-label text-white">Password</label>
                    <div class="col-lg-12">
                        <input class="form-control" type="password" name="password"  />
                        @if ($errors->has('password'))
                            <div class="text-danger">{{ $errors->first('password') }}</div>
                        @endif
                    </div>
                    <label for="example-text-input" class="col-lg-1 col-form-label text-white">Confirm Password</label>
                    <div class="col-lg-12">
                        <input class="form-control" type="password" name="confirm_password" />
                        @if ($errors->has('confirm_password'))
                            <div class="text-danger">{{ $errors->first('confirm_password') }}</div>
                        @endif
                    </div>
                </div>
                @endif
                <div class="form-group row">
                    <div class="col-lg-12">
                        <button class="mt-4 btn btn-block" type="submit">Submit</button>
                    </div>
                </div>
            </form>
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
