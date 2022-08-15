@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title">Upcoming Issues</h1>
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


        <div class="card-body">
            <h3 class="card-title">Upcomming Issues Headings</h3>
            <form method="POST" action="{{ route('issue.update-headings') }}">
                @csrf
                <div class="col-sm-6 col-md-12">
                    <div class="form-group">
                        <label class="form-label">Headings 1 </label>
                        <input type="text" name="ui_heading_one" value="{{ $settings[0]->ui_heading_one }}"
                            class="form-control">
                    </div>
                </div>
                <div class="col-sm-6 col-md-12">
                    <div class="form-group">
                        <label class="form-label">Headings 2 </label>
                        <input type="text" name="ui_heading_two" value="{{ $settings[0]->ui_heading_two }}"
                            class="form-control">
                    </div>
                </div>
                <div class="col-sm-6 col-md-12">
                    <div class="form-group">
                        <label class="form-label">Headings 3 </label>
                        <input type="text" name="ui_heading_three" value="{{ $settings[0]->ui_heading_three }}"
                            class="form-control">
                    </div>
                </div>
                <div class="col-sm-6 col-md-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
            <br>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-12">
            <button class="btn btn-primary btn-pill mt-3" data-bs-toggle="modal" data-bs-target="#largemodal">Add
                new issue</button>
        </div>
    </div>

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Upcomming Issues</h3>

                </div>


                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">#</th>
                                    <th class="wd-15p border-bottom-0">{{ $settings[0]->ui_heading_one }}</th>
                                    <th class="wd-15p border-bottom-0">{{ $settings[0]->ui_heading_two }}</th>
                                    <th class="wd-15p border-bottom-0">{{ $settings[0]->ui_heading_three }}
                                    </th>
                                    <th class="wd-20p border-bottom-0">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ($issues as $issue)
                                    @php
                                        ++$i;
                                    @endphp
                                    <tr>
                                        <td>{{ $issue->id }}</td>
                                        <td>{{ $issue->issue }}</td>
                                        <td>{{ $issue->deadline }}</td>
                                        <td>{{ $issue->commencement }}</td>
                                        <td>
                                            <div class="g-2">
                                                <a href="{{ url('admins/upcomming-issues/' . $issue->id) }}/edit"
                                                    class="btn text-primary btn-sm" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                <a href="{{ url('admins/upcomming-issues/' . $issue->id) }}/delete"
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
                    <h5 class="modal-title">Add New Upcomming Issue</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('issue.add') }}" method="POST">
                        @csrf

                        <div class="row">

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Issue </label>
                                    <input type="text" name="issue" value="{{ old('issue') }}" class="form-control">
                                </div>
                            </div>


                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Artwork and Payment Deadline </label>
                                    <input class="form-control" name="deadline" value="{{ old('deadline') }}"
                                        type="date" value="2011-08-19">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Distribution Commencement
                                    </label>
                                    <input class="form-control" name="commencement" value="{{ old('commencement') }}"
                                        type="date" value="2011-08-19">
                                </div>
                            </div>


                            <input type="submit" value="Add Upcomming Issue" class="btn btn-primary">

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
