@extends("frontend.layouts.master")
@section('main-section')
    <!-- Inspiro Slider -->
    <div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="360">

        @foreach ($event[0]->eventImages as $eventImages)
            <!-- Slide 1 -->
            <div class="slide kenburns" style="background-image:url({{ asset('uploads/' . $eventImages['name']) }});">
                <div class="bg-overlay"></div>
                <div class="container">
                    <div class="slide-captions text-center text-light">
                        <!-- Captions -->
                        <span class="strong">Local Events</span>
                        <h2 class="text-dark">{{ $event[0]->event_title }}</h2>

                    </div>
                </div>
            </div>
        @endforeach
    </div>




    <section class="event__details my-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 col-md-12 mt-4" data-animate="fadeInLeft" data-animate-delay="1500">
                    <h1 class="title">
                        Event Description
                    </h1>

                    <h5 class="description" text-align="justify">
                        @php
                            echo $event[0]->event_description;
                        @endphp
                    </h5>

                    <div class="row">
                        <div class="col-6">

                            <div class="event my-3">
                                <h5><b>Event Date:</b> <span>{{ $event[0]->event_date }}</span></h5>
                            </div>
                            <div class="event my-3">
                                <h5><b>Event Time:</b> <span>{{ $event[0]->event_time }}</span></h5>
                            </div>
                            <div class="event my-3">
                                <h5><b>Event Start Date:</b> <span>{{ $event[0]->event_start_date }}</span></h5>
                            </div>
                            <div class="event my-3">
                                <h5><b>Event End Dat:</b> <span>{{ $event[0]->event_end_date }}</span></h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="event my-3">
                                <h5><b>Event Category:</b> <span>{{ $event[0]->event_category }}</span></h5>
                            </div>
                            <div class="event my-3">
                                <h5><b>Event Location:</b> <span>{{ $event[0]->event_location }}</span></h5>
                            </div>
                            <div class="event my-3">
                                <h5><b>Event Website:</b> <span><a target="_blank"
                                            href="{{ $event[0]->event_website }}">{{ $event[0]->event_website }}</a></span>
                                </h5>
                                </>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-5 col-md-12" data-animate="fadeInRight" data-animate-delay="1000">
                    <div class="image" style="max-width: 800px;width:100%;height:500px; position: relative;">
                        <img style="position: absolute;top: 0;left: 0;height: 100%;width: 100%;object-fit: cover;"
                            src="{{ asset('uploads/' . $event[0]->event_main_image) }}" alt="">
                    </div>
                </div>
            </div>
    </section>
@endsection
