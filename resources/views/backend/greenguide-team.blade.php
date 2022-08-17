@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title">Green Guide Team Members</h1>
    @endpush

    <div class="row mb-3">
        <div class="col-12">
            <button class="btn btn-primary btn-pill mt-3" data-bs-toggle="modal" data-bs-target="#largemodal">Add New
                Team Member</button>
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
                    <h3 class="card-title">All Posts</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">#</th>
                                    <th class="wd-15p border-bottom-0">Image</th>
                                    <th class="wd-15p border-bottom-0">Name</th>
                                    <th class="wd-20p border-bottom-0">Email</th>
                                    <th class="wd-20p border-bottom-0">Position</th>
                                    <th class="wd-20p border-bottom-0">Action</th>
                                    {{-- <th class="wd-15p border-bottom-0">Start date</th>
                                    <th class="wd-10p border-bottom-0">Salary</th>
                                    <th class="wd-25p border-bottom-0">E-mail</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teams as $team)
                                    <tr>
                                        <td>{{ $team->id }}</td>
                                        <td><span class="avatar avatar-xl bradius bradius cover-image"
                                                data-bs-image-src="{{ asset('uploads/') }}/{{ $team->image }}"
                                                style="background: url(&quot;{{ asset('uploads/') }}/{{ $team->image }}&quot;) center center;"></span>
                                        </td>
                                        <td>{{ $team->name }}</td>


                                        <td style="word-break: break-word">{{ $team->email }}</td>
                                        <td style="word-break: break-word">{{ $team->position }}</td>

                                        <td>
                                            <div class="g-2">
                                                <a href="{{ url('admins/teams') }}/{{ $team->id }}/edit"
                                                    class="btn text-primary btn-sm" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>

                                                <a href="{{ url('admins/teams') }}/{{ $team->id }}/delete"
                                                    class="btn text-danger btn-sm" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Delete"><span
                                                        class="fe fe-trash-2 fs-14"></span></a>
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
                    <h5 class="modal-title">New Team Member</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('teams.add') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Profile Image</label>
                                    <input type="file" name="image" class="form-control"
                                        accept="image/png,image/webp,image/jpeg">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Name </label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Email </label>
                                    <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Position</label> </label>
                                    <input type="text" name="position" value="{{ old('position') }}"
                                        class="form-control">
                                </div>
                            </div>


                            <input type="submit" value="Save Member" class="btn btn-primary">

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
        CKEDITOR.replace('post_desc');
    </script>
    <!-- Modal -->
@endsection
