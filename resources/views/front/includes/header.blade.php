<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('pageTitle')|@yield('pageSubTitle')</title>
    @yield('meta')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <!-- slider stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


    <!-- font wesome stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/bootstrap.css')}}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('front/css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('front/css/footer.css')}}" rel="stylesheet" />

    <!-- responsive style -->
    <link href="{{asset('front/css/responsive.css')}}" rel="stylesheet" />
    <style>
        @media (min-width: 992px) {
            .navbar-expand-lg .navbar-nav {
                -ms-flex-direction: row;
                flex-direction: row;
                flex-wrap: wrap;
            }

            .navbar-nav {
                margin-left: 15%;
            }

            .navbar-nav li {
                width: 20%;
                white-space: nowrap;
                text-align: center;
                padding: 12px;
            }
        }

        marquee {
            background: rgba(255, 255, 255, 0.5);
            padding: 10px;
            border-radius: 39px;
            color: #fff;
            font-size: 20px;
        }

        .owl-carousel .item {
            margin: 3px;
        }

        .owl-carousel .item img {
            display: block;
            width: 100%;
            height: auto;
        }

        .owl-carousel .item {
            margin: 3px;
        }

        .owl-carousel {
            margin-bottom: 15px;
        }


        .about-support {
            background-color: #A2CD36;
            overflow: hidden;
            border-bottom: 8px solid #9D9B9B;
            position: relative;
            height: auto;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 8px;
            padding-bottom: 8px;
            margin-top: 5px;
        }

        .breadcrumb a {
            text-decoration: none;
            color: white;
        }

        .sideber-nav .nav-link {
            display: inline-block;
        }

        .sideber-nav .nav-link {
            color: #000;
        }
    </style>
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<body>