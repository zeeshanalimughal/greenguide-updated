@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title">Magazine Giveaway Page Settings</h1>
        @endpush

        {{-- {{dd($page)}} --}}
        <div class="row ">
            <div class="col-lg-6 col-xl-3">
                @include('backend.pages.pages-side-menu')
            </div>
            <div class="col-lg-6 col-xl-9">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Update Magazine Giveaway Page Settings</h3>
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
                        <form action="{{ route('page.magazineGiveaway') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Magazine Giveaway Hero Background Image </label>
                                        <input type="file" name="hero_image" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label"> Hero title </label>
                                        <input type="text" value="{{ $page[0]->hero_title }}" name="hero_title"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Hero subtitle text </label>
                                        <input type="text" value="{{ $page[0]->hero_subtitle }}" name="hero_subtitle"
                                            class="form-control">
                                    </div>
                                </div>


                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Section Two Description text (add in form of dot
                                            lists)</label>
                                        <textarea name="section2_text">
                                        {{ $page[0]->section2_text }}
                                   </textarea>
                                    </div>
                                </div>


                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Section Two Title </label>
                                        <input type="text" value="{{ $page[0]->section2_heading }}"
                                            name="section2_heading" class="form-control">
                                    </div>
                                </div>


                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Section three heading</label>
                                        <input type="text" value="{{ $page[0]->section3_heading }}"
                                            name="section3_heading" class="form-control">
                                    </div>
                                </div>


                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Section three Sponser Name</label>
                                        <input type="text" value="{{ $page[0]->section3_sponser_name }}"
                                            name="section3_sponser_name" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Section three Subtitle</label>
                                        <input type="text" value="{{ $page[0]->section3_subtitle }}"
                                            name="section3_subtitle" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Section three Gift images</label>
                                        <input type="file" name="section3_gift_images[]" class="form-control"
                                            multiple="multiple">
                                    </div>
                                </div>



                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Section three heading kidz</label>
                                        <textarea name="section3_hamper_content">
                                            {{ $page[0]->section3_hamper_content }}
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
            CKEDITOR.replace('section2_text');
            CKEDITOR.replace('section3_hamper_content');
        </script>
    @endsection
