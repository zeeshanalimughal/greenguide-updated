@extends('frontend.layouts.master')
@section('main-section')
    <div class="ward__members__hero"
        style="width:100%;min-height: 30vh;background-image: url({{ asset('front/img/Area-we-cover-1.jpg') }}); background-position:center bottom;display: grid;place-items:center;">
    <h1 class="text-white text-center px-3">Local Green Guide {{$members[0]->lgg_ward_title}} WARD</h1>
    </div>

    <div class="wards__members__section">
        <div class="container my-5">
            <h2 class="underline"><b>Ward Name:</b> {{$members[0]->lgg_ward_title}}</h2>
            <div class="row g-4 d-flex justify-content-between">

                @foreach ($members as $member)
                    <div class="col-lg-5 col-md-6 col-sm-12">

                        <div class="member__card">
                            <a href="#">
                                <div class="profile">
                                    <img src="{{ asset('uploads/' . $member->profile) }}" alt="">
                                </div>
                            </a>

                            <div class="profile_details">
                                <label class="name"><b>{{ $member->name }}</b></label>
                                <label class="name">{{ $member->title }}</label>
                                <label class="name">{{ $member->email }}</label>
                                <label class="name">{{ $member->mobile }}</label>
                                <label class="name">{{ $member->landline }}</label>
                                <label class="name">{{ $member->twitter }}</label>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>




        
        <div class="places_and_services_section" style="margin-top: 40px;">
            <div class="row my-5">
                <div class="col-lg-3 col-sm-12"></div>
                <div class="col-lg-6 col-sm-12">
                    <form>
                        <div class="row g-4 d-flex justify-content-center">
                            <div class="col-lg-3 col-md-4 col-sm-5">
                                <button class="w-100 btn btn-primary">Addiscombe East</button>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-5">
                                <button class="w-100 btn btn-primary">Borough</button>
                            </div>

                        </div>
                        <div class="row mt-4 d-flex justify-content-center">
                            <div class="col-lg-6">
                                <select class="form-select me-5" placeholder="Places and Services">
                                    <option selected="selected" disabled>Select Places and Services</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>

                        <div class="container mt-5">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2477.241881356656!2d-0.050808684338578!3d51.61877817965347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761e8ae036c7b1%3A0x85f7847126c3629f!2sLocal%20Green%20Guide%20Ltd%20-%20LGG%20Marketing!5e0!3m2!1sen!2s!4v1639087067763!5m2!1sen!2s"
                                style="border:0;widows: 100% !important; height: 40vh !important;" allowfullscreen=""
                                loading="lazy"></iframe>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-sm-12"></div>
            </div>
        </div>

    </div>








    <div class="container my-5">
    
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
    </div>














    <script src="{{ url('front/js/jquery.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/js/swiper.min.js"></script>
@endsection
