@extends('frontend.layouts.master')
@section('main-section')
    <div class="advertise__hero" data-animate="fadeIn" data-animate-delay="500"
        style="
                                                       width     : 100%;
                                                    min-height: 80vh;
                                                    /* padding:3rem 0; */
                                                    background-image: linear-gradient(to right, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.2)),
                                                    url('{{ asset('front/img/digitization-g31bab2ad6_1280.jpg') }}') !important;
                                                    background-repeat  : no-repeat;
                                                    background-size    : cover;
                                                    background-position: center;
                                                    display            : flex;
                                                    justify-content    : center;
                                                    align-items        : center;
                                                    flex-direction     : column;
                                                    align-items        : center;
                                                    ">
        <h1 class="title" data-animate="fadeInDown" data-animate-delay="1000">
            Croydon delivery
        </h1>
    </div>





    <div class="advert__in__design__section">
        <div class="container my-5">
            <div class="row my-5">

                <div class="col-lg-6 col-md-12 p-2 p-sm-3">
                    <p style="font-size: 17px">
                        The Local Green Guide Croydon magazine will be hand delivered by our experienced door to door
                        distribution teams. Our years of experience and expertise in the industry enables us full control
                        from creation to delivery so there is no need to rely on third parties. LGG have been delivering the
                        Your Croydon newsletter on behalf of the Croydon Council since 2016 which means our delivery maps
                        are logistically sound and refined which empowers us to produce a smoother delivery campaign every
                        time. The Local Green Guide Croydon magazine will be posted within the following areas and
                        postcodes;
                        Addiscombe, Broad Green, Crystal Palace, Coulsdon, Croydon, Kenley, Norbury, Purley, Old Coulsdon,
                        Sanderstead, Selhurst, Selsdon, South Croydon, South Norwood, Shirley, Thornton Heath, Upper
                        Norwood, Waddon, Woodside
                        SW16, SE19, SE25, CR0, CR2, CR5, CR6, CR7, CR8
                        Estimated Circulation is 156,000 households with estimated readership at 327,600*.
                        {{-- *based on 2.1 readers per household. --}}

                    </p>
                </div>

                <div class="col-lg-6 col-md-12 p-2 p-sm-3">
                    <div class="image">
                        <img style="z-index:100; display: flex !important;" width="100%"
                            src="{{ asset('front/img/longon-crydon-map.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>







    <div class="advert__in__design__section">
        <div class="container-fluid bg-dark py-5" style="margin:1rem 0;">
            <div class=" my-5">
                <div class="row my-5 d-flex justify-content-around">
                    <div class="col-lg-4 col-md-12  text-white">
                        @php

                            echo $page->sec2_content;

                        @endphp

                        <div class="text-center mt-5">
                            <a href="/advert-design-book/#book__addvertise" class="btn btn-outline-primary">Book Now <i
                                    class="ps-3 fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 ">
                        <div class="table-responsive">
                            <table class="table text-white">
                                <thead>
                                    <tr>
                                        <th>Issue</th>
                                        <th>Artwork and Payment Deadline</th>
                                        <th>Distribution Commencement</th>
                                        <th>Book</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($latestIssues as $issue)
                                        <tr>
                                            <td>{{ $issue->issue }}</td>
                                            <td>{{ $issue->deadline }}</td>
                                            <td>{{ $issue->commencement }}</td>
                                            <td><a href="/advert-design-book/#book__addvertise" class="btn btn-primary">Book
                                                    Now</a></td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        {{-- @php

                            echo $page->sec2_table

                        @endphp --}}
                    </div>
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
    </div>



@endsection
