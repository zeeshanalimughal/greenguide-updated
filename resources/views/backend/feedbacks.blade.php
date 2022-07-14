@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title">Feedbacks</h1>
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
                    <h3 class="card-title">All Feedbacks</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                {{-- {{$feedbacks}} --}}
                                <tr>
                                    <th class="wd-15p border-bottom-0">#</th>
                                    <th class="wd-15p border-bottom-0">Name</th>
                                    <th class="wd-15p border-bottom-0">Email</th>
                                    <th class="wd-20p border-bottom-0">Type</th>
                                    <th class="wd-20p border-bottom-0">Feedback</th>
                                    <th class="wd-20p border-bottom-0">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($feedbacks as $feedback)
                                    <tr>
                                        <td>{{ $feedback->id }}</td>
                                        <td>{{ $feedback->fname }} {{ $feedback->lname }}</td>
                                        <td>{{ $feedback->email }}</td>
                                        <td>{{ $feedback->type }}</td>
                                        <td style="min-width:300px !important;">
                                            <span style="word-break: break-word !important;  width: 100% !important;text-align: justify; text-justify: justify; overflow: wrap !important; white-space: initial;">
                                                {{ $feedback->feedback }}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{ url('/admins/feedbacks/') }}/{{ $feedback->id }}/delete"
                                                class="btn text-danger btn-sm" data-bs-toggle="tooltip"
                                                data-bs-original-title="Delete"><span
                                                    class="fe fe-trash-2 fs-14"></span></a>
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
