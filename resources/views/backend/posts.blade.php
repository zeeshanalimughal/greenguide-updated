@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title">All Posts</h1>
    @endpush

    <div class="row mb-3">
        <div class="col-12">
            <button class="btn btn-primary btn-pill mt-3" data-bs-toggle="modal" data-bs-target="#largemodal">Add New
                Post</button>
        </div>
    </div>

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

    

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Posts</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">#</th>
                                    <th class="wd-15p border-bottom-0">Image</th>
                                    <th class="wd-15p border-bottom-0">Title</th>
                                    <th class="wd-20p border-bottom-0">Category</th>
                                    <th class="wd-20p border-bottom-0">Description</th>
                                    <th class="wd-20p border-bottom-0">Action</th>
                                    {{-- <th class="wd-15p border-bottom-0">Start date</th>
                                    <th class="wd-10p border-bottom-0">Salary</th>
                                    <th class="wd-25p border-bottom-0">E-mail</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)

                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td><span class="avatar bradius bradius cover-image" data-bs-image-src="{{asset('uploads/')}}/{{$post->post_image}}" style="background: url(&quot;{{asset('uploads/')}}/{{$post->post_image}}&quot;) center center;"></span></td>
                                    <td>{{$post->post_category}}</td>


                                    <td style="word-break: break-word">{{strlen($post->post_title)>50 ? substr($post->post_title,0,50).'...' : $post->post_title}}</td>
                                    <td>{{strlen($post->post_title)>100 ? substr($post->post_title,0,100).'...' : $post->post_title}}</td>
                                    <td>
                                        <div class="g-2">
                                            <a href="{{url('admins/posts/edit')}}/{{$post->id}}" class="btn text-primary btn-sm"
                                                data-bs-toggle="tooltip"
                                                data-bs-original-title="Edit"><span
                                                    class="fe fe-edit fs-14"></span></a>
                                            <a class="btn text-danger btn-sm"
                                                data-bs-toggle="tooltip"
                                                data-bs-original-title="Delete"><span
                                                    class="fe fe-trash-2 fs-14"></span></a>
                                        </div>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->












    






    <!-- Modal Add Post -->
    <div class="modal fade" id="largemodal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Post</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('post.add') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Post Image</label>
                                    <input type="file" name="post_image"  class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Post Title </label>
                                    <input type="text" name="post_title" value="{{old('post_title')}}" class="form-control">
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Select Post Category</label>
                                    <select name="role" class="form-control form-select">
                                        <option selected disabled>Select Post Category</option>
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
                                    </textarea>
                                                                  

                                </div>
                            </div>


                            <input type="submit" value="Save Post" class="btn btn-primary">

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        CKEDITOR.replace('post_desc');
    </script>
    <!-- Modal -->
@endsection
