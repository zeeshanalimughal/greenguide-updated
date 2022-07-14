@extends("frontend.layouts.master")
@section('main-section')
    <div class="fixed__advertise__link">
        <a href="/advert-design-book#book__addvertise">Advertise with us</a>
    </div>




    <div class="advertise__hero advert__design__hero" data-animate="fadeIn" data-animate-delay="500">
        <h1 class="title" data-animate="fadeInDown" data-animate-delay="700">
            High Exposure, Low Cost <br>Marketing Approach 
        </h1>
        <div class="container">
            <p class="description"  style="font-size:17px; color:#fff; margin-top: 20px; text-align: center" data-animate="fadeInUp" data-animate-delay="800">
                Green Guide is a high quality, informative magazine that is hand delivered to residents of the London Borough of Croydon on a Quarterly basis. Place your advert in a high exposure magazine that is delivered to ~156,000 households. 
            </p>
        </div>
        <a href="/advert-design-book#book__addvertise"><button class="btn__advertise" data-animate="fadeInUp" data-animate-delay="1000">Find Out More</button></a>
    </div>









    <div class="upcomming__issues">
        <div class="container">
            <div class="row p-0 m-0 d-flex justify-content-between">
                <div class="col-lg-5 col-md-12 p-0 m-0 animate__animated animate__fadeInLeft visible" data-animate="fadeInLeft" data-animate-delay="600">
                    <h2 class="title">Upcoming Issues
                    </h2>
                    <p class="description">The Green Guide magazine is a unified publication of local messages, community initiatives and a business directory. Connecting residents with their local market to establish a pathway for community growth. Download the latest issue or access our archives.
    
                    </p>
                </div>
                <div class="col-lg-6 col-md-12 p-0 m-0 animate__animated animate__fadeInRight visible" data-animate="fadeInRight" data-animate-delay="700">
                   <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Issue</th>
                                <th scope="col">Artwork and Payment  Deadline</th>
                                <th scope="col">Distribution Commencement</th>
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





    <div class="increase__sales__section d-flex align-items-center" style="min-height: 50vh; margin:60px 0; background-color:#fff;">
<div class="container">
    <h1>Increase Your Sales </h1>
    <h5>
        Although the internet is packed full of marketing noise, which we generally filter, a magazine only has a few advertisements per page. Thus, when advertising in a magazine, exposure increases substantially.
    </h5>
    <a href="/advert-design-book#book__addvertise "><button class="btn__advertise " style="color:#111;" data-animate="fadeInUp" data-animate-delay="1000">Find Out More</button></a>
</div>
    </div>







    
    <div class="increase__sales__section d-flex align-items-center" style="min-height: 50vh; margin-top:60px ; background-color:#eee;">
        <div class="container">
            <h1>In-house create team at Green Guide </h1>
            <h5>
                To maximise the retention of your advert on the reader our experienced design team can create a powerful and engaging advertisement at a low cost.  
            </h5>
            <a href="/advert-design-book#book__addvertise "><button class="btn__advertise " style="color:#111;" data-animate="fadeInUp" data-animate-delay="1000">Find Out More</button></a>
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
