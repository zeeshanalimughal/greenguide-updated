@extends("frontend.layouts.master")
@section('main-section')
    <section id="page-title" class="text-light" data-bg-parallax="{{ url('img/parallax/_5.jpg') }}">
        <div class="container">
            <div class="breadcrumb" data-animate="fadeInUp" data-animate-delay="1300">
                <ul>
                    <li><a href="">Home</a> </li>
                    <li class="active">Register</li>
                </ul>
            </div>
            <div class="page-title" data-animate="fadeInUp" data-animate-delay="1300">
                <h1>Register</h1>
            </div>
        </div>
    </section>
    <!-- end: Page title -->
    <section class="pt-5 pb-5">
        <div class="container-fluid d-flex flex-column">
            <div class="row align-items-center min-vh-60">
                @if($form[0]->status==='live')  

                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <h3>Register New Account</h3>

                    <p>Create an account by entering the information below. If you are a returning customer please login at
                        the top of the page.</p>

                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <div class="card">
                        <h3 class="card-header text-center">Register User</h3>
                        <div class="card-body">
                            <form action="{{ route('register.custom') }}" method="POST">
                                @csrf

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group mb-3">
                                            <input type="text" placeholder="Name" id="name" class="form-control"
                                                name="name" required autofocus>
                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group mb-3">
                                            <input type="text" placeholder="Email" id="email_address" class="form-control"
                                                name="email" required autofocus>
                                            @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    


                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-group mb-3 show-hide-password">
                                                <input class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" type="password">
                                                <span class="input-group-text"><i class="icon-eye-off" aria-hidden="true" style="cursor: pointer;"></i></span>
                                            </div>
                                            @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <div class="input-group mb-3 show-hide-password">
                                                <input class="form-control" name="confirm_password" id="exampleInputPassword1" placeholder="Confirm Password" type="password">
                                                <span class="input-group-text"><i class="icon-eye-off" aria-hidden="true" style="cursor: pointer;"></i></span>
                                            </div>
                                            @if ($errors->has('confirm_password'))
                                            <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                                        @endif
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="name">Company Name</label>
                                            <input type="text" class="form-control" name="company_name" placeholder="Enter your Company Name" required="" value="">
                                            @if ($errors->has('company_name'))
                                            <span class="text-danger">{{ $errors->first('company_name') }}</span>
                                        @endif
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="surname">Company Registration Number</label>
                                            <input type="text" class="form-control" name="company_reg_no" placeholder="Enter your Company Registration Number" required="" value="">
                                            @if ($errors->has('company_reg_no'))
                                            <span class="text-danger">{{ $errors->first('company_reg_no') }}</span>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="telephone">Phone</label>
                                            <input class="form-control" type="tel" name="phone" placeholder="Enter your Phone number" required="" value="">
                                            @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="telephone">Charity Number</label>
                                            <input class="form-control" type="text" name="charity_no" placeholder="Enter your Charity number" required="" value="">
                                            @if ($errors->has('charity_no'))
                                            <span class="text-danger">{{ $errors->first('charity_no') }}</span>
                                        @endif
                                        </div> 
                                    </div>
      

                                </div>





                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="remember"> Remember Me</label>
                                    </div>
                                </div>

                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mt-4"><small>Already have an acocunt?</small> <a href="login"
                            class="small fw-bold">Sign in</a>
                    </div>
                </div>

                @else
                <h1>Registeration Is Not Available</h1>
                @endif
            </div>
        </div>
    </section>
    <!-- end: Section -->
@endsection
