@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title">Advert Sizes And Prices</h1>
    @endpush

    <div class="row mb-3">
        <div class="col-12">
            <button class="btn btn-primary btn-pill mt-3" data-bs-toggle="modal" data-bs-target="#largemodal">Add new</button>
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
                    <h3 class="card-title">Advert Sizes And Prices</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">#</th>
                                    <th class="wd-15p border-bottom-0">Advert Size</th>
                                    <th class="wd-15p border-bottom-0">Advert Price</th>
                                    <th class="wd-15p border-bottom-0">Currency</th>
                                    <th class="wd-20p border-bottom-0">Action</th>
                 
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($adverts as $advert)
                                <tr>
                                  <td>{{$advert->id}}</td>
                                  <td>{{$advert->advert_size}}</td>
                                  <td>{{$advert->advert_price}}</td>
                                  <td>{{$advert->currency}}</td>
                                    <td>
                                        <div class="g-2">
                                            {{-- <a href="{{url('admins/posts/edit')}}" class="btn text-primary btn-sm"
                                                data-bs-toggle="tooltip"
                                                data-bs-original-title="Edit"><span
                                                    class="fe fe-edit fs-14"></span></a> --}}
                                            <a href="{{url('admins/adverts/'.$advert->id)}}/delete" class="btn text-danger btn-sm"
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
                    <h5 class="modal-title">Add New Size And Prices</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('advert.add') }}" method="POST" >
                        @csrf

                        <div class="row">

                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Advert Size </label>
                                    <input type="text" name="advert_size" value="{{old('advert_size')}}" class="form-control">
                                </div>
                            </div>

                
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Advert Price</label>
                                    <input type="text" name="advert_price" value="{{old('advert_price')}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Select Advert Price Currence</label>
                                    <select name="currency" class="form-control form-select">
                                        <option selected disabled>Select Currence</option>
                                        <option value="£">Egypt Pound EGP £</option>
                                        <option value="$">United States Dollar	USD	$</option>
                                        <option value="SAR">Saudi Arabia Riyal	SAR	﷼</option>
                                        <option value="₹">India Rupee	INR	₹</option>
                                        <option value="₨">Pakistan Rupee	PKR	₨</option>
                                        
                                    </select>
                                </div>
                            </div>


                            <input type="submit" value="Save Advert" class="btn btn-primary">

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
