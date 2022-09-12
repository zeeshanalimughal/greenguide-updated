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
                    <form action="{{ route('page.home') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Home Hero Background Image </label>
                                    <input type="file" name="hero_image" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Home Hero Title One </label>
                                    <input type="text" value="{{ $page[0]->hero_title1 }}" name="hero_title1"
                                        class="form-control">
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Home Hero Title Two </label>
                                    <input type="text" value="{{ $page[0]->hero_title2 }}" name="hero_title2"
                                        class="form-control">
                                </div>
                            </div>


                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Hero animated title (seperate animated words by |
                                        symbol)</label>
                                    <textarea class="form-control" name="hero_animated_title">{{ $page[0]->hero_animated_title }}</textarea>

                                </div>
                            </div>



                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Highlight Heading</label>
                                    <input type="text" value="{{ $page[0]->highlight_title }}" name="highlight_title"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Highlight LinkText</label>
                                    <input type="text" value="{{ $page[0]->highlight_link_text }}"
                                        name="highlight_link_text" class="form-control">
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Post Category 1 Image</label>
                                    <input type="file" name="post_category_image1" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Post Category 2 Image</label>
                                    <input type="file" name="post_category_image2" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Post Category 3 Image</label>
                                    <input type="file" name="post_category_image3" class="form-control">
                                </div>
                            </div>



                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Post Category 1 Title </label>
                                    <input type="text" value="{{ $page[0]->post_category_title1 }}"
                                        name="post_category_title1" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Post Category 2 Title </label>
                                    <input type="text" value="{{ $page[0]->post_category_title2 }}"
                                        name="post_category_title2" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Post Category 3 Title </label>
                                    <input type="text" value="{{ $page[0]->post_category_title3 }}"
                                        name="post_category_title3" class="form-control">
                                </div>
                            </div>






                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Hero box 1 title </label>
                                    <input type="text" value="{{ $page[0]->b1_title }}" name="box1_title"
                                        class="form-control">
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Hero box 2 title </label>
                                    <input type="text" value="{{ $page[0]->b2_title }}" name="box2_title"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Hero box 3 title </label>
                                    <input type="text" value="{{ $page[0]->b3_title }}" name="box3_title"
                                        class="form-control">
                                </div>
                            </div>



                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Hero box 4 title </label>
                                    <input type="text" value="{{ $page[0]->b4_title }}" name="box4_title"
                                        class="form-control">
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Hero box 5 title </label>
                                    <input type="text" value="{{ $page[0]->b5_title }}" name="box5_title"
                                        class="form-control">
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Directory title </label>
                                    <input type="text" value="{{ $page[0]->dir_title }}" name="dir_title"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Directory desc </label>
                                    <input type="text" name="dir_desc" value="{{ $page[0]->dir_desc }}"
                                        class="form-control">
                                </div>
                            </div>


                            <input type="submit" value="Update Details" class="btn btn-primary">

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    {{-- <script>
        CKEDITOR.replace('hero_animated_title');
    </script> --}}
    <!-- Modal -->
@endsection
