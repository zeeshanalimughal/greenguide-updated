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
        <a href="#book__addvertise"><button class="btn__advertise" data-animate="fadeInUp" data-animate-delay="1000">Book
                Now</button></a>
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
    </section>









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








    <!-- Page Menu -->
    <section id="book__addvertise"     style="background-image:linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)), url('https://img.freepik.com/free-vector/green-fluid-background-frame_53876-114482.jpg?w=1380&t=st=1657950361~exp=1657950961~hmac=15fa091901ad81b23d9bc3eaad7ca0c2fd69b2c11338295a47876fe658f83c33'); background-repeat: no-repeat;background-size:cover;background-attachment:fixed;color:#fff !important;">
        <div class="container">
            <h1 class="text-center" data-animate="fadeInUp" data-animate-delay="600">BOOK NOW</h1>
            @if (session()->has('success'))
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                {{session()->forget('success')}}
            @endif
          
            @if (session()->has('error'))
                <div class="col-lg-12">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session()->get('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                {{session()->forget('error')}}
            @endif
            @if($form[0]->status==='live') 
            <form method="POST" id="adver_form" class="form-validate" action="{{ route('advert.submit-advert') }}"
                enctype="multipart/form-data" data-animate="fadeInUp" data-animate-delay="800">
                @csrf
                <div class="text-center">
                    <h4>Contact Information</h4>
                </div>
                <br>
                <div class="form-group row">
                    <label for="example-text-input" class="col-lg-1 col-form-label">Company Name</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" name="company_name"
                            value="{{ isset($userDetails) ? $userDetails->company_name : '' }}" />
                    </div>

                    <label for="example-text-input" class="col-lg-1 col-form-label">Contact Name</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" name="contact_name"
                            value="{{ auth()->check() ? auth()->user()->name : '' }}" />
                    </div>

                </div>
                <div class="form-group row">

                    <label for="example-text-input" class="col-lg-1 col-form-label">Company Number</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" name="company_reg_no"
                            value="{{ isset($userDetails) ? $userDetails->company_reg_no : '' }}" />
                    </div>

                    <label for="example-text-input" class="col-lg-1 col-form-label">Contact Number</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" name="contact_phone"
                            value="{{ isset($userDetails) ? $userDetails->phone : '' }}" />
                    </div>
                </div>
                <div class="form-group row">

                    <label for="example-text-input" class="col-lg-1 col-form-label">Company Email</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="email" name="company_email"
                            value="{{ auth()->check() ? auth()->user()->email : '' }}" />
                    </div>

                    <label for="example-text-input" class="col-lg-1 col-form-label">Contact Email</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="email" name="contact_email"
                            value="{{ auth()->check() ? auth()->user()->email : '' }}" />
                    </div>

                    <label for="example-text-input" class="col-lg-1 col-form-label">Charity Number</label>
                    <div class="col-lg-5">
                        <input class="form-control" type="text" name="charity_number"
                            value="{{ isset($userDetails) ? $userDetails->charity_number : '' }}" />
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <hr>
                <div class="text-center">
                    <h4>Basic Information</h4>
                </div>
                <br>
                <div class="form-group row">
                    <label for="example-text-input" class="col-lg-1 col-form-label">Borough</label>
                    <div class="col-lg-5">
                        <select class="form-select" name="borough" required="required">
                            <option value="" disabled>Select Borough</option>
                            @foreach ($borough as $boro)
                                <option value="{{ $boro->id }}">{{ $boro->borough }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('borough'))
                            <div class="text-danger">{{ $errors->first('borough') }}</div>
                        @endif
                    </div>

                    <label for="example-text-input" class="col-lg-1 col-form-label">Issue</label>
                    <div class="col-lg-5 ">
                        <select class="form-select" name="upcomingIssue" required="required">
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

                </div>
                <div class="row my-4">
                    <div class="col-12 d-flex justify-content-end">
                        <button type="button" class="btn btn-info btn-sm" id="btn-add-size-quantity">Add More Sizes</button>
                    </div>
                </div>
                <div class="form-group row" id="size-quantity-container">
                    <label for="example-text-input" class="col-lg-1 col-form-label">Quantity</label>
                    <div class="col-lg-5">
                        <select class="form-select quantity" name="quantity[]" required="required">
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
                                    {{ $size->advert_size }}-{{ $size->advert_price }}{{ $size->currency }}
                                </option>
                            @endforeach
                        </select>
                        @if ($errors->has('advertSize'))
                            <div class="text-danger">{{ $errors->first('advertSize') }}</div>
                        @endif
                        {{-- <div class="text-danger">* Premium page is only available to accounts that are assigned Marketing, Communication, Nationwide in their My Profile section – assigned by Office Admin</div> --}}
                    </div>
                </div>



                <br>

                <div class="col-md-6" style="display:none;" id="order_details_box">
                    <!-- Order Summary -->
                    <div class="card">
                        <div class="card-body p-4">
                            <!-- Title -->
                            <h2 class="h3 mb-0">Order summary</h2>
                            <!-- end: Title -->

                            <!-- Total Pice-->
                            <div class="media align-items-center mb-2">
                                <div class="mr-3 mt-3">
                                    <h4 class=" font-weight-normal mb-0">Quantity Total</h4>
                                </div>
                                <h4 class="media-body text-right">
                                    <span id="totQty">$39.98</span>
                                </h4>
                            </div>
        
                            <hr class="my-4">
                            <div class="media align-items-center">
                                <div class="mr-3">
                                    <h4 class="h4">Total Amount</h4>
                                </div>
                                <div class="media-body text-right">
                                    <span class="text-dark h4" id="amountTot">$46.76</span>
                                </div>
                            </div>
                            <!-- end: Total -->





                            @if (!auth()->check())     
                            <br>
                            <div class="form-group row d-flex align-items-center">
                                <label for="account_toggle" class="col-lg-12 col-form-label ">Do You Want To Create Account ? </label>
                                <div class="col-lg-12">
                                    <input type="checkbox" name="check_account" value="0" id="account_toggle" style="width:20px;height: 20px;" />
                                </div>
                            </div>
                            <div class="form-group row" id="passwords__container">
                                <label for="example-text-input" class="col-lg-12 col-form-label ">Password</label>
                                <div class="col-lg-12">
                                    <input class="form-control" type="password" name="password"  />
                                    @if ($errors->has('password'))
                                        <div class="text-danger">{{ $errors->first('password') }}</div>
                                    @endif
                                </div>
                                <label for="example-text-input" class="col-lg-12 col-form-label ">Confirm Password</label>
                                <div class="col-lg-12">
                                    <input class="form-control" type="password" name="confirm_password" />
                                    @if ($errors->has('confirm_password'))
                                        <div class="text-danger">{{ $errors->first('confirm_password') }}</div>
                                    @endif
                                </div>
                            </div>
                            @endif
                            <button type="submit" id="submit_order" class="btn btn-primary btn-block mt-4">Book Now</button>
                        </div>
                    </div>
                    <!--  Order Summary -->
                </div>
                <br>

               
                <div class="form-group row" id="adver_submit_btn">
                    <div class="col-3"> <h5>Need Us to Design your Advert?</h5></div>
                    <div class="col-lg-5">
                        <button class="btn btn-shadow btn-block" id="submit_advert_btn" type="submit" >Yes</button>
                    </div>
                    <div class="col-lg-4">
                        <button class="btn btn-danger btn-shadow btn-block" type="button" id="adver_cancel_btn">No</button>
                    </div>
                </div>
            </form>
            @else
            <h2 class="text-center mt-5">Advert Design Form Is Not Available</h2>
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
