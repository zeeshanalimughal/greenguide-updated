@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title text-center w-100">Edit Advertise Carousel</h1>
    @endpush



    <div class="row mb-3 d-flex justify-content-center">

        <div class="col-8 d-flex justify-content-center flex-column">


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


            <form action="{{ route('page.updateAdvertiseCarousel') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <input type="hidden" name="id" value="{{ $gallery->id }}"
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">New Carousel Image (it will replace the previous image) </label>
                            <input type="file" name="image" class="form-control" multiple="multiple"
                                accept="image/png,image/jpeg,image/webp">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">Title </label>
                            <input type="text" name="title" value="{{ $gallery->title }}" class="form-control">
                        </div>
                    </div>
     


                    <input type="submit" value="Update Carousel" class="btn btn-primary">

                </div>

            </form>
        </div>
    </div>

    <script>
        CKEDITOR.replace('post_desc');
    </script>
    <!-- Modal -->
@endsection
