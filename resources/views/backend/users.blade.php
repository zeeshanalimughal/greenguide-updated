@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title">All Users</h1>
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

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Users</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">#</th>
                                    <th class="wd-15p border-bottom-0">Name</th>
                                    <th class="wd-20p border-bottom-0">Email</th>
                                    <th class="wd-20p border-bottom-0">company name</th>
                                    <th class="wd-20p border-bottom-0">company no</th>
                                    <th class="wd-20p border-bottom-0">charity no</th>
                                    <th class="wd-20p border-bottom-0">phone</th>
                                    <th class="wd-20p border-bottom-0">billing address</th>
                                    <th class="wd-20p border-bottom-0">status</th>
                                    <th class="wd-20p border-bottom-0">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->company_name }}</td>
                                        <td>{{ $user->company_reg_no }}</td>
                                        <td>{{ $user->charity_number }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->billing_address }}</td>
                                        <td>
                                            @if ($user->status === 'active')
                                                <span
                                                    class="badge rounded-pill bg-success badge-lg me-1 mb-1 mt-1">{{ $user->status }}</span>
                                            @else
                                                <span
                                                    class="badge rounded-pill bg-danger badge-lg me-1 mb-1 mt-1">{{ $user->status }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="g-2">
                                                @if ($user->status === 'active')
                                                    <a href="{{ url('/admins/users') }}/{{ $user->id }}/deactivate">
                                                        <button class="btn btn-primary" data-bs-placement="top"
                                                            data-bs-toggle="tooltip" title=""
                                                            data-bs-original-title="Deactivate">Deactivate</button>
                                                    </a>
                                                @endif
                                                @if ($user->status === 'deactive')
                                                    <a href="{{ url('/admins/users') }}/{{ $user->id }}/activate">
                                                        <button class="btn btn-danger" data-bs-placement="top"
                                                            data-bs-toggle="tooltip" title=""
                                                            data-bs-original-title="Activate">Activate</button>
                                                        {{-- @else
                                                <a href="{{url('/admins/users')}}/{{$user->id}}/activate">
                                                    <button class="btn btn-danger" data-bs-placement="top"
                                                    data-bs-toggle="tooltip" title=""
                                                    data-bs-original-title="Activate">Activate</button>
                                                </a> --}}
                                                @endif
                                                <a href="{{ url('admins/users/' . $user->id) }}/delete"
                                                    class="btn btn-warning" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Delete">Remove</a>
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
        <div class="modal-dialog modal-md " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Borough</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('borough.add') }}" method="POST">
                        @csrf

                        <div class="row">

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Borough</label>
                                    <input type="text" name="borough" value="{{ old('borough') }}" class="form-control">
                                </div>
                            </div>

                            <input type="submit" value="Add Borough" class="btn btn-primary">

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
@endsection
