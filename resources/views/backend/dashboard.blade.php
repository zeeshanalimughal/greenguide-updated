@extends('backend.layouts.master')

@section('admin-section')




@push('page-title')
<h1 class="page-title">Administrator Dashboard</h1>
@endpush

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
                <div class="card overflow-hidden bg-success text-white">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-2">
                                <h4 class=""> Users</h4>
                                <h1 class="mb-0 number-font">{{ $users }}</h1>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
                <div class="card overflow-hidden bg-info text-white">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-2">
                                <h4 class="">Business    Directories</h4>
                                <h1 class="mb-0 number-font">{{ $directories }}</h1>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
                <div class="card overflow-hidden bg-secondary text-white">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-2">
                                <h4 class=""> Magazine Designs Orders</h4>
                                <h1 class="mb-0 number-font">{{ $magazine }}</h1>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
                <div class="card overflow-hidden bg-warning text-white">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-2">
                                <h4 class=""> Advert Designs Orders</h4>
                                <h1 class="mb-0 number-font">{{ $adverts }}</h1>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>













@endsection
