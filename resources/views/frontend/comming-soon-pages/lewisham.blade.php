<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>London Borough of Lewisham</title>
    <style>
        /* Coming Soon Pages Styles */
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Trispace:wght@200;300;400;500;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            ff
        }

        .comming__soon__page__wrapper {
            width: 100% !important;
            min-height: 100vh !important;
            background: #c4f1c6 !important;
            display: flex;
            align-items: center;
            flex-direction: column;
            /* justify-content:center; */
            padding: 180px 8% 0;
            position: relative;
            font-family: 'Lato', sans-serif;

        }

        .comming__soon__page__wrapper .fixed_top__text {
            position: absolute;
            top: 30px;
            left: 30px;
        }

        .comming__soon__page__wrapper .fixed_top__text img {
          width: 150px;
          object-fit: cover
        }

        .comming__soon__page__wrapper .main__title {
            text-align: center;
            font-size: 2.8rem;
            font-weight: 800;
        }

        .comming__soon__page__wrapper .households {
            font-size: 17px;
            margin-top: 20px;
            font-weight: 600;
        }

        .comming__soon__page__wrapper .description {
            margin-top: 20px;
            text-align: center;
            max-width: 60%;
            line-height: 28px;
            font-size: 18px;
        }

        .comming__soon__page__wrapper .description span {
            font-weight: 700;
        }

        .comming__soon__page__wrapper .list__items {
            display: flex;
            flex-direction: column;
            align-content: flex-start !important;
            text-align: left;
            margin-top: 20px;
            text-decoration: none;
        }

        .comming__soon__page__wrapper .list__items li {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 10px;
            font-size: 18px;
        }

        .comming__soon__page__wrapper .list__items img {
            width: 20px;
            height: 20px;
            object-fit: cover
        }

        .comming__soon__page__wrapper .form {
            max-width: 40rem;
            width: 100%;
            display: flex;
            flex-direction: column;
            margin-top: 20px;
            gap: 1rem;
        }

        .comming__soon__page__wrapper .form input {
            width: 100%;
            height: 40px;
            outline: none;
            padding: 10px;
            border: 2px solid #32682b;
            background: transparent;
            font-size: 17px;
        }

        .comming__soon__page__wrapper .form input[type="submit"] {
            background: #32682b;
            cursor: pointer;
            color: #fff;
        }

        @media (max-width:780px) {
            .comming__soon__page__wrapper {
                padding: 160px 4% 30px;
            }

            .comming__soon__page__wrapper .main__title {
                font-size: 1.9rem;
            }

            .comming__soon__page__wrapper .description {
                margin-top: 20px;
                text-align: center;
                max-width: 100%;
                line-height: 28px;
            }


        }
        .comming__soon__page__wrapper .go_back_to_site{
                position: fixed;
                top: 30px;
                right: 40px;
                font-size: 18px;
                text-decoration: none;
                color: #32682b;
                padding-bottom: 5px;
                border-bottom: 2px solid #32682b;
            }

    </style>
</head>

<body>


    <div class="comming__soon__page__wrapper">
           <a class="go_back_to_site" href="/about#circulation__area__section" > Go back</a>
     
        <h2 class="fixed_top__text">
           <a href="/"><img src="{{asset('front/img/green-guide-logo.png')}}" alt=""></a>
        </h2>

        <h1 class="main__title">
            London Borough of Lewisham is <br>Coming Soon
        </h1>

        <p class="description">
            <span>Until then…</span>
            <br>
            Don't miss out on the opportunity to be apart of the Local Green Guide London Borough of Lewisham
            magazine.
            To
            stay up to date on latest information and launch date, register your interest below.
        </p>
        <ul class="list__items">
            <li> <img src="{{ asset('front/img/tickicon.png') }}" alt="">
                <span>Circulation of an estimated
                    <b>118,000</b>
                </span>
            </li>
            <li>
                <img src="{{ asset('front/img/tickicon.png') }}" alt="">
                <span>Residential retention of premium
                    quality magazine
                </span>
            </li>
            <li><img src="{{ asset('front/img/tickicon.png') }}" alt="">
                <span>Cost-effective advertisement space
                    for any budget
                </span>
            </li>
        </ul>

        <form action="{{ route('commingsoon.london-borough') }}" method="POST" class="form">
            @csrf
            @if (session()->has('success'))
                <div style="padding: 15px;border-radius: 10px;background: #a7f0a1;color:#111;">
                    {{ session()->get('success') }}</div>
            @endif
            @if (session()->has('error'))
                <div style="padding: 15px;border-radius: 10px;background: #f0a1a1;color:#111;">
                    {{ session()->get('error') }}</div>
            @endif

            <input type="text" name="name" id="" placeholder="Name">
            @if ($errors->has('name'))
                <div style="color: red; margin-top: -10px;">*{{ $errors->first('name') }}</div>
            @endif
            <input type="text" name="company_name" id="" placeholder="Company Name">
            @if ($errors->has('company_name'))
                <div style="color: red; margin-top: -10px;">*{{ $errors->first('company_name') }}</div>
            @endif
            <input type="email" name="email" id="" placeholder="Email">
            @if ($errors->has('email'))
                <div style="color: red; margin-top: -10px;">*{{ $errors->first('email') }}</div>
            @endif
            <input type="hidden" name="area_name" value="London Borough of Lewisham">
            <input type="submit" value="I'm Interested">
        </form>
    </div>

</body>

</html>
