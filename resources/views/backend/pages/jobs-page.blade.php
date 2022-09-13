@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title">Jobs Page Settings</h1>
    @endpush

    <div class="row ">
        <div class="col-lg-6 col-xl-3">
            @include('backend.pages.pages-side-menu')
        </div>
        <div class="col-lg-6 col-xl-9">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Update Jobs Page Settings</h3>
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
                    <form action="{{ route('page.jobs') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">JObs Hero Background Image </label>
                                    <input type="file" name="job_hero_image" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Hero title </label>
                                    <input type="text" value="{{ $page[0]->job_title }}" name="job_title"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Hero subtitle </label>
                                    <input type="text" value="{{ $page[0]->job_subtitle }}" name="job_subtitle"
                                        class="form-control">
                                </div>
                            </div>





                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Section 2 title</label>
                                    <input type="text" value="{{ $page[0]->job_sec2_title }}" name="job_sec2_title"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Section 2 Image 1</label>
                                    <input type="file" name="job_sec2_image1" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Section 2 Image 2</label>
                                    <input type="file" name="job_sec2_image2" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Section 2 Short Description</label>
                                    <textarea name="job_sec2_sdesc">
                                                    {{ $page[0]->job_sec2_sdesc }}
                                               </textarea>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Section 2 Long Description</label>
                                    <textarea name="job_sec2_ldesc">
                                                    {{ $page[0]->job_sec2_ldesc }}
                                               </textarea>
                                </div>
                            </div>



                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Section 3 title</label>
                                    <input type="text" value="{{ $page[0]->job_sec3_title }}" name="job_sec3_title"
                                        class="form-control">
                                </div>
                            </div>



                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Section 3 short description</label>
                                    <input type="text" value="{{ $page[0]->job_sec3_sdesc }}" name="job_sec3_sdesc"
                                        class="form-control">
                                </div>
                            </div>




                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Section 4 title</label>
                                    <input type="text" value="{{ $page[0]->job_sec4_title }}" name="job_sec4_title"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Section 4 subtitle</label>
                                    <input type="text" value="{{ $page[0]->job_sec4_subtitle }}" name="job_sec4_subtitle"
                                        class="form-control">
                                </div>
                            </div>




                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Section 4 Steps Background Image</label>
                                    <input type="file" name="job_steps_bg_image" class="form-control">
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Section 4 Step 1 text</label>
                                    <input type="text" value="{{ $page[0]->job_step1_text }}" name="job_step1_text"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Section 4 Step 2 text</label>
                                    <input type="text" value="{{ $page[0]->job_step2_text }}" name="job_step2_text"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Section 4 Step 1 text</label>
                                    <input type="text" value="{{ $page[0]->job_step3_text }}" name="job_step3_text"
                                        class="form-control">
                                </div>
                            </div>



                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Job Apply Form Left Side Content</label>
                                    <textarea name="job_apply_form_left_content">
                                                    {{ $page[0]->job_apply_form_left_content }}
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
        CKEDITOR.replace('job_sec2_sdesc');
        CKEDITOR.replace('job_sec2_ldesc');
        CKEDITOR.replace('job_apply_form_left_content');
    </script>
@endsection
