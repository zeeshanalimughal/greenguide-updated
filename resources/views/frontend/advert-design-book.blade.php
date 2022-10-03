@extends("frontend.layouts.master")
@section('main-section')
    <div class="fixed__advertise__link">
        <a href="#book__addvertise">Advertise with us</a>
    </div>




    <div class="advertise__hero advert__design__hero" style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('{{asset('uploads/'.$page->hero_image)}}') !important;" data-animate="fadeIn" data-animate-delay="500">
        <h1 class="title" data-animate="fadeInDown" data-animate-delay="700">
          {{$page->hero_title}}
        </h1>
        <h3 class="subtitle" data-animate="fadeInUp" data-animate-delay="800">
           @php
               echo $page->hero_subtitle
           @endphp

        </h3>
        <a href="#book__addvertise"><button class="btn__advertise" data-animate="fadeInUp" data-animate-delay="1000">Create my advert</button></a>
    </div>






    <div class="business__about__section d-flex justify-content-center align-items-center bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12" data-animate="fadeInLeft" data-animate-delay="700">
                    <div class="image">
                        <img src="{{ asset('uploads/'.$page->section2_image) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 mt-3 mt-sm-6">
                    <div class="title" data-animate="fadeInUp" data-animate-delay="700">
                       {{$page->section2_heading}}
                    </div>
                    @php
                        echo    $page->section2_text
                    @endphp

                </div>
            </div>
        </div>
    </div>




















    {{-- CONTENT SECTION --}}
    <div class="business__about__section d-flex justify-content-center align-items-center bg-white">
        <div class="container">
            <div class="row">
              
                <div class="col-lg-8 col-md-12 mt-3 mt-sm-4">
                    <div class="title" data-animate="fadeInUp" data-animate-delay="700">
                        {{$page->content_sec_title}}
                    </div>
                   @php
                       echo $page->content_sec_desc;
                   @endphp
                        <div class="btns_row">
                        <a href="#" class="btn btn-primary">We can create your design</a>
                        <a href="#" class="btn btn-primary">Advertise in magazine</a>
                        </div>
                </div>
                <div class="col-lg-4 col-md-12" data-animate="fadeInRight" data-animate-delay="700">
                    <div class="image">
                        <img src="{{ asset('uploads/'.$page->content_sec_image) }}" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>







    
    {{-- Call to Action SECTION --}}
    <div class="business__about__section d-flex justify-content-center align-items-center bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12" data-animate="fadeInLeft" data-animate-delay="700">
                    <div class="image">
                        <img src="{{ asset('uploads/'.$page->call_to_sec_image) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 mt-3 mt-sm-4">
                    <div class="title" data-animate="fadeInUp" data-animate-delay="700">
                        {{$page->call_to_sec_title}}
                    </div>
                   @php
                       echo $page->call_to_sec_desc;
                   @endphp
                        
                        <div class="btns_row">
                        <a href="#" class="btn btn-primary">We can create your design</a>
                        <a href="#" class="btn btn-primary">Advertise in magazine</a>
                        </div>
                </div>
             
            </div>
        </div>
    </div>




    {{-- Advertorial SECTION --}}
    <div class="business__about__section d-flex justify-content-center align-items-center bg-white">
        <div class="container">
            <div class="row">
            
                <div class="col-lg-8 col-md-12 mt-3 mt-sm-4">
                    <div class="title" data-animate="fadeInUp" data-animate-delay="700">
                        {{$page->advertorial_sec_title}}
                    </div>
                   @php
                       echo $page->advertorial_sec_desc;
                   @endphp
                        
                        <div class="btns_row">
                        <a href="#" class="btn btn-primary">We can create your design</a>
                        <a href="#" class="btn btn-primary">Advertise in magazine</a>
                        </div>
                </div>
                <div class="col-lg-4 col-md-12" data-animate="fadeInRight" data-animate-delay="700">
                    <div class="image">
                        <img src="{{ asset('uploads/'.$page->advertorial_sec_image) }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>







    {{-- Artwork Specifications --}}




    



    <div class="addvertise__gallery d-flex justify-content-center align-items-center"
        style="background:#ededed;padding:3rem 0;">
        <div class="container">
            <h4 class="text-center text-dark mb-6" data-animate="fadeInDown" data-animate-delay="500">@php
                echo $page->cards_section_text;
            @endphp</h4>
            <div class="row p-0 m-0" data-animate="fadeInUp" data-animate-delay="700">

                @foreach ($page->design_images as $image)    
                <div class="col-lg-4 col-sm-6 p-0 m-0">
                    <a href="{{ asset('uploads/'.$image['name']) }}">
                        <div class="image_box">
                            <img src="{{ asset('uploads/'.$image['name']) }}" alt="">
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>








    


    <div class="container mt-5">
        @php
           echo $page->artwork_specifications;
        @endphp
        <div class="text-center">
            {{-- <h2>Advert Prices</h2>
            <p class="lead">
                Although the internet is packed full of marketing noise, which we generally filter, a magazine only has a
                few advertisements per page. Thus, when advertising in a magazine, exposure increases substantially.
            </p> --}}
        </div>
    </div>







    <section id="page-content" class="px-5">

            <div style="columns:3 30rem;width:100%;">
                @foreach ($page->advert_sizes_images as $image) 
                    <img style="width:100%;margin:10px auto;" src="{{ asset('uploads/'.$image['name']) }}" alt="">
                @endforeach
            </div>

    </section>







    <div class="links__cards__section">
        <div class="container">
            <div class="row">


                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="link__card">
                        <div class="card__image">
                            <img src="{{ asset('uploads/' . $links[0]->image1) }}" alt="">
                        </div>
                        <div class="card__body">
                            <h3 class="card__title">
                                {{ $links[0]->title1 }}
                            </h3>
                            <p align="justify" class="card__content">
                                {{ $links[0]->details1 }}
                            </p>
                            <a href=" {{ url('') }}/{{ $links[0]->link1 }}" class="btn btn-dark">Advertise Today
                                <i class="ps-3 fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="link__card">
                        <div class="card__image">
                            <img src="{{ asset('uploads/' . $links[0]->image2) }}" alt="">
                        </div>
                        <div class="card__body">
                            <h3 class="card__title">
                                {{ $links[0]->title2 }}
                            </h3>
                            <p align="justify" class="card__content">
                                {{ $links[0]->details2 }}
                            </p>
                            <a href=" {{ url('') }}/{{ $links[0]->link2 }}" class="btn btn-dark">Business
                                Listing <i class="ps-3 fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="link__card">
                        <div class="card__image">
                            <img src="{{ asset('uploads/' . $links[0]->image3) }}" alt="">
                        </div>
                        <div class="card__body">
                            <h3 class="card__title">
                                {{ $links[0]->title3 }}
                            </h3>
                            <p align="justify" class="card__content">
                                {{ $links[0]->details3 }}
                            </p>
                            <a href=" {{ url('') }}/{{ $links[0]->link3 }}" class="btn btn-dark">Events
                                Listing <i class="ps-3 fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





   




