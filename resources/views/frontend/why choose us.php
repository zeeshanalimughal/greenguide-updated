    {{-- <div class="why__choose__greenguide">
        <div class="container">
            <h1 class="title" data-animate="fadeInDown" data-animate-delay="800">
                {{ $businessdirectory[0]->bd_sec4_title }}
            </h1>
            @php
                $businessdirectory = explode('|', $businessdirectory[0]->bd_sec4_desc);
                $size = sizeof($businessdirectory) / 2;
            @endphp
            <div class="row">

                <div class="col-lg-6 col-md-12 p-1 p-sm-4 ">
                    @for ($i = 1; $i <= $size; $i++)
                        <div class="list__items" data-animate="fadeInLeft"
                            data-animate-delay="{{ $i == 1 ? 800 : 450 * $i }}">
                            <div class="icon">

                                <img src="{{ url('front/img/list-image-' . $i . '.png') }}" alt="">

                            </div>
                            <div class="text text-white" style="font-size:18px !important;">

                                @php
                                    echo $i == 1 ? $businessdirectory[0] : $businessdirectory[$i - 1];
                                @endphp
                            </div>
                        </div>
                    @endfor
                </div>

                @php
                    $size = sizeof($businessdirectory);
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
                                    echo $businessdirectory[$i - 1];
                                @endphp
                            </div>
                        </div>
                    @endfor
                </div>

            </div>

            {{-- <div class="row">
                <div class="col-lg-6 col-md-12 p-1 p-sm-4 ">
                    <div class="list__items" data-animate="fadeInLeft" data-animate-delay="1000">
                        <div class="icon">
                            <img src="{{ url('front/img/list-image-1.png') }}" alt="">
                        </div>
                        <div class="text">
                            This magazine focuses on residents and aims to provide them with important information and messages. Ultimately, the goal is to enhance the readership of the magazine.
                        </div>
                    </div>
                    <div class="list__items" data-animate="fadeInLeft" data-animate-delay="1100">
                        <div class="icon">
                            <img src="{{ url('front/img/list-image-2.png') }}" alt="">
                        </div>
                        <div class="text">
                            A local magazine enables you to communicate directly to potential customers in the local area.
                        </div>
                    </div>
                    <div class="list__items" data-animate="fadeInLeft" data-animate-delay="1200">
                        <div class="icon">
                            <img src="{{ url('front/img/list-image-3.png') }}" alt="">
                        </div>
                        <div class="text">
                            Although the internet is packed full of marketing noise, which we generally filter, a magazine only has a few advertisements per page. Thus, when advertising in a magazine, exposure increases substantially.
                        </div>
                    </div>
                    <div class="list__items" data-animate="fadeInLeft" data-animate-delay="1300">
                        <div class="icon">
                            <img src="{{ url('front/img/list-image-4.png') }}" alt="">
                        </div>
                        <div class="text">
                            As the advertisement is placed inside a trusted and reliable local magazine, which provides important sources of local information, readers are likely to display higher levels of trust. oIn printed magazines, your adverts can reach new audiences, particularly local residents who do not regularly access online content.
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 p-1 p-sm-4">
                    <div class="list__items" data-animate="fadeInRight" data-animate-delay="1000">
                        <div class="icon">
                            <img src="{{ url('front/img/list-image-5.png') }}" alt="">
                        </div>
                        <div class="text" >
                            High exposure rate with the magazine being posted by our own experienced distribution teams to ~156,000 households.
                        </div>
                    </div>
                    <div class="list__items" data-animate="fadeInRight" data-animate-delay="1100">
                        <div class="icon">
                            <img src="{{ url('front/img/list-image-6.png') }}" alt="">
                        </div>
                        <div class="text">
                            User friendly magazine will have an index page that has the company names listed with the associated page number, contents page that outlines the categories within the issue and colour co-ordinated, easy to use tabs which will enable readers to identify content quickly.
                        </div>
                    </div>
                    <div class="list__items" data-animate="fadeInRight" data-animate-delay="1200">
                        <div class="icon">
                            <img src="{{ url('front/img/list-image-7.png') }}" alt="">
                        </div>
                        <div class="text">
                            Build a pathway for companies to reach new audiences within their local market.
                        </div>
                    </div>
                    <div class="list__items" data-animate="fadeInRight" data-animate-delay="1300">
                        <div class="icon">
                            <img src="{{ url('front/img/list-image-8.png') }}" alt="">
                        </div>
                        <div class="text">
                            Low cost marketing approach with various advert sizes for any budget.
                        </div>
                    </div>
                </div>
            </div> --}}
    {{-- </div>  --}}
   {{-- </div>  --}}

