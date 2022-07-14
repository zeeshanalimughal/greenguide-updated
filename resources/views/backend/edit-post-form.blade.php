@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title text-center w-100">Edit Post</h1>
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
            <form action="{{ route('post.update') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <input type="hidden" name="postId" value="{{$post->id}}">
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">Post Image</label>
                            <input type="file" name="post_image"  class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">Post Title </label>
                            <input type="text" name="post_title" value="{{$post->post_title}}" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">Select Post Category</label>
                            <select name="post_category" class="form-control form-select">
                                
                                <option value="{{$post->post_category}}" selected disabled>{{$post->post_category}}</option>
                                <option value="Spotlights">Spotlights</option>
                                <option value="Companies">Companies</option>
                                <option value="LGG Team">LGG Team</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">Post Description</label>
                            <textarea class="postEditor" name="post_desc" >
                                {{$post->contact_desc}}
                            </textarea>
                                                        
                        </div>
                    </div>


                    <input type="submit" value="Update Post" class="btn btn-primary">

                </div>
            </form>
        </div>
    </div>

    <script>
        CKEDITOR.replace('post_desc');
    </script>
    <!-- Modal -->
@endsection
