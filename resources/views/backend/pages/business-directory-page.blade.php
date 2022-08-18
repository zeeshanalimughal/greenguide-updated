@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title">Business Directory Page Settings</h1>
    @endpush

    {{-- {{dd($page)}} --}}
    <div class="row ">
        <div class="col-lg-6 col-xl-3">
            @include('backend.pages.pages-side-menu')
        </div>
        <div class="col-lg-6 col-xl-9">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Update Business Directory Page Settings</h3>
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
                    <form action="{{ route('page.businessdirectory') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Business Directory Hero Background Image </label>
                                    <input type="file" name="bd_hero_image" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Add title </label>
                                    <input type="text" value="{{ $page[0]->bd_title }}" name="bd_title"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Business Category Title</label>
                                    <input type="text" value="{{ $page[0]->bd_cat_title }}" name="bd_cat_title"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Business Category Description</label>
                                    <input type="text" value="{{ $page[0]->bd_cat_desc }}" name="bd_cat_desc"
                                        class="form-control">
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">BBusiness Directory Section 2 title</label>
                                    <input type="text" value="{{ $page[0]->sec2_title }}" name="sec2_title"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Business Directory Section 2 Description</label>
                          
                                        <textarea name="sec2_desc">
                                            {{ $page[0]->sec2_desc }}
                                       </textarea>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Business Directory Section 2 Image </label>
                                    <input type="file" name="sec2_image" class="form-control">
                                </div>
                            </div>




                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Business Directory Section 3 title</label>
                                    <input type="text" value="{{ $page[0]->bd_sec3_title }}" name="bd_sec3_title"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Business Directory Section 3 desc</label>
                                    <textarea name="bd_sec3_desc">
                                        {{ $page[0]->bd_sec3_desc }}
                                   </textarea>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Business Directory Section 3 Image </label>
                                    <input type="file" name="bd_sec3_image" class="form-control">
                                </div>
                            </div>


                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Business Directory Section 4 Title </label>
                                    <input type="text" value="{{ $page[0]->bd_sec4_title }}" name="bd_sec4_title"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Business Directory Section 4 Description (put | to
                                        seperate)</label>
                                    <textarea name="bd_sec4_desc">
                                        {{ $page[0]->bd_sec4_desc }}
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
        CKEDITOR.replace('sec2_desc');
        CKEDITOR.replace('bd_sec3_desc');
        CKEDITOR.replace('bd_sec4_desc');
    </script>
@endsection
