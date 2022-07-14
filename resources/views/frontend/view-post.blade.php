{{-- {{$post->created_at->diffForHumans();}} --}}

@extends("frontend.layouts.master")
@section('main-section')
    <div class="contact__us__hero" style="
            width     : 100% !important;
            min-height: 40vh !important;
            background-image:url('{{ asset('uploads/' . $post->post_image) }}') !important;
            background-repeat  : no-repeat !important;
            background-size    : cover !important;
            background-position: center !important;
           
    " data-animate="fadeIn" data-animate-delay="500">
    </div>
    <!-- end: Page title -->
    <section>
        <div class="container">

            <div class=" text-black" data-animate="fadeInUp" data-animate-delay="1300">
                <h3 class="text-gray">{{ $post->post_title }}</h3>
                <p class="text-muted">{{ $post->created_at->diffForHumans() }} - <span class="font-style-italic">by admin</span></p>
                <p class="text-dark" align="justify">@php
                    echo $post->contact_desc;
                @endphp</p>

                <!-- <span>Simple page title with background parallax image</span> -->
            </div>
        </div>
    </section>
@endsection
