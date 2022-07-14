@extends("frontend.layouts.master")
@section('main-section')



<section id="page-title" class="text-light" data-bg-parallax="{{ url('img/parallax/_5.jpg')}}">
    <div class="container">
        <div class="breadcrumb" data-animate="fadeInUp" data-animate-delay="1300">
            <ul>
                <li><a href="/">Home</a> </li>
                <li class="active">Forgot Password</li>
            </ul>
        </div>
        <div class="page-title" data-animate="fadeInUp" data-animate-delay="1300">
            <h1>Forgot Password</h1>
            <!-- <span>Simple page title with background parallax image</span> -->
        </div>
    </div>
</section>
<!-- Section -->
<section>
<div class="container">
<div class="row">
    <div class="col-md-6 offset-3">
        <h2 class="text-center">Forgot Password?</h2>
        <form class="form-validation">
            <div class="form-group">
                <p class="center">To receive a new password, enter your email address below.</p>
                <input type="email" name="email" class="form-control form-white placeholder" placeholder="Enter your email..." required>
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-primary">Recover your Password</button>
            </div>
        </form>
    </div>
</div>
</div>
</section>
<!-- end: Section -->





@endsection





