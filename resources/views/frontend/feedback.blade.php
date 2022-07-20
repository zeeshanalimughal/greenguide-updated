@extends("frontend.layouts.master")
@section('main-section')
    


    <div class="advertise__hero advert__design__hero"  style="background-image:linear-gradient(to right, rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('https://img.freepik.com/free-photo/smile-face-green-ball-with-golden-five-stars-customer-client-survey-satisfaction-after-use-product-service-concept-by-3d-render_616485-67.jpg?w=1380&t=st=1657953870~exp=1657954470~hmac=7263956d9f4a8e676690d465a1fdeca14165e7de23bd2bebbaa09eec46853e98') !important;" data-animate="fadeIn" data-animate-delay="500">
        <h1 class="title" data-animate="fadeInDown" data-animate-delay="700">
            Green Guide Feedback
        </h1>
        <div class="container">
            <p class="description" style="font-size:17px; color:#fff; margin-top: 20px; text-align: center"
                data-animate="fadeInUp" data-animate-delay="800">
                We would love to hear your thoughts, suggestions concerns and problems with anything so we can improve!
            </p>
        </div>
    </div>




    <div class="container my-5 py-5">
        @if (session()->has('success'))
                                    <div class="col-lg-12">
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session()->get('success') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    </div>
                                @endif
                                @if (session()->has('error'))
                                    <div class="col-lg-12">
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{ session()->get('error') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    </div>
                                @endif

        <h1>Feedback Form</h1>
        <p>We would love to hear your thoughts, suggestionsm concerns and problems with anything so we can improve!</p>
        <form class="row g-3" method="POST" action="{{route("feedback.submit")}}">
@csrf
            <div class="col-12">
                <h4>Feedback Type:</h4>
             <div class="row d-flex">
                 <div class="col-4" >
                    <div class="form-check">
                        <input class="form-check-input" name="type" id="exampleRadios1" value="Comments"  type="radio">
                        <label class="form-check-label" for="exampleRadios1">
                           Comments
                        </label>
                    </div>
                 </div>
                 <div class="col-4">
                    <div class="form-check">
                        <input class="form-check-input" name="type" id="exampleRadios2" value="Suggestions"  type="radio">
                        <label class="form-check-label" for="exampleRadios2">
                            Suggestions
                        </label>
                    </div>
                 </div>
                
                 <div class="col-4">
                    <div class="form-check">
                        <input class="form-check-input" name="type" id="exampleRadios3" value="Questions"  type="radio">
                        <label class="form-check-label" for="exampleRadios3">
                           Questions
                        </label>
                    </div>
                 </div>
             </div>
             @if ($errors->has('type'))
             <div class="text-danger">{{ $errors->first('type') }}</div>
         @endif
            </div>

            
            <div class="col-12">
             <h4>Describe your feedback</h4>
                <textarea class="form-control" name="feedback" rows="3">{{old('feedback')}}</textarea>
                @if ($errors->has('feedback'))
                <div class="text-danger">{{ $errors->first('feedback') }}</div>
            @endif
            </div>

            <h4>Name</h4>
            <div class="col-6">
                <input type="text"  value="{{old('fname')}}"  class="form-control" name="fname"  placeholder="">
                <label for="inputAddress" class="form-label">First Name</label>
                @if ($errors->has('fname'))
                <div class="text-danger">{{ $errors->first('fname') }}</div>
            @endif
            </div><div class="col-6">
                <input type="text" value="{{old('lname')}}" class="form-control" name="lname"  placeholder="">
                <label for="inputAddress" class="form-label">Last Name</label>
                @if ($errors->has('lname'))
                <div class="text-danger">{{ $errors->first('lname') }}</div>
            @endif
            </div>

            <div class="col-md-6">
                <h4>Email</h4>
                <input type="email" value="{{old('email')}}"class="form-control" name="email" id="inputEmail4">
                @if ($errors->has('email'))
                <div class="text-danger">{{ $errors->first('email') }}</div>
            @endif
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit Feedback</button>
            </div>
        </form>
    </div>




<div style="background-color: rgba(1, 90, 1,.8)" class="py-5">

<div class="container">
    <div class="col-12 mt-4">
        <div class="opt_section">
            <div class="row p-4 d-flex align-items-center" >
                <div class="col-lg-2 col-md-12">
                  <h4 class="text-white">OPT OUT</h4>
                </div>
                <div class="col-lg-10 col-md-12">
                    <form action="" id="opt-form">
                      <div class="row d-flex align-items-center">
                          <div class="col-lg-9 col-md-12">
                              <div class="row mb-2">
                                  <label for="inputEmail3" class="col-sm-2 col-form-label text-white">Name</label>
                                  <div class="col-lg-9 col-md-12">
                                      <input type="text" class="form-control" id="inputEmail3">
                                  </div>
                              </div>
                              <div class="row mb-2">
                                  <label for="inputEmail3" class="col-sm-2 col-form-label text-white">Address</label>
                                  <div class="col-lg-9 col-md-12">
                                      <input type="text" class="form-control" id="inputEmail3">
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-3 col-md-12">
                              <button type="submit" class="btn btn-primary btn-block">Submit</button>
                          </div>
                      </div>
                    </form>
                </div>
                <div class="col-sm-10 offset-sm-2">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label text-white" for="gridCheck1">
                  I do not wish to receive Green Guide magazine to this address or any other marketing in relation to Green Guide.
                </label>
                  </div>
              </div>
            </div>

            <div class="row ps-5 p-4 pt-3 text-white">
              <h4>Not happy about something?</h4>
              <p>Notify us of your
                complaint and our
                professional customer
                service team will be in
                touch to try and
                resolve the matter. Fill out our <u>make a complaint</u> form</p>
            </div>
        </div>
     </div>
</div>
</div>















    






<div class="links__cards__section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="link__card">
                    <div class="card__image">
                        <img src="{{ asset('front/img/links_image-2.jpg') }}" alt="">
                    </div>
                    <div class="card__body">
                        <h3 class="card__title">
                            Advertise in Magazine
                        </h3>
                        <p align="justify" class="card__content">
                            Be ahead of your competition and have your
                            brand, valves, message or offers broadcast
                            across the London Borough of Croydon. The
                            Green Guide Magazine is a platform to help you
                            achieve your business goals.
                        </p>
                        <a href="/magzine-design-book" class="btn btn-dark">Advertise Today <i
                                class="ps-3 fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="link__card">
                    <div class="card__image">
                        <img src="{{ asset('front/img/lilnks-image-1.jpg') }}" alt="">
                    </div>
                    <div class="card__body">
                        <h3 class="card__title">
                            Business Listing
                        </h3>
                        <p align="justify" class="card__content">
                            Promote your business by registering your FREE
                            business listing on our online busines directory.
                            We want you to positively communicate and
                            engage within your local market and the Green
                            Guide Directory is a tool for you to reach more customers.
                        </p>
                        <a href="/businessdirectory" class="btn btn-dark">Advertise Today <i
                                class="ps-3 fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="link__card">
                    <div class="card__image">
                        <img src="{{ asset('front/img/links_image-3.jpg') }}" alt="">
                    </div>
                    <div class="card__body">
                        <h3 class="card__title">
                            Events Calendar
                        </h3>
                        <p align="justify" class="card__content">
                            Embrace and enhance community spirt by
                            offering a free inclusive calendar to update local
                            residents of what is going on in their local area. If
                            you have an event or activity you can register for
                            FREE.

                        </p>
                        <a href="/localevents" class="btn btn-dark">Events Listing <i
                                class="ps-3 fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>













        <script src="{{ url('front/js/jquery.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/js/swiper.min.js"></script>

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
