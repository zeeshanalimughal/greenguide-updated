@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title">Website Froms</h1>
    @endpush

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
                    <h3 class="card-title">All Website Froms</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">#</th>
                                    <th class="wd-15p border-bottom-0">Form Title</th>
                                    <th class="wd-20p border-bottom-0">Page Link</th>
                                    <th class="wd-20p border-bottom-0">status</th>
                                    <th class="wd-20p border-bottom-0">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($forms as $form)
                                    <tr>
                                        <td>{{ $form->id }}</td>
                                        <td>{{ $form->name }}</td>
                                        <td class="link"><a href="{{ url('/'.$form->link) }}" target="_blank">View Form</a></td>
                                        <td>
                                            @if ($form->status === 'live')
                                                <span
                                                    class="badge rounded-pill bg-success badge-lg me-1 mb-1 mt-1">{{ $form->status }}</span>
                                            @else
                                                <span
                                                    class="badge rounded-pill bg-danger badge-lg me-1 mb-1 mt-1">{{ $form->status }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="g-2">
                                                @if ($form->status === 'live')
                                                    <a href="{{ url('/admins/forms') }}/{{ $form->id }}/deactivate">
                                                        <button class="btn btn-primary" data-bs-placement="top"
                                                            data-bs-toggle="tooltip" title=""
                                                            data-bs-original-title="Deactivate">Deactivate</button>
                                                    </a>
                                                @endif
                                                @if ($form->status === 'deactive')
                                                    <a href="{{ url('/admins/forms') }}/{{ $form->id }}/activate">
                                                        <button class="btn btn-danger" data-bs-placement="top"
                                                            data-bs-toggle="tooltip" title=""
                                                            data-bs-original-title="Activate">Activate</button>
                                                @endif
                                                {{-- <a href="{{ url('admins/forms/' . $form->id) }}/delete"
                                                    class="btn btn-warning" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Delete">Remove</a> --}}
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
@endsection
