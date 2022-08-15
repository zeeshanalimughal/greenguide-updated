@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title text-center w-100">Edit advert sizes & prices
        </h1>
    @endpush


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




    <div class="row mb-3 d-flex justify-content-center">
        <div class="col-8 d-flex justify-content-center">
            <form action="{{ route('MagazineHighlight.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">Title
                            </label>
                            <input type="text" name="title" value="{{ $highlight[0]->title }}" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">Category</label> </label>
                            <input class="form-control" name="category_name" value="{{ $highlight[0]->category_name }}"
                                type="text">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">Image </label>
                            <input class="form-control" name="image" type="file"
                                accept="image/png,image/JPEG,image/webp">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">Advert Price </label>

                            <textarea class="postEditor" name="highlight_description">
                            {{ $highlight[0]->description }}
                        </textarea>

                        </div>
                    </div>

                    <input type="hidden" name="id" value="{{ $highlight[0]->id }}">

                    <input type="submit" value="Update Highlight" class="btn btn-primary">

                </div>
            </form>
        </div>
    </div>

    <script>
        CKEDITOR.replace('highlight_description');
    </script>
    <!-- Modal -->
@endsection
