@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title">Community Growth Page Settings</h1>
    @endpush

    {{-- {{dd($page)}} --}}
    <div class="row ">
        <div class="col-lg-6 col-xl-3">
            @include('backend.pages.pages-side-menu')
        </div>
        <div class="col-lg-6 col-xl-9">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Update Community Growth Page Settings</h3>
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
                    <form action="{{ route('page.communitygrowth') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Community growth Hero Background Image </label>
                                    <input type="file" name="cg_hero_image" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Hero title </label>
                                    <input type="text" value="{{ $page[0]->cg_title }}" name="cg_title"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Hero subtitle </label>
                                    <input type="text" value="{{ $page[0]->cg_subtitle }}" name="cg_subtitle"
                                        class="form-control">
                                </div>
                            </div>





                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Section 2 title</label>
                                    <input type="text" value="{{ $page[0]->cg_sec2_title }}" name="cg_sec2_title"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Section 2 Image </label>
                                    <input type="file" name="cg_sec2_image" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Section 2 Description</label>
                                    <textarea name="cg_sec2_desc">
                                            {{ $page[0]->cg_sec2_desc }}
                                       </textarea>
                                </div>
                            </div>






                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Section 3 title</label>
                                    <input type="text" value="{{ $page[0]->cg_sec3_title }}" name="cg_sec3_title"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Section 3 Description</label>
                                    <textarea name="cg_sec3_desc">
                                            {{ $page[0]->cg_sec3_desc }}
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
        CKEDITOR.replace('cg_sec2_desc');
        CKEDITOR.replace('cg_sec3_desc');
    </script>
@endsection
