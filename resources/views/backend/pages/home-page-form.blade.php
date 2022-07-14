@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title">Home Page Settings</h1>
    @endpush

    
    <div class="row ">
        <div class="col-lg-6 col-xl-3">
            @include('backend.pages.pages-side-menu')
        </div>
        <div class="col-lg-6 col-xl-9">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Update Home Page Settings</h3>
                </div>
                <div class="card-body">
                    @if (session()->has('error'))
                              @php
                                   echo message(session()->get('error'),'danger');
                              @endphp
                            @endif
                            @if (session()->has('success'))
                              @php
                                   echo message(session()->get('success'),'success');
                              @endphp
                            @endif
                            @if ($errors->any())
                                @php
                                echo errorAlert($errors->all(),'danger');
                                @endphp
                            @endif
                    <form action="{{ route('page.home') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Hero box 1 title </label>
                                    <input type="text" value="{{$page[0]->b1_title}}" name="box1_title" class="form-control">
                                </div>
                            </div>
                    
    
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Hero box 2 title </label>
                                    <input type="text" value="{{$page[0]->b2_title}}" name="box2_title" class="form-control">
                                </div>
                            </div>
                   
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Hero box 3 title </label>
                                    <input type="text" value="{{$page[0]->b3_title}}" name="box3_title" class="form-control">
                                </div>
                            </div>
                  
    
    
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Hero box 4 title </label>
                                    <input type="text" value="{{$page[0]->b4_title}}" name="box4_title" class="form-control">
                                </div>
                            </div>
                     
    
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Hero box 5 title </label>
                                    <input type="text" value="{{$page[0]->b5_title}}" name="box5_title" class="form-control">
                                </div>
                            </div>
                       
    
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Directory title </label>
                                    <input type="text"  value="{{$page[0]->dir_title}}" name="dir_title" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Directory desc </label>
                                    <input type="text" name="dir_desc" value="{{$page[0]->dir_desc}}"  class="form-control">
                                </div>
                            </div>
    
    
                            <input type="submit" value="Update Details" class="btn btn-primary">
    
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
