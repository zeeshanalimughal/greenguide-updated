@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title text-center w-100">Edit Home Page Gallery</h1>
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


            <form action="{{ route('page.update-gallery') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <input type="hidden" name="id" value="{{ $gallery->id }}">
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">New Images (it will replace the previous images)  Optional</label>
                            <input type="file" name="images[]" class="form-control" multiple="multiple"
                                accept="image/png,image/jpeg,image/webp">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">Title </label>
                            <input type="text" name="title" value="{{ $gallery->title }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">Button Link </label>
                            <input type="text" name="link" value="{{ $gallery->link }}" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">Gallery Description (if title is given not add
                                description)</label>
                            <textarea class="form-control" name="desc">{{ $gallery->desc }}</textarea>
                        </div>
                    </div>


                    <input type="submit" value="Update Gallery" class="btn btn-primary">

                </div>

            </form>
        </div>
    </div>

    <script>
        CKEDITOR.replace('post_desc');
    </script>
    <!-- Modal -->
@endsection
