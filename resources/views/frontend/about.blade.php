@extends("frontend.layouts.master")
@section('main-section')




<section id="page-title" class="text-light" data-bg-parallax="{{ asset('uploads/'.$page[0]->ab_image)}}">
    <div class="container">
        <div class="breadcrumb" data-animate="fadeInUp" data-animate-delay="1300">
            <ul>
                <li><a href="/">Home</a> </li>
                <li class="active">{{$page[0]->ab_title}}</li>
            </ul>
        </div>
        <div class="page-title" data-animate="fadeInUp" data-animate-delay="1300">
            <h1>{{$page[0]->ab_title}}</h1>
            <!-- <span>Simple page title with background parallax image</span> -->
        </div>
    </div>
</section>
<!-- end: Page title -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="heading-text heading-section">
                    <h2>{{$page[0]->ab_title}}</h2>

                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-6"><p align="justify">{{$page[0]->ab_desc1}}</p>
                    </div>

                    <div class="col-lg-6"><p align="justify">{{$page[0]->ab_desc2}}</p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>


<section class="box-fancy section-fullwidth text-light p-b-0">
    <div class="row">
        <div style="background-color:#4f9467" class="col-lg-4">
            <h1 class="text-lg text-uppercase">01.</h1>
            <p align="justify">{{$page[0]->ab_box1}}</p>

        </div>

        <div style="background-color:#437c56" class="col-lg-4">
            <h1 class="text-lg text-uppercase">02.</h1>
            <p align="justify">{{$page[0]->ab_box2}}</p>

        </div>

        <div style="background-color:#335e41" class="col-lg-4">
            <h1 class="text-lg text-uppercase">03.</h1>
            <p align="justify">{{$page[0]->ab_box3}}</p>

        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="heading-text text-center">
            <h2>{{$page[0]->ab_company}}</h2>
            <p class="lead text-center">{{$page[0]->ab_company_qt}}</p>
        </div>
        <!-- Testimonials -->
        <div class="carousel arrows-visibile testimonial testimonial-single testimonial-left" data-items="1">

            <!-- Testimonials item -->
            <div class="testimonial-item">
                <img src="{{ url('front/img/team/9.jpg')}}" alt="">
                <p>Green Guide Amgzine is by far the most amazing website out there! I literally could not be happier that I chose it!</p>
                <span>Alan Monre</span>
                <span>CEO, Square Software</span>
            </div>
            <!-- end: Testimonials item-->

            <!-- Testimonials item -->
            <div class="testimonial-item">
                <img src="{{ url('front/img/team/9.jpg')}}" alt="">
                <p>Green Guide Amgzine is by far the most amazing website out there! I literally could not be happier that I chose it</p>
                <span>Alan Monre</span>
                <span>CEO, Square Software</span>
            </div>
            <!-- end: Testimonials item-->

            <!-- Testimonials item -->
            <div class="testimonial-item">
                <img src="{{ url('front/img/team/9.jpg')}}" alt="">
                <p>Green Guide Amgzine is by far the most amazing website out there! I literally could not be happier that I chose it</p>
                <span>Alan Monre</span>
                <span>CEO, Square Software</span>
            </div>
            <!-- end: Testimonials item-->

        </div>
        <!-- end: Testimonials -->
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
                    {{-- <li>
                        <a href="#"><img style="width:200px; height: 200px; margin:20px 40px" alt="" src="{{ url('front/img/logos/logo1.png') }}"></a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
</div>



@endsection





