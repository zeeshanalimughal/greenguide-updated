@extends("frontend.layouts.master")
@section('main-section')
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
                        <li class="border-bottom"><a href="/account">Profile</a></li>
                        <li class="border-bottom"><a href="/businessdirectory/all-directories">Business Listing</a></li>
                        <li class="border-bottom"><a href="/events/all-events">Local Events</a></li>
                        <li class="border-bottom"><a class="active" href="/account/designbooking">Design</a></li>
                        <li class="border-bottom"><a href="/account/advert-design-book/">Advertise</a></li>
                        <li class="border-bottom"><a href="/account/logout">Logout</a></li>
                    </ul>
                </div>
                <div class="content col-lg-9">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="text-center" data-animate="fadeInUp" data-animate-delay="600">BOOK NOW</h1>
                                @if (session()->has('success'))
                                    <div class="col-lg-12">
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session()->get('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    </div>
                                @endif
                                @if (session()->has('error'))
                                    <div class="col-lg-12">
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{ session()->get('error') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    </div>
                                @endif
                                <form method="POST" class="form-validate" action="{{ route('magzine-designs.update') }}"
                                    enctype="multipart/form-data" data-animate="fadeInUp" data-animate-delay="800">
                                    @csrf
                                    <div class="text-center">
                                        <h4>Basic Information</h4>
                                    </div>
                                    <br>
                                    <input type="hidden" name="id" value="{{$magazineDesign[0]->id}}">
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-lg-1 col-form-label">Design Breif</label>
                                        <div class="col-lg-5">
                                            <input class="form-control" type="text" name="brief_desc" required="required"
                                                value="{{ $magazineDesign[0]->brief_desc }}" />
                                            @if ($errors->has('brief_desc'))
                                                <div class="text-danger">{{ $errors->first('brief_desc') }}</div>
                                            @endif
                                        </div>
                                        <label for="example-text-input" class="col-lg-1 col-form-label">Size of
                                            Advert</label>
                                        <div class="col-lg-5">
                                            <select class="form-select" name="advertSize" required="required">
                                                <option value="" disabled>Select a Size of Advert</option>
                                                @foreach ($adverts_sizes as $size)
                                                    @if ($size->id === $magazineDesign[0]->advertSize)
                                                        <option value="{{ $size->id }}" selected>
                                                            {{ $size->advert_size }} -
                                                            {{ $size->advert_price }}{{ $size->currency }}</option>
                                                    @endif
                                                    <option value="{{ $size->id }}">{{ $size->advert_size }} -
                                                        {{ $size->advert_price }}{{ $size->currency }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('advertSize'))
                                                <div class="text-danger">{{ $errors->first('advertSize') }}</div>
                                            @endif
                                            <div class="text-danger">* Premium page is only available to accounts that
                                                are assigned Marketing, Communication, Nationwide in their My Profile
                                                section – assigned by Office Admin</div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-lg-1 col-form-label">Issue</label>
                                        <div class="col-lg-5">
                                            <select class="form-select" name="upcomingIssue" required="required">
                                                <option value="" disabled>Select a Issue</option>
                                                @foreach ($issues as $issue)
                                                    @if ($issue->id === $magazineDesign[0]->upcomingIssue)
                                                        <option value="{{ $issue->id }}" selected>{{ $issue->issue }}
                                                            - {{ $issue->deadline }}</option>
                                                    @endif
                                                    <option value="{{ $issue->id }}">{{ $issue->issue }} -
                                                        {{ $issue->deadline }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('upcomingIssue'))
                                                <div class="text-danger">{{ $errors->first('upcomingIssue') }}</div>
                                            @endif
                                        </div>
                                        <label for="example-text-input" class="col-lg-1 col-form-label">Logo</label>
                                        <div class="col-lg-5">
                                            <input class="form-control" type="file" name="logo"
                                                accept="image/x-png,image/jpeg" />
                                            @if ($errors->has('logo'))
                                                <div class="text-danger">{{ $errors->first('logo') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-lg-1 col-form-label">Content</label>
                                        <div class="col-lg-11">
                                            <textarea class="form-control" type="text" name="content">
                                                @php
                                                    echo $magazineDesign[0]->content;
                                                 
                                                @endphp
                                            </textarea>
                                            @if ($errors->has('content'))
                                                <div class="text-danger">{{ $errors->first('content') }}</div>
                                            @endif
                                        </div>
                                        <script>
                                            CKEDITOR.replace('content');
                                        </script>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-lg-1 col-form-label">Images</label>
                                        <div class="col-lg-11">
                                            <input class="form-control" type="file" name="images[]"
                                                accept="image/x-png,image/jpeg" multiple="multiple" />
                                            @if ($errors->has('images'))
                                                <div class="text-danger">{{ $errors->first('images') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <br>
                                    <hr>
                                    <div class="text-center">
                                        <h4>Trading Hours</h4>
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-lg-1 col-form-label">Monday</label>
                                        <div class="col-lg-3">
                                            <input class="form-control" type="time" name="monday_open"
                                                value="{{ $magazineDesign[0]->monday_open }}" />
                                            @if ($errors->has('monday_open'))
                                                <div class="text-danger">{{ $errors->first('monday_open') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-lg-2">
                                            <input class="form-control" type="time"
                                                value="{{ $magazineDesign[0]->monday_close }}" name="monday_close" />
                                            @if ($errors->has('monday_close'))
                                                <div class="text-danger">{{ $errors->first('monday_close') }}</div>
                                            @endif
                                        </div>

                                        <label for="example-text-input" class="col-lg-1 col-form-label">Tuesday</label>
                                        <div class="col-lg-2">
                                            <input class="form-control" type="time"
                                                value="{{ $magazineDesign[0]->tuesday_open }}" name="tuesday_open" />
                                            @if ($errors->has('tuesday_open'))
                                                <div class="text-danger">{{ $errors->first('tuesday_open') }}</div>
                                            @endif
                                        </div>

                                        <div class="col-lg-3">
                                            <input class="form-control" type="time"
                                                value="{{ $magazineDesign[0]->tuesday_close }}" name="tuesday_close" />
                                            @if ($errors->has('tuesday_close'))
                                                <div class="text-danger">{{ $errors->first('tuesday_close') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-lg-1 col-form-label">Wednesday</label>
                                        <div class="col-lg-3">
                                            <input class="form-control" type="time"
                                                value="{{ $magazineDesign[0]->wednesday_open }}" name="wednesday_open" />
                                            @if ($errors->has('wednesday_open'))
                                                <div class="text-danger">{{ $errors->first('wednesday_open') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-lg-2">
                                            <input class="form-control" type="time"
                                                value="{{ $magazineDesign[0]->wednesday_close }}" name="wednesday_close" />
                                            @if ($errors->has('wednesday_close'))
                                                <div class="text-danger">{{ $errors->first('wednesday_close') }}
                                                </div>
                                            @endif
                                        </div>

                                        <label for="example-text-input" class="col-lg-1 col-form-label">Thursday</label>
                                        <div class="col-lg-2">
                                            <input class="form-control" type="time"
                                                value="{{ $magazineDesign[0]->thursday_open }}" name="thursday_open" />
                                            @if ($errors->has('thursday_open'))
                                                <div class="text-danger">{{ $errors->first('thursday_open') }}</div>
                                            @endif
                                        </div>

                                        <div class="col-lg-3">
                                            <input class="form-control" type="time"
                                                value="{{ $magazineDesign[0]->thursday_close }}" name="thursday_close" />
                                            @if ($errors->has('thursday_close'))
                                                <div class="text-danger">{{ $errors->first('thursday_close') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-lg-1 col-form-label">Friday</label>
                                        <div class="col-lg-3">
                                            <input class="form-control" type="time"
                                                value="{{ $magazineDesign[0]->friday_open }}" name="friday_open" />
                                            @if ($errors->has('friday_open'))
                                                <div class="text-danger">{{ $errors->first('friday_open') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-lg-2">
                                            <input class="form-control" type="time"
                                                value="{{ $magazineDesign[0]->friday_close }}" name="friday_close" />
                                            @if ($errors->has('friday_close'))
                                                <div class="text-danger">{{ $errors->first('friday_close') }}</div>
                                            @endif
                                        </div>

                                        <label for="example-text-input" class="col-lg-1 col-form-label">Saturday</label>
                                        <div class="col-lg-2">
                                            <input class="form-control" type="time"
                                                value="{{ $magazineDesign[0]->saturday_open }}" name="saturday_open" />
                                            @if ($errors->has('saturday_open'))
                                                <div class="text-danger">{{ $errors->first('saturday_open') }}</div>
                                            @endif
                                        </div>

                                        <div class="col-lg-3">
                                            <input class="form-control" type="time"
                                                value="{{ $magazineDesign[0]->saturday_close }}" name="saturday_close" />
                                            @if ($errors->has('saturday_close'))
                                                <div class="text-danger">{{ $errors->first('saturday_close') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-lg-1 col-form-label">Sunday</label>
                                        <div class="col-lg-3">
                                            <input class="form-control" type="time"
                                                value="{{ $magazineDesign[0]->sunday_open }}" name="sunday_open" />
                                            @if ($errors->has('sunday_open'))
                                                <div class="text-danger">{{ $errors->first('sunday_open') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-lg-2">
                                            <input class="form-control" type="time"
                                                value="{{ $magazineDesign[0]->sunday_close }}" name="sunday_close" />
                                            @if ($errors->has('sunday_close'))
                                                <div class="text-danger">{{ $errors->first('sunday_close') }}</div>
                                            @endif
                                        </div>

                                        <label for="example-text-input" class="col-lg-1 col-form-label">Bank
                                            Holiday</label>
                                        <div class="col-lg-2">
                                            <input class="form-control" type="time"
                                                value="{{ $magazineDesign[0]->holiday_open }}" name="holiday_open" />
                                            @if ($errors->has('holiday_open'))
                                                <div class="text-danger">{{ $errors->first('holiday_open') }}</div>
                                            @endif
                                        </div>

                                        <div class="col-lg-3">
                                            <input class="form-control" type="time"
                                                value="{{ $magazineDesign[0]->holiday_close }}" name="holiday_close" />
                                            @if ($errors->has('holiday_close'))
                                                <div class="text-danger">{{ $errors->first('holiday_close') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <br>
                                    <hr>
                                    <div class="text-center">
                                        <h4>Social Media</h4>
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-lg-1 col-form-label">Website</label>
                                        <div class="col-lg-5">
                                            <input class="form-control" type="text" value="{{$magazineDesign[0]->website}}" name="website" required="" />
                                            @if ($errors->has('website'))
                                                <div class="text-danger">{{ $errors->first('website') }}</div>
                                            @endif
                                        </div>
                                        <label for="example-text-input" class="col-lg-1 col-form-label">Facebook</label>
                                        <div class="col-lg-5">
                                            <input class="form-control" type="text" value="{{$magazineDesign[0]->fb}}" name="fb" />
                                            @if ($errors->has('fb'))
                                                <div class="text-danger">{{ $errors->first('fb') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-lg-1 col-form-label">Instagram</label>
                                        <div class="col-lg-5">
                                            <input class="form-control" type="text" value="{{$magazineDesign[0]->ins}}" name="ins" required="" />
                                            @if ($errors->has('ins'))
                                                <div class="text-danger">{{ $errors->first('ins') }}</div>
                                            @endif
                                        </div>
                                        <label for="example-text-input" class="col-lg-1 col-form-label">Twitter</label>
                                        <div class="col-lg-5">
                                            <input class="form-control" type="text" value="{{$magazineDesign[0]->tw}}" name="tw" />
                                            @if ($errors->has('tw'))
                                                <div class="text-danger">{{ $errors->first('tw') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-lg-1 col-form-label">Youtube</label>
                                        <div class="col-lg-5">
                                            <input class="form-control" type="text" value="{{$magazineDesign[0]->yt}}" name="yt" required="" />
                                            @if ($errors->has('yt'))
                                                <div class="text-danger">{{ $errors->first('yt') }}</div>
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
                        </div>
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
