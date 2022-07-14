@extends('backend.layouts.master')
@include('backend.utils.functions')

@section('auth-section')
    @push('page-title')
        <title>Login</title>
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
                        <form class="login100-form validate-form" method="POST" action="{{ url('/admins/login') }}">


                            @if (session()->has('error'))
                              @php
                                   echo message(session()->get('error'),'danger');
                              @endphp
                            @endif
                            @if (session()->has('success'))
                              @php
                                   echo message(session()->get('success'),'success');
                              @endphp
                            @endif
                            @if ($errors->any())
                                @php
                                echo errorAlert($errors->all(),'danger');
                                @endphp
                            @endif


                            @csrf
                            <span class="login100-form-title pb-5">
                                Login
                            </span>
                            <div class="panel panel-primary">
                                <div class="panel-body tabs-menu-body p-0 pt-5">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab5">
                                            <div class="wrap-input100 validate-input input-group"
                                                data-bs-validate="Valid email is required: ex@abc.xyz">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 border-start-0 form-control ms-0" type="email"
                                                    placeholder="Email" name="email" value="{{ old('email') }}">
                                            </div>
                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 border-start-0 form-control ms-0" type="password"
                                                    placeholder="Password" name="password" value="{{ old('password') }}">

                                            </div>
                                            <div class="text-end pt-4">
                                                <p class="mb-0"><a href="/admins/password-reset"
                                                        class="text-primary ms-1">Forgot Password?</a></p>
                                            </div>
                                            <div class="container-login100-form-btn">
                                                <input type="submit" class="login100-form-btn btn-primary" value="Login">
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
