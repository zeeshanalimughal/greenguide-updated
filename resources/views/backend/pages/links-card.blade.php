@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title">Links Cards Settings</h1>
    @endpush


    <div class="row ">
        <div class="col-lg-6 col-xl-3">
            @include('backend.pages.pages-side-menu')
        </div>
        <div class="col-lg-6 col-xl-9">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Update Links Cards Deails</h3>
                </div>
                <div class="card-body">
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
                    <form action="{{ route('page.update-links-cards') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">First Card Image</label>
                                    <input type="file" name="image1" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">First Card Title </label>
                                    <input type="text" value="{{ $links[0]->title1 }}" name="title1"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">First Card Details </label>
           <textarea class="form-control" name="details1">{{ $links[0]->details1 }}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">First Card Link </label>
                                    <input type="text" value="{{ $links[0]->link1 }}" name="link1"
                                        class="form-control">
                                </div>
                            </div>









                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Second Card Image</label>
                                    <input type="file" name="image2" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Second Card Title </label>
                                    <input type="text" value="{{ $links[0]->title2 }}" name="title2"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Second Card Details </label>
                                    <textarea class="form-control" name="details2">{{ $links[0]->details2 }}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Second Card Link </label>
                                    <input type="text" value="{{ $links[0]->link2 }}" name="link2"
                                        class="form-control">
                                </div>
                            </div>










                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Third Card Image</label>
                                    <input type="file" name="image3" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Third Card Title </label>
                                    <input type="text" value="{{ $links[0]->title3 }}" name="title3"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Third Card Link </label>
                                    <input type="text" value="{{ $links[0]->link3 }}" name="link3"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Third Card Details </label>
                                    <textarea class="form-control" name="details3">{{ $links[0]->details3 }}</textarea>
                                </div>
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
