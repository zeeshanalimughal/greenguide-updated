@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title text-center w-100">Edit Latest Issue</h1>
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
            <form action="{{ route('lggWardsList.update') }}" method="POST">
                @csrf

                <div class="row">

                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">Ward Title </label>
                            <input type="text" name="ward_title" value="{{ $ward->ward_title }}"
                                class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">Status </label>
                            <select name="ward_status" class="form-control form-select" data-bs-placeholder="Select Country">

                                <option value="active" @if ($ward->ward_status==="active")
                                    selected
                                @endif>Active</option>
                                <option value="inactive" @if ($ward->ward_status==="inactive")
                                    selected
                                @endif>Inactive</option>
                            </select>
                        </div>
                    </div>
                    
                    <input type="hidden" name="id" value="{{$ward->id}}">

                    <input type="submit" value="Update Ward" class="btn btn-primary">

                </div>
            </form>
        </div>
    </div>

    <script>
        CKEDITOR.replace('post_desc');
    </script>
    <!-- Modal -->
@endsection
