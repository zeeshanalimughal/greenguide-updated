@extends('frontend.layouts.master')
@section('main-section')
    <div class="local__events__hero" data-animate="fadeIn" data-animate-delay="500">
        <div class="container w-100 ">
            <div class="row w-100">
                <div class="col-lg-8 col-md-12">
                    <h1 class="title mb-5" data-animate="fadeInDown" data-animate-delay="1200">
                        <span>Now This Is</span> <br>Your Time
                    </h1>
                    <div class="m-t-60" data-animate="fadeInUp" data-animate-delay="1300">
                        <a href="#events" class="btn__event">
                            Find your next event
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="search__events my-5">
        <div class="container ">
            {{-- <h1>Popular in</h1> --}}
            <form action="{{ route('localevents') }}" method="GET">
                {{-- <input style="max-width: 230px; width:100%" type="text" name="query"
                    value="{{ app('request')->query('query') == '' ? 'All Countries' : app('request')->query('query') }}">
                <button type="submit" class="btn btn-primary btn-small">Search</button> --}}

                <div class="event__form__row">
                    <div class="event__form__label">Events</div>
                    <div class="form_field">
                        <label for="">Start</label>
                        <input type="date" name="start" id="start" required>

                    </div>
                    <div class="form_field">
                        <label for="">End</label>
                        <input type="date" name="end" id="end" required>

                    </div>
                    <div class="form_field">
                        <label for="">Category</label>
                        <select name="category" id="category" required>
                            @foreach ($events as $event)
                                <option value="" selected disabled>Select category</option>
                                <option value="{{ $event->event_category }}">{{ $event->event_category }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <button type="submit" class="btn__event__search">Search</button>
                </div>

            </form>
        </div>
    </div>

    <div class="container">
        <div class="row  d-flex justify-content-end">
            <div class="col-lg-12 col-sm-12 mb-4 d-flex justify-content-sm-end justify-content-center">
                <a href="/events/add-event-form"> <button type="button" class="btn btn-success btn-shadow">Add New
                        Event</button></a>
            </div>
        </div>
    </div>


    <div class="filter__events mb-5">
        <div class="container">
            <nav class="d-flex">
                <ul style="display:flex; align-items:center; flex-wrap: wrap">
                    <li style="margin-right: 10px; margin-bottom:10px; padding: 8px 14px; list-style: none; border:2px solid green;border-radius: 30px"
                        class="active"><a style="color:green" href="{{ route('localevents') }}">All</a></li>
                    <li
                        style="margin-right: 10px; margin-bottom:10px; padding: 8px 14px; list-style: none; border:2px solid green;border-radius: 30px">
                        <a style="color:green" href="{{ route('localevents') }}?q=today">Today</a>
                    </li>
                    <li
                        style="margin-right: 10px; margin-bottom:10px; padding: 8px 14px; list-style: none; border:2px solid green;border-radius: 30px">
                        <a style="color:green" href="{{ route('localevents') }}?q=this-weekend">This weekend</a>
                    </li>
                    <li
                        style="margin-right: 10px; margin-bottom:10px; padding: 8px 14px; list-style: none; border:2px solid green;border-radius: 30px">
                        <a style="color:green" href="{{ route('localevents') }}?q=this-month">This month</a>
                    </li>
                </ul>
                {{-- <div class="grid-active-title">Branding</div> --}}
            </nav>

        </div>
    </div>

    <!-- Post item-->

    <div class="events__section" id="events">
        <div class="container">
            @if (app('request')->query('q') == 'this-month')
                <h2 class="events__title">
                    Current month Events
                </h2>
            @elseif (app('request')->query('q') == 'today')
                <h2 class="events__title">
                    Today's Events
                </h2>
            @elseif (app('request')->query('q') == 'this-weekend')
                <h2 class="events__title">
                    Weekend Events
                </h2>
            @else
                <h2 class="events__title">
                    All Events
                </h2>
            @endif
            <div id="blog" class="grid-layout post-3-columns m-b-30 grid-loaded" data-item="post-item"
                style="margin: 0px -20px -20px 0px; position: relative; height: 1635.37px;">



                @if (!app('request')->query('q') && app('request')->query('start') && app('request')->query('end') && app('request')->query('category'))
                    @foreach ($events as $event)
                        @if ($event->event_start_date >= app('request')->query('start') && $event->event_start_date <= app('request')->query('end') && $event->event_category === app('request')->query('category'))
                            <div class="post-item border"
                                style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">
                                <a href="/localevents/{{ $event->id }}">
                                    <div class="post-item-wrap">
                                        <div class="post-image" style="width:100%; height:180px;position: relative;">
                                            <img alt=""
                                                style="position: absolute;top:0;left:0; width: 100%; height: 100%; object-fit: cover"
                                                class="img-responsive"
                                                src="{{ asset('uploads/' . $event->event_main_image) }}">

                                        </div>
                                        <div class="post-item-description ">
                                            <h2><a href="#">{{ $event->event_title }}
                                                </a></h2>

                                            <h5 class="post-meta-date text-danger font-weight-600"><i
                                                    class="fa fa-calendar-o"></i>

                                                {{ $event->event_start_date . ', ' . $event->event_time }}</h5>
                                            <h5><b>Location:</b> {{ $event->event_location }}</h5>

                                            <p>
                                                @if (strlen($event->event_description) > 120)
                                                    @php
                                                        echo substr($event->event_description, 0, 102);
                                                    @endphp
                                                @else
                                                    @php
                                                        echo $event->event_description;
                                                    @endphp
                                                @endif
                                                {{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate tenetur alias
                                laudantium
                                hic dolor nisi! --}}

                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                @endif












                @if (!app('request')->query('q') && !app('request')->query('start') && !app('request')->query('end ') && !app('request')->query('category') && app('request')->query('query') == '')
                    @foreach ($events as $event)
                        <div class="post-item border"
                            style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">
                            <a href="/localevents/{{ $event->id }}">
                                <div class="post-item-wrap">
                                    <div class="post-image" style="width:100%; height:180px;position: relative;">
                                        <img alt=""
                                            style="position: absolute;top:0;left:0; width: 100%; height: 100%; object-fit: cover"
                                            class="img-responsive"
                                            src="{{ asset('uploads/' . $event->event_main_image) }}">

                                    </div>
                                    <div class="post-item-description ">
                                        <h2><a href="#">{{ $event->event_title }}
                                            </a></h2>

                                        <h5 class="post-meta-date text-danger font-weight-600"><i
                                                class="fa fa-calendar-o"></i>

                                            {{ $event->event_start_date . ', ' . $event->event_time }}</h5>
                                        <h5><b>Location:</b> {{ $event->event_location }}</h5>

                                        <p>
                                            @if (strlen($event->event_description) > 120)
                                                @php
                                                    echo substr($event->event_description, 0, 102);
                                                @endphp
                                            @else
                                                @php
                                                    echo $event->event_description;
                                                @endphp
                                            @endif
                                            {{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate tenetur alias
                                    laudantium
                                    hic dolor nisi! --}}

                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif


                @if (app('request')->query('q') == 'today')
                    @foreach ($events as $event)
                        @if ($event->event_start_date == date('Y-m-d'))
                            <div class="post-item border"
                                style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">
                                <a href="/localevents/{{ $event->id }}">
                                    <div class="post-item-wrap">
                                        <div class="post-image" style="width:100%; height:180px;position: relative;">
                                            <img alt=""
                                                style="position: absolute;top:0;left:0; width: 100%; height: 100%; object-fit: cover"
                                                class="img-responsive"
                                                src="{{ asset('uploads/' . $event->event_main_image) }}">

                                        </div>
                                        <div class="post-item-description ">
                                            <h2><a href="#">{{ $event->event_title }}
                                                </a></h2>
                                            <h5 class="post-meta-date text-danger font-weight-600"><i
                                                    class="fa fa-calendar-o"></i>

                                                {{ $event->event_start_date . ', ' . $event->event_time }}</h5>
                                            <h5><b>Location:</b> {{ $event->event_location }}</h5>
                                            <p>
                                                @if (strlen($event->event_description) > 120)
                                                    @php
                                                        echo substr($event->event_description, 0, 102);
                                                    @endphp
                                                @else
                                                    @php
                                                        echo $event->event_description;
                                                    @endphp
                                                @endif
                                                {{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate tenetur alias
                                    laudantium
                                    hic dolor nisi! --}}

                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                @endif




                @if (app('request')->query('q') == 'this-weekend')
                    @foreach ($events as $event)
                        @if ($event->event_start_date ==
                            Carbon::now()->endOfWeek()->format('Y-m-d'))
                            <div class="post-item border"
                                style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">
                                <a href="/localevents/{{ $event->id }}">
                                    <div class="post-item-wrap">
                                        <div class="post-image" style="width:100%; height:180px;position: relative;">
                                            <img alt=""
                                                style="position: absolute;top:0;left:0; width: 100%; height: 100%; object-fit: cover"
                                                class="img-responsive"
                                                src="{{ asset('uploads/' . $event->event_main_image) }}">

                                        </div>
                                        <div class="post-item-description ">
                                            <h2><a href="#">{{ $event->event_title }}
                                                </a></h2>
                                            <h5 class="post-meta-date text-danger font-weight-600"><i
                                                    class="fa fa-calendar-o"></i>

                                                {{ $event->event_start_date . ', ' . $event->event_time }}</h5>
                                            <h5><b>Location:</b> {{ $event->event_location }}</h5>
                                            <p>
                                                @if (strlen($event->event_description) > 120)
                                                    @php
                                                        echo substr($event->event_description, 0, 102);
                                                    @endphp
                                                @else
                                                    @php
                                                        echo $event->event_description;
                                                    @endphp
                                                @endif
                                                {{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate tenetur alias
                                    laudantium
                                    hic dolor nisi! --}}

                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                @endif



                {{-- @if (app('request')->query('query') == 'this-weekend') --}}
                @foreach ($events as $event)
                    @if (Str::contains(Str::lower($event->event_location), Str::lower(app('request')->query('query'))))
                        <div class="post-item border"
                            style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">
                            <a href="/localevents/{{ $event->id }}">
                                <div class="post-item-wrap">
                                    <div class="post-image" style="width:100%; height:180px;position: relative;">
                                        <img alt=""
                                            style="position: absolute;top:0;left:0; width: 100%; height: 100%; object-fit: cover"
                                            class="img-responsive"
                                            src="{{ asset('uploads/' . $event->event_main_image) }}">

                                    </div>
                                    <div class="post-item-description ">
                                        <h2><a href="#">{{ $event->event_title }}
                                            </a></h2>
                                        <h5 class="post-meta-date text-danger font-weight-600"><i
                                                class="fa fa-calendar-o"></i>

                                            {{ $event->event_start_date . ', ' . $event->event_time }}</h5>
                                        <h5><b>Location:</b> {{ $event->event_location }}</h5>
                                        <p>
                                            @if (strlen($event->event_description) > 120)
                                                @php
                                                    echo substr($event->event_description, 0, 102);
                                                @endphp
                                            @else
                                                @php
                                                    echo $event->event_description;
                                                @endphp
                                            @endif
                                            {{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate tenetur alias
                                    laudantium
                                    hic dolor nisi! --}}

                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach


                {{-- {{ date('m',strtotime($event->event_start_date))}}
                {{ date('m')}} --}}

                @if (app('request')->query('q') == 'this-month')
                    @foreach ($events as $event)
                        @if (date('m', strtotime($event->event_start_date)) == date('m'))
                            <div class="post-item border"
                                style="padding: 0px 20px 20px 0px; position: absolute; left: 0px; top: 0px;">
                                <a href="/localevents/{{ $event->id }}">
                                    <div class="post-item-wrap">
                                        <div class="post-image" style="width:100%; height:180px;position: relative;">
                                            <img alt=""
                                                style="position: absolute;top:0;left:0; width: 100%; height: 100%; object-fit: cover"
                                                class="img-responsive"
                                                src="{{ asset('uploads/' . $event->event_main_image) }}">

                                        </div>
                                        <div class="post-item-description ">
                                            <h2><a href="#">{{ $event->event_title }}
                                                </a></h2>
                                            <h5 class="post-meta-date text-danger font-weight-600"><i
                                                    class="fa fa-calendar-o"></i>

                                                {{ $event->event_start_date . ', ' . $event->event_time }}</h5>
                                            <h5><b>Location:</b> {{ $event->event_location }}</h5>
                                            <p>
                                                @if (strlen($event->event_description) > 120)
                                                    @php
                                                        echo substr($event->event_description, 0, 102);
                                                    @endphp
                                                @else
                                                    @php
                                                        echo $event->event_description;
                                                    @endphp
                                                @endif
                                                {{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate tenetur alias
                                    laudantium
                                    hic dolor nisi! --}}

                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                @endif



                <div class="grid-loader"></div>
            </div>
        </div>
    </div>














    <div class="register__business_Section m-t-100 m-b-100"  style="background:#ededed;padding:2rem 0;">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-md-12 mt-4">
                    <h1 class="title">
                        Register Your Event
                    </h1>
                    <h5 class="description" text-align="justify">
                        Want to expand your exposure to the Green Guide community? <br>
                        If you have an upcoming event or activity and would like to add your announcement to the Green Guide
                        Events Calendar, then register it for FREE.<br> We want to build an expansive Events Calendar that
                        offers free exposure for local businesses and organisations and provides an easy and helpful
                        resource for local residents. <br>
                        Our online Events Calendar listing form will only take a few minutes to complete and is easy to use.
                        When you have submitted the listing it will be reviewed and if accepted will be published live onto
                        the Green Guide website.

                        <br>


                    </h5>
                    <a href="/events/add-event-form" class="text-white">
                        <button type="button"
                            class="btn btn-success text-white btn-roundeded btn-outline btn-reveal m-t-20"><span>Create a
                                New Listing</span><i class="fa fa-plus"></i></button>
                    </a>
                    <br>

                </div>

                <div class="col-lg-5 col-md-12">
                    <div class="image" style="max-width: 800px;width:100%;height:500px; position: relative;">
                        <img style="position: absolute;top: 0;left: 0;height: 100%;width: 100%;object-fit: contain;"
                            src="{{ asset('uploads/BG_Register_your_business.png') }}" alt="">
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
