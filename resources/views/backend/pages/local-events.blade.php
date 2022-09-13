@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title">Local Events Page Settings</h1>
    @endpush

    {{-- {{dd($page)}} --}}
    <div class="row ">
        <div class="col-lg-6 col-xl-3">
            @include('backend.pages.pages-side-menu')
        </div>
        <div class="col-lg-6 col-xl-9">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Update Local Events Page Settings</h3>
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
                    <form action="{{ route('page.localEvents') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Local Events Hero Background Image </label>
                                    <input type="file" name="hero_image" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Local Events Hero Title Small</label>
                                    <input type="text" value="{{ $page[0]->hero_title_small }}" name="hero_title_small"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Local Events Hero Title Large</label>
                                    <input type="text" value="{{ $page[0]->hero_title_large }}" name="hero_title_large"
                                        class="form-control">
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Local Events Section 3 title</label>
                                    <input type="text" value="{{ $page[0]->event_sec3_title }}" name="event_sec3_title"
                                        class="form-control">
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Local Events Section 3 Image </label>
                                    <input type="file" name="event_sec3_image" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Local Events Section 3 Description</label>
                                    <textarea name="event_sec3_desc">
                                        {{ $page[0]->event_sec3_desc }}
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
        CKEDITOR.replace('event_sec3_desc');
    </script>
@endsection
