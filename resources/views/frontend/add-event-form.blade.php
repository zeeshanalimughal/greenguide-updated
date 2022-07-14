@extends("frontend.layouts.master")
@section('main-section')
    <section id="page-title" class="text-light"
        data-bg-parallax="http://localhost/greenguide/uploads/images/pages_1_35_5.jpg">
        <div class="parallax-container img-loaded" data-bg="http://localhost/greenguide/uploads/images/pages_1_35_5.jpg"
            data-velocity="-.140"
            style="background: url(&quot;http://localhost/greenguide/uploads/images/pages_1_35_5.jpg&quot;) 0px;"
            data-ll-status="loaded"></div>
        <div class="container">
            <div class="breadcrumb animate__animated animate__fadeInUp visible" data-animate="fadeInUp"
                data-animate-delay="1300">
                <ul>
                    <li><a href="http://localhost/greenguide/">Home</a> </li>
                    <li class="active">Local Events</li>
                </ul>
            </div>
            <div class="page-title animate__animated animate__fadeInUp visible" data-animate="fadeInUp"
                data-animate-delay="1300">
                <h1>Add New Event</h1>
                <!-- <span>Simple page title with background parallax image</span> -->
            </div>
        </div>
    </section>

 

    <div class="search__events my-2 m-t-100">
        <div class="container text-center">
            <h1>Add your Event</h1>
        </div>
    </div>




    <section>
        <div class="container">
            @if (session()->has('success'))
                <div class="col-lg-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif
            @if (session()->has('error'))
                <div class="col-lg-6">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session()->get('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif
            <form method="POST" class="form-validate" action="{{ route('events.add-event') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="text-center">
                    <h4>Contact Information</h4>
                </div>
                <br>
                <div class="form-group row">
                    <label for="example-text-input" class="col-lg-1 col-form-label">Company Name</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" name="company_name" value="{{ $user->company_name }}">
                    </div>
                    <label for="example-text-input" class="col-lg-1 col-form-label">Email</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="email" name="contact_email"
                            value="{{ auth()->user()->email }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-lg-1 col-form-label">Contact Name</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" name="contact_name" value="{{ auth()->user()->name }}">
                    </div>
                    <label for="example-text-input" class="col-lg-1 col-form-label">Contact Number</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" name="contact_phone" value="{{ $user->phone }}">
                    </div>
                </div>

                <br>
                <hr>
                <div class="text-center">
                    <h4>Basic Information</h4>
                </div>
                <br>
                <div class="form-group row">
                    <label for="example-text-input" class="col-lg-1 col-form-label">Event Title</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" name="event_title">
                        @if ($errors->has('event_title'))
                            <div class="text-danger">{{ $errors->first('event_title') }}</div>
                        @endif
                    </div>
                    <label for="example-text-input" class="col-lg-1 col-form-label">Category</label>
                    <div class="col-lg-5">
                        <select class="form-select" name="event_category">
                            <option value="">Select a Category of event</option>
                            <option value="Art/Exhibition">Art/Exhibition</option>
                            <option value="Fair/Festivals">Fair/Festivals</option>
                            <option value="Food &amp; Drink">Food &amp; Drink</option>
                            <option value="Music">Music</option>
                            <option value="Notifications">Notifications</option>
                            <option value="Sports">Sports</option>
                            <option value="Theatre">Theatre</option>
                        </select>
                        @if ($errors->has('event_category'))
                            <div class="text-danger">{{ $errors->first('event_category') }}</div>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="example-text-input" class="col-lg-1 col-form-label">Date</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="date" name="event_date">
                        @if ($errors->has('event_date'))
                            <div class="text-danger">{{ $errors->first('event_date') }}</div>
                        @endif
                    </div>
                    <label for="example-text-input" class="col-lg-1 col-form-label">Time</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="time" name="event_time">
                        @if ($errors->has('event_time'))
                            <div class="text-danger">{{ $errors->first('event_time') }}</div>
                        @endif
                    </div>
                </div>
                <br>
                <hr>
                <div class="text-center">
                    <h4>Event Active Date</h4>
                </div>
                <br>
                <div class="form-group row">
                    <label for="example-text-input" class="col-lg-1 col-form-label">Start</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="date" name="event_start_date">
                        @if ($errors->has('event_start_date'))
                            <div class="text-danger">{{ $errors->first('event_start_date') }}</div>
                        @endif
                    </div>
                    <label for="example-text-input" class="col-lg-1 col-form-label">End</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="date" name="event_end_date">
                        @if ($errors->has('event_end_date'))
                            <div class="text-danger">{{ $errors->first('event_end_date') }}</div>
                        @endif
                    </div>
                </div>
                <br>
                <hr>
                <div class="text-center">
                    <h4>Additional Informtion</h4>
                </div>
                <br>
                <div class="form-group row">
                    <label for="example-text-input" class="col-lg-1 col-form-label">Event Location</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" name="event_location">
                        @if ($errors->has('event_location'))
                            <div class="text-danger">{{ $errors->first('event_location') }}</div>
                        @endif
                    </div>
                    <label for="example-text-input" class="col-lg-1 col-form-label">Website</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" name="event_website">
                        @if ($errors->has('event_website'))
                            <div class="text-danger">{{ $errors->first('event_website') }}</div>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-lg-1 col-form-label">Description</label>
                    <div class="col-lg-9">
                        <textarea class="form-control" type="text" name="event_description"
                            style="visibility: hidden; display: none;"></textarea>
                        @if ($errors->has('event_description'))
                            <div class="text-danger">{{ $errors->first('event_description') }}</div>
                        @endif
                    </div>
                    <script>
                        CKEDITOR.replace('event_description');
                    </script>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-lg-1 col-form-label">Event Main Image</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="file" name="event_main_image" accept="image/x-png,image/jpeg">
                        @if ($errors->has('event_main_image'))
                            <div class="text-danger">{{ $errors->first('event_main_image') }}</div>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-lg-1 col-form-label">Event Images</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="file" name="eventImages[]" accept="image/x-png,image/jpeg"
                            multiple="multiple">
                        @if ($errors->has('eventImages'))
                            <div class="text-danger">{{ $errors->first('eventImages') }}</div>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-12">
                        <button class="btn btn-shadow btn-block" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
