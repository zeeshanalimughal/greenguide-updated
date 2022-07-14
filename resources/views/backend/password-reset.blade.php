@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('auth-section')
    @push('page-title')
        <title>Reset Password</title>
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
                        <form class="login100-form validate-form" method="post"
                            action="{{ url('/admins/change-password') }}">
                            @csrf
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


                            <span class="login100-form-title pb-5">
                                Forgot Password
                            </span>
                            <p class="text-muted">Enter the email address registered on your account</p>
                            <div class="wrap-input100 validate-input input-group"
                                data-bs-validate="Valid email is required: ex@abc.xyz">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="zmdi zmdi-email" aria-hidden="true"></i>
                                </a>
                                <input class="input100 border-start-0 ms-0 form-control" type="email" name="email"
                                    placeholder="Email">
                            </div>
                            <div class="submit">
                                <input type="submit" class="login100-form-btn btn-primary" value="Reset Password">
                            </div>
                            <div class="text-center mt-4">
                                <p class="text-dark mb-0">Forgot It?<a class="text-primary ms-1" href="/admins/login">Send me
                                        Back</a></p>
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
