@include('frontend.utils.getCountriesList')
@extends('frontend.layouts.master')
@section('main-section')
    <section id="page-title" class="text-light jobs-hero-section" data-animate="fadeIn" data-animate-delay="500"
        style="
                                                                       width     : 100%;
                                                                    min-height: 80vh;
                                                                    /* padding:3rem 0; */
                                                                    background-image: linear-gradient( rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                                                                    url('{{ asset('uploads/' . $page[0]->job_hero_image) }}') !important;
                                                                    background-repeat  : no-repeat;
                                                                    background-size    : cover;
                                                                    background-position: center;
                                                                    display            : flex;
                                                                    justify-content    : center;
                                                                    align-items        : center;
                                                                    flex-direction     : column;
                                                                    align-items        : center;
                                                                    ">
        <div class="container">
            <div class="breadcrumb" data-animate="fadeInUp" data-animate-delay="1300">
                <ul>
                    <li class="active font-size-lg">BECOME A</li>
                </ul>
            </div>
            {{-- {{ $page[0]->job_title }} --}}
            <div class="page-title" data-animate="fadeInDown" data-animate-delay="1300">
                <h1 class="job-hero-heading">
                    <a href="#apply-job"><span id="job-animated-title"></span></a>
                </h1>
    
            </div>
            <div data-animate="fadeInUp" data-animate-delay="1500" class="font-size-xl text-center mt-4">
                {{ $page[0]->job_subtitle }}
            </div>
        </div>
    </section>
    <div class="text-center" data-animate="fadeInUp" data-animate-delay="1800"><a href="#apply-job"
            class="btn btn-danger btn-shadow btn-rounded text-center py-3 px-5 mt-4 h-100">Apply Today</a></div>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12 pe-5">
                    <h1 class="job-section-two-title" data-animate="fadeInDown" data-animate-delay="700">
                        {{ $page[0]->job_sec2_title }}
                    </h1>
                    <div class="job-section-two-subtitle mb-4 font-italic" data-animate="fadeInUp" data-animate-delay="800">
                        @php
                            echo $page[0]->job_sec2_sdesc;
                        @endphp
                    </div>


                    <div class="job-desc" data-animate="fadeInUp" data-animate-delay="1300">
                        <div class="text-dark" align="justify">
                            @php
                                echo $page[0]->job_sec2_ldesc;
                            @endphp
                        </div>
                        <div class="text-left" data-animate="fadeInUp" data-animate-delay="1400"><a href="#apply-job"
                                class="h-100 btn btn-success btn-shadow btn-rounded rounded-circle btn-iconed text-center py-2 py-sm-3 px-4 mt-4">Apply
                                Today</a></div>
                    </div>


                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="job-image-container position-relative w-100">
                        <img src="{{ url('uploads/' . $page[0]->job_sec2_image1) }}" class="img-1 img-responsive w-100"
                            alt="" data-animate="fadeInRight" data-animate-delay="800">
                        <div class="inner-image">
                            <img src="{{ url('uploads/' . $page[0]->job_sec2_image2) }}" class="image" alt=""
                                data-animate="fadeInUp" data-animate-delay="1100">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







    <section class="my-5 resycling-importance d-flex justify-content-center align-items-center"
        style="background-image: linear-gradient(rgba(36,94,27,0.8),rgba(36,94,27,.8)),url({{ url('front/img/posting.jpg') }}); background-repeat: no-repeat ;background-size: cover; background-position: center center; background-attachment: fixed;">
        <div class="container d-flex justify-content-center align-items-center flex-column text-center">
            <div class="heaging mb-3">
      
                <h2 class="display-4 font-weight-600 text-white" data-animate="fadeInDown" data-animate-delay="700">
                    {{ $page[0]->job_sec3_title }}
                </h2>
            </div>

            <p class="text-white  line-height-l" data-animate="fadeInUp" data-animate-delay="900">
                {{ $page[0]->job_sec3_sdesc }}
            </p>

        </div>
    </section>

    {{-- {{$faqs}} --}}


    <section class="job-faq m-0 p-0">
        <div class="container">
            <h1 class="text-center text-dark" data-animate="fadeInDown" data-animate-delay="400">
                FAQ's
            </h1>

            <div class="tabs">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="LeafletDistributerTab" data-bs-toggle="tab"
                            href="#LeafletDistributer" role="tab" aria-controls="LeafletDistributer"
                            aria-selected="true">Leaflet Distributer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="DistributionManagerTab" data-bs-toggle="tab" href="#DistributionManager"
                            role="tab" aria-controls="DistributionManager" aria-selected="false">Distribution
                            Manager</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="WarehouseAssistantTab" data-bs-toggle="tab" href="#WarehouseAssistant"
                            role="tab" aria-controls="WarehouseAssistant" aria-selected="false">Warehouse
                            Assistant</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="AdministratorTab" data-bs-toggle="tab" href="#Administrator"
                            role="tab" aria-controls="Administrator" aria-selected="false">Administrator </a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="LeafletDistributer" role="tabpanel"
                        aria-labelledby="LeafletDistributerTab">

                        <div class="toggle accordion accordion-simple">

                            @foreach ($faqs as $faq)
                                @if ($faq->role === 'Leaflet Distributor')
                                    @php
                                        echo '<div class="ac-item border-0" data-animate="fadeInLeft" data-animate-delay="' .
                                            $faq->id * 200 .
                                            '">
                                                                                                                                         <h5 class="ac-title font-weight-600 font-size-lg ">' .
                                            $faq->fa_question .
                                            '</h5>
                                                                                                                                         <div class="ac-content" style="display: none;">
                                                                                                                                        <p>' .
                                            $faq->fa_answer .
                                            '</p>
                                                                                                                                         </div>
                                                                                                                                        </div>';
                                    @endphp
                                @endif
                            @endforeach

                        </div>

                    </div>
                    <div class="tab-pane fade" id="DistributionManager" role="tabpanel"
                        aria-labelledby="DistributionManagerTab">
                        <div class="toggle accordion accordion-simple">

                            @foreach ($faqs as $faq)
                                @if ($faq->role === 'Distribution Manager')
                                    @php
                                        echo '<div class="ac-item border-0" data-animate="fadeInLeft" data-animate-delay="' .
                                            $faq->id * 200 .
                                            '">
                                                                                                                                         <h5 class="ac-title font-weight-600 font-size-lg ">' .
                                            $faq->fa_question .
                                            '</h5>
                                                                                                                                         <div class="ac-content" style="display: none;">
                                                                                                                                        <p>' .
                                            $faq->fa_answer .
                                            '</p>
                                                                                                                                         </div>
                                                                                                                                        </div>';
                                    @endphp
                                @endif
                            @endforeach

                        </div>
                    </div>
                    <div class="tab-pane fade" id="WarehouseAssistant" role="tabpanel"
                        aria-labelledby="WarehouseAssistantTab">
                        <div class="toggle accordion accordion-simple">

                            @foreach ($faqs as $faq)
                                @if ($faq->role === 'Warehouse Assistant')
                                    @php
                                        echo '<div class="ac-item border-0" data-animate="fadeInLeft" data-animate-delay="' .
                                            $faq->id * 200 .
                                            '">
                                                                                                                                         <h5 class="ac-title font-weight-600 font-size-lg ">' .
                                            $faq->fa_question .
                                            '</h5>
                                                                                                                                         <div class="ac-content" style="display: none;">
                                                                                                                                        <p>' .
                                            $faq->fa_answer .
                                            '</p>
                                                                                                                                         </div>
                                                                                                                                        </div>';
                                    @endphp
                                @endif
                            @endforeach

                        </div>
                    </div>
                    <div class="tab-pane fade" id="Administrator" role="tabpanel" aria-labelledby="AdministratorTab">
                        <div class="toggle accordion accordion-simple">

                            @foreach ($faqs as $faq)
                                @if ($faq->role === 'Administrator')
                                    @php
                                        echo '<div class="ac-item border-0" data-animate="fadeInLeft" data-animate-delay="' .
                                            $faq->id * 200 .
                                            '">
                                                                                                                                         <h5 class="ac-title font-weight-600 font-size-lg ">' .
                                            $faq->fa_question .
                                            '</h5>
                                                                                                                                         <div class="ac-content" style="display: none;">
                                                                                                                                        <p>' .
                                            $faq->fa_answer .
                                            '</p>
                                                                                                                                         </div>
                                                                                                                                        </div>';
                                    @endphp
                                @endif
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>





    </section>






    <section class="my-5 resycling-importance d-flex justify-content-center align-items-center"
        style="background-image:url({{ url('front/img/Area-we-cover-1.jpg') }}); background-repeat: no-repeat ;background-size: cover; background-position: center center; background-attachment: fixed;">
        <div class="container">
            <div class="heaging mb-3 text-center" data-animate="fadeInDown" data-animate-delay="600">
                <div class="font-size-xl font-weight-600 text-white"> {{ $page[0]->job_sec4_title }}
                </div>
                <p class="my-3 line-height-l fw-500 text-white">
                    {{ $page[0]->job_sec4_subtitle }}
                </p>

            </div>
            <div class="container " data-animate="fadeInUp" data-animate-delay="800">
                <div class="jobs-timeline p-2 p-sm-5 border border-1 border-light mt-5">
                    <ul class="timeline">
                        <!--Timeline item-->
                        <li class="timeline-item p-0 m-0 pe-2">
                            <div class="timeline-icon"
                                style="width:20px; height:20px; top:-2px;left:8px; background-color: #26CE3E;"></div>
                            <div class="ms-3 text-white">Step 1:</div>
                            <div class="ms-3 text-white mb-3">Fill out our online application form
                            </div>
                        </li>
                        <!--end: Timeline item-->
                        <!--Timeline item-->
                        <li class="timeline-item p-0 m-0 pe-2">
                            <div class="timeline-icon"
                                style="width:20px; height:20px; left:8px;background-color: #26CE3E;"></div>
                            <div class="ms-3 text-white">Step 2:</div>
                            <div class="ms-3 text-white mb-3">Successful candidates are provided an in-person interview


                            </div>
                        </li>
                        <!--end: Timeline item-->
                        <!--Timeline item-->
                        <li class="timeline-item p-0 m-0 pe-2">
                            <div class="timeline-icon"
                                style="width:20px; height:20px;left:8px;background-color: #26CE3E;">
                            </div>
                            <div class="ms-3 text-white">Step 3:</div>
                            <div class="ms-3 text-white mb-3">Trial day – start to earn money


                            </div>
                        </li>
                        <!--end: Timeline item-->

                    </ul>
                </div>
                <div class="text-center" data-animate="fadeInUp" data-animate-delay="1800"><a href="#apply-job"
                        class="btn btn-danger btn-rounded text-center py-3 px-5 mt-4 h-100">Apply Now</a></div>
            </div>

        </div>
    </section>




    <section class="apply-job" id="apply-job">
        <div class="container">
            <h1 class="text-center  mb-5" data-animate="fadeInDown" data-animate-delay="500">Apply Today</h1>
            <div class="row p-0 m-0">
                <div class="col-lg-6 col-md-12 p-0 m-0 pe-0 pe-sm-4" data-animate="fadeInLeft" data-animate-delay="800">


                    <div class="d-flex align-items-center mb-5">
                        <div class="job-apply-icon-box rounded rounded-circle bg-success text-white me-4">
                            <i class="icon-thumbs-up font-size-xl"></i>
                        </div>
                        <p class="font-size-sm p-0 m-0"><span class="font-size-lg font-weight-600">
                                Immediate Start – </span> Interviews available daily</p>
                    </div>

                    <div class="d-flex align-items-center mb-5">
                        <div class="job-apply-icon-box rounded rounded-circle bg-success text-white me-4">
                            <i class="fa fa-calendar-alt font-size-xl"></i>
                        </div>
                        <p class="font-size-sm p-0 m-0"><span class="font-size-lg font-weight-600">Job Growth –</span>
                            Opportunity to advance within the company and learn new roles and skills.
                        </p>
                    </div>


                    <div class="d-flex align-items-center mb-5">
                        <div class="job-apply-icon-box rounded rounded-circle bg-success text-white me-4">
                            <i class="fa fa-pound-sign font-size-xl"></i>
                        </div>
                        <p class="font-size-sm p-0 m-0"><span class="font-size-lg font-weight-600">Great Pay –</span> Paid
                            on your ability to do job with the possibility to earn more</p>
                    </div>

                    <div class="d-flex align-items-center mb-5">
                        <div class="job-apply-icon-box rounded rounded-circle bg-success text-white me-4">
                            <i class="fa fa-business-time font-size-xl"></i>
                        </div>
                        <p class="font-size-sm p-0 m-0"><span class="font-size-lg font-weight-600">Self Employed –</span>
                            slef employed jobs available
                        </p>
                    </div>

                    <div class="d-flex align-items-center mb-5">
                        <div class="job-apply-icon-box rounded rounded-circle bg-success text-white me-4">
                            <i class="fa fa-comments font-size-xl"></i>
                        </div>
                        <p class="font-size-sm p-0 m-0"><span class="font-size-lg font-weight-600">Multilingual teams
                                –</span> We have a diverse workforce
                        </p>
                    </div>

                    <div class="d-flex align-items-center mb-5">
                        <div class="job-apply-icon-box rounded rounded-circle bg-success text-white me-4">
                            <i class="fa fa-map-marked-alt font-size-xl"></i>
                        </div>
                        <p class="font-size-sm p-0 m-0"><span class="font-size-lg font-weight-600">Travel –</span> Our
                            distribution
                            work all over London which allows you to see parts of London that you haven’t seen before. There
                            is even have the potential to get paid whilst you see different parts of the UK
                        </p>
                    </div>



                </div>
                <div class="col-lg-6 col-md-12 p-0 m-0" data-animate="fadeInRight" data-animate-delay="900">
                    @if (session()->has('success'))
                        <div class="col-12">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session()->get('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    @endif
                    @if (session()->has('error'))
                        <div class="col-12">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session()->get('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    @endif
                    <div class="job-form-container px-0 px-sm-5">
                        @if($form[0]->status==='live')    
                        <form action="{{ route('job.submit') }}" method="POST" class="p-0 m-0"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="username">First Name</label>
                                    <input type="text" class="form-control" value="{{ old('fname') }}"
                                        name="fname" placeholder="Enter first name">
                                    @if ($errors->has('fname'))
                                        <div class="text-danger">{{ $errors->first('fname') }}</div>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="text">Last Name</label>
                                    <input type="text" class="form-control" value="{{ old('lname') }}"
                                        name="lname" placeholder="Enter last name">
                                    @if ($errors->has('lname'))
                                        <div class="text-danger">{{ $errors->first('lname') }}</div>
                                    @endif
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="gender">Date of Birth</label>
                                    <input class="form-control" value="{{ old('dob') }}" type="date"
                                        name="dob" required="">
                                    @if ($errors->has('dob'))
                                        <div class="text-danger">{{ $errors->first('dob') }}</div>
                                    @endif
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="gender">Gender</label>
                                    <select class="form-select" name="gender" required="">
                                        <option value="">Select your gender</option>
                                        <option value="Female">Female</option>
                                        <option value="Male">Male</option>
                                        <option value="Not say">Rather not say</option>
                                    </select>
                                    @if ($errors->has('gender'))
                                        <div class="text-danger">{{ $errors->first('gender') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="telephone">Telephone</label>
                                <input class="form-control" value="{{ old('phone') }}" type="tel" name="phone"
                                    placeholder="Enter your Telephone number" required="">
                                @if ($errors->has('phone'))
                                    <div class="text-danger">{{ $errors->first('phone') }}</div>
                                @endif
                            </div>




                            <div class="form-group col-md-12">
                                <label for="address">Address</label>
                                <input type="text" value="{{ old('address') }}" class="form-control"
                                    name="address" placeholder="Enter your Street Address" required="">
                                @if ($errors->has('address'))
                                    <div class="text-danger">{{ $errors->first('address') }}</div>
                                @endif
                            </div>



                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="city">City</label>
                                    <input type="text" value="{{ old('city') }}" class="form-control"
                                        name="city" placeholder="Enter your City" required="">
                                    @if ($errors->has('city'))
                                        <div class="text-danger">{{ $errors->first('city') }}</div>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Zip / Postal Code:</label>
                                    <input type="number" value="{{ old('zip') }}" class="form-control"
                                        name="zip" placeholder="Enter Zip Code" required="">
                                    @if ($errors->has('zip'))
                                        <div class="text-danger">{{ $errors->first('zip') }}</div>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="email">Email address</label>
                                    <input type="email" value="{{ old('email') }}" class="form-control"
                                        name="email" placeholder="Enter your email" required="">
                                    @if ($errors->has('email'))
                                        <div class="text-danger">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="country">Nationality</label>
                                    <select name="nationality" class="form-select" required="">
                                        <option value="" selected disabled>Select option</option>
                                        @foreach (getCountriesList() as $country)
                                            @php
                                                echo $country;
                                            @endphp
                                        @endforeach
                                    </select>
                                    @if ($errors->has('country'))
                                        <div class="text-danger">{{ $errors->first('country') }}</div>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group col-md-12">
                                <label for="country">What is your current right to work status?</label>
                                <select name="current_right_work_status" class="form-select" required="">
                                    <option value="" selected disabled>Select option</option>
                                    <option vlast="British">British</option>
                                    <option vlast="Pre-Setteled">Pre-Setteled</option>
                                    <option vlast="Settled">Settled</option>
                                    <option vlast="Biometric Residence Permit">Biometric Residence Permit</option>
                                    <option vlast="Other">Other</option>
                                </select>
                                @if ($errors->has('current_right_work_status'))
                                    <div class="text-danger">{{ $errors->first('current_right_work_status') }}</div>
                                @endif
                            </div>

                            <div class="form-group col-md-12">
                                <label for="country">What job role you are interested in?</label>
                                <select name="job_role" id="job_role" class="form-select" required="">
                                    <option value="" selected disabled>Select option</option>
                                    <option value="Leaflet Distributor">Leaflet Distributor</option>
                                    <option value="Distribution Manager">Distribution Manager</option>
                                    <option value="Warehouse Assistant">Warehouse Assistant</option>
                                    <option value="Administrator">Administrator</option>
                                </select>
                                @if ($errors->has('job_role'))
                                    <div class="text-danger">{{ $errors->first('job_role') }}</div>
                                @endif
                            </div>


                            <div class="row">
                                <div class="form-group col-md-12" id="has_experience">
                                    <label for="country">Do you have experience with Leaflet Distribution?</label>
                                    <select name="has_experience" class="form-select" required="">
                                        <option value="" selected>Select option</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                    @if ($errors->has('has_experience'))
                                        <div class="text-danger">{{ $errors->first('has_experience') }}</div>
                                    @endif
                                </div>

                                <div class="form-group col-md-12" id="has_driving_license">
                                    <label for="country">Do you hold a full UK or EU Driving license?</label>
                                    <select name="has_driving_license" class="form-select" required="">
                                        <option value="" selected>Select option</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                    @if ($errors->has('has_driving_license'))
                                        <div class="text-danger">{{ $errors->first('has_driving_license') }}</div>
                                    @endif
                                </div>

                                <div class="form-group col-md-12" id="has_fork_lift_license">
                                    <label for="country">Do you hold an active fork lift license?</label>
                                    <select name="has_fork_lift_license" class="form-select" required="">
                                        <option value="" selected>Select option</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                    @if ($errors->has('has_fork_lift_license'))
                                        <div class="text-danger">{{ $errors->first('has_fork_lift_license') }}</div>
                                    @endif
                                </div>

                                <div class="form-group col-md-12" id="has_own_Car">
                                    <label for="country">Do you own your own car?</label>
                                    <select name="has_own_car" class="form-select" required="">
                                        <option value="" selected>Select option</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                    @if ($errors->has('has_own_car'))
                                        <div class="text-danger">{{ $errors->first('has_own_car') }}</div>
                                    @endif
                                </div>
                            </div>

                            <script>
                                const job_role = document.querySelector('#job_role');
                                const has_experience = document.querySelector('#has_experience');

                                const has_driving_license = document.querySelector('#has_driving_license');
                                const has_fork_lift_license = document.querySelector('#has_fork_lift_license');
                                const has_own_Car = document.querySelector('#has_own_Car');

                                const has_driving_license_select = document.querySelector('#has_driving_license select');
                                const has_fork_lift_license_select = document.querySelector('#has_fork_lift_license select');
                                const has_own_Car_select = document.querySelector('#has_own_Car select');

                                has_experience.style.display = 'none';
                                has_driving_license.style.display = 'none';
                                has_fork_lift_license.style.display = 'none';
                                has_own_Car.style.display = 'none';



                                job_role.addEventListener('change', function() {
                                    if (job_role.value !== 'none') {
                                        has_experience.style.display = 'block';
                                    }
                                    if (job_role.value === 'Leaflet Distributor') {
                                        has_driving_license.style.display = 'none';
                                        has_fork_lift_license.style.display = 'none';
                                        has_own_Car.style.display = 'none';
                                        has_driving_license_select.selectedIndex = 0;
                                        has_fork_lift_license_select.selectedIndex = 0;
                                        has_own_Car_select.selectedIndex = 0;
                                    }
                                    if (job_role.value === 'Distribution Manager' || job_role.value === 'Warehouse Assistant') {
                                        has_driving_license.style.display = 'block';
                                        has_fork_lift_license.style.display = 'block';
                                        has_own_Car.style.display = 'block';
                                    }
                                    if (job_role.value === 'Administrator') {
                                        has_driving_license.style.display = 'none';
                                        has_fork_lift_license.style.display = 'none';
                                        has_own_Car.style.display = 'none';
                                        has_driving_license_select.selectedIndex = 0;
                                        has_fork_lift_license_select.selectedIndex = 0;
                                        has_own_Car_select.selectedIndex = 0;
                                    }
                                })
                            </script>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="country">Additional Information</label>

                                    <textarea name="other_information" class="form-control" placeholder="Your Message"
                                        style="width: 100%; min-height: 70px;" required="">
                                        </textarea>
                                    @if ($errors->has('other_information'))
                                        <div class="text-danger">{{ $errors->first('other_information') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">

                                <div class="form-group">
                                    <label for="exampleFormControlFile1">CV (upload file)</label>
                                    <input type="file" name="cv" class="form-control-file form-control"
                                        id="exampleFormControlFile1">
                                    <label class="text-muted"><small>Max. file size: 256 MB.</small></label>
                                    @if ($errors->has('cv'))
                                        <div class="text-danger">{{ $errors->first('cv') }}</div>
                                    @endif

                                </div>

                            </div>
                            <div class="col-lg-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-success btn-roundeded btn-reveal "><span>Submit
                                        Form</span><i class="icon-chevron-right"></i></button>
                            </div>


                        </form>
                        
                @else
                <h1>Jops Form Not Available</h1>
                @endif
                    </div>
                </div>
            </div>
        </div>
    </section>


{{-- 
    <section class="hyperlinks d-flex justify-content-center m-0">
        <div class="container text-center m-0 ">
            <div class="grid-layout post-3-columns" data-item="post-item">
                <div class="post-item  ">
                    <a href="/businessdirectory" class="text-muted font-weight-600">
                        <div class="post-item-wrap p-t-100 p-b-100 bg-light font-size-xl m-0 font-weight-600"
                            data-animate="fadeInUp" data-animate-delay="600">

                            Business Directory
                        </div>
                    </a>
                </div>

                <div class="post-item  ">
                    <a href="/advertise" class="text-muted font-weight-600">
                        <div class="post-item-wrap p-t-100 p-b-100 bg-light font-size-xl m-0 font-weight-600 "
                            data-animate="fadeInUp" data-animate-delay="800">

                            <!-- <br> -->
                            Advertise
                        </div>
                    </a>
                </div>

                <div class="post-item  ">
                    <a href="/localevents" class="text-muted font-weight-600">
                        <div class="post-item-wrap p-t-100 p-b-100 bg-light font-size-xl m-0 font-weight-600"
                            data-animate="fadeInUp" data-animate-delay="1000">

                            Local Events
                        </div>
                    </a>
                </div>


            </div>
        </div>
    </section> --}}







    










    <div class="links__cards__section">
        <div class="container">
            <div class="row">

                
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="link__card">
                        <div class="card__image">
                            <img src="{{ asset('uploads/'.$links[0]->image1) }}" alt="">
                        </div>
                        <div class="card__body">
                            <h3 class="card__title">
                                {{$links[0]->title1}}
                            </h3>
                            <p align="justify" class="card__content">
                                {{$links[0]->details1}}
                            </p>
                            <a href=" {{url('')}}/{{$links[0]->link1}}" class="btn btn-dark">Advertise Today <i
                                    class="ps-3 fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="link__card">
                        <div class="card__image">
                            <img src="{{ asset('uploads/'.$links[0]->image2) }}" alt="">
                        </div>
                        <div class="card__body">
                            <h3 class="card__title">
                                {{$links[0]->title2}}
                            </h3>
                            <p align="justify" class="card__content">
                                {{$links[0]->details2}}
                            </p>
                            <a href=" {{url('')}}/{{$links[0]->link2}}" class="btn btn-dark">Business Listing <i
                                    class="ps-3 fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="link__card">
                        <div class="card__image">
                            <img src="{{ asset('uploads/'.$links[0]->image3) }}" alt="">
                        </div>
                        <div class="card__body">
                            <h3 class="card__title">
                                {{$links[0]->title3}}
                            </h3>
                            <p align="justify" class="card__content">
                                {{$links[0]->details3}}
                            </p>
                            <a href=" {{url('')}}/{{$links[0]->link3}}" class="btn btn-dark">Events Listing <i
                                    class="ps-3 fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>








@endsection
