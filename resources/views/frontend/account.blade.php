@extends("frontend.layouts.master")
@section('main-section')



{{-- {{$userData}} --}}

<section id="page-title" class="text-light" data-bg-parallax="{{ url('front/img/parallax/_5.jpg') }}">
    <div class="container">
        <div class="breadcrumb" data-animate="fadeInUp" data-animate-delay="1300">
            <ul>
                <li><a href="/">Home</a> </li>
                <li class="active">Account</li>
            </ul>
        </div>
        <div class="page-title" data-animate="fadeInUp" data-animate-delay="1300">
            <h1>Account</h1>
            <!-- <span>Simple page title with background parallax image</span> -->
        </div>
    </div>
</section>
        <!-- end: Page title -->
<!-- Page Menu -->
<section>
    <div class="container">
        <div class="row">
            <!-- Sidebar-->
            <div class="sidebar sidebar-modern sticky-sidebar col-lg-3">
                <ul class="account-nav">
                    <li class="border-bottom"><a href="/account" class="active">Profile</a></li>
                    <li class="border-bottom"><a href="/businessdirectory/all-directories">Business Listing</a></li>
                    <li class="border-bottom"><a href="/events/all-events">Local Events</a></li>
                    <li class="border-bottom"><a href="/account/magzine-designs">Design</a></li>
                    <li class="border-bottom"><a href="/account/advert-design-book/">Advertise</a></li>
                    <li class="border-bottom"><a href="/account/logout">Logout</a></li>
                </ul>
            </div>
            <div class="content col-lg-9">
                <form class="form-validate mt-5" method="POST" action="{{route('account.update')}}">
                    @csrf
                        <div class="h5 mb-4">Account details</div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="username">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter name" required="" value="{{auth()->user()->name}}" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email address</label>
                                <input type="text" readonly class="form-control" name="email" placeholder="Enter your email" required="" value="{{auth()->user()->email}}" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Company Name</label>
                                <input type="text" class="form-control" name="company_name" placeholder="Enter your Company Name" required="" value="{{$userData[0]->company_name}}" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="surname">Company Registration Number</label>
                                <input type="text" class="form-control" name="company_reg_no" placeholder="Enter your Company Registration Number" required="" value="{{$userData[0]->company_reg_no}}"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="telephone">Phone</label>
                                <input class="form-control" type="tel" name="phone" placeholder="Enter your Phone number" required="" value="{{$userData[0]->phone}}" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="telephone">Charity Number</label>
                                <input class="form-control" type="text" name="charity_number" placeholder="Enter your Charity number" required="" value="{{$userData[0]->charity_number}}" />
                            </div>
                        </div>
                        <div class="h5 mb-4">Billing Address</div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="billing_address" placeholder="Enter your Billing Address" required="" value="{{$userData[0]->billing_address}}" />
                            </div>
                        </div>
                        <button type="submit" class="btn m-t-30 mt-3">Update</button>
                    </form>
            </div>
        </div>
    </div>
</section>





@endsection





