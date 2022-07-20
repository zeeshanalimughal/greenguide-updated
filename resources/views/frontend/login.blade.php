@extends('frontend.layouts.master')
@section('main-section')
    <section id="page-title"
        class="text-light"style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('https://img.freepik.com/free-vector/cyber-data-security-online-concept-illustration-internet-security-information-privacy-protection_1150-37330.jpg?w=996&t=st=1658220962~exp=1658221562~hmac=b5937a06d366431994b9946c23a9e053c131385784ee8cb51238fbb2ff042fa3') !important;background-position:center !important;min-height:30vh;
        display:flex;justify-content:center;align-items:center;">
        <div class="container">
            <div class="breadcrumb" data-animate="fadeInUp" data-animate-delay="1300">
                <ul>
                    <li><a href="/">Home</a> </li>
                    <li class="active">Login</li>
                </ul>
            </div>
            <div class="page-title" data-animate="fadeInUp" data-animate-delay="1300">
                <h1>Login</h1>
                <!-- <span>Simple page title with background parallax image</span> -->
            </div>
        </div>
    </section>
    <!-- end: Page title -->
    <section>
        <div class="container" >
            <div class="row d-flex justify-content-around flex-sm-wrap-reverse">
                <div class="col-md-5 d-none d-md-flex" >
                    <img src="{{ url('front/img/login__image.jpg') }}" style="max-width:450px;width:100%; object-fit:contain;" alt="">
                </div>
                <div class="col-md-7">
                    <div class="p-40 p-t-60 p-xs-20">
                        <h3 class="text-center">Sign up or Login</h3>

                        <div class="card-body">
                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            @if (session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session()->get('error') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('login.custom') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email" class="form-control"
                                        name="email" autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control"
                                        name="password">
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label class="d-flex align-items-center" >
                                            <input type="checkbox" id="remember" name="remember" style="width:18px;height: 35px; cursor: pointer;"> <label for="remember" class="pt-2 ps-3" style="cursor: pointer;"> Remember Me</label>
                                        </label>
                                    </div>
                                </div>
                                {{-- <p class="text-end"><a href="/reset-password">forgot password ?</a> --}}
                                </p>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-primary btn-block">Signin</button>
                                </div>
                            </form>
                        </div>
                        <p class="text-center">Don't have an account yet? <a href="/register">Register New
                                Account</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
