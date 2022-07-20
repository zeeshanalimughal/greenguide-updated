@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @if (session()->has('error'))
        @php
            echo message(session()->get('error'), 'danger');
        @endphp
    @endif
    @if (session()->has('success'))
        @php
            echo message(session()->get('success'), 'success');
        @endphp
    @endif
    @if ($errors->any())
        @php
            echo errorAlert($errors->all(), 'danger');
        @endphp
    @endif
    <div class="row mb-3">
        <div class="col-12">
            <button class="btn btn-primary btn-pill mt-3" data-bs-toggle="modal" data-bs-target="#eventsmodal">Add
                new Event</button>
        </div>
    </div>


    <!-- Row -->
    <div class="row row-sm">
        <div class="2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Events</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                            <thead>
                                <tr>


                                    <th class="border-bottom-0">#</th>
                                    <th class="border-bottom-0">title</th>
                                    <th class="border-bottom-0">event category</th>

                                    <th class="border-bottom-0">start date</th>
                                    <th class="border-bottom-0">end date</th>
                                    <th class="border-bottom-0">location</th>
                                    <th class="border-bottom-0">Added by</th>

                                    <th class="border-bottom-0">status</th>
                                    <th class="border-bottom-0">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $j = 0;
                            @endphp
                                @for ($i = 0; $i < sizeof($events); $i++)
                                    <tr>
                                        @php
                                        ++$j;
                                        @endphp
                                    <td>{{$j}}</td>
                                        <td>{{ $events[$i]['event_title'] }}</td>
                                        <td>{{ $events[$i]['event_category'] }}</td>
                                        <td>{{ $events[$i]['event_start_date'] }} ({{Carbon::parse($events[$i]['event_start_date'])->diffForHumans()}})</td>
                                        <td>{{ $events[$i]['event_end_date'] }}  ({{Carbon::parse($events[$i]['event_end_date'])->diffForHumans()}})</td>
                                        <td>{{ $events[$i]['event_location'] }}</td>
                                        <td>{{ $events[$i]['userId'] === 0 ? 'By Admin' : $events[$i]['email']}}</td>

                                        <td>
                                            <a target="_blank" href="{{ url('/admins/events') }}/{{ $events[$i]['id'] }}">
                                                <button class="btn btn-success" data-bs-placement="top"
                                                    data-bs-toggle="tooltip" title=""
                                                    data-bs-original-title="view event details">View</button>
                                            </a>
                                            @if ($events[$i]['event_status'] == 'pending')
                                                <a href="{{ url('/admins/events') }}/{{ $events[$i]['id'] }}/activate">
                                                    <button class="btn btn-danger" data-bs-placement="top"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="status deactive">Activate</button>
                                                </a>
                                            @elseif ($events[$i]['event_status'] == 'live')
                                                <a href="{{ url('/admins/events') }}/{{ $events[$i]['id'] }}/deactivate">
                                                    <button class="btn btn-primary" data-bs-placement="top"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="status live">Deactivate</button>
                                                </a>
                                                @elseif ($events[$i]['event_status'] == 'closed')
                                                    <button class="btn btn-dark" disabled>Event Closed</button>
                                              
                                            @else
                                                <a href="{{ url('/admins/events') }}/{{ $events[$i]['id'] }}/accept">
                                                    <button class="btn btn-secondary" data-bs-placement="top"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="accept event again">Rejected</button>
                                                </a>
                                            @endif

                                            @if ($events[$i]['event_status'] !== 'rejected' && $events[$i]['event_status'] !== 'closed')
                                                <a href="{{ url('/admins/events') }}/{{ $events[$i]['id'] }}/reject">
                                                    <button class="btn btn-primary" data-bs-placement="top"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="reject the event">Reject</button>
                                                </a>
                                            @endif
                                        </td>
                                        <td> <a href="{{ url('/admins/events') }}/{{ $events[$i]['id'] }}/remove">
                                                <button class="btn btn-warning" data-bs-placement="top"
                                                    data-bs-toggle="tooltip" title=""
                                                    data-bs-original-title="delete event">Remove</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endfor

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->














    <!-- Modal -->
    <div class="modal fade" id="eventsmodal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Event</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <section>
                        <div class="container">
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
                            <form method="POST" class="form-validate" action="{{ route('events.add-event-by-admin') }}"
                                enctype="multipart/form-data">
                                @csrf


                                <div class="text-center">
                                    <h4>Basic Information</h4>
                                </div>
                                <br>
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <label for="example-text-input" class=" col-form-label">Event Title</label>
                                        <input class="form-control" type="text" name="event_title">
                                        @if ($errors->has('event_title'))
                                            <div class="text-danger">{{ $errors->first('event_title') }}</div>
                                        @endif
                                    </div>

                                    <div class="col-6">

                                        <label for="example-text-input" class=" col-form-label">Category</label>
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

                                <div class="row">
                                    <div class="col-6">
                                        <label for="example-text-input" class=" col-form-label">Date</label>
                                        <input class="form-control" type="date" name="event_date">
                                        @if ($errors->has('event_date'))
                                            <div class="text-danger">{{ $errors->first('event_date') }}</div>
                                        @endif
                                    </div>

                                    <div class="col-6">

                                        <label for="example-text-input" class=" col-form-label">Time</label>
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


                                <div class="row">
                                    <div class="col-6">
                                        <label for="example-text-input" class=" col-form-label">Start</label>
                                        <input class="form-control" type="date" name="event_start_date">
                                        @if ($errors->has('event_start_date'))
                                            <div class="text-danger">{{ $errors->first('event_start_date') }}</div>
                                        @endif
                                    </div>
                                    <div class="col-6">

                                        <label for="example-text-input" class=" col-form-label">End</label>
                                        <input class="form-control" type="date" name="event_end_date">
                                        @if ($errors->has('event_end_date'))
                                            <div class="text-danger">{{ $errors->first('event_end_date') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <hr>
                                <div class="text-center">
                                    <h4>Additional Informtion</h4>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-6">
                                        <label for="example-text-input" class=" col-form-label">Event Location</label>
                                        <input class="form-control" type="text" name="event_location">
                                        @if ($errors->has('event_location'))
                                            <div class="text-danger">{{ $errors->first('event_location') }}</div>
                                        @endif
                                    </div>

                                    <div class="col-6">

                                        <label for="example-text-input" class=" col-form-label">Website</label>
                                        <input class="form-control" type="text" name="event_website">
                                        @if ($errors->has('event_website'))
                                            <div class="text-danger">{{ $errors->first('event_website') }}</div>
                                        @endif
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12">

                                        <label for="example-text-input" class=" col-form-label">Description</label>
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
                                <div class="row">
                                    <div class="col-6">
                                        <label for="example-text-input" class=" col-form-label">Event Main Image</label>
                                        <input class="form-control" type="file" name="event_main_image"
                                            accept="image/x-png,image/jpeg">
                                        @if ($errors->has('event_main_image'))
                                            <div class="text-danger">{{ $errors->first('event_main_image') }}</div>
                                        @endif
                                    </div>
                                    <div class="col-6">
                                        <label for="example-text-input" class=" col-form-label">Event Images</label>
                                        <input class="form-control" type="file" name="eventImages[]"
                                            accept="image/x-png,image/jpeg" multiple="multiple">
                                        @if ($errors->has('eventImages'))
                                            <div class="text-danger">{{ $errors->first('eventImages') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row mt-5">
                                    <div class="col-12">
                                        <button class="btn btn-success btn-block" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    {{-- <button class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>

    <script>
        CKEDITOR.replace('post_desc');
    </script>
    <!-- Modal -->


@endsection
