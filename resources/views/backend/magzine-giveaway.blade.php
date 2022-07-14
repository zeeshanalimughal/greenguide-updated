@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title"> Green Guide Giveaway </h1>
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
                    <h3 class="card-title">All Giveaway Requests</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                {{-- {{$giveaways}} --}}
                                <tr>
                                    <th class="wd-15p border-bottom-0">#</th>
                                    <th class="wd-15p border-bottom-0">Name</th>
                                    <th class="wd-15p border-bottom-0">Email</th>
                                    <th class="wd-15p border-bottom-0">Issue</th>
                                    <th class="wd-20p border-bottom-0">Address</th>
                                    <th class="wd-20p border-bottom-0">Answer</th>
                                    <th class="wd-20p border-bottom-0">Created At</th>
                                    <th class="wd-20p border-bottom-0">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($giveaways as $giveaway)
                                    <tr>
                                        <td>{{ $giveaway->id }}</td>
                                        <td>{{ $giveaway->name }}</td>
                                        <td>{{ $giveaway->email }}</td>
                                        <td>{{ $giveaway->issue }}</td>
                                        <td>{{ $giveaway->address }}</td>
                                        <td style="min-width:300px !important;">
                                            <span style="word-break: break-word !important;  width: 100% !important;text-align: justify; text-justify: justify; overflow: wrap !important; white-space: initial;">
                                                {{ $giveaway->answer }}
                                            </span>
                                        </td>
                                        <td>{{ $giveaway->created_at->diffForhumans() }}</td>

                                        <td>
                                            <a href="{{ url('/admins/giveaways/') }}/{{ $giveaway->id }}/delete"
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
