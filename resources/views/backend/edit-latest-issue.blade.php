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
            <form action="{{ route('latestIssue.update') }}" method="POST">
                @csrf

                <div class="row">

                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">Issue </label>
                            <input type="text" name="issue" value="{{$issue->issue}}" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">Artwork and Payment Deadline	</label>
                            <input class="form-control" name="deadline" value="{{$issue->deadline}}" type="text" >
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">Distribution Commencement
                            </label>
                            <input class="form-control" name="commencement" value="{{$issue->commencement}}" type="text" >
                        </div>
                    </div>
                    <input type="hidden" name="id" value="{{$issue->id}}">

                    <input type="submit" value="Update Issue" class="btn btn-primary">

                </div>
            </form>
        </div>
    </div>

    <script>
        CKEDITOR.replace('post_desc');
    </script>
    <!-- Modal -->
@endsection
