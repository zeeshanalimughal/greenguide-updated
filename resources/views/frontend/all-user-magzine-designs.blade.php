@extends("frontend.layouts.master")
@section('main-section')

    <section id="page-title" class="text-light" data-bg-parallax="{{ url('front/img/parallax/_5.jpg') }}">
        <div class="container">
            <div class="breadcrumb" data-animate="fadeInUp" data-animate-delay="1300">
                <ul>
                    <li><a href="/">Home</a> </li>
                    <li class="active">Your Magazine Design</li>
                </ul>
            </div>
            <div class="page-title" data-animate="fadeInUp" data-animate-delay="1300">
                <h1>Magazine Design</h1>
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
                        <li class="border-bottom"><a href="/businessdirectory/all-directories" >Business Listing</a></li>
                        <li class="border-bottom"><a href="/events/all-events" >Local Events</a></li>
                        <li class="border-bottom"><a class="active" href="/account/magzine-designs">Design</a></li>
                        <li class="border-bottom"><a href="/account/advert-design-book/">Advertise</a></li>
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
                        <!-- DataTable -->
                        <div class="row mb-5 mt-4">
                            <div class="col-lg-6">
                                <h4>All Magazine Design</h4>
                            </div>
                   
                        </div>

                        <div class="row">

                            <div class="col-lg-12">
                                <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>logo</th>
                                            <th>advert size</th>
                                            <th>advert price</th>
                                            <th>issue</th>
                                            <th>brief desc</th>
                                            <th>created at</th>
                                            <th>status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 0;
                                        @endphp
                                        @foreach ($designsBooks as $design)
                                            <tr>
                                            @php
                                                ++$i;
                                            @endphp
                                            <td>{{$i}}</td>
                                            <td><img src="{{asset('uploads/'.$design->logo)}}" style="width:80px;object-fit: cover" alt=""></td>
                                                <td>{{ $design->advert_size }}</td>
                                                <td>{{ $design->advert_price }}{{ $design->currency }}</td>
                                                <td>{{ $design->issue }}</td>
                                                <td>{{ $design->brief_desc }}</td>
                                                <td>{{ $design->created_at->diffForHumans(); }}</td>
                                             
                         

                                                <td>
                                                    @if ($design->status == 'in-progress')
                                                        <span
                                                            class="badge badge-pill py-2 px-3 bg-primary">{{ $design->status }}</span>
                                                    @elseif ($design->status == 'under-review')
                                                        <span
                                                            class="badge badge-pill py-2 px-3 bg-info">{{ $design->status }}</span>
                                                            @elseif ($design->status == 'cancellled')
                                                            <span
                                                                class="badge badge-pill py-2 px-3 bg-danger">{{ $design->status }}</span>
                                                    @else
                                                        <span class="badge badge-pill py-2 px-3 bg-success">completed</span>
                                                    @endif

                                                </td>

                                                <td>
                                                    <a class="ms-2 text-reset"
                                                        href="/account/magzine-designs/{{ $design->id }}/edit"
                                                        data-bs-toggle="tooltip" data-bs-original-title="Edit"><i
                                                            class="icon-edit"></i></a>
                                                    <a class="ms-2 text-reset"
                                                        href="/account/magzine-designs/{{ $design->id }}/delete"
                                                        data-bs-toggle="tooltip" data-bs-original-title="Delete"><i
                                                            class="icon-trash-2"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>logo</th>
                                            <th>advert size</th>
                                            <th>advert price</th>
                                            <th>issue</th>
                                            <th>brief desc</th>
                                            <th>created at</th>
                                            <th>status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                        </div>
                        <!-- end: DataTable -->
                    </div>
                    <!-- end: Page Content -->
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
