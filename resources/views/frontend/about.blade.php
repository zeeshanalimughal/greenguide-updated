@extends('frontend.layouts.master')
@section('main-section')
    <section class="hero_about_arrow">
        <div class="arrow__clipped">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>
                        What is Local Green Guide magazine?
                    </h1>

                    <p>
                        The Local Green Guide magazine is an informative resident focused publication
                        dedicated to an individual London Borough, town, or village within the UK. We aim
                        to provide a tool that helps connect and inform residents about relevant
                        businesses and services in their area. Our easy to navigate publications will have
                        an events calendar that will highlight activities and local experiences, as well as
                        feature relevant council news and general articles. The Local Green Guide
                        magazine will be posted by our experienced door to door distribution teams and
                        advertising space will be made available for businesses with local interests.
                    </p>
                    <button class="btn btn-outline-danger">Find Out More</button>
                </div>
            </div>
        </div>
    </section>





    <section class="about__our__services">
        <div class="container">
            <div class="service_cards">
                <div class="service_card">
                    <h1>Featured Articles</h1>
                </div>
                <div class="service_card">
                    <h1>Services</h1>
                </div>
                <div class="service_card">
                    <h1>Events Calender</h1>
                </div>
                <div class="service_card">
                    <h1>Puzzles</h1>
                </div>
                <div class="service_card">
                    <h1>Index</h1>
                </div>
                <div class="service_card">
                    <h1>Vouchers</h1>
                </div>
            </div>
        </div>
    </section>





    <section class="circulation__area__section">
        <h1 class="section__title">
            Circulation Areas:
        </h1>
        <p class="section__desc">
            The Local Green Guide magazine will be hand delivered to households in a London<br>
            Borough or town by our experienced door to door distribution teams.
        </p>
        <div class="container">
            <div class="circulation_cards" id="circulation__area__section">
                <a href="/comming-soon/london-borough-of-croydon">
                    <div class="circulation_card">
                        <h2 class="title">
                            London Borough of Croydon
                        </h2>
                        <p class="subtitle">
                            Estimated 156,000 households
                        </p>
                    </div>
                </a>
                <a href="/comming-soon/enfield">
                    <div class="circulation_card">
                        <div class="lablel">Coming Soon</div>
                        <h2 class="title">
                            London Borough of Enfield
                        </h2>
                        <p class="subtitle">
                            Estimated 122,000 households
                        </p>
                    </div>
                </a>
                <a href="/comming-soon/albans">
                    <div class="circulation_card">
                        <div class="lablel">Coming Soon</div>
                        <h2 class="title">
                            St Albans
                        </h2>
                        <p class="subtitle">
                            Estimated 56,000 households
                        </p>
                    </div>
                </a>
                <a href="/comming-soon/lewisham">
                    <div class="circulation_card">
                        <div class="lablel">Coming Soon</div>
                        <h2 class="title">
                            London Borough of Lewisham
                        </h2>
                        <p class="subtitle">
                            Estimated 118,000 households
                        </p>
                    </div>
                </a>
                <a href="/comming-soon/havering">
                    <div class="circulation_card">
                        <div class="lablel">Coming Soon</div>
                        <h2 class="title">
                            London Borough of Havering
                        </h2>
                        <p class="subtitle">
                            Estimated 98,000 households
                        </p>
                    </div>
                </a>
                <a href="/comming-soon/redbridge">
                    <div class="circulation_card">
                        <div class="lablel">Coming Soon</div>
                        <h2 class="title">
                            London Borough of Redbridge
                        </h2>
                        <p class="subtitle">
                            Estimated 100,000 households
                        </p>
                    </div>
                </a>
                <a href="/comming-soon/merton">
                    <div class="circulation_card">
                        <div class="lablel">Coming Soon</div>
                        <h2 class="title">
                            London Borough of Merton
                        </h2>
                        <p class="subtitle">
                            Estimated 80,000 households
                        </p>
                    </div>
                </a>
                <a href="/comming-soon/bromley">
                    <div class="circulation_card">
                        <div class="lablel">Coming Soon</div>
                        <h2 class="title">
                            London Borough of Bromley
                        </h2>
                        <p class="subtitle">
                            Estimated 135,000 households
                        </p>
                    </div>
                </a>
            </div>

        </div>
    </section>




    <section class="advertisement__spaces">
        <div class="row">
            <div class="col-lg-4 col-md-12 p-4">
                <h2 class="title">
                    Advertisement Space :
                </h2>
                <p class="desc">
                    We offer a range of advertisement sizes for any budget. Our range includes,
                    Double Spread (A3), full page (A4), half page (A5), quarter page (A6) and
                    voucher
                </p>
                <p class="desc">
                    Multiple booking discounts are available and marketing agencies receive a
                    commission discount for securement of any new advertisement spaces within
                    magazine.
                </p>
                <button class="btn btn-primary">Find Out More</button>
            </div>
            <div class="col-lg-8 col-md-12 p-4">
                <div class="advertise_spaces__box">
                    <div class="advertise__size__box">
                        {{-- <img src="{{ url('front/img/advert-size-icon-1.png') }}" alt=""> --}}
                        <span>
                            <i class="fa fa-broadcast-tower" style="font-size: 6rem; color: #335e41"> </i>
                        </span>
                        <div class="size__title">Double Spread</div>
                        <div class="size">A3 - 297 x 420mm</div>
                    </div>
                    <div class="advertise__size__box">
                        {{-- <img src="{{ url('front/img/advert-size-icon-2.png') }}" alt=""> --}}
                        <span>
                            <i class="fa fa-clipboard-list" style="font-size: 6rem; color: #335e41"> </i>
                        </span>
                        <div class="size__title">Full Page</div>
                        <div class="size">A4 - 210 x 297mm</div>
                    </div>
                    <div class="advertise__size__box">
                        {{-- <img src="{{ url('front/img/advert-size-icon-3.png') }}" alt=""> --}}
                        <span>
                            <i class="fa fa-file-alt" style="font-size: 6rem; color: #335e41"> </i>
                        </span>
                        <div class="size__title">Half Page</div>
                        <div class="size">A5 - 148 x 210mm</div>
                    </div>
                    <div class="advertise__size__box">
                        {{-- <img src="{{ url('front/img/advert-size-icon-4.png') }}" alt=""> --}}
                        <span>
                            <i class="fa fa-fax" style="font-size: 6rem; color: #335e41"> </i>
                        </span>
                        <div class="size__title">Quarter Page</div>
                        <div class="size">A6 - 105 x 148mm</div>
                    </div>
                    <div class="advertise__size__box">
                        {{-- <img src="{{ url('front/img/advert-size-icon-5.png') }}" alt=""> --}}
                        <span>
                            <i class="fa fa-file-audio" style="font-size: 6rem; color: #335e41"> </i>
                        </span>
                        <div class="size__title">Voucher</div>
                        <div class="size">70 x 42mm</div>
                    </div>
                    <div class="advertise__size__box">
                        {{-- <img src="{{ url('front/img/advert-size-icon-6.png') }}" alt=""> --}}
                        <span>
                            <i class="fa fa-file-powerpoint" style="font-size: 6rem; color: #335e41"> </i>
                        </span>
                        <div class="size__title">Premium</div>
                        <div class="size">A4 - 210 x 297mm</div>
                    </div>
                </div>
            </div>
        </div>
    </section>







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
                            <a href=" {{ url('') }}/{{ $links[0]->link1 }}" class="btn btn-dark">Advertise Today <i
                                    class="ps-3 fa fa-arrow-right"></i></a>
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





    <section class="hero_about_arrow">
        <div class="arrow__clipped arrow__clipped__reverse">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-7 offset-md-6">
                    <h1>
                        Who is Local Green Guide Ltd?
                    </h1>

                    <p>
                        Trading as LGG Marketing, Local Green Guide are a marketing company
                        specialising in leaflet design, print and distribution. Since inception in 2014 our
                        dedicated management team have been working in the door to door distribution
                        industry for more than 3 decades. LGG work collaboratively with various local
                        authorities, communication companies and well-known national brands to
                        provide professional ad-hoc services. As our company has rapidly grown, we
                        have analysed the market to scope new opportunities that our experience and
                        skill sets can flourish within.
                    </p>
                    <p>
                        We’re excited to bring our door to door expertise into the magazine publication
                        sector to create and publish residential magazines for every London Borough. The
                        first dedicated residential magazine will be within the London Borough of Croydon.
                        The high quality publication will include an accumulation of local news and
                        information along with a selection of business services and products available to
                        residents.
                    </p>
                </div>
            </div>
        </div>
    </section>



    <section class="box-fancy section-fullwidth text-light p-b-0">
        <div class="container mb-5">
            <div class="row">
                <div style="background-color:#4f9467" class="col-lg-4">
                    <h1 class="text-lg text-uppercase">01.</h1>
                    <p align="justify">{{ $page[0]->ab_box1 }}</p>

                </div>

                <div style="background-color:#437c56" class="col-lg-4">
                    <h1 class="text-lg text-uppercase">02.</h1>
                    <p align="justify">{{ $page[0]->ab_box2 }}</p>

                </div>

                <div style="background-color:#335e41" class="col-lg-4">
                    <h1 class="text-lg text-uppercase">03.</h1>
                    <p align="justify">{{ $page[0]->ab_box3 }}</p>

                </div>
            </div>
        </div>
    </section>


    {{-- <section id="page-title" class="text-light" data-bg-parallax="{{ asset('uploads/' . $page[0]->ab_image) }}">
        <div class="container">
            <div class="breadcrumb" data-animate="fadeInUp" data-animate-delay="1300">
                <ul>
                    <li><a href="/">Home</a> </li>
                    <li class="active">{{ $page[0]->ab_title }}</li>
                </ul>
            </div>
            <div class="page-title" data-animate="fadeInUp" data-animate-delay="1300">
                <h1>{{ $page[0]->ab_title }}</h1>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="heading-text heading-section">
                        <h2>{{ $page[0]->ab_title }}</h2>

                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-6">
                            <p align="justify">@php echo $page[0]->ab_desc1; @endphp</p>
                        </div>

                        <div class="col-lg-6">
                            <p align="justify">@php echo $page[0]->ab_desc2; @endphp</p>
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
                <p align="justify">{{ $page[0]->ab_box1 }}</p>

            </div>

            <div style="background-color:#437c56" class="col-lg-4">
                <h1 class="text-lg text-uppercase">02.</h1>
                <p align="justify">{{ $page[0]->ab_box2 }}</p>

            </div>

            <div style="background-color:#335e41" class="col-lg-4">
                <h1 class="text-lg text-uppercase">03.</h1>
                <p align="justify">{{ $page[0]->ab_box3 }}</p>

            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="heading-text text-center">
                <h2>{{ $page[0]->ab_company }}</h2>
                <p class="lead text-center">{{ $page[0]->ab_company_qt }}</p>
            </div>
        </div>
    </section>

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
                            <a href=" {{ url('') }}/{{ $links[0]->link1 }}" class="btn btn-dark">Advertise Today <i
                                    class="ps-3 fa fa-arrow-right"></i></a>
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
                            <a href=" {{ url('') }}/{{ $links[0]->link2 }}" class="btn btn-dark">Business Listing <i
                                    class="ps-3 fa fa-arrow-right"></i></a>
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
    </div> --}}
@endsection
