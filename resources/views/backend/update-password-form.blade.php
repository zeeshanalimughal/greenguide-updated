@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('auth-section')
    @push('page-title')
        <title>Update Password</title>
    @endpush



    <!-- BACKGROUND-IMAGE -->
    <div class="login-img">

        <!-- GLOABAL LOADER -->
        <div id="global-loader">
            <img src="{{ asset('admin/assets/images/loader.svg') }}" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOABAL LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="">

                <!-- CONTAINER OPEN -->
                <div class="col col-login mx-auto mt-7">
                    <div class="text-center">
                        <img src="{{ asset('front/img/green-guide-logo.png') }}" style="width:130px;height:80px" class="img-responsive" alt="">
                    </div>
                </div>

                <div class="container-login100">
                    <div class="wrap-login100 p-6">
                        <form class="login100-form validate-form" method="POST" action="{{ url('/admins/update-password') }}">


                            @if (session()->has('message'))
                                @php
                                    echo message(session()->get('message'), 'danger');
                                @endphp
                            @endif
                            @if ($errors->any())
                                @php
                                    echo errorAlert($errors->all(), 'danger');
                                @endphp
                            @endif


                            @csrf
                            <span class="login100-form-title pb-5">
                                Updtae Password 
                            </span>
                            <div class="panel panel-primary">
                                <div class="panel-body tabs-menu-body p-0 pt-5">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab5">

                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input type="hidden" name="id" value="{{session()->get('adminId')}}">
                                                <input class="input100 border-start-0 form-control ms-0" type="password"
                                                    placeholder="Enter new Password" name="password">
                                            </div>

                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 border-start-0 form-control ms-0" type="password"
                                                    placeholder="Confirm Password" name="confirm_password">

                                            </div>

                                            <div class="container-login100-form-btn">
                                                <input type="submit" class="login100-form-btn btn-primary"
                                                    value="Change Password">
                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- End PAGE -->

    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->
@endsection
