@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title">GreenInitiative Page Settings</h1>
    @endpush

{{-- {{dd($page)}} --}}
    <div class="row ">
        <div class="col-lg-6 col-xl-3">
            @include('backend.pages.pages-side-menu')
        </div>
        <div class="col-lg-6 col-xl-9">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">GreenInitiative Page Settings</h3>
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
                    <form action="{{route("page.greeninitiative")}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">







                            <div class="col-sm-6 col-md-6">
                                  <div class="form-group">
                                      <label class="form-label">GreenInitiative Hero Background Image </label>
                                      <input type="file" name="gi_hero_image" class="form-control">
                                  </div>
                              </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Hero title </label>
                                    <input type="text" value="{{ $page[0]->gi_title }}" name="gi_title"
                                        class="form-control">
                                </div>
                            </div>



                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Hero subtitle </label>
                                    <input type="text" value="{{ $page[0]->gi_subtitle }}" name="gi_subtitle"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Counter Box Magazine Printed Title </label>
                                    <input type="text" value="{{ $page[0]->gi_magazine_printed_title }}" name="gi_magazine_printed_title"
                                        class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Counter Box Magazine Printed Count </label>
                                    <input type="text" value="{{ $page[0]->gi_magazine_printed_count }}" name="gi_magazine_printed_count"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Counter Box Trees Planted Title </label>
                                    <input type="text" value="{{ $page[0]->gi_trees_planted_title }}" name="gi_trees_planted_title"
                                        class="form-control">
                                </div>
                            </div>

                            
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Counter Box Trees Planted Count </label>
                                    <input type="text" value="{{ $page[0]->gi_trees_planted_count }}" name="gi_trees_planted_count"
                                        class="form-control">
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Gree Guide Box 1 Heading </label>
                                    <input type="text" value="{{ $page[0]->gi_greenguide_box_heading }}" name="gi_greenguide_box_heading"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Gree Guide Forest Box 2 Heading </label>
                                    <input type="text" value="{{ $page[0]->gi_greenguide_forest_box_heading }}" name="gi_greenguide_forest_box_heading"
                                        class="form-control">
                                </div>
                            </div>



                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Gree Guide Box 1 Content </label>
                                   <textarea name="gi_greenguide_box_content">
                                        {{$page[0]->gi_greenguide_box_content}}
                                   </textarea>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Gree Guide Forest Box 2 Content </label>
                                   <textarea name="gi_greenguide_forest_box_content">
                                        {{$page[0]->gi_greenguide_forest_box_content}}
                                   </textarea>
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Hero bottom description </label>
                                    <input type="text" value="{{ $page[0]->gi_desc }}" name="gi_desc"
                                        class="form-control">
                                </div>
                            </div>
         







                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Hero Section 2 title </label>
                                    <input type="text" value="{{ $page[0]->gi_sec2_title }}" name="gi_sec2_title"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Hero Section 2 Description </label>
                                   <textarea name="gi_sec2_desc">
                                        {{$page[0]->gi_sec2_desc}}
                                   </textarea>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Hero Section 2 Image </label>
                                    <input type="file" name="gi_sec2_image" class="form-control">
                                </div>
                            </div>








                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Hero Section 3 title </label>
                                    <input type="text" value="{{ $page[0]->gi_sec3_title }}" name="gi_sec3_title"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Hero Section 3 Description </label>
                                   <textarea name="gi_sec3_desc">
                                        {{$page[0]->gi_sec3_desc}}
                                   </textarea>
                                </div>
                            </div>






                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Hero Section 4 title </label>
                                    <input type="text" value="{{ $page[0]->gi_sec4_title }}" name="gi_sec4_title"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Hero Section 4  Description </label>
                                   <textarea name="gi_sec4_desc">
                                        {{$page[0]->gi_sec4_desc}}
                                   </textarea>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Hero Section 4 Image </label>
                                    <input type="file" name="gi_sec4_image" class="form-control">
                                </div>
                            </div>






                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Hero Section 5 title </label>
                                    <input type="text" value="{{ $page[0]->gi_sec5_title }}" name="gi_sec5_title"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Hero Section 5 Description </label>
                                   <textarea name="gi_sec5_desc">
                                        {{$page[0]->gi_sec5_desc}}
                                   </textarea>
                                </div>
                            </div>



                            



                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Hero Section 6 title </label>
                                    <input type="text" value="{{ $page[0]->gi_sec6_title }}" name="gi_sec6_title"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Hero Section 6  Description </label>
                                   <textarea name="gi_sec6_desc">
                                        {{$page[0]->gi_sec6_desc}}
                                   </textarea>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Hero Section 6 Image </label>
                                    <input type="file" name="gi_sec6_image" class="form-control">
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
        CKEDITOR.replace('gi_sec2_desc');
        CKEDITOR.replace('gi_sec3_desc');
        CKEDITOR.replace('gi_sec4_desc');
        CKEDITOR.replace('gi_sec5_desc');
        CKEDITOR.replace('gi_sec6_desc');
        CKEDITOR.replace('gi_greenguide_box_content');
        CKEDITOR.replace('gi_greenguide_forest_box_content');

    </script>
@endsection
