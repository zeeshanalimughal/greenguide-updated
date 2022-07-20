@extends("frontend.layouts.master")
@section('main-section')
    {{-- {{$userData}} --}}

    <section id="page-title" class="text-light" data-bg-parallax="{{ url('front/img/parallax/_5.jpg') }}">
        <div class="container">
            <div class="breadcrumb" data-animate="fadeInUp" data-animate-delay="1300">
                <ul>
                    <li><a href="/">Home</a> </li>
                    <li class="active">Your Events</li>
                </ul>
            </div>
            <div class="page-title" data-animate="fadeInUp" data-animate-delay="1300">
                <h1>Account</h1>
                <!-- <span>Simple page title with background parallax image</span> -->
            </div>
        </div>
    </section>
    <!-- end: Page title -->
    <!-- Page Menu -->
    <section>
        <div class="container-fluid px-5">
            <div class="row">
                <!-- Sidebar-->
                <div class="sidebar sidebar-modern sticky-sidebar col-lg-3">
                    <ul class="account-nav">
                        <li class="border-bottom"><a href="/account" class="active">Profile</a></li>
                        <li class="border-bottom"><a href="/businessdirectory/all-directories">Business Listing</a></li>
                        <li class="border-bottom"><a href="/events/all-events" class="active">Local Events</a></li>
                        <li class="border-bottom"><a href="/account/designbooking">Design</a></li>
                        <li class="border-bottom"><a href="/account/advertisebooking">Advertise</a></li>
                        <li class="border-bottom"><a href="/account/logout">Logout</a></li>
                    </ul>
                </div>
                <div class="content col-lg-9">
                    <div class="container-fluid">

                        @if (session()->has('success'))
                            <div class="col-lg-6">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session()->get('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            </div>
                        @endif
                        @if (session()->has('error'))
                            <div class="col-lg-6">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session()->get('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            </div>
                        @endif
                        <form method="POST" class="form-validate" action="{{ route('events.update') }}"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="text-center">
                                <h4>Basic Information</h4>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-lg-1 col-form-label">Event Title</label>
                                <div class="col-lg-5">
                                    <input class="form-control" type="text" value="{{ $event[0]->event_title }}"
                                        name="event_title">
                                    @if ($errors->has('event_title'))
                                        <div class="text-danger">{{ $errors->first('event_title') }}</div>
                                    @endif
                                </div>
                                <label for="example-text-input" class="col-lg-1 col-form-label">Category</label>
                                <div class="col-lg-5">
                                    <select class="form-select" name="event_category">

                                        <option value="{{ $event[0]->event_category }}" selected="true">
                                            {{ $event[0]->event_category }}</option>
                                        <option value="Art/Exhibition">Art/Exhibition</option>
                                        <option value="Fair/Festivals">Fair/Festivals</option>
                                        <option value="Food Drink">Food Drink</option>
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

                            <input type="hidden" name="eventId" value="{{ $event[0]->id}}">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-lg-1 col-form-label">Date</label>
                                <div class="col-lg-5">
                                    <input class="form-control" type="date" value="{{ $event[0]->event_date }}"
                                        name="event_date">
                                    @if ($errors->has('event_date'))
                                        <div class="text-danger">{{ $errors->first('event_date') }}</div>
                                    @endif
                                </div>
                                <label for="example-text-input" class="col-lg-1 col-form-label">Time</label>
                                <div class="col-lg-5">
                                    <input class="form-control" type="time" value="{{ $event[0]->event_time }}"
                                        name="event_time">
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
                                    <input class="form-control" type="date" value="{{ $event[0]->event_start_date }}"
                                        name="event_start_date">
                                    @if ($errors->has('event_start_date'))
                                        <div class="text-danger">{{ $errors->first('event_start_date') }}</div>
                                    @endif
                                </div>
                                <label for="example-text-input" class="col-lg-1 col-form-label">End</label>
                                <div class="col-lg-5">
                                    <input class="form-control" type="date" value="{{ $event[0]->event_end_date }}"
                                        name="event_end_date">
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
                                    <input class="form-control" type="text" value="{{ $event[0]->event_location }}"
                                        name="event_location">
                                    @if ($errors->has('event_location'))
                                        <div class="text-danger">{{ $errors->first('event_location') }}</div>
                                    @endif
                                </div>
                                <label for="example-text-input" class="col-lg-1 col-form-label">Website</label>
                                <div class="col-lg-5">
                                    <input class="form-control" type="text" value="{{ $event[0]->event_website }}"
                                        name="event_website">
                                    @if ($errors->has('event_website'))
                                        <div class="text-danger">{{ $errors->first('event_website') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-lg-1 col-form-label">Description</label>
                                <div class="col-lg-12">
                                    <textarea class="form-control" type="text" name="event_description"
                                        style="visibility: hidden; display: none;">{{ $event[0]->event_description }}</textarea>
                                    @if ($errors->has('event_description'))
                                        <div class="text-danger">{{ $errors->first('event_description') }}</div>
                                    @endif
                                </div>
                                <script>
                                    CKEDITOR.replace('event_description');
                                </script>
                            </div>
                            <div class="form-group row d-flex align-items-end w-100">
                                <div class="col-lg-12 mt-5 mx-auto    ">
                                    <button class="btn btn-shadow btn-block" type="submit">Update</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('datatable-script')
        <script>
            $(document).ready(function() {
                $('#datatable').DataTable();
            });
        </script>
    @endpush
@endsection
