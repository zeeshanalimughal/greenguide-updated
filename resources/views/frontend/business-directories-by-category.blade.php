@extends("frontend.layouts.master")
@section('main-section')
    <div class="section__business__directory__category my-5">
        <div class="container">
            {{-- <div class="carousel" data-items="3"> --}}
                <h1>Business Directories</h1>
                <h4 class="mb-5">Category: {{$category}}</h4>
            <div class="row">
                @foreach ($directories as $directory)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <!-- Post item-->
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-slider">
                                <div class="carousel dots-inside arrows-visible arrows-only" data-items="1" data-loop="true"
                                    data-autoplay="true" data-lightbox="gallery">
                              @foreach ($directory->company_images as $key=>$image)
                       
                         
                                    <a href="{{ asset('uploads/'.$image['name']) }}" data-lightbox="gallery-image">
                                        <img alt="" src="{{ asset('uploads/'.$image['name']) }}"></a>
                                        @endforeach
                                </div>
                                <span class="post-meta-category bg-none" style="background: transparent !important;"><img style="width: 60px; object-fit: cover" src="{{asset('uploads/'.$directory->logo) }}" alt=""></span>
                            </div>
                            <div class="post-item-description">
                                <div class="row p-0 m-0 mb-3">
                                    <div class="col-6 p-0 m-0">
                                        <span class="rating">
                                           @if($directory->rating === null)
                                               Not rated yet
                                               @else
                                             Rating: <b> {{floor($directory->rating)}}/5</b>
                                           @endif
                                        
                                        </span>
                                    </div>
                                    <div class="col-6 p-0 m-0">
                                        @if($directory->rating !== null)
                                           
                                               @for($i = 0; $i<floor($directory->rating); $i++)
                                               <i class="fa fa-star text-warning"></i>
                                               @endfor
                                            
                                           @endif
                                      
                                    </div>
                                </div>
                              <div class="row my-3">
                                  <div class="col-12">
                                      <h6>Owner Name: <span><b>{{$directory->name}}</b></span></h6>
                                      <h6>Phone: <span><b>{{$directory->phone}}</b></span></h6>
                                      <h6>Company Name: <span><b>{{$directory->company_name}}</b></span></h6>
                                      <h6>Email: <span><b>{{$directory->email}}</b></span></h6>
                                  </div>
                              </div>
                                    <a href="/businessdirectory/directory/{{$directory->id}}" class="btn btn-info btn-block text-center">View Directory</a>
                            </div>
                        </div>
                    </div>
                    <!-- end: Post item-->
                </div>
                @endforeach
            </div>

            {{-- </div> --}}
        </div>
    </div>
@endsection
