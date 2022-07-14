@extends("frontend.layouts.master")
@section('main-section')


    <div class="single__business_directory my-5 py-5">
        <div class="container">
            <div class="row">
                <!-- content -->
                <div class="col-12 mb-5">
                    <div class="carousel dots-inside arrows-visible" style="height: 650px !important; z-index:1"
                        data-items="1" data-lightbox="gallery">
                        @foreach ($directory[0]->company_images as $key => $image)
                            <a href="{{ asset('uploads/' . $image['name']) }}" data-lightbox="gallery-image">
                                <img style=" height: 650px !important; z-index:1" alt="image"
                                    src="{{ asset('uploads/' . $image['name']) }}">
                            </a>
                        @endforeach

                        {{-- <a href="{{asset('front/img/1520103821627.jpg')}}" data-lightbox="gallery-image">
                        <img alt="image" src="{{asset('front/img/1520103821627.jpg')}}">
                    </a> --}}
                    </div>
                </div>
                @if ($errors->has('userId'))
                    <div class="col-lg-12">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            You have already submitted a review.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                @endif
                <div class="content col-lg-8">
                    <!-- Blog -->
                    <div id="blog" class="single-post">
                        <!-- Post single item-->
                        <div class="post-item">
                            <div class="post-item-wrap">

                                <div class="post-item-description">
                                    <div class="row">
                                        <div class="col-9">
                                            <h2 class="text-info">{{ $directory[0]->company_name }} (&reg;
                                                {{ $directory[0]->company_reg_no }})
                                            </h2>
                                        </div>
                                        <div class="col-3">
                                            <img class="rounded" style="width:150px; height: 120px;object-fit: contain;" src="{{asset('uploads/'.$directory[0]->logo)}}" alt="">
                                        </div>
                                    </div>
                                    <h5>Charity No: {{ $directory[0]->charity_number }}</h5>
                                    <div class="row">
                                        <div class="col-12">
                                            @for ($z=0 ; $z<floor($directory->rating) ; $z++)
                                            <i class="fa fa-star text-warning"></i>
                                            @endfor
                                  
                                        </div>
                                    </div>

                                    <div class="post-meta">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Directory Posted:
                                            <b>{{ $directory[0]->created_at->diffForhumans() }}</b></span>
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Updated:
                                            <b>{{ $directory[0]->updated_at->diffForhumans() }}</b></span>
                                        <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>
                                                @php
                                                    echo $reviewsCount;
                                                @endphp
                                                Reviews</a></span>
                                        <span class="post-meta-category"><a href=""><i
                                                    class="fa fa-tag"></i><b>{{ $directory[0]->category }}</b></a></span>
                                        <div class="post-meta-share">

                                            <a class="btn btn-xs btn-slide btn-website"
                                                href="{{ $directory[0]->social[0]['links'] }}">
                                                <i class="icon-globe"></i>
                                                <span>Website</span>
                                            </a>
                                            <a class="btn btn-xs btn-slide btn-facebook"
                                                href="{{ $directory[0]->social[1]['links'] }}">
                                                <i class="fab fa-facebook-f"></i>
                                                <span>Facebook</span>
                                            </a>
                                            <a class="btn btn-xs btn-slide btn-twitter"
                                                href="{{ $directory[0]->social[2]['links'] }}" data-width="100">
                                                <i class="fab fa-twitter"></i>
                                                <span>Twitter</span>
                                            </a>
                                            <a class="btn btn-xs btn-slide btn-instagram"
                                                href="{{ $directory[0]->social[3]['links'] }}" data-width="118">
                                                <i class="fab fa-instagram"></i>
                                                <span>Instagram</span>
                                            </a>
                                            <a class="btn btn-xs btn-slide btn-googleplus"
                                                href="mailto:{{ $directory[0]->social[4]['links'] }}" data-width="80">
                                                <i class="icon-mail"></i>
                                                <span>Mail</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row mb-4 w-100">
                                        <div class="col-6">
                                            <i class="pe-2 text-info fa fa-user"></i>
                                            <span>{{ $directory[0]->name }}</span>
                                        </div>
                                        <div class="col-6">
                                            <i class="pe-2 text-info fa fa-map-marker"></i>
                                            <span>{{ $directory[0]->billing_address }}</span>
                                        </div>
                                    </div>
                                    <div class="row mb-4 w-100">
                                        <div class="col-6">
                                            <i class="pe-2 text-info fa fa-envelope"></i>
                                            <span>{{ $directory[0]->email }}</span>
                                        </div>
                                        <div class="col-6">
                                            <i class="pe-2 text-info fa fa-phone"></i>
                                            <span>{{ $directory[0]->phone }}</span>
                                        </div>
                                    </div>
                                    <p>
                                        @php
                                            echo $directory[0]->company_description;
                                        @endphp
                                    </p>
                                </div>
                                
                                    <!-- Comments -->
                                    <div class="comments" id="comments">
                                        <div class="comment_number">

                                            Reviews<span>( @php
                                                echo $reviewsCount;
                                            @endphp)</span>
                                        </div>
                                        <div class="comment-list">
                                           
                                        </div>
                                   

                                        @if (session()->has('success-reply'))
                                            <div class="col-lg-12">
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    {{ session()->get('success') }}
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                            </div>
                                        @endif
                                        @if (session()->has('error-reply'))
                                            <div class="col-lg-12">
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    {{ session()->get('error') }}
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                            </div>
                                        @endif

                                        @foreach ($reviews as $review)
                                            <div class="comment" id="comment-2">
                                                {{-- <div class="image"><img alt=""
                                                        src="{{ asset('front/img/1520103821627.jpg') }}"
                                                        class="avatar rounded"></div> --}}
                                                <div class="text">
                                                    <h5 class="name">
                                                        @if(auth()->check() && $review->name==auth()->user()->name)
                                                       You   
                                                       @else
                                                       {{ $review->name }}                                                    
                                                        @endif
                                                    </h5>
                                                    <span
                                                        class="comment_date me-4">{{ $review->created_at->diffForhumans() }}</span>
                                                    @for ($i = 0; $i < $review->rating; $i++)
                                                        <i class="fa fa-star text-warning"></i>
                                                    @endfor
                                                    @if(auth()->check() &&  $review->userId===auth()->user()->id)
                                                    <button class="ms-4 btn btn-sm btn-info replybtn{{$review->id}}" onclick="display({{$review->id}})">Reply</button>
                                                    @endif
                                                  
                                                    <div class="text_holder">
                                                        <span><b>Review:</b></span>
                                                        <p>{{ $review->review }}</p>
                                                     
                                                    </div>
                                                    {{-- {{$replys}} --}}
                                                    @foreach ($replys as $reply)
                                                        @if($reply->reviewId===$review->id)
                                                        {{-- <div class="image"><img alt=""
                                                                src="{{ asset('front/img/1520103821627.jpg') }}3.jpg"
                                                                class="avatar"></div> --}}
                                                        <div class="text">
                                                            <h5 class="name">
                                                                @if(auth()->check() && $reply->id==auth()->user()->id)
                                                                You:  
                                                                @else
                                                                {{-- {{ $reply->name }}  --}}
                                                                Owner reply:
                                                                 @endif
                                                            </h5>
                                                            <span class="comment_date">{{ $reply->created_at->diffForhumans() }}</span>
                                                            <div class="text_holder">
                                                                <p>{{ $reply->reply }}</p>
                                                            </div>
                                                        </div>
                                                            
                                                        @endif
                                                    @endforeach


                                                    <form action="{{route('businessdirectory.submitReply')}}" method="POST" id="replyTo{{$review->id}}" style="display: none">
                                                        @csrf
                                                        <div class="row ms-5">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <input type="hidden" value="{{$review->id}}" name="reviewId">
                                                                    <input type="hidden" value="{{$directory[0]->id}}" name="directoryId">
                                                                    <label class="upper" for="comment">Your Reply</label>
                                                                    <textarea class="form-control required" name="reply" rows="3" placeholder="enter your reply" id="comment"
                                                                        aria-required="true">{{ old('reply') }}</textarea>
                                                                    @if ($errors->has('reply'))
                                                                        <div class="text-danger">{{ $errors->first('reply') }}</div>
                                                                    @endif
                                                                </div>
                                                                <button type="submit" class="btn btn-info btn-sm">Post Reply</button>
                                                            </div>
                                                            
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        @endforeach
                                            <script>
                                                function display(id){
                                                    if(document.getElementById('replyTo'+id).classList.contains('active')){
                                                        document.getElementById('replyTo'+id).style.display = 'none';
                                                        document.getElementById('replyTo'+id).classList.remove('active');
                                                        document.getElementById('replyTo'+id).reset();
                                                        document.querySelector('.replybtn'+id).innerText = 'Reply';
                                                        document.querySelector('.replybtn'+id).classList.remove('btn-danger');
                                                       

                                                    }else{
                                                        document.getElementById('replyTo'+id).classList.add('active');
                                                        document.getElementById('replyTo'+id).style.display = 'block';
                                                        document.querySelector('.replybtn'+id).innerText = 'Cancel';
                                                        document.querySelector('.replybtn'+id).classList.add('btn-danger');
                                                    }
                                                }
                                            </script>

                                        <!-- end: Comment -->
                                    </div>
                            
                            <!-- end: Comments -->
                            @if (Auth::check() && auth()->user()->id!==$directory[0]->userId)
                            <div class="respond-form" id="respond">
                                <div class="respond-comment">
                                    Write a <span>Review</span></div>


                                <form class="form-gray-fields" METHOD="post"
                          
                                    action="{{ route('businessdirectory.submitReview') }}">
                                    @csrf
                                    <input type="hidden" name="userId" value="{{auth()->user()->id}}">
                                    <div class="row">
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
                                        @if ($errors->has('userId'))
                                            <div class="col-lg-12">
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    You have already submitted a review.
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                            </div>
                                        @endif
                                        <div class="col-12">
                                            <div class="rate">
                                                <input type="radio" id="star5" class="rate" name="rating"
                                                    value="5" />
                                                <label for="star5" title="text">5 stars</label>
                                                <input type="radio" id="star4" class="rate" name="rating"
                                                    value="4" />
                                                <label for="star4" title="text">4 stars</label>
                                                <input type="radio" id="star3" class="rate" name="rating"
                                                    value="3" />
                                                <label for="star3" title="text">3 stars</label>
                                                <input type="radio" id="star2" class="rate" name="rating"
                                                    value="2">
                                                <label for="star2" title="text">2 stars</label>
                                                <input type="radio" id="star1" class="rate" name="rating"
                                                    value="1" />
                                                <label for="star1" title="text">1 star</label>
                                            </div>
                                            @if ($errors->has('rating'))
                                                <div class="text-danger">{{ $errors->first('rating') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input type="hidden" value="{{ $directory[0]->id }}" name="directoryId">
                                                <label class="upper" for="name">Name</label>
                                                <input class="form-control required" value="{{ Auth::user()->name }}"
                                                    placeholder="Enter name" id="name" aria-required="true" name="name"
                                                    type="text" readonly>
                                                @if ($errors->has('name'))
                                                    <div class="text-danger">{{ $errors->first('name') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="upper" for="email">Email</label>
                                                <input class="form-control required email"
                                                    value="{{ Auth::user()->email }}" placeholder="Enter email" id="email"
                                                    aria-required="true" name="email" type="email" readonly>
                                                @if ($errors->has('email'))
                                                    <div class="text-danger">{{ $errors->first('email') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="upper" for="website">Website</label>
                                                <input class="form-control website" placeholder="Enter Website" id="website"
                                                    aria-required="false" name="website" type="text"
                                                    value="{{ old('website') }}">
                                                @if ($errors->has('website'))
                                                    <div class="text-danger">{{ $errors->first('website') }} </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="upper" for="comment">Your comment</label>
                                                <textarea class="form-control required" name="review" rows="9" placeholder="Enter comment" id="comment"
                                                    aria-required="true">{{ old('review') }}</textarea>
                                                @if ($errors->has('review'))
                                                    <div class="text-danger">{{ $errors->first('review') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group text-left">
                                                <button class="btn btn-info" type="submit">Submit
                                                    Review</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            @endif
                        </div>
                    </div>
                    <!-- end: Post single item-->
                </div>
            </div>
            <!-- end: content -->
            <!-- Sidebar-->
            <div class="sidebar sticky-sidebar col-lg-4">
                <div class="directory_opening__hours bg-info">
                    <h3>Opening & Closing Hours</h3>
                    <div class="opening_hours_box ">
                        <ul>
                            <li>
                                <label>Monday</label>
                                <span>{{ $directory[0]->monday_open }}AM -
                                    {{ $directory[0]->monday_close }}PM</span>
                            </li>
                            <li>
                                <label>Tuesday</label>
                                <span>{{ $directory[0]->tuesday_open }}AM -
                                    {{ $directory[0]->tuesday_close }}PM</span>
                            </li>
                            <li>
                                <label>Wednesday</label>
                                <span>{{ $directory[0]->wednesday_open }}AM -
                                    {{ $directory[0]->wednesday_close }}PM</span>
                            </li>
                            <li>
                                <label>Thursday</label>
                                <span>{{ $directory[0]->thursday_open }}AM -
                                    {{ $directory[0]->thursday_close }}PM</span>
                            </li>
                            <li>
                                <label>Friday</label>
                                <span>{{ $directory[0]->friday_open }}AM -
                                    {{ $directory[0]->friday_close }}PM</span>
                            </li>
                            <li>
                                <label>Saturday</label>
                                <span>{{ $directory[0]->saturday_open }}AM -
                                    {{ $directory[0]->saturday_close }}PM</span>
                            </li>
                            <li>
                                <label>Sunday</label>
                                <span>{{ $directory[0]->sunday_open }}AM -
                                    {{ $directory[0]->sunday_close }}PM</span>
                            </li>
                            <li>
                                <label>Holiday</label>
                                <span>{{ $directory[0]->holiday_open }}AM -
                                    {{ $directory[0]->holiday_close }}PM</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end: Sidebar-->
        </div>
    </div>
    </div>
@endsection
