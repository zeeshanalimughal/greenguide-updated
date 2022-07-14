@extends("frontend.layouts.master")
@section('main-section')

    <section id="page-title" class="text-light" data-bg-parallax="{{ url('front/img/parallax/_5.jpg') }}">
        <div class="container">
            <div class="breadcrumb" data-animate="fadeInUp" data-animate-delay="1300">
                <ul>
                    <li><a href="/">Home</a> </li>
                    <li class="active">Your Business Directories</li>
                </ul>
            </div>
            <div class="page-title" data-animate="fadeInUp" data-animate-delay="1300">
                <h1>Business Directories</h1>
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
                        <li class="border-bottom"><a href="/businessdirectory/all-directories" class="active">Business Directory</a></li>
                        <li class="border-bottom"><a href="/events/all-events" >Local Events</a></li>
                        <li class="border-bottom"><a href="/account/magzine-designs">Design</a></li>
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
                        <div class="row mb-5">
                            <div class="col-lg-6">
                                <h4>All Business Directories</h4>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                                <a class="btn btn-primary " href="/businessdirectory/add-new-directory">Add New Business Directory</a>
                            </div>
                            {{-- <span style="font-size:70px">Hello</span> --}}
                        </div>

                        <div class="row">

                            <div class="col-lg-12">
                                <table id="datatable" class="table table-bordered table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>category</th>
                                            <th>subcategory</th>
                                            <th>sub sub category</th>
                                            <th>borough</th>
                                            <th>logo</th>
                                            <th>status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 0;
                                        @endphp
                                        @foreach ($directories as $directory)
                                            <tr>
                                            @php
                                                ++$i;
                                            @endphp
                                            <td>{{$i}}</td>
                                                <td>{{ $directory->category }}</td>
                                                <td>{{ $directory->subcategory }}</td>
                                                <td>{{ $directory->sub_sub_category }}</td>
                                                <td>{{ $directory->borough }}</td>
                                                <td><img src="{{asset('uploads/'.$directory->logo)}}" style="width:80px;" alt=""></td>
                         

                                                <td>
                                                    @if ($directory->directory_status == 'pending')
                                                        <span
                                                            class="badge badge-pill py-2 px-3 bg-primary">{{ $directory->directory_status }}</span>
                                                    @elseif ($directory->directory_status == 'rejected')
                                                        <span
                                                            class="badge badge-pill py-2 px-3 bg-danger">{{ $directory->directory_status }}</span>
                                                    @else
                                                        <span class="badge badge-pill py-2 px-3 bg-success">live</span>
                                                    @endif

                                                </td>

                                                <td>
                                                {{-- @if($directory->userId === auth()->user()->id)
                                                <a target="_blank" href="{{url('/businessdirectories/directory')}}/{{$directory->id}}/{{auth()->user()->email}}">
                                                    <button class="btn btn-success btn-sm" data-bs-placement="top"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="view event details">View</button>
                                                    </a>
                                                @endif --}}
                                                
                                                    <a class="ms-2 text-reset"
                                                        href="/businessdirectory/edit-directory/{{ $directory->id }}"
                                                        data-bs-toggle="tooltip" data-bs-original-title="Edit"><i
                                                            class="icon-edit"></i></a>
                                                    <a class="ms-2 text-reset"
                                                        href="/businessdirectory/delete-directory/{{ $directory->id }}"
                                                        data-bs-toggle="tooltip" data-bs-original-title="Delete"><i
                                                            class="icon-trash-2"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>category</th>
                                            <th>subcategory</th>
                                            <th>sub sub category</th>
                                            <th>borough</th>
                                            <th>logo</th>
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
