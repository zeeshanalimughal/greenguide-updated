@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title">About Page Settings</h1>
    @endpush


    <div class="row ">
        <div class="col-lg-6 col-xl-3">
            @include('backend.pages.pages-side-menu')
        </div>
        <div class="col-lg-6 col-xl-9">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Update About Page Settings</h3>
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
                    <form action="{{ route('page.about') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                          <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">About Hero Background Image </label>
                                    <input type="file" name="ab_image" class="form-control">
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Page title </label>
                                    <input type="text" value="{{ $page[0]->ab_title }}" name="ab_title"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">About Description 1 </label>
                                    <textarea id="summernote" name="ab_desc1">
                                                        {{ $page[0]->ab_desc1 }}
                                                    </textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">About Description 2 </label>
                                    <textarea class="summernote2" name="ab_desc2">
                                                        {{ $page[0]->ab_desc2 }}
                                                    </textarea>
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">About Box 1</label>
                                    <input type="text" value="{{ $page[0]->ab_box1 }}" name="ab_box1"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">About Box 2</label>
                                    <input type="text" value="{{ $page[0]->ab_box2 }}" name="ab_box2"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">About Box 3</label>
                                    <input type="text" value="{{ $page[0]->ab_box3 }}" name="ab_box3"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">About Company title</label>
                                    <input type="text" value="{{ $page[0]->ab_company }}" name="ab_company"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">About Company Quote</label>
                                    <textarea class="summernote3" name="ab_company_qt">
                                                      {{ $page[0]->ab_company_qt }}
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
    @push('summernote')
        <script>
            $(document).ready(function() {
                $('.summernote2').summernote();
            });
            $(document).ready(function() {
                $('.summernote3').summernote();
            });
        </script>
    @endpush()
@endsection
