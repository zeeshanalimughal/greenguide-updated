@extends("frontend.layouts.master")
@section('main-section')
@include('frontend.utils.getReviewTerms')
    <div class="website__policies mb-5">
        <header class="p-100 bg-info text-center">
            <h1 class="text-white">Comments and Reviews</h1>
        </header>
        <div class="container mt-5">
            @foreach (getReviewTerms() as $term)
            @php
                echo $term;
            @endphp
                
            @endforeach
        </div>
    </div>
@endsection
