@extends('backend.layouts.master')
@include('backend.utils.functions')

<style>
    .select2-container:has(.select2-search__field) {
        z-index: 9999 !important;
    }

    .select2-search__field {
        display: none;
    }
</style>
@section('admin-section')
    @push('page-title')
        <h1 class="page-title">Lgg Ward Members List</h1>
    @endpush

    <div class="row mb-3">
        <div class="col-12">
            <button class="btn btn-primary btn-pill mt-3" data-bs-toggle="modal" data-bs-target="#largemodal">Add New
                Ward Member</button>
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
                                    <th class="wd-15p border-bottom-0">Title</th>
                                    <th class="wd-20p border-bottom-0">Ward</th>
                                    <th class="wd-20p border-bottom-0">Name</th>
                                    <th class="wd-20p border-bottom-0">Party</th>
                                    <th class="wd-20p border-bottom-0">Landline</th>
                                    <th class="wd-20p border-bottom-0">Mobile</th>
                                    <th class="wd-20p border-bottom-0">Email</th>
                                    <th class="wd-20p border-bottom-0">Twitter</th>
                                    <th class="wd-20p border-bottom-0">Status</th>
                                    <th class="wd-20p border-bottom-0">Action</th>
                                    {{-- <th class="wd-15p border-bottom-0">Start date</th>
                                    <th class="wd-10p border-bottom-0">Salary</th>
                                    <th class="wd-25p border-bottom-0">E-mail</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($wardMembers as $member)
                                    <tr>
                                        <td>{{ $member->id }}</td>
                                        <td><span class="avatar avatar-xl bradius bradius cover-image"
                                                data-bs-image-src="{{ asset('uploads/') }}/{{ $member->profile }}"
                                                style="background: url(&quot;{{ asset('uploads/') }}/{{ $member->profile }}&quot;) center center;"></span>
                                        </td>
                                        <td>{{ $member->title }}</td>
                                        <td>{{ $member->wardId }}</td>
                                        <td>{{ $member->name }}</td>
                                        <td>{{ $member->party }}</td>
                                        <td>{{ $member->landline }}</td>
                                        <td>{{ $member->mobile }}</td>
                                        <td>{{ $member->email }}</td>
                                        <td>{{ $member->twitter }}</td>
                                        <td>
                                            @if ($member->status === 'active')
                                                <span class="badge bg-success badge-sm  me-1 mb-1 mt-1">Active</span>
                                            @else
                                                <span class="badge bg-danger badge-sm  me-1 mb-1 mt-1">Inactive</span>
                                            @endif
                                        </td>

                                        <td>
                                            <div class="g-2">
                                                <a href="{{ url('admins/lgg-ward-members') }}/{{ $member->id }}/edit"
                                                    class="btn text-primary btn-sm" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>

                                                <a href="{{ url('admins/lgg-ward-members') }}/{{ $member->id }}/delete"
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
                    <h5 class="modal-title">New Ward Member</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('lggWardsMembers.add') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Profile Image</label>
                                    <input type="file" name="profile" class="form-control"
                                        accept="image/png,image/webp,image/jpeg">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">title </label>
                                    <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class="form-label">Ward</label>

                                <select style="z-index:10 !important;" name="wardId"
                                    class="form-control wards__select select2-show-search form-select"
                                    data-placeholder="Choose one">
                                    <option label="Choose one"></option>
                                    @foreach ($wards as $ward)
                                        <option value="{{ $ward->id }}">{{ $ward->ward_title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Name </label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Party </label>
                                    <input type="text" name="party" value="{{ old('party') }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Landline </label>
                                    <input type="text" name="landline" value="{{ old('landline') }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Mobile </label>
                                    <input type="text" name="mobile" value="{{ old('mobile') }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Email </label>
                                    <input type="text" name="email" value="{{ old('email') }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Twitter </label>
                                    <input type="text" name="twitter" value="{{ old('twitter') }}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Status </label>
                                    <select name="status" class="form-control form-select" data-bs-placeholder="Status">
                                        <option value="active" selected>Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                            </div>





                            <input type="submit" value="Save Ward Member" class="btn btn-primary">

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>





    <!-- Modal -->
@endsection
