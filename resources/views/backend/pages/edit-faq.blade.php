@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title text-center w-100">Edit Faq</h1>
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
            <form action="{{ route('page.update-faq') }}" method="POST">
                @csrf

                <div class="row">
                    <input type="hidden" name="faId" value="{{$faq->id}}">

                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">Faq Question </label>
                            <input type="text" name="fa_question" value="{{$faq->fa_question}}" class="form-control">
                        </div>
                    </div>


                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">Faq Answer</label>
                            <textarea class="postEditor" name="fa_answer" >
                                {{$faq->fa_answer}}
                            </textarea>
                                                        
                        </div>
                    </div>


                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">FAQ'S User Role</label>
                            <select name="role" class="form-control form-select">
                                <option selected disabled>Select Post Category</option>
                                <option value="Leaflet Distributor">Leaflet Distributor</option>
                                <option value="Administrator">Administrator</option>
                                <option value="Warehouse Assistant">Warehouse Assistant</option>
                                <option value="Distribution Manager">Distribution Manager</option>
                            </select>
                        </div>
                    </div>

                    <input type="submit" value="Update Faq" class="btn btn-primary">

                </div>
            </form>
        </div>
    </div>

    <script>
        CKEDITOR.replace('fa_answer');
    </script>
    <!-- Modal -->
@endsection
