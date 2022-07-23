@extends("frontend.layouts.master")
@section('main-section')
    <section id="page-title" class="text-light" data-bg-parallax="{{ url('front/img/parallax/_5.jpg') }}">
        <div class="container">
            <div class="breadcrumb" data-animate="fadeInUp" data-animate-delay="1300">
                <ul>
                    <li><a href="/">Home</a> </li>
                    <li class="active">Business Directory</li>
                </ul>
            </div>
            <div class="page-title" data-animate="fadeInUp" data-animate-delay="1300">
                <h1>Add New Directory</h1>
                <!-- <span>Simple page title with background parallax image</span> -->
            </div>
        </div>
    </section>
    <!-- end: Page title -->
    <!-- Page Menu -->
    <section>

        <div class="container-fluid px-2 px-sm-5">
            <div class="row offset-md-1">
                <div class="col-lg-8 col-md-12 ">
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
                    <form method="POST" class="form-validate" action="{{ route('businessdirectory.save-directory') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="text-center">
                            <h4>Contact Information</h4>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-lg-1 col-form-label">Company Name</label>
                            <div class="col-lg-5">
                                <input class="form-control" type="text" name="company_name"
                                    value="{{ $userDetails->company_name }}" />
                            </div>

                            <label for="example-text-input" class="col-lg-1 col-form-label">Contact Name</label>
                            <div class="col-lg-5">
                                <input class="form-control" type="text" name="contact_name" value="{{ $user->name }}" />
                            </div>

                        </div>
                        <div class="form-group row">
                           
                            <label for="example-text-input" class="col-lg-1 col-form-label">Company Number</label>
                            <div class="col-lg-5">
                                <input class="form-control" type="text" name="company_reg_no"
                                    value="{{ $userDetails->company_reg_no }}" />
                            </div>

                            <label for="example-text-input" class="col-lg-1 col-form-label">Contact Number</label>
                            <div class="col-lg-5">
                                <input class="form-control" type="text" name="contact_phone"
                                    value="{{ $userDetails->phone }}" />
                            </div>
                        </div>
                        <div class="form-group row">
                           
                            <label for="example-text-input" class="col-lg-1 col-form-label">Company Email</label>
                            <div class="col-lg-5">
                                <input class="form-control" type="email" name="company_email"
                                    value="{{ $user->email }}" />
                            </div>

                            <label for="example-text-input" class="col-lg-1 col-form-label">Contact Email</label>
                            <div class="col-lg-5">
                                <input class="form-control" type="email" name="contact_email"
                                    value="{{ $user->email }}" />
                            </div>

                            <label for="example-text-input" class="col-lg-1 col-form-label">Charity Number</label>
                            <div class="col-lg-5">
                                <input class="form-control" type="text" name="charity_number"
                                    value="{{ $userDetails->charity_number }}" />
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="text-center">
                            <h4>Basic Information</h4>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-lg-1 col-form-label">Category</label>
                            <div class="col-lg-5">
                                <select class="form-select select2" name="category" id="category">
                                </select>
                                @if ($errors->has('category'))
                                    <div class="text-danger">{{ $errors->first('category') }}</div>
                                @endif
                            </div>
                            <label for="example-text-input" class="col-lg-1 col-form-label">Subcategory</label>
                            <div class="col-lg-5">
                                <select class="form-select select2" name="subcategory" id="sub_category">
                                    <option value="">Select a Subcategory of Business</option>
                                </select>
                                @if ($errors->has('subcategory'))
                                    <div class="text-danger">{{ $errors->first('subcategory') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-lg-1 col-form-label">Sub Subcategory</label>
                            <div class="col-lg-5">
                                <select class="form-select select2" name="sub_sub_category" id="sub_sub_category">
                                    <option value="">Select a Sub Subcategory of Business</option>
                                </select>
                            </div>
                            <label for="example-text-input" class="col-lg-1 col-form-label">Borough</label>
                            <div class="col-lg-5">
                                <select class="form-select select2" name="borough">
                                    <option value="" selected disabled>Select a Borough</option>
                                    @foreach ($boroughs as $borough)
                                    <option value="{{$borough->borough}}">{{$borough->borough}}</option>
                                    @endforeach
                                    
                                </select>
                                @if ($errors->has('borough'))
                                    <div class="text-danger">{{ $errors->first('borough') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-lg-1 col-form-label">Logo</label>
                            <div class="col-lg-11">
                                <input class="form-control" type="file" name="logo" accept="image/x-png,image/jpeg" />
                                @if ($errors->has('logo'))
                                    <div class="text-danger">{{ $errors->first('logo') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-lg-1 col-form-label">Company Images</label>
                            <div class="col-lg-11">
                                <input class="form-control" type="file" name="company_images[]"
                                    accept="image/x-png,image/jpeg" multiple="multiple" accept="image/x-png,image/jpeg">
                                @if ($errors->has('logo'))
                                    <div class="text-danger">{{ $errors->first('logo') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-lg-1 col-form-label">Business Description</label>
                            <div class="col-lg-11">
                                <textarea name="company_description" id="" cols="30" rows="10"></textarea>
                            </div>
                            <script>
                                CKEDITOR.replace('company_description');
                            </script>
                        </div>
                        <br>
                        <hr>
                        <div class="text-center">
                            <h4>Social Media</h4>
                        </div>
                        <br>

                        <div class="form-group row">
                            @if ($errors->has('social'))
                                <div class="text-danger">All Socail Links are required</div>
                            @endif
                            <label for="example-text-input" class="col-lg-1 col-form-label">Website</label>
                            <div class="col-lg-5">
                                <input class="form-control" type="text" name="social[]" />
                            </div>
                            <label for="example-text-input" class="col-lg-1 col-form-label">Facebook</label>
                            <div class="col-lg-5">
                                <input class="form-control" type="text" name="social[]" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-lg-1 col-form-label">Instagram</label>
                            <div class="col-lg-5">
                                <input class="form-control" type="text" name="social[]" />
                            </div>
                            <label for="example-text-input" class="col-lg-1 col-form-label">Twitter</label>
                            <div class="col-lg-5">
                                <input class="form-control" type="text" name="social[]" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-lg-1 col-form-label">Youtube</label>
                            <div class="col-lg-5">
                                <input class="form-control" type="text" name="social[]" />
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="text-center">
                            <h4>Trading Hours</h4>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-lg-1 col-form-label">Monday</label>
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

                            <label for="example-text-input" class="col-lg-1 col-form-label">Tuesday</label>
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
                            <label for="example-text-input" class="col-lg-1 col-form-label">Wednesday</label>
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

                            <label for="example-text-input" class="col-lg-1 col-form-label">Thursday</label>
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
                            <label for="example-text-input" class="col-lg-1 col-form-label">Friday</label>
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

                            <label for="example-text-input" class="col-lg-1 col-form-label">Saturday</label>
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
                            <label for="example-text-input" class="col-lg-1 col-form-label">Sunday</label>
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

                            <label for="example-text-input" class="col-lg-1 col-form-label">Bank Holiday</label>
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




                        <div class="form-group row premium__listings">
                            <p class="premium__listings__title">Enable Premium Listing </p>
                            <div class="col-lg-6">
                                <input type="checkbox" id="premium__listings" value="yes" name="premium__listing" class="premium__listings__checkbox"/>
                                @if ($errors->has('premium__listing'))
                                <div class="text-danger">{{ $errors->first('premium__listing') }}</div>
                                @endif
                                <label for="premium__listings" class=" premium__listings__label"></label>
                            </div>
                        </div>



                        <div class="form-check">
                            <input type="checkbox" name="terms_conditions" id="terms_conditions" class="form-check-input"
                                value="1" required="">
                            <label class="custom-control-label" for="terms_conditions">I have read, understood and agree to
                                the Green Guide <u><a href="#" class="text-decoration-underline">Business Directory Terms &
                                        Conditions</a></u></label></label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="terms_conditions" id="terms_conditions2" class="form-check-input"
                                value="1" required="">
                            <label class="custom-control-label" for="terms_conditions2">I confirm that the information
                                provided is accurate and true and I consent to this information being posted on Green Guide
                                website.</label>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <button class="btn btn-shadow btn-block" type="submit">Submit</button>
                            </div>
                        </div>
                        <p class="mt-4">Your Business Listing will be reviewed before going live.</p>
                    </form>
                </div>
                <div class="col-lg-2 col-md-12">
                    <p>To register your Business in the Green Guide directory is easy and hassle free. Enter your company
                        details on our form with any relevant photos or links and we will review and activate your listing.
                        <br><br>
                        To check your status or adjust an existing listing, login and edit your current listing.
                        <br><br>
                        Green Guide Directory will display your business details on our website, we will not pass your
                        company details to any third party or use your details for any purpose other than to contact you
                        regarding Green Guide matters.
                        Read our <a href="#">Privacy Policy here</a></p>
                </div>
            </div>
        </div>
    </section>


    @push('select-category')
        <script>
            const category = document.getElementById('category');
            const sub_category = document.getElementById('sub_category');
            const sub_sub_category = document.getElementById('sub_sub_category');

            const category_arr = ['Accomodation', 'Beauty', 'Community, Organisations & Clubs', 'Council Services', 'Education',
                'Employment & Training', 'Entertainment & Events', 'Estate Agents', 'Finance & Lega', 'Food',
                'Health & Caring', 'Health & Wellbeing', 'Holidays & Tours', 'Home Repair & Constructions',
                'IT, Communication & Design', 'Motors', 'Pets', 'Shopping'
            ]
            let optionCategory = `<option value="" selected disabled>Select a Category of Business</option>`;

            for (let i = 0; i < category_arr.length; i++) {
                optionCategory += `<option value="${category_arr[i]}">${category_arr[i]}</option>`;
            }
            category.innerHTML = optionCategory;


            const Accomodation = ['Apartment', 'Bed & Breakfast', 'Guest houses', 'Holiday/Caravan Parks', 'Hostel', 'Hotel',
                'Motel'
            ]
            const Beauty = ['Cosmetic & Lase', 'Barbers', 'Beauty Salon', 'Hair Dressers', 'Nail Technicians',
                'Spa Treatment', 'Tanning Salons', 'Tattoo & Piercing'
            ]
            const COC = ['Charitable & Voluntary Organisations', 'Churches', 'Community Centres', 'Members Clubs',
                'Sport Clubs', 'Societies'
            ]
            const CouncilServices = ['Adult health and social care', 'Benefits', 'Bins and recycling',
                'Births, deaths, marriages and citizenship', 'Business, licences and tenders',
                'Children, young people and families', 'Community and safety', 'Council and elections', 'Council Tax',
                'Environment', 'Health and wellbeing', 'Housing', 'Libraries, leisure and culture',
                'Parking, streets and transport', 'Planning and regeneration', 'Schools and education'
            ]
            const Education = ['After School', 'College', 'Day Nurseries', 'Educational Services', 'Educational Supplies',
                'Further Education', 'Independent Schools and Colleges', 'Nursery Schools', 'Playgroups & Pre-school',
                'Primary', 'Secondary', 'Sixth Form', 'Tutoring'
            ]
            const EmploymentTraining = ['Employment Resources', 'Job Boards', 'Training', 'Recruitment Agency']
            const EntertainmentEvents = ['Art', 'Betting', 'Bingo', 'Children Entertainers', 'Cinemas', 'Festivals', 'Markets',
                'Music', 'Night Clubs', 'Party Supplies', 'Party Venues', 'Theatre', 'TV & Radio', 'Wedding'
            ]
            const EstateAgents = ['Letting Agents', 'Estate Agents']
            const FinanceLegal = ['Accountants', 'Bank and Building Societies', 'Book Keepers', 'Brokers', 'Financial Advisor',
                'Insurance'
            ]
            const HealthCaring = ['Accupuncture', 'Care Home', 'Chiropractor', 'Counselling', 'Dentist', 'Doctors Surgery',
                'Holistic', 'Home Care', 'Hospital', 'Massage', 'Nursing Home', 'Optician', 'Pharmacy', 'Physiotherapy',
                'Protective Services', 'Specialist'
            ]
            const HealthWellbeing = ['Dance', 'Gyms', 'Health Clubs', 'Leisure Centres', 'Martial Arts', 'Personal Trainers',
                'Pilates', 'Yoga'
            ]
            const HolidaysTours = ['Airport Transfers', 'Tours', 'Travel Agents', 'Travel Insurance']
            const HomeRepairConstructions = ['Alarm & Security System', 'Architects', 'Basement Conversion',
                'Bathroom Design & Installation', 'Boilers', 'Bricklayers', 'Builders', 'Building Consultants',
                'Building Surveyors', 'Carpert Repair & Cleaning', 'Central Heating', 'Civil Engineers', 'Contruction',
                'Double Glaze Window', 'Driveways, Patios & Paving', 'Electrical', 'Fencing', 'Flooring',
                'Groundwork Contractors', 'Handymen', 'Joinery', 'Keycutters', 'Kitchen Planning & Installation',
                'Locksmith', 'Loft Conversions', 'Painting & Decorating', 'Plasterers', 'Plumbers', 'Property Maintenance',
                'Removals', 'Roofing & Guttering', 'Satelite & Aerial', 'Security', 'Steel Fabrications', 'Storage',
                'Tilers', 'Tree & Landscaping', 'Welders', 'Window Repair'
            ]
            const ITCommunicationDesign = ['Computer Repairs', 'Digital Agency', 'Phone Repair', 'Marketing & Advertising',
                'Web Design & Development'
            ]
            const Motors = ['Auto Parts', 'Boats', 'Breakdown/ Recovery', 'Car Wash', 'Cars New & Used', 'Driving Lessons',
                'Garages', 'Mechanic', 'Mini Cabs/Taxi', 'M.O.T', 'Motorcycle Repair', 'Tyre Fitting', 'Van Hire',
                'Vans & Trucks'
            ]
            const Pets = ['Boarding Kennels', 'Dog & Cat Grooming', 'Dog Agility Training', 'Dog Walking', 'Home & Pet Sitting',
                'Pet Store & Supplies', 'Vetenarian'
            ]
            const Shopping = ['Antique/Auction', 'Arts & Crafts', 'Books, Cards & Gifts', 'Department Stores', 'Electrical',
                'Entertainment', 'Fabric', 'Fashion', 'Florist', 'Furniture', 'Garden Centre', 'Health & Beauty', 'Home',
                'Jewellery & Watches', 'Kids & Parents', 'Launderettes', 'Luxury Retailers', 'Newsagent', 'Off Licences',
                'Post Office', 'Second Hand', 'Services', 'Shoes', 'Sports & Fitness', 'Tech', 'Toys & Hobbies'
            ]
            const Food = ['Buffet', 'Butchers', 'Café/Bistro', 'Caterers', 'Fast Food', 'Fine Dining', 'Grocer',
                'Health Food Shops', 'Pubs & Bars'
            ]
            const FastFood = ['African', 'American', 'Bakery/Patisserie', 'British', 'Caribbean', 'Chicken', 'Chinese',
                'Fish & Chips', 'French', 'Greek', 'Grill', 'Healthy', 'Indian', 'Italian', 'Japanese', 'Kebab', 'Lebanese',
                'Malaysian', 'Mediterranean', 'Mexican', 'Middle Eastern', 'Persian', 'Pizza', 'Thai', 'Turkish', 'Vegan',
                'West Africa'
            ]
            const Other = ['Appliance Repairs', 'Child Minding/Baby sitting', 'Commercial Cleaning', 'Consultants',
                'Conveyancor', 'Courier Services', 'Dressmakers', 'Dry Cleaners', 'Engineering', 'Funeral Directors',
                'Furniture Repair & Restoration', 'Home Cleaning', 'Interior Designers', 'Pest Control', 'Photography',
                'Printers', 'Publishing', 'Sign Makers', 'Surveyors', 'Tailors & Upholstery', 'Window Cleaners'
            ]

            function appendCategory(categoryName) {
                var categories_names = ``;
                console.log(categoryName)
                for (let i = 0; i < categoryName.length; i++) {
                    categories_names += `<option value="${categoryName[i]}">${categoryName[i]}</option>`
                }
                sub_category.innerHTML = categories_names
            }

            function appendSubCategory(subCategoryName) {
                var sub_categories_names = ``;
                console.log(subCategoryName)
                for (let i = 0; i < subCategoryName.length; i++) {
                    sub_categories_names += `<option value="${subCategoryName[i]}">${subCategoryName[i]}</option>`
                }
                sub_sub_category.innerHTML = sub_categories_names
            }

            sub_category.addEventListener("change", function() {
                if (sub_category.value == 'Fast Food') {
                    sub_sub_category.innerHTML = '';
                    appendSubCategory(FastFood)
                } else {
                    sub_sub_category.innerHTML = '';
                }
            })

            category.addEventListener("change", function() {
                if (category.value == 'Accomodation') {
                    sub_category.innerHTML = '';
                    appendCategory(Accomodation)
                } else if (category.value == 'Community, Organisations & Clubs') {
                    sub_category.innerHTML = '';
                    appendCategory(COC)
                } else if (category.value == 'Council Services') {
                    sub_category.innerHTML = '';
                    appendCategory(CouncilServices)
                } else if (category.value == 'Education') {
                    sub_category.innerHTML = '';
                    appendCategory(Education)
                } else if (category.value == 'Employment & Training') {
                    sub_category.innerHTML = '';
                    appendCategory(EmploymentTraining)
                } else if (category.value == 'Entertainment & Events') {
                    sub_category.innerHTML = '';
                    appendCategory(EntertainmentEvents)
                } else if (category.value == 'Estate Agents') {
                    sub_category.innerHTML = '';
                    appendCategory(EstateAgents)
                } else if (category.value == 'Finance & Legal') {
                    sub_category.innerHTML = '';
                    appendCategory(FinanceLegal)
                } else if (category.value == 'Food') {
                    sub_category.innerHTML = '';
                    appendCategory(Food)
                } else if (category.value == 'Health & Caring') {
                    sub_category.innerHTML = '';
                    appendCategory(HealthCaring)
                } else if (category.value == 'Health & Wellbeing') {
                    sub_category.innerHTML = '';
                    appendCategory(HealthWellbeing)
                } else if (category.value == 'Holidays & Tours') {
                    sub_category.innerHTML = '';
                    appendCategory(HolidaysTours)
                } else if (category.value == 'Home Repair & Constructions') {
                    sub_category.innerHTML = '';
                    appendCategory(HomeRepairConstructions)
                } else if (category.value == 'IT, Communication & Design') {
                    sub_category.innerHTML = '';
                    appendCategory(ITCommunicationDesign)
                } else if (category.value == 'Motors') {
                    sub_category.innerHTML = '';
                    appendCategory(Motors)
                } else if (category.value == 'Pets') {
                    sub_category.innerHTML = '';
                    appendCategory(Pets)
                } else if (category.value == 'Shopping') {
                    sub_category.innerHTML = '';
                    appendCategory(Shopping)
                } else {
                    sub_category.innerHTML = '';
                    appendCategory(Other)
                }
            })
        </script>
    @endpush
@endsection
