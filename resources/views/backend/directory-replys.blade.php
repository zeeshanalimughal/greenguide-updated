@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
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
                    <h3 class="card-title">Business Directory Reviews Replys</h3>
                </div>
                {{-- {{dd($reviews)}} --}}
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">#</th>
                                    <th class="border-bottom-0">owner name</th>
                                    <th class="border-bottom-0">company name</th>
                                    <th class="border-bottom-0">review</th>
                                    <th class="border-bottom-0">reply</th>
                                    <th class="border-bottom-0">rating</th>
                                    <th class="border-bottom-0">created_at</th>
                                    <th class="border-bottom-0">status</th>
                                    <th class="border-bottom-0">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $j = 0;
                                @endphp
                                @for ($i = 0; $i < sizeof($replys); $i++)
                                    <tr>
                                        @php
                                            ++$j;
                                        @endphp
                                        <td>{{ $j }}</td>
                                        <td>{{ $replys[$i]['name'] }}</td>
                                        <td>{{ $replys[$i]['company_name'] }}</td>

                                        <td style="min-width:220px !important;">
                                            <span
                                                style="word-break: break-word !important;  width: 100% !important;text-align: justify; text-justify: justify; overflow: wrap !important; white-space: initial;">
                                                {{ $replys[$i]['review'] }}
                                            </span>
                                        </td>

                                        <td style="min-width:220px !important;">
                                            <span
                                                style="word-break: break-word !important;  width: 100% !important;text-align: justify; text-justify: justify; overflow: wrap !important; white-space: initial;">
                                                {{ $replys[$i]['reply'] }}
                                            </span>
                                        </td>
                                        <td>
                                            @for ($k = 0; $k < $replys[$i]['rating']; $k++)
                                                <span><i class="fa fa-star text-warning"></i></span>
                                            @endfor
                                        </td>
                                        <td>@php
                                            echo $replys[$i]['created_at']->diffForhumans();
                                        @endphp</td>
                                        <td>{{ $replys[$i]['reply_status'] }}</td>
                                        <td>
                                            @if ($replys[$i]['reply_status'] == 'pending')
                                                <a href="{{ url('/admins/replys') }}/{{ $replys[$i]['id'] }}/activate">
                                                    <button class="btn btn-danger" data-bs-placement="top"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="status deactive">Activate</button>
                                                </a>
                                            @else
                                                <a
                                                    href="{{ url('/admins/replys') }}/{{ $replys[$i]['id'] }}/deactivate">
                                                    <button class="btn btn-primary" data-bs-placement="top"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="status live">Deactivate</button>
                                                </a>
                                            @endif
                                            <a href="{{ url('/admins/replys') }}/{{ $replys[$i]['id'] }}/remove">
                                                <button class="btn btn-warning" data-bs-placement="top"
                                                    data-bs-toggle="tooltip" title=""
                                                    data-bs-original-title="delete event">Remove</button>
                                            </a>
                                        </td>
                                      
                                    </tr>
                                @endfor

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->


@endsection
