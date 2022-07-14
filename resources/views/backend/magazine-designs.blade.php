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


    {{-- <input type='button' class="btn btn-warning mt-2" value='Are you sure?' id='btn'> --}}
    {{-- {{ print_r($events) }} --}}
    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Magazine Design Orders</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="file-datatable"  class="table table-bordered text-nowrap key-buttons border-bottom">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>user name</th>
                                    <th>email</th>
                                    <th>logo</th>
                                    <th>advert size</th>
                                    <th>issue</th>
                                    <th>brief desc</th>
                                    <th>content</th>
                                    <th>created at</th>
                                    <th>status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ($designsBooks as $design)
                                    <tr>
                                    @php
                                        ++$i;
                                    @endphp
                                    <td>{{$i}}</td>
                                    <td>{{ $design->name }}</td>
                                    <td>{{ $design->email }}</td>
                                    <td><img src="{{asset('uploads/'.$design->logo)}}" style="width:80px;object-fit: cover" alt=""></td>
                                        <td>{{ $design->advert_size }}</td>
                                        <td>{{ $design->issue }}</td>
                                        <td>{{ $design->brief_desc }}</td>
                                        <td style="min-width:320px !important;">
                                            <span
                                                style="word-break: break-word !important;  width: 100% !important;text-align: justify; text-justify: justify; overflow: wrap !important; white-space: initial;">
                                                @php
                                                    echo $design->content;
                                                @endphp
                                            </span>
                                        </td>

                                        <td>{{ $design->created_at->diffForHumans(); }}</td>


                                        <td>
                                            @if ($design->status == 'in-progress')
                                                <span
                                                    class="badge badge-pill py-2 px-3 mt-2 bg-primary">{{ $design->status }}</span>
                                            @elseif ($design->status == 'under-review')
                                                <span
                                                    class="badge badge-pill py-2 px-3 mt-2 bg-info">{{ $design->status }}</span>

                                                    @elseif ($design->status == 'cancellled')
                                                    <span
                                                        class="badge badge-pill py-2 px-3 mt-2 bg-danger">{{ $design->status }}</span>
                                            @else
                                                <span class="badge badge-pill py-2 px-3 mt-2 bg-success">completed</span>
                                            @endif

                                        </td>
                                <td>
                               
                                    @if ($design->status == 'in-progress')
                                        <a href="{{url('/admins/magazine-design')}}/{{$design->id}}/accept">
                                            <button class="btn btn-danger" data-bs-placement="top"
                                                data-bs-toggle="tooltip" title=""
                                                data-bs-original-title="status deactive">Accept Order</button>
                                        </a>
                                        @endif
                                    @if ($design->status == 'in-progress')
                                        <a href="{{url('/admins/magazine-design')}}/{{$design->id}}/cancel">
                                            <button class="btn btn-primary" data-bs-placement="top"
                                                data-bs-toggle="tooltip" title=""
                                                data-bs-original-title="status live">Cancel Order</button>
                                        </a>
                                        @endif

                                        @if ($design->status == 'under-review')
                                        <a href="{{url('/admins/magazine-design')}}/{{$design->id}}/completed">
                                            <button class="btn btn-secondary" data-bs-placement="top"
                                                data-bs-toggle="tooltip" title=""
                                                data-bs-original-title="accept event again">Mark Completed</button>
                                        </a>
                                    @endif
                                    <a href="{{url('/admins/magazine-design')}}/{{$design->id}}/remove">
                                        <button class="btn btn-warning" data-bs-placement="top"
                                            data-bs-toggle="tooltip" title=""
                                            data-bs-original-title="delete event">Remove</button>
                                    </a>
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
