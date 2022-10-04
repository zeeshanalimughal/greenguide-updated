@extends("frontend.layouts.master")
@section('main-section')
<section id="page-title"
class="text-light green-initiative-hero community-growth-hero d-flex justify-content-center align-items-center" data-animate="fadeIn" data-animate-delay="500"
style="
 position:relative;
width     : 100%;
min-height: 60vh;
background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
url('{{ asset('front/img/parallax/29.jpg') }}') !important;
background-repeat  : no-repeat;
background-size    : cover;
background-position: center;
display:flex;
justify-content : center;
align-items        : center;
">
<h1 class="text-white text-center">ALondon Borough of <br>Croydon Wards</h1>

</section>

<section class="wards__list__container">
    <div class="container">
        <h1 class="text-center">Croydon Wards</h1>
        <div class="wards__boxes">
            @foreach ($wardsList as $ward)
            <div class="ward__box">
                <h2>{{$ward->ward_title}}</h2>
                <a href="/crydon-ward/{{$ward->id}}" class="btn btn-primary">View Ward Members</a>
            </div>
            @endforeach
             
            </div>
    </div>





    <div class="container my-5 px-0 px-sm-5">
        

    <div class="links__cards__section" style="margin-top:6rem;">
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
</section>



@endsection
