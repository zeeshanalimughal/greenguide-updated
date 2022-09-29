@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title">LGG Wards List</h1>
    @endpush

    <div class="card">

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
    </div>

    <div class="row mb-3">
        <div class="col-12">
            <button class="btn btn-primary btn-pill mt-3" data-bs-toggle="modal" data-bs-target="#largemodal">Add
                new Lgg ward</button>
        </div>
    </div>

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">LGG Wards List</h3>

                </div>


                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">#</th>
                                    <th class="wd-15p border-bottom-0">Ward Title</th>
                                    <th class="wd-15p border-bottom-0">Status</th>
                                    <th class="wd-15p border-bottom-0">Created</th>
                                    <th class="wd-20p border-bottom-0">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ($wards as $ward)
                                    @php
                                        ++$i;
                                    @endphp
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $ward->ward_title }}</td>
                                        <td>
                                        @if ($ward->ward_status === 'active')
                                            <span class="badge bg-success badge-sm  me-1 mb-1 mt-1">Active</span>
                                        @else
                                            <span class="badge bg-danger badge-sm  me-1 mb-1 mt-1">Inactive</span>
                                        @endif
                                        </td>
                                        <td>{{ $ward->created_at->diffForHumans() }}</td>
                                        <td>
                                            <div class="g-2">
                                                <a href="{{ url('admins/lgg-wards-list/' . $ward->id) }}/edit"
                                                    class="btn text-primary btn-sm" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                <a href="{{ url('admins/lgg-wards-list/' . $ward->id) }}/delete"
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
        <div class="modal-dialog modal-md " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Lgg Ward</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('lggWardsList.add') }}" method="POST">
                        @csrf

                        <div class="row">

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Ward Title </label>
                                    <input type="text" name="ward_title" value="{{ old('ward_title') }}"
                                        class="form-control">
                                </div>
                            </div>

                            <input type="submit" value="Save Lgg Ward" class="btn btn-primary">

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
