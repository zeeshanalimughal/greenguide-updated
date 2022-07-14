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
                    <h3 class="card-title">All Events</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                            <thead>
                                <tr>


                                    <th class="border-bottom-0">Name</th>
                                    <th class="border-bottom-0">gender</th>
                                    <th class="border-bottom-0">email</th>
                                    <th class="border-bottom-0">phone</th>
                                    <th class="border-bottom-0">city</th>
                                    <th class="border-bottom-0">nationality</th>
                                    <th class="border-bottom-0">experience</th>
                                    <th class="border-bottom-0">cv</th>
                                    <th class="border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jobs as $job)
                                    
                             
                                    <tr>
                                        <td>{{$job->fname}} {{$job->lname}}</td>
                                        <td>{{$job->gender}}</td>
                                        <td>{{$job->email}}</td>
                                        <td>{{$job->phone}}</td>
                                        <td>{{$job->city}}</td>
                                        <td>{{$job->nationality}}</td>
                                        <td>{{$job->has_experience}}</td>
                                        <td>
                                            <a class="btn btn-primary" target="_blank" href="{{asset('uploads/'.$job->cv)}}">view</a>
                                            <a class="btn btn-primary"  href="{{url('admins/jobs/cv/'.$job->cv)}}">download</a>
                                        
                                        </td>
                                       
                                        <td>
                                            {{-- <a target="_blank" href="">
                                                <button class="btn btn-success" data-bs-placement="top"
                                                    data-bs-toggle="tooltip" title=""
                                                    data-bs-original-title="view event details">View</button>
                                            </a> --}}
                                            <a href="{{url('admins/jobs/'.$job->id.'/delete')}}">
                                                <button class="btn btn-warning" data-bs-placement="top"
                                                    data-bs-toggle="tooltip" title=""
                                                    data-bs-original-title="delete event">Remove</button>
                                            </a>
                                  
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
