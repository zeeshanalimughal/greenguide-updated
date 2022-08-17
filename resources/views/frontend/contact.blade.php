@extends('frontend.layouts.master')
@include('backend.utils.functions')

@section('main-section')
    <div class="fixed__advertise__link">
        <a href="/magzine-design-book">Advertise with us</a>
    </div>



    <div class="contact__us__hero"
        style="
                width     : 100% !important;
                min-height: 50vh !important;
                background-image:url('{{ asset('uploads/' . $page[0]->contact_hero_image) }}') !important;
                background-repeat  : no-repeat !important;
                background-size    : cover !important;
                background-position: center !important;
                display            : flex !important;
                justify-content    : center;
                align-items        : center !important;
                padding:0 5rem;
                flex-direction     : column !important;
        "
        data-animate="fadeIn" data-animate-delay="500">
        <div class="row w-100">
            <div class="col-lg-5 col-md-12">
                <h1 class="title" data-animate="fadeInDown" data-animate-delay="700">
                    {{ $page[0]->contact_title }}

                </h1>
                <a href="#contact__title"><button class="btn__advertise" data-animate="fadeInUp"
                        data-animate-delay="800">Contact Us</button></a>

            </div>
        </div>
    </div>




    <section>
        <div class="container-fluid px-3 px-sm-10">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="text-uppercase contact__title" id="contact__title" data-animate="fadeInDown"
                        data-animate-delay="600"> {{ $page[0]->contact_sub_title }}</h3>
                    <p class="text-justify" align="justify" data-animate="fadeInUp" data-animate-delay="700">
                        @php
                            echo $page[0]->contact_desc;
                        @endphp
                    </p>
                    <div class="m-t-30" data-animate="fadeInUp" data-animate-delay="900">
                        <form action="{{ route('contact.send') }}" method="POST">
                            @csrf
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
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" aria-required="true" {{ old('name') }}
                                        class="form-control name" placeholder="Enter your Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" {{ old('email') }} aria-required="true"
                                        required="" class="form-control email" placeholder="Enter your Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="subject">Your Subject</label>
                                    <input type="text" name="subject" {{ old('subject') }} class="form-control"
                                        placeholder="Subject...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea type="text" name="message" {{ old('message') }} rows="5" class="form-control "
                                    placeholder="Enter your Message"></textarea>
                            </div>
                            <input class="btn btn-primary" type="submit" name="submit" value="Send message" />
                        </form>
                    </div>
                    <div class="social-icons m-t-30 social-icons-colored">
                        <ul>
                            <li class="social-facebook" data-animate="fadeInUp" data-animate-delay="800"><a
                                    href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="social-twitter" data-animate="fadeInUp" data-animate-delay="900"><a href="#"><i
                                        class="fab fa-twitter"></i></a></li>
                            <li class="social-google" data-animate="fadeInUp" data-animate-delay="1000"><a href="#"><i
                                        class="fab fa-google-plus-g"></i></a></li>
                            <li class="social-pinterest" data-animate="fadeInUp" data-animate-delay="1100"><a
                                    href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="social-vimeo" data-animate="fadeInUp" data-animate-delay="1200"><a href="#"><i
                                        class="fab fa-vimeo"></i></a></li>
                            <li class="social-linkedin" data-animate="fadeInUp" data-animate-delay="1300"><a
                                    href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6" data-animate="fadeInRight" data-animate-delay="900">
                    <div class="row">
                        <div class="col-lg-6">
                            <address>
                                <strong>Finance
                                </strong><br>
                                <a href="mailto:finance@gmail.com">{{ $page[0]->finance_email }}</a> <br>
                                <label title="Phone">P: {{ $page[0]->finance_phone }}
                                </label>
                            </address>
                        </div>
                        <div class="col-lg-6">
                            <address>
                                <strong>Design
                                </strong><br>
                                <a href="mailto:Design@gmail.com">{{ $page[0]->design_email }}</a> <br>
                                <label title="Phone">P: {{ $page[0]->design_phone }}
                                </label>
                            </address>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <address>
                                <strong>Operations
                                </strong><br>
                                <a href="mailto:Design@gmail.com">{{ $page[0]->operations_email }}</a> <br>
                                <label title="Phone">P: {{ $page[0]->operations_phone }}
                                </label>
                            </address>
                        </div>
                        <div class="col-lg-6">
                            <address>
                                <strong>Customer Service:
                                </strong><br>
                                <a href="mailto:finance@gmail.com">{{ $page[0]->customer_email }}</a> <br>
                                <label title="Phone">P: {{ $page[0]->customer_phone }}
                                </label>
                            </address>
                        </div>
                        <div class="col-lg-6">
                            <address>
                                <strong>Sales Team:
                                </strong><br>
                                <a href="mailto:finance@gmail.com">{{ $page[0]->sales_email }}</a> <br>
                                <label title="Phone">P: {{ $page[0]->sales_phone }}
                                </label>
                            </address>
                        </div>
                        <div class="col-lg-6">
                            <address>
                                <strong>Hr Development:
                                </strong><br>
                                <a href="mailto:finance@gmail.com">{{ $page[0]->hr_email }}</a> <br>
                                <label title="Phone">P: {{ $page[0]->hr_phone }}
                                </label>
                            </address>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="opt_section bg-primary">
                            <div class="row p-4 d-flex align-items-center">
                                <div class="col-lg-2 col-md-12">
                                    <h4 class="text-white">OPT OUT</h4>
                                </div>
                                <div class="col-lg-10 col-md-12">
                                    <form action="" id="opt-form">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-lg-9 col-md-12">
                                                <div class="row mb-2">
                                                    <label for="inputEmail3"
                                                        class="col-sm-2 col-form-label text-white">Name</label>
                                                    <div class="col-lg-9 col-md-12">
                                                        <input type="text" class="form-control" id="inputEmail3">
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <label for="inputEmail3"
                                                        class="col-sm-2 col-form-label text-white">Address</label>
                                                    <div class="col-lg-9 col-md-12">
                                                        <input type="text" class="form-control" id="inputEmail3">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-12">
                                                <button type="submit" class="btn btn-info btn-block">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-10 offset-sm-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                                        <label class="form-check-label text-white" for="gridCheck1">
                                            I do not wish to receive Green Guide magazine to this address or any other
                                            marketing in relation to Green Guide.
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row ps-5 p-4 pt-0 text-white">
                                <h4>Not happy about something?</h4>
                                <p>Notify us of your complaint and out professional customer service team will be in touch
                                    to try and resolve the metter. Fill out our <u>make a complaint</u> form</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mt-5">
                <div class="col-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2477.241881356656!2d-0.050808684338578!3d51.61877817965347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761e8ae036c7b1%3A0x85f7847126c3629f!2sLocal%20Green%20Guide%20Ltd%20-%20LGG%20Marketing!5e0!3m2!1sen!2s!4v1639087067763!5m2!1sen!2s"
                        style="border:0;widows: 100% !important; height: 50vh !important;" allowfullscreen=""
                        loading="lazy"></iframe>

                </div>
            </div>
        </div>
    </section>














    <div class="our__team__section py-5 m-t-100 team4">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-7 text-center">
                    <h3 class="mb-3" data-animate="fadeInDown" data-animate-delay="600">
                        {{ $page[0]->contact_team_title }}</h3>
                    <h6 class="subtitle desc" data-animate="fadeInUp" data-animate-delay="700">
                        {{ $page[0]->contact_team_desc }}</h6>
                </div>
            </div>
            <div class="row">
                @foreach ($teams as $team)
                    
                <div class="col-lg-3 mb-4" data-animate="fadeInUp" data-animate-delay="900">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center">
                            <img src="{{asset('uploads/'.$team->image)}}"
                                alt="wrapkit" width="200" height="200" style="object-fit: cover;" class=" rounded-circle" />
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="pt-2">
                                <h5 class="mt-4 font-weight-medium mb-0">{{$team->name}}</h5>
                                <h6 class="subtitle mb-3">{{$team->position}}</h6>
                                <a href="mailto:{{$team->email}}"
                                    class="btn btn-info text-white btn-outline  btn-roundeded ">Contact</a>

                            </div>
                        </div>
                    </div>
                </div>

                @endforeach




                <!--

                    <div class="col-lg-3 mb-4" data-animate="fadeInUp" data-animate-delay="900">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center">
                                <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t1.jpg"
                                    alt="wrapkit" class="img-fluid rounded-circle" />
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="pt-2">
                                    <h5 class="mt-4 font-weight-medium mb-0">Taurai Jiri</h5>
                                    <h6 class="subtitle mb-3">Managing Director</h6>
                                    <a href="mailto:example@gmail.com" class="btn btn-info text-white btn-outline  btn-roundeded ">Contact</a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 mb-4" data-animate="fadeInUp" data-animate-delay="1100">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center">
                                <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t2.jpg"
                                    alt="wrapkit" class="img-fluid rounded-circle" />
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="pt-2">
                                    <h5 class="mt-4 font-weight-medium mb-0">Richard Richards</h5>
                                    <h6 class="subtitle mb-3">Business Development Manager</h6>
                                    <a href="mailto:example@gmail.com" class="btn btn-info text-white btn-outline  btn-roundeded ">Contact</a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
               
                    <div class="col-lg-3 mb-4" data-animate="fadeInUp" data-animate-delay="1300">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center">
                                <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t3.jpg"
                                    alt="wrapkit" class="img-fluid rounded-circle" />
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="pt-2">
                                    <h5 class="mt-4 font-weight-medium mb-0">Daniella Milusheva</h5>
                                    <h6 class="subtitle mb-3">HR Assistant Manager</h6>
                                    <a href="mailto:example@gmail.com" class="btn btn-info text-white btn-outline  btn-roundeded ">Contact</a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
             
                    <div class="col-lg-3 mb-4" data-animate="fadeInUp" data-animate-delay="1500">
                        <div class="row">
                            <div class="col-md-12 d-flex justify-content-center">
                                <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t4.jpg"
                                    alt="wrapkit" class="img-fluid rounded-circle" />
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="pt-2">
                                    <h5 class="mt-4 font-weight-medium mb-0">Andrea Halsey</h5>
                                    <h6 class="subtitle mb-3">Sales Assistant</h6>
                                    <a href="mailto:example@gmail.com" class="btn btn-info text-white btn-outline  btn-roundeded ">Contact</a>
                                  <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i
                                                    class="icon-social-facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i
                                                    class="icon-social-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i
                                                    class="icon-social-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#" class="text-decoration-none d-block px-1"><i
                                                    class="icon-social-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                       -->
            </div>
        </div>
    </div>
    </div>







    <script>
        $(document).on("scroll", function() {
            if ($(document).scrollTop() > 100) {
                setTimeout(() => {
                    $(".fixed__advertise__link").addClass("active")
                }, 400);
            } else {
                setTimeout(() => {
                    $(".fixed__advertise__link").removeClass("active")
                }, 400);
            }
        });
    </script>
@endsection
