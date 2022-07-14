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
                    <h3 class="card-title">Directory Reviews</h3>
                </div>
                {{-- {{dd($reviews)}} --}}
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                            <thead>
                                <tr>

                                    <th>#</th>
                                    <th class="border-bottom-0">reviewer name</th>
                                    <th class="border-bottom-0">email</th>
                                    <th class="border-bottom-0">website</th>
                                    <th class="border-bottom-0">company_name</th>
                                    <th class="border-bottom-0">category</th>
                                    <th class="border-bottom-0">rating</th>
                                    <th class="border-bottom-0">review</th>
                                    <th class="border-bottom-0">created_at</th>
                                    <th class="border-bottom-0">status</th>
                                    <th class="border-bottom-0">Actions</th>
                                </tr>
                            </thead>
                          <tbody>
                            @php
                            $j = 0;
                        @endphp
                                @for ($i = 0; $i < sizeof($reviews); $i++)
                                    <tr>
                                        @php
                                        ++$j;
                                    @endphp
                                    <td>{{$j}}</td>
                                        <td>{{ $reviews[$i]['name'] }}</td>
                                        <td>{{ $reviews[$i]['email'] }}</td>
                                        <td>{{ $reviews[$i]['website'] }}</td>
                                        <td>{{ $reviews[$i]['company_name'] }}</td>
                                        <td>{{ $reviews[$i]['category'] }}</td>
                                        {{-- <td>{{ $reviews[$i]['rating'] }}</td> --}}
                                        <td>
                                     @for ($k = 0; $k < $reviews[$i]['rating']; $k++)
                                            <span><i class="fa fa-star text-warning"></i></span>
                                        @endfor
                                        </td>
                                        <td style="min-width:300px !important;">
                                            <span style="word-break: break-word !important;  width: 100% !important;text-align: justify; text-justify: justify; overflow: wrap !important; white-space: initial;">
                                                {{$reviews[$i]['review']}}
                                            </span>
                                        </td>
                                        <td>@php
                                            echo $reviews[$i]['created_at']->diffForhumans();
                                        @endphp</td>
                                       
                                        <td>
                
                                            <a target="_blank" href="{{url('/admins/businessdirectories')}}/{{$reviews[$i]['directoryId']}}">
                                                <button class="btn btn-success" data-bs-placement="top"
                                                    data-bs-toggle="tooltip" title=""
                                                    data-bs-original-title="view event details">View</button>
                                            </a>
                                            @if ($reviews[$i]['review_status'] == 'pending')
                                                <a href="{{url('/admins/reviews')}}/{{$reviews[$i]['id']}}/activate">
                                                    <button class="btn btn-danger" data-bs-placement="top"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="status deactive">Activate</button>
                                                </a>
                                            @else
                                                <a href="{{url('/admins/reviews')}}/{{$reviews[$i]['id']}}/deactivate">
                                                    <button class="btn btn-primary" data-bs-placement="top"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-original-title="status live">Deactivate</button>
                                                </a>
              
                                            @endif
                                        </td>
                                        <td> <a href="{{url('/admins/reviews')}}/{{$reviews[$i]['id']}}/remove">
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
