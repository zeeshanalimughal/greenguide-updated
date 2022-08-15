

    @extends("frontend.layouts.master")
@section('main-section')
    <section id="page-title"
        class="text-light green-initiative-hero community-growth-hero d-flex justify-content-center align-items-center" data-animate="fadeIn" data-animate-delay="500"
        style="
         position:relative;
  width     : 100%;
  min-height: 100vh;
  background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
  url('{{ asset('uploads/' . $communitygrowth[0]->cg_hero_image) }}') !important;
  background-repeat  : no-repeat;
  background-size    : cover;
  background-position: center;
        "
        >
        <div class="container d-flex justify-content-center align-items-center flex-column">
            <div class="page-title" data-animate="fadeInUp" data-animate-delay="1300">
                <h2 class="community-growth-title" style="text-align: center; color: white;">{{$communitygrowth[0]->cg_title}}</h2>
                <p class="font-size-lg">{{$communitygrowth[0]->cg_subtitle}}</p>
            </div>

            <a href="/add-new-directory" data-animate="fadeInUp" data-animate-delay="1500"><button class="btn__advertise px-5 py-3">Advertise within Green Guide magazine</button></a>
        </div>
    </section>





    <!-- end: Page title -->



    <!-- Recycling Section -->
    <section class="resycling my-4 bg-white py-5">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-lg-4 col-md-12 col-sm-12 mt-3" data-animate="fadeInLeft" data-animate-delay="500">
                    <div class="img-container position-relative w-100 bg-success">
                        <img src="{{ url('uploads/'.$communitygrowth[0]->cg_sec2_image) }}" class="border img-responsive w-100"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 mt-3 mt-sm-0">
                    <h2 class=" line-height-l font-weight-600 text-left" data-animate="fadeInRight" data-animate-delay="500">
                        {{$communitygrowth[0]->cg_sec2_title}}
                    </h2>
                    <div class="text-dark  font-size-lg line-height-l text-left" align="justify" data-animate="fadeInRight" data-animate-delay="700">
                      @php
                        echo $communitygrowth[0]->cg_sec2_desc
                      @endphp
                    </div>
                </div>

            </div>
        </div>
    </section>





    <div class="why__choose__greenguide">
        <div class="container">
            <h2 class="title" data-animate="fadeInDown" data-animate-delay="500">
              {{$communitygrowth[0]->cg_sec3_title}}
            </h2>
            @php
            $communitygrowth = explode('|', $communitygrowth[0]->cg_sec3_desc);
            $size = sizeof($communitygrowth) / 2;
        @endphp
            <div class="row">
               
                 <div class="col-lg-6 col-md-12 p-1 p-sm-4 ">
                    @for ($i = 1; $i <= $size; $i++)
                        <div class="list__items" data-animate="fadeInLeft"
                            data-animate-delay="{{ $i == 1 ? 800 : 450 * $i }}">
                            <div class="icon">

                                <img src="{{ url('front/img/list-image-' . $i . '.png') }}" alt="">

                            </div>
                            <div class="text text-white" style="font-size:16px !important;">

                                @php
                                    echo $i == 1 ? $communitygrowth[0] : $communitygrowth[$i - 1];
                                @endphp
                            </div>
                        </div>
                    @endfor
                </div>

                @php
                    $size = sizeof($communitygrowth);
                    $newSize = $size / 2;
                @endphp
                <div class="col-lg-6 col-md-12 p-1 p-sm-4 ">
                    @for ($i = $newSize + 1; $i <= $size; $i++)
                        <div class="list__items" data-animate="fadeInRight" data-animate-delay="{{ 200 * $i }}">
                            <div class="icon">

                                <img src="{{ url('front/img/list-image-' . $i . '.png') }}" alt="">

                            </div>
                            <div class="text">
                                @php
                                    echo $communitygrowth[$i - 1];
                                @endphp
                            </div>
                        </div>
                    @endfor
                </div>

            </div>
        </div>
    </div>

    </section> -->
    <!-- end: CONTENT -->







    









    <div class="links__cards__section">
        <div class="container">
            <div class="row">

                
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="link__card">
                        <div class="card__image">
                            <img src="{{ asset('uploads/'.$links[0]->image1) }}" alt="">
                        </div>
                        <div class="card__body">
                            <h3 class="card__title">
                                {{$links[0]->title1}}
                            </h3>
                            <p align="justify" class="card__content">
                                {{$links[0]->details1}}
                            </p>
                            <a href=" {{url('')}}/{{$links[0]->link1}}" class="btn btn-dark">Advertise Today <i
                                    class="ps-3 fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="link__card">
                        <div class="card__image">
                            <img src="{{ asset('uploads/'.$links[0]->image2) }}" alt="">
                        </div>
                        <div class="card__body">
                            <h3 class="card__title">
                                {{$links[0]->title2}}
                            </h3>
                            <p align="justify" class="card__content">
                                {{$links[0]->details2}}
                            </p>
                            <a href=" {{url('')}}/{{$links[0]->link2}}" class="btn btn-dark">Business Listing <i
                                    class="ps-3 fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="link__card">
                        <div class="card__image">
                            <img src="{{ asset('uploads/'.$links[0]->image3) }}" alt="">
                        </div>
                        <div class="card__body">
                            <h3 class="card__title">
                                {{$links[0]->title3}}
                            </h3>
                            <p align="justify" class="card__content">
                                {{$links[0]->details3}}
                            </p>
                            <a href=" {{url('')}}/{{$links[0]->link3}}" class="btn btn-dark">Events Listing <i
                                    class="ps-3 fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>














@endsection

