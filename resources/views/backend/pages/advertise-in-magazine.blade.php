@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title">Advertise In Magazine Page Settings</h1>
    @endpush

    {{-- {{dd($page)}} --}}
    <div class="row ">
        <div class="col-lg-6 col-xl-3">
            @include('backend.pages.pages-side-menu')
        </div>
        <div class="col-lg-6 col-xl-9">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Update Advertise In Magazine Page Settings</h3>
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
                    <form action="{{ route('page.advertise-in-magazine') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Section one Image </label>
                                    <input type="file" name="sec1_image" class="form-control">
                                </div>
                            </div>
                        

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Section one Content</label>
                                    <textarea name="sec1_content">
                                        {{ $page[0]->sec1_content }}
                                   </textarea>
                                </div>
                            </div>


                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Section two Content</label>
                                    <textarea name="sec2_content">
                                        {{ $page[0]->sec2_content }}
                                   </textarea>
                                </div>
                            </div>



                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Section three Image </label>
                                    <input type="file" name="sec3_image" class="form-control">
                                </div>
                            </div>
                        

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Section three Content</label>
                                    <textarea name="sec3_content">
                                        {{ $page[0]->sec3_content }}
                                   </textarea>
                                </div>
                            </div>






                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Section four Image </label>
                                    <input type="file" name="sec4_image" class="form-control">
                                </div>
                            </div>
                        

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Section four Content</label>
                                    <textarea name="sec4_content">
                                        {{ $page[0]->sec4_content }}
                                   </textarea>
                                </div>
                            </div>



                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Section five Image </label>
                                    <input type="file" name="sec5_image" class="form-control">
                                </div>
                            </div>
                        

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Section five Content</label>
                                    <textarea name="sec5_content">
                                        {{ $page[0]->sec5_content }}
                                   </textarea>
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
    <script>
        CKEDITOR.replace('sec1_content');
        CKEDITOR.replace('sec2_content');
        CKEDITOR.replace('sec3_content');
        CKEDITOR.replace('sec4_content');
        CKEDITOR.replace('sec5_content');
    </script>
@endsection
