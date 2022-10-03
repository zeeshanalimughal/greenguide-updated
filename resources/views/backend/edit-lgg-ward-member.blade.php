@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title text-center w-100">Edit Lgg Ward Member</h1>
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
            <form action="{{ route('lggWardsMembers.update') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label class="form-label">Profile Image</label>
                            <input type="file" name="profile" class="form-control"
                                accept="image/png,image/webp,image/jpeg">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label class="form-label">title </label>
                            <input type="text" name="title" value="{{ $member[0]->title }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <label class="form-label">Ward</label>

                        <select style="z-index:10 !important;" name="wardId"
                            class="form-control wards__select select2-show-search form-select"
                            data-placeholder="Choose one">
                            <option label="Choose one"></option>
                            @foreach ($wards as $ward)
                                @if ($ward->id === $member[0]->lgg_ward_id)
                                    <option value="{{ $ward->id }}" selected>{{ $ward->ward_title }}</option>
                                @else
                                    <option value="{{ $ward->id }}">{{ $ward->ward_title }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label class="form-label">Name </label>
                            <input type="text" name="name" value="{{ $member[0]->name }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label class="form-label">Party </label>
                            <input type="text" name="party" value="{{ $member[0]->party }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label class="form-label">Landline </label>
                            <input type="text" name="landline" value="{{ $member[0]->landline }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label class="form-label">Mobile </label>
                            <input type="text" name="mobile" value="{{ $member[0]->mobile }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label class="form-label">Email </label>
                            <input type="text" name="email" value="{{ $member[0]->email }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label class="form-label">Twitter </label>
                            <input type="text" name="twitter" value="{{ $member[0]->twitter }}" class="form-control">
                        </div>
                    </div>



                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            <label class="form-label">Status </label>
                            <select name="status" class="form-control form-select" data-bs-placeholder="Select Country">

                                <option value="active" @if ($member[0]->status === 'active') selected @endif>Active</option>
                                <option value="inactive" @if ($member[0]->status === 'inactive') selected @endif>Inactive</option>
                            </select>
                        </div>
                    </div>

                    <input type="hidden" name="id" value="{{ $member[0]->memberId }}">

                    <input type="submit" value="Update Ward Member" class="btn btn-primary">

                </div>
            </form>
        </div>
    </div>

    <script>
        CKEDITOR.replace('post_desc');
    </script>
    <!-- Modal -->
@endsection