{{-- 
    <section style="background:#ededed;padding:2rem 0;">
     <div class="container mt-4 mb-4">
        <div class="text-center">
            <h2>    {{$page->section3_heading}}</h2>
          <div class="text-center">
            @php
            echo $page->section3_text
            @endphp
          </div>
        </div>
    </div>




        <div class="container">
            
            <table class="table table-bordered table-hover table-table-striped">
                <thead class="bg-dark text-white">
                    <tr>
                        <th scope="col">Product Type</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($adverts as $advert)
                        <tr>
                            <td>{{ $advert->advert_size }}</td>
                            <td>{{ $advert->currency }}{{ $advert->advert_price }}+VAT</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </section> --}}




{{-- 




    <div class="upcomming__issues bg-white">
        <div class="container">
            <div class="row p-0 m-0 d-flex justify-content-between">
                <div class="col-lg-5 col-md-12 p-0 m-0 animate__animated animate__fadeInLeft visible"
                    data-animate="fadeInLeft" data-animate-delay="600">
                    <h2 class="title">{{ $page->section4_heading}}
                    </h2>
                    <p class="description">
                        @php
                        echo $page->section4_text
                        @endphp
                    </p>
                </div>
                <div class="col-lg-6 col-md-12 p-0 m-0 animate__animated animate__fadeInRight visible"
                    data-animate="fadeInRight" data-animate-delay="700">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">{{ $settings[0]->ui_heading_one }}</th>
                                    <th class="wd-15p border-bottom-0">{{ $settings[0]->ui_heading_two }}</th>
                                    <th class="wd-15p border-bottom-0">{{ $settings[0]->ui_heading_three }}
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($issues as $issue)
                                    <tr>
                                        <td>{{ $issue->issue }}</td>
                                        <td>{{ $issue->deadline }}</td>
                                        <td>{{ $issue->commencement }}</td>

                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
 --}}


















 <section id="book__addvertise"
 style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('https://img.freepik.com/free-photo/closeup-shot-moss-plants-growing-tree-branch-forest_181624-14091.jpg?w=1380&t=st=1657948838~exp=1657949438~hmac=db4920fd199fe7941007d6067a3224566f9dda4982d12f0e58977f0939050b7c'); background-repeat: no-repeat;background-size:cover;background-attachment:fixed;color:#fff !important;">
 <div class="container">
     <h1 class="text-center text-white" data-animate="fadeInUp" data-animate-delay="600">BOOK NOW</h1>
     @if (session()->has('success'))
         <div class="col-lg-12">
             <div class="alert alert-success alert-dismissible fade show" role="alert">
                 {{ session()->get('success') }}
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
         </div>
     @endif
     @if (session()->has('error'))
         <div class="col-lg-12">
             <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 {{ session()->get('error') }}
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
         </div>
     @endif
     @if ($form[0]->status === 'live')
         <form method="POST" class="form-validate" action="{{ route('design.submit-design') }}"
             enctype="multipart/form-data" data-animate="fadeInUp" data-animate-delay="800">
             @csrf
             <div class="text-center text-white">
                 <h4>Contact Information</h4>
             </div>
             <br>
             <div class="form-group row">
                 <label for="example-text-input" class="col-lg-1 col-form-label text-white">Company Name</label>
                 <div class="col-lg-5">
                     <input class="form-control" type="text" name="company_name"
                         value="{{ isset($userDetails) ? $userDetails->company_name : '' }}" />
                 </div>

                 <label for="example-text-input" class="col-lg-1 col-form-label text-white">Contact Name</label>
                 <div class="col-lg-5">
                     <input class="form-control" type="text" name="contact_name"
                         value="{{ auth()->check() ? auth()->user()->name : '' }}" />
                 </div>

             </div>
             <div class="form-group row">

                 <label for="example-text-input" class="col-lg-1 col-form-label text-white">Company Number</label>
                 <div class="col-lg-5">
                     <input class="form-control" type="text" name="company_reg_no"
                         value="{{ isset($userDetails) ? $userDetails->company_reg_no : '' }}" />
                 </div>

                 <label for="example-text-input" class="col-lg-1 col-form-label text-white">Contact Number</label>
                 <div class="col-lg-5">
                     <input class="form-control" type="text" name="contact_phone"
                         value="{{ isset($userDetails) ? $userDetails->phone : '' }}" />
                 </div>
             </div>
             <div class="form-group row">

                 <label for="example-text-input" class="col-lg-1 col-form-label text-white">Company Email</label>
                 <div class="col-lg-5">
                     <input class="form-control" type="email" name="company_email"
                         value="{{ auth()->check() ? auth()->user()->email : '' }}" />
                 </div>

                 <label for="example-text-input" class="col-lg-1 col-form-label text-white">Contact Email</label>
                 <div class="col-lg-5">
                     <input class="form-control" type="email" name="contact_email"
                         value="{{ auth()->check() ? auth()->user()->email : '' }}" />
                 </div>

                 <label for="example-text-input" class="col-lg-1 col-form-label text-white">Charity Number</label>
                 <div class="col-lg-5">
                     <input class="form-control" type="text" name="charity_number"
                         value="{{ isset($userDetails) ? $userDetails->charity_number : '' }}" />
                 </div>
             </div>
             <br>
             <hr>
             <br>
             <hr>
             <div class="text-center text-white">
                 <h4 class="text-white">Basic Information</h4>
             </div>
             <br>
             <div class="form-group row">
                 <label for="example-text-input" class="col-lg-1 col-form-label text-white">Design Breif</label>
                 <div class="col-lg-5">
                     <input class="form-control" type="text" name="brief_desc" />
                     @if ($errors->has('brief_desc'))
                         <div class="text-danger">{{ $errors->first('brief_desc') }}</div>
                     @endif
                 </div>
                 <label for="example-text-input" class="col-lg-1 col-form-label text-white">Size of Advert</label>
                 <div class="col-lg-5">
                     <select class="form-select" name="advertSize">
                         <option value="">Select a Size of Advert</option>
                         @foreach ($adverts_sizes as $size)
                             <option value="{{ $size->id }}">{{ $size->advert_size }} -
                                 {{ $size->advert_price }}{{ $size->currency }}</option>
                         @endforeach
                     </select>
                     @if ($errors->has('advertSize'))
                         <div class="text-danger">{{ $errors->first('advertSize') }}</div>
                     @endif
                 </div>
             </div>
             <div class="form-group row">
                 <label for="example-text-input" class="col-lg-1 col-form-label text-white">Issue</label>
                 <div class="col-lg-5">
                     <select class="form-select" name="upcomingIssue">
                         <option value="">Select a Issue</option>
                         @foreach ($issues as $issue)
                             <option value="{{ $issue->id }}">{{ $issue->issue }} - {{ $issue->deadline }}
                             </option>
                         @endforeach
                     </select>
                     @if ($errors->has('upcomingIssue'))
                         <div class="text-danger">{{ $errors->first('upcomingIssue') }}</div>
                     @endif
                 </div>
                 <label for="example-text-input" class="col-lg-1 col-form-label text-white">Logo</label>
                 <div class="col-lg-5">
                     <input class="form-control" type="file" name="logo" accept="image/x-png,image/jpeg" />
                     @if ($errors->has('logo'))
                         <div class="text-danger">{{ $errors->first('logo') }}</div>
                     @endif
                 </div>
             </div>
             <div class="form-group row">
                 <label for="example-text-input" class="col-lg-1 col-form-label text-white">Content</label>
                 <div class="col-lg-11">
                     <textarea class="form-control" type="text" name="content"></textarea>
                     @if ($errors->has('content'))
                         <div class="text-danger">{{ $errors->first('content') }}</div>
                     @endif
                 </div>
                 <script>
                     CKEDITOR.replace('content');
                 </script>
             </div>
             <div class="form-group row">
                 <label for="example-text-input" class="col-lg-1 col-form-label text-white">Images</label>
                 <div class="col-lg-11">
                     <input class="form-control" type="file" name="images[]" accept="image/x-png,image/jpeg"
                         multiple="multiple" />
                     @if ($errors->has('images'))
                         <div class="text-danger">{{ $errors->first('images') }}</div>
                     @endif
                 </div>
             </div>
             <br>
             <hr>
             <div class="text-center text-white">
                 <h4 class="text-white">Trading Hours</h4>
             </div>
             <br>
             <div class="form-group row">
                 <label for="example-text-input" class="col-lg-1 col-form-label text-white">Monday</label>
                 <div class="col-lg-3">
                     <input class="form-control" type="time" name="monday_open" />
                     @if ($errors->has('monday_open'))
                         <div class="text-danger">{{ $errors->first('monday_open') }}</div>
                     @endif
                 </div>
                 <div class="col-lg-2">
                     <input class="form-control" type="time" name="monday_close" />
                     @if ($errors->has('monday_close'))
                         <div class="text-danger">{{ $errors->first('monday_close') }}</div>
                     @endif
                 </div>

                 <label for="example-text-input" class="col-lg-1 col-form-label text-white">Tuesday</label>
                 <div class="col-lg-2">
                     <input class="form-control" type="time" name="tuesday_open" />
                     @if ($errors->has('tuesday_open'))
                         <div class="text-danger">{{ $errors->first('tuesday_open') }}</div>
                     @endif
                 </div>

                 <div class="col-lg-3">
                     <input class="form-control" type="time" name="tuesday_close" />
                     @if ($errors->has('tuesday_close'))
                         <div class="text-danger">{{ $errors->first('tuesday_close') }}</div>
                     @endif
                 </div>
             </div>
             <div class="form-group row">
                 <label for="example-text-input" class="col-lg-1 col-form-label text-white">Wednesday</label>
                 <div class="col-lg-3">
                     <input class="form-control" type="time" name="wednesday_open" />
                     @if ($errors->has('wednesday_open'))
                         <div class="text-danger">{{ $errors->first('wednesday_open') }}</div>
                     @endif
                 </div>
                 <div class="col-lg-2">
                     <input class="form-control" type="time" name="wednesday_close" />
                     @if ($errors->has('wednesday_close'))
                         <div class="text-danger">{{ $errors->first('wednesday_close') }}</div>
                     @endif
                 </div>

                 <label for="example-text-input" class="col-lg-1 col-form-label text-white">Thursday</label>
                 <div class="col-lg-2">
                     <input class="form-control" type="time" name="thursday_open" />
                     @if ($errors->has('thursday_open'))
                         <div class="text-danger">{{ $errors->first('thursday_open') }}</div>
                     @endif
                 </div>

                 <div class="col-lg-3">
                     <input class="form-control" type="time" name="thursday_close" />
                     @if ($errors->has('thursday_close'))
                         <div class="text-danger">{{ $errors->first('thursday_close') }}</div>
                     @endif
                 </div>
             </div>
             <div class="form-group row">
                 <label for="example-text-input" class="col-lg-1 col-form-label text-white">Friday</label>
                 <div class="col-lg-3">
                     <input class="form-control" type="time" name="friday_open" />
                     @if ($errors->has('friday_open'))
                         <div class="text-danger">{{ $errors->first('friday_open') }}</div>
                     @endif
                 </div>
                 <div class="col-lg-2">
                     <input class="form-control" type="time" name="friday_close" />
                     @if ($errors->has('friday_close'))
                         <div class="text-danger">{{ $errors->first('friday_close') }}</div>
                     @endif
                 </div>

                 <label for="example-text-input" class="col-lg-1 col-form-label text-white">Saturday</label>
                 <div class="col-lg-2">
                     <input class="form-control" type="time" name="saturday_open" />
                     @if ($errors->has('saturday_open'))
                         <div class="text-danger">{{ $errors->first('saturday_open') }}</div>
                     @endif
                 </div>

                 <div class="col-lg-3">
                     <input class="form-control" type="time" name="saturday_close" />
                     @if ($errors->has('saturday_close'))
                         <div class="text-danger">{{ $errors->first('saturday_close') }}</div>
                     @endif
                 </div>
             </div>
             <div class="form-group row">
                 <label for="example-text-input" class="col-lg-1 col-form-label text-white">Sunday</label>
                 <div class="col-lg-3">
                     <input class="form-control" type="time" name="sunday_open" />
                     @if ($errors->has('sunday_open'))
                         <div class="text-danger">{{ $errors->first('sunday_open') }}</div>
                     @endif
                 </div>
                 <div class="col-lg-2">
                     <input class="form-control" type="time" name="sunday_close" />
                     @if ($errors->has('sunday_close'))
                         <div class="text-danger">{{ $errors->first('sunday_close') }}</div>
                     @endif
                 </div>

                 <label for="example-text-input" class="col-lg-1 col-form-label text-white">Bank Holiday</label>
                 <div class="col-lg-2">
                     <input class="form-control" type="time" name="holiday_open" />
                     @if ($errors->has('holiday_open'))
                         <div class="text-danger">{{ $errors->first('holiday_open') }}</div>
                     @endif
                 </div>

                 <div class="col-lg-3">
                     <input class="form-control" type="time" name="holiday_close" />
                     @if ($errors->has('holiday_close'))
                         <div class="text-danger">{{ $errors->first('holiday_close') }}</div>
                     @endif
                 </div>
             </div>
             <br>
             <hr>
             <div class="text-center text-white">
                 <h4 class="text-white">Social Media</h4>
             </div>
             <br>
             <div class="form-group row">
                 <label for="example-text-input" class="col-lg-1 col-form-label text-white">Website</label>
                 <div class="col-lg-5">
                     <input class="form-control" type="text" name="website" />
                     @if ($errors->has('website'))
                         <div class="text-danger">{{ $errors->first('website') }}</div>
                     @endif
                 </div>
                 <label for="example-text-input" class="col-lg-1 col-form-label text-white">Facebook</label>
                 <div class="col-lg-5">
                     <input class="form-control" type="text" name="fb" />
                     @if ($errors->has('fb'))
                         <div class="text-danger">{{ $errors->first('fb') }}</div>
                     @endif
                 </div>
             </div>
             <div class="form-group row">
                 <label for="example-text-input" class="col-lg-1 col-form-label text-white">Instagram</label>
                 <div class="col-lg-5">
                     <input class="form-control" type="text" name="ins" />
                     @if ($errors->has('ins'))
                         <div class="text-danger">{{ $errors->first('ins') }}</div>
                     @endif
                 </div>
                 <label for="example-text-input" class="col-lg-1 col-form-label text-white">Twitter</label>
                 <div class="col-lg-5">
                     <input class="form-control" type="text" name="tw" />
                     @if ($errors->has('tw'))
                         <div class="text-danger">{{ $errors->first('tw') }}</div>
                     @endif
                 </div>
             </div>
             <div class="form-group row">
                 <label for="example-text-input" class="col-lg-1 col-form-label text-white">Youtube</label>
                 <div class="col-lg-5">
                     <input class="form-control" type="text" name="yt" />
                     @if ($errors->has('yt'))
                         <div class="text-danger">{{ $errors->first('yt') }}</div>
                     @endif
                 </div>
             </div>

             @if (!auth()->check())
                 <br>
                 <div class="form-group row d-flex align-items-center">
                     <label for="account_toggle" class="col-lg-2 col-form-label text-white">Do You Want To Create
                         Account ?</label>
                     <div class="col-lg-7">
                         <input type="checkbox" name="check_account" value="0" id="account_toggle"
                             style="width:20px;height: 20px;" />
                     </div>
                 </div>
                 <div class="form-group row" id="passwords__container">
                     <label for="example-text-input" class="col-lg-1 col-form-label text-white">Password</label>
                     <div class="col-lg-12">
                         <input class="form-control" type="password" name="password" />
                         @if ($errors->has('password'))
                             <div class="text-danger">{{ $errors->first('password') }}</div>
                         @endif
                     </div>
                     <label for="example-text-input" class="col-lg-1 col-form-label text-white">Confirm
                         Password</label>
                     <div class="col-lg-12">
                         <input class="form-control" type="password" name="confirm_password" />
                         @if ($errors->has('confirm_password'))
                             <div class="text-danger">{{ $errors->first('confirm_password') }}</div>
                         @endif
                     </div>
                 </div>
             @endif
             <div class="form-group row">
                 <div class="col-lg-12">
                     <button class="mt-4 btn btn-block" type="submit">Submit</button>
                 </div>
             </div>
         </form>
     @else
         <h2 class="text-white text-center">Magazine Design Booking Form Is Not Available</h2>
     @endif
 </div>
