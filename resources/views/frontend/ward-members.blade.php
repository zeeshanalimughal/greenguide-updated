@extends('frontend.layouts.master')
@section('main-section')
  
<div class="ward__members__hero" style="width:100%;min-height: 30vh;background-image: url({{asset('front/img/Area-we-cover-1.jpg')}}); background-position:center bottom">

</div>

<div class="wards__members__section">
    <div class="container my-5">
        <h2 class="underline">Addiscombe East</h2>
        <div class="row g-4 d-flex justify-content-between">
            <div class="col-lg-5 col-md-6 col-sm-12">
                <div class="member__card">
                    <div class="profile">
                        <img  src="{{asset('front/img/team/10.jpg')}}" alt="">
                    </div>
                    <div class="profile_details">
                        <label class="name">Andy Stranack</label>
                        <label class="name">Conservative</label>
                        <label class="name">andy.stranack@croydon.gov.uk</label>
                        <label class="name">07816123204</label>
                        <label class="name">020 8604 7033</label>
                        <label class="name">@AndyStranack</label>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <div class="member__card">
                    <div class="profile">
                        <img  src="{{asset('front/img/team/10.jpg')}}" alt="">
                    </div>
                    <div class="profile_details">
                        <label class="name">Andy Stranack</label>
                        <label class="name">Conservative</label>
                        <label class="name">andy.stranack@croydon.gov.uk</label>
                        <label class="name">07816123204</label>
                        <label class="name">020 8604 7033</label>
                        <label class="name">@AndyStranack</label>
                    </div>
                </div>
            </div>
       
            <div class="col-lg-12 col-md-6 col-sm-12 d-flex justify-content-center" style="margin-top:-40px">
                <div class="member__card  d-flex justify-content-center" style="background:transparent">
                    <div class="profile_details">
                        <label class="name"><b>Corresponding Address</b></label>
                        <label class="name">c/o Town Hall</label>
                        <label class="name">Katharine Street</label>
                        <label class="name">Croydon</label>
                        <label class="name">CR0 1NX</label>
                    </div>
                </div>
            </div>
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2477.241881356656!2d-0.050808684338578!3d51.61877817965347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761e8ae036c7b1%3A0x85f7847126c3629f!2sLocal%20Green%20Guide%20Ltd%20-%20LGG%20Marketing!5e0!3m2!1sen!2s!4v1639087067763!5m2!1sen!2s" style="border:0;widows: 100% !important; height: 40vh !important;" allowfullscreen="" loading="lazy"></iframe>
                   </div>
                </form>
            </div>
            <div class="col-lg-3 col-sm-12"></div>
        </div>
    </div>






    

    <div class="container">
        <h3 class="mb-5">London Borough of Croydon Cabinet Members (Conservative)</h3>
    </div>
    <div class="row g-4">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="member__card">
                <div class="profile">
                    <img src="{{asset('front/img/team/10.jpg')}}" alt="">
                </div>
                <div class="profile_details">
                    <label class="name">Andy Stranack</label>
                    <label class="name">Conservative</label>
                    <label class="name">andy.stranack@croydon.gov.uk</label>
                    <label class="name">07816123204</label>
                    <label class="name">020 8604 7033</label>
                    <label class="name">@AndyStranack</label>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="member__card">
                <div class="profile">
                    <img  src="{{asset('front/img/team/10.jpg')}}" alt="">
                </div>
                <div class="profile_details">
                    <label class="name">Andy Stranack</label>
                    <label class="name">Conservative</label>
                    <label class="name">andy.stranack@croydon.gov.uk</label>
                    <label class="name">07816123204</label>
                    <label class="name">020 8604 7033</label>
                    <label class="name">@AndyStranack</label>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="member__card">
                <div class="profile">
                    <img  src="{{asset('front/img/team/10.jpg')}}" alt="">
                </div>
                <div class="profile_details">
                    <label class="name">Andy Stranack</label>
                    <label class="name">Conservative</label>
                    <label class="name">andy.stranack@croydon.gov.uk</label>
                    <label class="name">07816123204</label>
                    <label class="name">020 8604 7033</label>
                    <label class="name">@AndyStranack</label>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="member__card">
                <div class="profile">
                    <img  src="{{asset('front/img/team/10.jpg')}}" alt="">
                </div>
                <div class="profile_details">
                    <label class="name">Andy Stranack</label>
                    <label class="name">Conservative</label>
                    <label class="name">andy.stranack@croydon.gov.uk</label>
                    <label class="name">07816123204</label>
                    <label class="name">020 8604 7033</label>
                    <label class="name">@AndyStranack</label>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="member__card">
                <div class="profile">
                    <img  src="{{asset('front/img/team/10.jpg')}}" alt="">
                </div>
                <div class="profile_details">
                    <label class="name">Andy Stranack</label>
                    <label class="name">Conservative</label>
                    <label class="name">andy.stranack@croydon.gov.uk</label>
                    <label class="name">07816123204</label>
                    <label class="name">020 8604 7033</label>
                    <label class="name">@AndyStranack</label>
                </div>
            </div>
        </div>
    </div>





    <div class="container">
        <h3 class="my-5">London Borough of Croydon Shadow Cabinet Members (Labour)</h3>
    </div>
    <div class="row g-4">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="member__card">
                <div class="profile">
                    <img  src="{{asset('front/img/team/10.jpg')}}" alt="">
                </div>
                <div class="profile_details">
                    <label class="name">Andy Stranack</label>
                    <label class="name">Conservative</label>
                    <label class="name">andy.stranack@croydon.gov.uk</label>
                    <label class="name">07816123204</label>
                    <label class="name">020 8604 7033</label>
                    <label class="name">@AndyStranack</label>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="member__card">
                <div class="profile">
                    <img  src="{{asset('front/img/team/10.jpg')}}" alt="">
                </div>
                <div class="profile_details">
                    <label class="name">Andy Stranack</label>
                    <label class="name">Conservative</label>
                    <label class="name">andy.stranack@croydon.gov.uk</label>
                    <label class="name">07816123204</label>
                    <label class="name">020 8604 7033</label>
                    <label class="name">@AndyStranack</label>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="member__card">
                <div class="profile">
                    <img  src="{{asset('front/img/team/10.jpg')}}" alt="">
                </div>
                <div class="profile_details">
                    <label class="name">Andy Stranack</label>
                    <label class="name">Conservative</label>
                    <label class="name">andy.stranack@croydon.gov.uk</label>
                    <label class="name">07816123204</label>
                    <label class="name">020 8604 7033</label>
                    <label class="name">@AndyStranack</label>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="member__card">
                <div class="profile">
                    <img  src="{{asset('front/img/team/10.jpg')}}" alt="">
                </div>
                <div class="profile_details">
                    <label class="name">Andy Stranack</label>
                    <label class="name">Conservative</label>
                    <label class="name">andy.stranack@croydon.gov.uk</label>
                    <label class="name">07816123204</label>
                    <label class="name">020 8604 7033</label>
                    <label class="name">@AndyStranack</label>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="member__card">
                <div class="profile">
                    <img  src="{{asset('front/img/team/10.jpg')}}" alt="">
                </div>
                <div class="profile_details">
                    <label class="name">Andy Stranack</label>
                    <label class="name">Conservative</label>
                    <label class="name">andy.stranack@croydon.gov.uk</label>
                    <label class="name">07816123204</label>
                    <label class="name">020 8604 7033</label>
                    <label class="name">@AndyStranack</label>
                </div>
            </div>
        </div>
    </div>





</div>


















    <script src="{{ url('front/js/jquery.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/js/swiper.min.js"></script>

@endsection
