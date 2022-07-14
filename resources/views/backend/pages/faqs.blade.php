@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title">FAQ'S</h1>
    @endpush

    <div class="row mb-3">
        <div class="col-12">
            <button class="btn btn-primary btn-pill mt-3" data-bs-toggle="modal" data-bs-target="#largemodal">Add New
                FAQ</button>
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
                    <h3 class="card-title">All FAQ'S</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">#</th>
                                    <th class="wd-15p border-bottom-0">FAQ'S Question</th>
                                    <th class="wd-15p border-bottom-0">FAQ'S Answer</th>
                                    <th class="wd-15p border-bottom-0">Role</th>
                                    <th class="wd-20p border-bottom-0">Action</th>
                                    {{-- <th class="wd-15p border-bottom-0">Start date</th>
                                    <th class="wd-10p border-bottom-0">Salary</th>
                                    <th class="wd-25p border-bottom-0">E-mail</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($faqs as $faq)
                                    <tr>
                                        <td>{{ $faq->id }}</td>


                                        <td style="word-break: break-word">
                                            {{ strlen($faq->fa_question) > 50 ? substr($faq->fa_question, 0, 50) . '...' : $faq->fa_question }}
                                        </td>

                                        <td>
                                           @php echo strlen($faq->fa_answer) > 100 ? substr($faq->fa_answer, 0, 100) . '...' : $faq->fa_answer @endphp
                                        </td>
                                        <td>
                                           {{$faq->role}}
                                        </td>
                                        <td>
                                            <div class="g-2">
                                                <a href="{{ url('admins/pages/edit-faq') }}/{{ $faq->id}}"
                                                    class="btn text-primary btn-sm" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                                <a href="{{ url('admins/pages/delete-faq') }}/{{ $faq->id}}"  class="btn text-danger btn-sm" data-bs-toggle="tooltip"
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
                    <h5 class="modal-title">New FAQ'S</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('page.add-faq') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">


                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">FAQ'S Question</label>
                                    <input type="text" name="fa_question" value="{{ old('fa_question') }}"
                                        class="form-control">
                                </div>
                            </div>


                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">FAQ'S Answer</label>
                                    <textarea class="postEditor" name="fa_answer">
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

                            <input type="submit" value="Save FAQ" class="btn btn-primary">

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
        CKEDITOR.replace('fa_answer');
    </script>
    <!-- Modal -->
@endsection