</section>














    <script src="{{ asset('front/js/jquery.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/js/swiper.min.js"></script>


    <script>
    $("#passwords__container").css({
            "display": "none"
        });
        $("#account_toggle").on('change', function() {
            if (this.checked) {
                $("#passwords__container").css({
                    "display": "flex"
                });
                $("#account_toggle").val("1")
            } else {
                $("#passwords__container").css({
                    "display": "none"
                });
                $("#account_toggle").val("0")
            }
        });
        const btn_add = document.getElementById("btn-add-size-quantity");
        const size_quantity = document.getElementById("size-quantity-container");

            if(btn_add){
                btn_add.addEventListener("click", function() {
                    size_quantity.insertAdjacentHTML('beforeend', `
                            <label for="example-text-input" class="col-lg-1 col-form-label">Quantity</label>
                            <div class="col-lg-5">
                                <select class="form-select quantity"  name="quantity[]" required="required">
                                    <option value="">Select Quantity</option>
                                
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                        
                                </select>
                                @if ($errors->has('quantity'))
                                    <div class="text-danger">{{ $errors->first('quantity') }}</div>
                                @endif
                            </div>
                            <label for="example-text-input" class="col-lg-1 col-form-label">Size of Advert</label>
                            <div class="col-lg-5">
                                <select class="form-select" name="advertSize[]" required="required">
                                    <option value="">Select a Size of Advert</option>
                                    @foreach ($adverts_sizes as $size)
                                        <option value="{{ $size->id }}">
                                            {{ $size->advert_size }}-{{ $size->advert_price }}{{ $size->currency }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('advertSize'))
                                    <div class="text-danger">{{ $errors->first('advertSize') }}</div>
                                @endif
                            </div>
                    `);
                })
            }

        const adver_form = document.querySelector("#adver_form");
        const adver_submit_btn = document.querySelector("#adver_submit_btn");
        const submit_advert_btn = document.querySelector("#submit_advert_btn");
        const order_details_box = document.querySelector("#order_details_box");
        const adver_cancel_btn = document.querySelector("#adver_cancel_btn");

        const quantity = document.getElementsByName("quantity[]");
        const advertPrice = document.getElementsByName("advertSize[]");
        if(adver_cancel_btn){
       
        adver_cancel_btn.addEventListener("click", function(){
            window.location.reload();
        })
             
    }
    if(adver_cancel_btn){
        adver_form.addEventListener('submit', function(event) {
            event.preventDefault();
        
            let totalPrice = 0;
        
            let tot_qty = 0;
            const quantity_array = []
            quantity.forEach((q) => {
                tot_qty += +q.value;
                quantity_array.push(q.value);
            }) 

            let arr = [];
            advertPrice.forEach((price) => {
                arr.push(price.value);
            })
            console.log(quantity_array)

            for (let i = 0; i < arr.length; i++) {
                $.ajax({
                    url: "/get-advert-price-total/" + arr[i],
                    type: "GET",
                    async: true,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        console.log(response[0][0])
                        let price = quantity_array[i]*parseInt(response[0][0].advert_price)
                        totalPrice+= price

                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            }
            submit_advert_btn.innerHTML = 'processing...';
            setTimeout(() => {
                adver_submit_btn.style.display = 'none';
                order_details_box.style.display = 'block';
                $("#totQty").html(tot_qty);
                $("#amountTot").html(totalPrice+"£");
            //     console.log(tot_qty);
            // console.log(totalPrice);
            }, 2000);
            $("#submit_order").on("click", function() {
                adver_form.submit();
            })
        })
    }


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
