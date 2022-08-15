@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('admin-section')
    @push('page-title')
        <h1 class="page-title text-center w-100">Edit advert sizes & prices
        </h1>
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
            <form action="{{ route('advert.update') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">Advert Size
                            </label>
                            <input type="text" name="advert_size" value="{{$advert[0]->advert_size}}" class="form-control">
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">Advert Price   </label>
                            <input class="form-control" name="advert_price" value="{{$advert[0]->advert_price}}" type="text" >
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <div class="form-group">
                            <label class="form-label">Select Advert Price Currence</label>
                            <select name="currency" class="form-control form-select">
                               
                                <option selected value="{{$advert[0]->currency}}">{{$advert[0]->currency}}</option>
                                <option value="£">Egypt Pound EGP £</option>
                                <option value="$">United States Dollar	USD	$</option>
                                <option value="SAR">Saudi Arabia Riyal	SAR	﷼</option>
                                <option value="₹">India Rupee	INR	₹</option>
                                <option value="₨">Pakistan Rupee	PKR	₨</option>
                                
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="{{$advert[0]->id}}">

                    <input type="submit" value="Update Advert" class="btn btn-primary">

                </div>
            </form>
        </div>
    </div>

    <script>
        CKEDITOR.replace('post_desc');
    </script>
    <!-- Modal -->
@endsection
