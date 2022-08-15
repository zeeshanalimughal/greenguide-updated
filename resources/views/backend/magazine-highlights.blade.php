@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title">All Highlights</h1>
    @endpush

    <div class="row mb-3">
        <div class="col-12">
            <button class="btn btn-primary btn-pill mt-3" data-bs-toggle="modal" data-bs-target="#largemodal">Add New
                Highlight</button>
        </div>
    </div>

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



    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Highlights</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">#</th>
                                    <th class="wd-15p border-bottom-0">Image</th>
                                    <th class="wd-15p border-bottom-0">Title</th>
                                    <th class="wd-20p border-bottom-0">Category</th>
                                    <th class="wd-20p border-bottom-0">Description</th>
                                    <th class="wd-20p border-bottom-0">Status</th>
                                    <th class="wd-20p border-bottom-0">Action</th>
                                    {{-- <th class="wd-15p border-bottom-0">Start date</th>
                                    <th class="wd-10p border-bottom-0">Salary</th>
                                    <th class="wd-25p border-bottom-0">E-mail</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($highlights as $highlight)
                                    <tr>
                                        <td>{{ $highlight->id }}</td>
                                        <td><span class="avatar bradius bradius cover-image"
                                                data-bs-image-src="{{ asset('uploads/') }}/{{ $highlight->image }}"
                                                style="background: url(&quot;{{ asset('uploads/') }}/{{ $highlight->image }}&quot;) center center;"></span>
                                        </td>

                                        <td style="word-break: break-word">
                                            {{ strlen($highlight->title) > 50 ? substr($highlight->title, 0, 50) . '...' : $highlight->title }}
                                        </td>
                                        <td>{{ $highlight->category_name }}</td>

                                        <td>
                                            @php
                                                
                                                echo strlen($highlight->description) > 100 ? substr($highlight->description, 0, 100) . '...' : $highlight->description;
                                            @endphp

                                        </td>

                                        <td>
                                            @if ($highlight->status === 'active')
                                                <span
                                                    class="badge rounded-pill bg-success badge-lg me-1 mb-1 mt-1">{{ $highlight->status }}</span>
                                            @else
                                                <span
                                                    class="badge rounded-pill bg-danger badge-lg me-1 mb-1 mt-1">{{ $highlight->status }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="g-2">
                                                <a href="{{ url('admins/magazine-highlights/' . $highlight->id) }}/edit"
                                                    class="btn btn-info" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit">Edit</a>
                                                @if ($highlight->status === 'active')
                                                    <a
                                                        href="{{ url('/admins/magazine-highlights') }}/{{ $highlight->id }}/deactivate">
                                                        <button class="btn btn-primary" data-bs-placement="top"
                                                            data-bs-toggle="tooltip" title=""
                                                            data-bs-original-title="Deactivate">Deactivate</button>
                                                    </a>
                                                @endif
                                                @if ($highlight->status === 'deactive')
                                                    <a
                                                        href="{{ url('/admins/magazine-highlights') }}/{{ $highlight->id }}/activate">
                                                        <button class="btn btn-danger" data-bs-placement="top"
                                                            data-bs-toggle="tooltip" title=""
                                                            data-bs-original-title="Activate">Activate</button>
                                                        {{-- @else
                                            <a href="{{url('/admins/users')}}/{{$user->id}}/activate">
                                                <button class="btn btn-danger" data-bs-placement="top"
                                                data-bs-toggle="tooltip" title=""
                                                data-bs-original-title="Activate">Activate</button>
                                            </a> --}}
                                                @endif

                                                <a href="{{ url('admins/magazine-highlights/' . $highlight->id) }}/delete"
                                                    class="btn btn-warning" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Delete">Remove</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->



















    <!-- Modal Add Post -->
    <div class="modal fade" id="largemodal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Magazine Highlight</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('MagazineHighlight.add') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Title </label>
                                    <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Category Name </label>
                                    <input type="text" name="category_name" value="{{ old('category_name') }}"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Post Description</label>
                                    <textarea class="postEditor" name="highlight_description">
                                    </textarea>


                                </div>
                            </div>


                            <input type="submit" value="Save Highlight" class="btn btn-primary">

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        CKEDITOR.replace('highlight_description');
    </script>
    <!-- Modal -->
@endsection
