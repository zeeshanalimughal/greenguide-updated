@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title text-center w-100">Edit Team Member</h1>
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


            <form action="{{ route('teams.update') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <input type="hidden" name="id" value="{{ $member->id }}">
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">Profile Image</label>
                            <input type="file" name="image" class="form-control"
                                accept="image/png,image/jpeg,image/webp">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">Name </label>
                            <input type="text" name="name" value="{{ $member->name }}" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">Email </label>
                            <input type="text" name="email" value="{{ $member->email }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">Position</label> </label>
                            <input type="text" name="position" value="{{ $member->position }}" class="form-control">
                        </div>
                    </div>

                    <input type="submit" value="Update Member" class="btn btn-primary">

                </div>
            </form>
        </div>
    </div>

    <script>
        CKEDITOR.replace('post_desc');
    </script>
    <!-- Modal -->
@endsection
