@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title text-center w-100">Edit Distributor</h1>
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


            <form action="{{ route('distributors.update') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <input type="hidden" name="id" value="{{ $distributor->id }}">
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
                            <input type="text" name="name" value="{{ $distributor->name }}" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">Email </label>
                            <input type="text" name="email" value="{{ $distributor->email }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">Position</label> </label>
                            <input type="text" name="position" value="{{ $distributor->position }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">Message</label> </label>
                            <textarea name="message">{{ $distributor->message }}</textarea>
                        </div>
                    </div>



                    <input type="submit" value="Update Distributor" class="btn btn-primary">

                </div>
            </form>
        </div>
    </div>

    <script>
        CKEDITOR.replace('message');
    </script>
    <!-- Modal -->
@endsection
