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
                    <h3 class="card-title">All Business Directories</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                            <thead>
                                <tr>


                                    <th class="border-bottom-0">#</th>
                                    <th class="border-bottom-0">logo</th>
                                    <th class="border-bottom-0">category</th>
                                    <th class="border-bottom-0">subcategory</th>
                                    <th class="border-bottom-0">name</th>
                                    <th class="border-bottom-0">email</th>
                                    {{-- <th class="border-bottom-0">phone</th> --}}
                                    {{-- <th class="border-bottom-0">borough</th> --}}
                                    <th class="border-bottom-0">company name</th>
                                    {{-- <th class="border-bottom-0">company reg no</th> --}}
                                    <th class="border-bottom-0">created at</th>
                                    <th class="border-bottom-0">status</th>
                                    <th class="border-bottom-0">status</th>
                                    <th class="border-bottom-0">actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                @php
                                $i = 0;
                            @endphp
                             @foreach ($directories as $directory)
                               <tr>
                                @php
                                ++$i;
                            @endphp
                            <td>{{$i}}</td>
                                <td><img src="{{asset('uploads/'.$directory->logo)}}" style="width:60px;" alt=""></td>
                                <td>{{ $directory->category }}</td>
                                <td>{{ $directory->subcategory }}</td>
                                <td>{{ $directory->name }}</td>
                                <td>{{ $directory->email }}</td>
                                {{-- <td>{{ $directory->phone }}</td> --}}
                                {{-- <td>{{ $directory->borough }}</td> --}}
                                <td>{{ $directory->company_name }}</td>
                                {{-- <td>{{ $directory->company_reg_no }}</td> --}}
                                <td>{{ $directory->created_at->diffForHumans() }}</td>
                               
                                <td>
                                    @if ($directory->directory_status == 'pending')
                                        <span
                                            class="badge badge-pill py-2 px-3 bg-primary">{{ $directory->directory_status }}</span>
                                    @elseif ($directory->directory_status === 'rejected')
                                        <span
                                            class="badge badge-pill py-2 px-3 bg-danger">{{ $directory->directory_status }}</span>
                                    @else
                                        <span class="badge badge-pill py-2 px-3 bg-success">live</span>
                                    @endif

                                </td>

                                <td>
                                    <a target="_blank" href="{{url('/admins/businessdirectories')}}/{{$directory->id}}">
                                        <button class="btn btn-success" data-bs-placement="top"
                                            data-bs-toggle="tooltip" title=""
                                            data-bs-original-title="view event details">View</button>
                                    </a>
                                    @if ($directory->directory_status == 'pending')
                                        <a href="{{url('/admins/businessdirectories')}}/{{$directory->id}}/activate">
                                            <button class="btn btn-danger" data-bs-placement="top"
                                                data-bs-toggle="tooltip" title=""
                                                data-bs-original-title="status deactive">Activate</button>
                                        </a>
                                    @elseif ($directory->directory_status == 'live')
                                        <a href="{{url('/admins/businessdirectories')}}/{{$directory->id}}/deactivate">
                                            <button class="btn btn-primary" data-bs-placement="top"
                                                data-bs-toggle="tooltip" title=""
                                                data-bs-original-title="status live">Deactivate</button>
                                        </a>
                                    @else
                                        <a href="{{url('/admins/businessdirectories')}}/{{$directory->id}}/accept">
                                            <button class="btn btn-secondary" data-bs-placement="top"
                                                data-bs-toggle="tooltip" title=""
                                                data-bs-original-title="accept event again">Rejected</button>
                                        </a>
                                    @endif

                                    @if ($directory->directory_status !== 'rejected')
                                        <a href="{{url('/admins/businessdirectories')}}/{{$directory->id}}/reject">
                                            <button class="btn btn-primary" data-bs-placement="top"
                                                data-bs-toggle="tooltip" title=""
                                                data-bs-original-title="reject the event">Reject</button>
                                        </a>
                                    @endif
                                </td>
                                <td> <a href="{{url('/admins/businessdirectories')}}/{{$directory->id}}/remove">
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
