<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style type="text/css">
        .slider-center .slick-center img {
            transform: scale(1);
        }

        .slider-center img {
            transition: all 300ms ease;
            transform: scale(0.9);
        }

        .slick-next,
        .slick-prev {
            z-index: 5;
        }

        .slick-next {
            right: 15px;
        }

        .slick-prev {
            left: 15px;
        }

        .slick-next:before,
        .slick-prev:before {
            color: #000;
            font-size: 26px;
        }

        /*== Replacing Bootstrap Styles ==*/
        .btn-primary {
            background-color: #6c471d;
            border-color: #6c471d;
        }

        .btn-check:active+.btn-primary,
        .btn-check:checked+.btn-primary,
        .btn-primary.active,
        .btn-primary:active,
        .show>.btn-primary.dropdown-toggle {
            background-color: #8b6409;
            border-color: #8b6409;
        }

        .btn-check:focus+.btn-primary,
        .btn-primary:focus {
            background-color: #8b6409;
            border-color: #8b6409;
            box-shadow: 0 0 0 0.25rem rgb(90 140 20 / 50%);
        }

        .btn-primary:hover {
            background-color: #8b6409;
            border-color: #8b6409;
        }

        .text-primary {
            color: #8b6409 !important;
        }

        .bg-primary {
            background-color: #8b6409 !important;
        }

        .btn-outline-primary {
            color: #8b6409;
            border-color: #8b6409;
        }

        .btn-check:active+.btn-outline-primary,
        .btn-check:checked+.btn-outline-primary,
        .btn-outline-primary.active,
        .btn-outline-primary.dropdown-toggle.show,
        .btn-outline-primary:active {
            background-color: #8b6409;
            border-color: #8b6409;
        }

        .btn-check:focus+.btn-outline-primary,
        .btn-outline-primary:focus {
            box-shadow: 0 0 0 0.25rem rgb(90 140 20 / 50%);
        }

        .btn-outline-primary:hover {
            background-color: #8b6409;
            border-color: #8b6409;
        }

        .page-item.active .page-link {
            background-color: #8b6409;
            border-color: #8b6409;
        }

        .border-primary {
            border-color: #8b6409 !important;
        }

        /*== New Custom Styles ==*/
        .object-fit-cover {
            object-fit: cover;
        }

        .object-fit-contain {
            object-fit: contain;
        }

        .object-position-center {
            object-position: center;
        }

        .box-shadow {
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
        }

        .underline:after {
            display: table;
            content: '';
            height: 3px;
            background-color: #6c471d;
            width: 64px;
            margin-top: 1rem;
        }

        .underline.text-center:after,
        .text-center .underline:after {
            margin-right: auto;
            margin-left: auto;
        }

        .bg-light-gray {
            background-color: #F2F2F2;
        }

        .bg-black-white-gradient {
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 1));
        }

        .leftline:before {
            display: block;
            content: '';
            height: 3px;
            background-color: #FFF;
            width: 3rem;
            left: 0;
            top: calc(50% - 1.5px);
            position: absolute;
        }

        p.leftline:before {
            display: block;
            content: '';
            height: 1px;
            background-color: #212529;
            width: 2.25rem;
            left: 0;
            top: 10px;
            position: absolute;
        }

        .py-90 {
            padding-top: 90px;
            padding-bottom: 90px;
        }

        .filter-invert {
            filter: invert(1);
        }

        .h-20px {
            height: 20px !important;
        }

        .h-100px {
            height: 100px !important;
        }

        .background-cover {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .link-share {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px auto 0;
            transition: all cubic-bezier(0.785, 0.135, 0.15, 0.86) 0.7s;
            width: 50px;
            height: 50px;
            text-decoration: none;
            border: 2px solid #000;
            color: #000;
        }

        .link-share:hover {
            border-color: transparent !important;
            color: #fff !important;
        }

        .link-share-facebook:hover {
            background-color: #4064AC;
        }

        .link-share-twitter:hover {
            background-color: #00B3E4;
        }

        .link-share-instagram:hover {
            background-color: #8A3AB9;
        }

        .link-share-youtube:hover {
            background-color: #FF0000;
        }

        .link-share-tripadvisor:hover {
            background-color: #34E0A1;
        }

        .vertical-text {
            writing-mode: vertical-lr;
        }

        .header-iframe-youtube {
            width: 102%;
            height: 120%;
            top: -10%;
            left: -1%;
            position: absolute;
            pointer-events: none;
        }

        .bg-hover-overlay {
            background-color: rgba(0, 0, 0, .75);
            opacity: 0;
            transition: 0.5s ease;
        }

        .bg-hover-overlay:hover {
            opacity: 1;
        }

        /*== Slick Sliders ==*/
        .with-half-slides .slick-list {
            margin: 0 -5px;
            padding: 0 15% 0 0;
        }

        .with-half-slides .slick-slide {
            margin: 0 5px;
        }

        .box-arrows {
            top: calc(50% - 1.5em);
        }

        .box-arrows .slick-arrow {
            width: 3em;
            height: 3em;
        }

        .h-100 .slick-list,
        .h-100 .slick-track {
            height: 100%;
        }

        /*== Header ==*/
        .navlogo {
            /*width: 175px;
        height: auto!important;*/
            width: auto;
            height: 80px !important;
            transition: all cubic-bezier(0.785, 0.135, 0.15, 0.86) 0.7s;
        }

        .grow-menu .navlogo {
            /*width: 260px!important;*/
            width: auto;
            height: 120px !important;
            filter: brightness(0) invert(1);
        }

        .navbar,
        .nav-link {
            transition: all cubic-bezier(0.785, 0.135, 0.15, 0.86) 0.7s;
        }

        .booking-wrapper {
            position: fixed;
            z-index: 100;
            width: 100%;
            left: 0;
            top: 106px;
        }

        .top-menu .booking-wrapper {
            position: absolute !important;
            bottom: auto;
            top: calc(100vh - 128px) !important;
            left: calc(50% - 480px) !important;
            width: 960px !important;
        }

        .booking-inner {
            position: relative;
            background-color: rgba(232, 233, 234, 0.8);
            padding: 12px 0;
        }

        .top-menu .booking-inner {
            background-color: #fff;
        }

        .booking-form-wrapper {
            width: 940px;
            margin: 0 auto;
        }

        .booking-form-wrapper-inner {
            position: relative;
            height: 46px;
        }

        .booking-field-text {
            position: absolute;
            top: 11%;
            left: 8%;
            font-size: 14px;
            font-weight: 600;
            color: #182430;
            letter-spacing: .02em;
        }

        .booking-field-input {
            font-size: 12px;
            font-weight: 400;
            color: #182430;
            letter-spacing: .02em;
            cursor: pointer;
            line-height: 1.5;
            border: 0px;
            border-radius: 2px;
            padding-top: 26px;
        }

        .top-menu .booking-field-input {
            border: 1px solid #978057;
        }

        .booking-field-icon {
            position: absolute;
            top: 33%;
            right: 7%;
            font-size: 16px;
            color: #182430;
        }

        .special-offers-link {
            position: absolute;
            z-index: 2;
            left: 0;
            padding: 0 25px;
            bottom: 40%;
        }

        .special-offers-link.top {
            position: fixed;
            z-index: 100;
            bottom: unset;
            top: 124px;
        }

        .offers-link-hover {
            transition: all cubic-bezier(0.785, 0.135, 0.15, 0.86) 0.7s;
        }

        .booking-field-input {
            padding: .375rem .75rem;
            padding-top: 26px;
            ;
        }

        .booking-field-input[readonly] {
            background-color: #fff !important;
        }

        .top-menu select.booking-field-input {
            padding-top: 23px;
        }

        @media screen and (max-width: 1400px) {
            .special-offers-link.top {
                top: 183px;
                left: calc(50% - 125.125px);
            }
        }

        /*== Footer ==*/
        .form-label-footer {
            font-size: .775rem;
            letter-spacing: .1rem;
        }

        .form-control-footer {
            color: #fff;
            background: none;
            border: none;
            border-radius: 0;
            line-height: 1.35;
            padding-bottom: 2px;
            padding-left: 0;
            font-size: 1rem;
            letter-spacing: 0.02rem;
            max-width: 100%;
            transition: 0.5s;
        }

        .form-control-footer::placeholder {
            color: #fff;
            opacity: .5;
        }

        .form-control-footer:focus,
        .form-control-footer:focus-visible {
            outline-style: none;
            border-bottom: 1px solid #fff;
        }

        .form-select-footer {
            color: #fff;
            background: none;
            border: 1px solid transparent;
            border-left: none;
            box-shadow: none;
            flex-grow: 1;
            font-size: 1rem;
            line-height: 1.35;
            outline: none;
            margin-left: -5px;
            margin-top: -5px;
        }

        .form-select-footer option {
            color: #000;
        }


        /*Reviews*/
        .reviews-element-container {
            position: relative;
            margin: 16rem 1.25rem 0;
            width: 70%;
        }

        .wrap-reviews-element {
            position: absolute;
            width: 95%;
            max-width: 100vw;
            top: -10rem;
            left: 25%;
            height: 100%;
        }

        .reviews-element-title {
            align-self: flex-start;
            text-orientation: mixed;
            writing-mode: vertical-lr;
            transform: rotate(180deg);
            margin-top: 0;
            margin-left: 0;
            font-size: 1.7rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .reviews-element-quote {
            display: block;
            margin-left: 4rem;
            top: 0;
            position: absolute;
        }

        .reviews-element-line {
            margin: 0;
            margin-left: 1.25rem;
            width: .125rem;
            height: 11.25rem !important;
            margin-bottom: 4rem;
        }

        .reviews-element-icon {
            bottom: 0;
            left: 0;
            font-size: 9.5rem;
            line-height: 2.5rem;
            letter-spacing: -.03em;
        }

        .reviews-element-gray-box {
            background-color: rgba(220, 220, 221, .3);
            height: 15rem;
            position: relative;
        }

        .reviews-box-list {
            width: 55%;
            margin-left: 10.25rem;
            margin-right: 7.5rem;
            margin-top: 0;
            position: absolute !important;
            top: 0;
            z-index: 99 !important;
        }

        .reviews-element-content {
            line-height: 1.75rem;
            margin-bottom: 1rem;
            font-size: .875rem;
            font-style: italic;
            letter-spacing: -.03em;
            text-align: right;
        }

        .reviews-element-guess {
            text-align: right;
            font-size: 1rem;
            line-height: 1.5rem;
        }

        .reviews-box-arrows {
            position: absolute;
            bottom: 14%;
            right: 5%;
            width: 56%;
            display: flex;
            justify-content: space-between;
        }

        .reviews-box-arrows i {
            cursor: pointer;
        }

        .anc-box {
            background: #1c1c1c;
            color: #fff;
            width: 100%;
            padding: 15px 0;
        }

        .container-fluid.full {
            width: 100% !important;
            max-width: 100% !important;
            margin-left: 0 !important;
            margin-right: 0 !important;
        }

        .container-fluid.full {
            width: 100% !important;
            max-width: none;
            margin-left: 0 !important;
            margin-right: 0 !important;
        }

        .anc-link {
            color: #fff;
            text-decoration: underline;
        }

        .anc-link:hover,
        .anc-close:hover {
            color: #8b6409;
        }

        .anc-close {
            float: right;
            color: #fff;
            cursor: pointer;
        }

        .trvl-navbar {
            background-color: white !important;
        }

        .trvl-navbar img {
            filter: unset !important;
        }

        .trvl-navbar a {
            color: black !important;
        }

        .floating-whatsapp {
            position: fixed;
            bottom: 15px;
            right: 15px;
            font-size: 64px;
            line-height: 0;
            color: #fff;
            background-color: #25D366;
            border-radius: .45rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        .floating-whatsapp:hover {
            background-color: #128C7E;
            color: #fff;
        }

    </style>
</head>

<body style="height: 10000px;">
    <header>
        <div class="fixed-top">
            <nav class="grow-menu navbar navbar-expand navbar-dark bg-dark bg-opacity-50">
                <div class="container-fluid justify-content-center text-uppercase">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item"><a href="https://elevatebali.com/" class="nav-link text-white px-2 px-xl-3"><i class="fa fa-home"></i></a></li>
                        <li class="nav-item"><a href="https://elevatebali.com/accommodations" class="nav-link text-white px-2 px-xl-3">Accommodations</a></li>
                        <li class="nav-item"><a href="https://elevatebali.com/activities" class="nav-link text-white px-2 px-xl-3">Activities</a></li>
                        <li class="nav-item"><a href="https://elevatebali.com/dining" class="nav-link text-white px-2 px-xl-3">Dining</a></li>
                    </ul>
                    <a href="https://elevatebali.com/" class="navbar-brand mx-2">
                        <img src="https://elevatebali.com/storage/app/uploads/public/635/b7e/636/635b7e636bd05089688966.png" class="navlogo fade-in">
                    </a>
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item"><a href="https://elevatebali.com/weddings" class="nav-link text-white px-2 px-xl-3">Weddings</a></li>
                        <li class="nav-item"><a href="https://elevatebali.com/gallery" class="nav-link text-white px-2 px-xl-3">Gallery</a></li>
                        <li class="nav-item"><a href="https://elevatebali.com/contact-us" class="nav-link text-white px-2 px-xl-3">Contact Us</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="booking-wrapper">
            <div class="booking-inner">
                <div class="booking-form-wrapper">
                    <div class="booking-form-wrapper-inner">
                        <form class="d-flex h-100" action="https://book-directonline.com/properties/elevatebalibyhanginggardendirect?locale=en&items[0][adults]=2&items[0][children]=0&items[0][infants]=0&currency=IDR&checkInDate=2022-11-01&checkOutDate=2022-11-02&trackPage=yes" method="get" target="_blank">
                            <input type="hidden" name="id" value="2583">
                            <div class="col px-1 position-relative h-100">
                                <label class="booking-field-text">Arrival</label>
                                <input type="text" class="form-control booking-field-input h-100 w-100 datepicker" id="fromDate" value="08-11-2022" readonly="true">
                                <i class="fa fa-calendar booking-field-icon"></i>
                                <input type="hidden" name="checkInDate" class="datepicker-input" value="08-11-2022">
                            </div>
                            <div class="col px-1 position-relative h-100">
                                <label class="booking-field-text">Departure</label>
                                <input type="text" class="form-control booking-field-input h-100 w-100 datepicker" id="toDate" value="09-11-2022" readonly="true">
                                <i class="fa fa-calendar booking-field-icon"></i>
                                <input type="hidden" name="checkOutDate" class="datepicker-input" value="09-11-2022">
                            </div>
                            <div class="col px-1 position-relative h-100">
                                <label class="booking-field-text">Guests</label>
                                <select class="form-control booking-field-input h-100 w-100">
                                    <option value="1">01</option>
                                    <option value="2">02</option>
                                    <option value="3">03</option>
                                    <option value="4">04</option>
                                    <option value="5">05</option>
                                    <option value="more...">more...</option>
                                </select>
                                <i class="fa fa-chevron-down booking-field-icon"></i>
                            </div>
                            <div class="col px-1 position-relative h-100">
                                <label class="booking-field-text">Promo code</label>
                                <input type="text" class="form-control booking-field-input h-100 w-100" name="promo" placeholder="...">
                                <i class="fa fa-tag booking-field-icon"></i>
                            </div>
                            <div class="col px-1 position-relative h-100">
                                <button type="submit" class="btn btn-primary text-uppercase rounded-0 fw-bold h-100 w-100">BOOK</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="special-offers-link">
            <div>
                <a href="https://elevatebali.com/offers" class="btn btn-primary rounded-pill text-uppercase px-3 w-100">
                    <small class="fw-bold"><i class="fa fa-gift me-2"></i> Special Offers</small>
                </a>
                <div class="mt-2 offers-link-hover opacity-0">
                    <div class="px-3 py-2 bg-dark bg-opacity-75 rounded-3">
                        <p class="text-xxl-start text-center text-white mb-0 small">Find out exclusive offers<br>in our official website</p>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <!-- Content -->

    <section class="slider-section">
        <div class="vh-100 overflow-hidden position-relative">
            <img src="https://via.placeholder.com/1920x1080/000" class="h-100 w-100 object-fit-cover object-position-center">
        </div>
        <div class="vh-100 overflow-hidden position-relative">
            <img src="https://via.placeholder.com/1920x1080/0f0" class="h-100 w-100 object-fit-cover object-position-center">
        </div>
        <div class="vh-100 overflow-hidden position-relative">
            <img src="https://via.placeholder.com/1920x1080" class="h-100 w-100 object-fit-cover object-position-center">
        </div>
    </section>

    <section class="py-90">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h5 class="mb-3"><i>Donec convallis nisl</i></h5>
                    <p>Ut arcu metus, consectetur vel massa in, pellentesque aliquet arcu. Aliquam
                        vitae elit eu orci laoreet vulputate. Nulla vel eros sed augue euismod feugiat.
                        Praesent semper purus ex, sit amet tristique diam mattis sed.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-90 bg-light-gray">
        <div class="container">
            <div class="row pb-5 justify-content-center">
                <div class="col-6 text-center">
                    <h3 class="mb-3"><i>Ut volutpat ultricies ante vitae blandit.</i></h3>
                </div>
            </div>
            <div class="slider slider-center">
                <div>
                    <img src="https://via.placeholder.com/455x680" />
                </div>
                <div>
                    <img src="https://via.placeholder.com/455x680" />
                </div>
                <div>
                    <img src="https://via.placeholder.com/455x680" />
                </div>
                <div>
                    <img src="https://via.placeholder.com/455x680" />
                </div>
                <div>
                    <img src="https://via.placeholder.com/455x680" />
                </div>
            </div>
            <div class="row pt-5 justify-content-center">
                <div class="col-6 text-center">
                    <p>Proin placerat libero ipsum, ac feugiat lacus volutpat vel. Maecenas quis gravida felis,
                        ac viverra ante. Vestibulum imperdiet erat ut odio mollis convallis. Donec ac maximus
                        mauris, ac tempus leo.</p>
                    <div class="mt-4">
                        <button class="btn btn-primary rounded-0 px-5">Button text</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-90">
        <div class="container">
            <div class="row pb-5 justify-content-center">
                <div class="col-10">
                    <div class="row">
                        <div class="col-7 px-4">
                            <h3 class="mb-5"><i>Maecenas auctor facilisis rutrum</i></h3>
                            <img src="https://via.placeholder.com/595x800" style="width: 100%" />
                        </div>
                        <div class="col-5 px-4">
                            <img src="https://via.placeholder.com/410x550" style="width: 100%" />
                            <div class="mt-4">
                                <p>Proin ornare sem non euismod volutpatpraesent vitae rutrum libero, in ultrices odio
                                    maecenas vehicula molestie ante a ultricies.</p>

                                <p>Praesent vestibulum dictum quam at hendrerit
                                    nam felis ex, fermentum ac leo quis, pellentesque
                                    dictum tellus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- {{ $slot }} --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.slider-section').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        fade: true,
        cssEase: 'linear',
        draggable: false,
        pauseOnDotsHover: false,
        pauseOnHover: false,
        pauseOnFocus: false,
        });
    </script>

    <script>
        $('.slider-center').slick({
        centerMode: true,
        slidesToShow: 3,
        dots: true,
        infinite: true,
        centerPadding: '0px',
        speed: 500,
        variableWidth: true,
        arrows: true
        });
        
    </script>

    <script>
        $(function () {
            if (window.pageYOffset == 0) {
                $('.navbar').addClass('grow-menu');
            }
        $(window).scroll(function () {
            var top_offset = $(window).scrollTop();
            if (top_offset == 0) {
                $('.navbar').addClass('grow-menu navbar-dark bg-dark bg-opacity-50');
                $('.navbar').removeClass('navbar-light bg-white');
                $('.nav-link').addClass('text-white');
                $('.nav-link').removeClass('text-dark');
            } else {
            $('.navbar').removeClass('grow-menu navbar-dark bg-dark bg-opacity-50');
            $('.navbar').addClass('navbar-light bg-white');
            $('.nav-link').removeClass('text-white');
            $('.nav-link').addClass('text-dark');
            }
        });
        
        if (window.pageYOffset <= 800) { 
            $('header').addClass('top-menu');
        }
        $(window).scroll(function () {
            var top_offset=$(window).scrollTop(); 
            if (top_offset <=800) {
                $('header').addClass('top-menu'); 
            } else { 
                $('header').removeClass('top-menu'); 
            }
        });
        if (window.pageYOffset <=800) {
            $('.special-offers-link').removeClass('top');
        }
        $(window).scroll(function () {
            var top_offset=$(window).scrollTop();
            if (top_offset <=800) {
                $('.special-offers-link').removeClass('top');
            } else { 
                $('.special-offers-link').addClass('top'); 
            }
        });
    });
    setInterval(function() {
        $('.opacity-0').toggleClass('opacity-100')
    }, 5000);
    </script>
    <script type="text/javascript">
        $('#reserveddate_enquiry').datepicker({
                format: 'dd-mm-yyyy',
                startDate: "04-11-2022",
                autoclose: true
            });
            $('#fromDate').datepicker({
                format: 'dd-mm-yyyy',
                startDate: "04-11-2022",
                autoclose: true
            });
            $('#toDate').datepicker({
                format: 'dd-mm-yyyy',
                startDate: "05-11-2022",
                autoclose: true
            });
            $('#fromDate, #toDate').change(function(e) {
                let str = $(this).val();
                let res = str.split("-");
                $(this).closest('.col').find('.datepicker-input').val(res[2] + '-' + res[1] + '-' + res[0]);
            });
            $('#fromDate').change(function(e) {
                let str = $(this).val();
                let res = str.split("-");
                let dat = res[2] + '-' + res[1] + '-' + res[0];
                let date = new Date(dat);
                date.setDate(date.getDate() + 1);
    
                let dd = (date.getDate() < 10) ? "0" + date.getDate().toString() : date.getDate();
                let mm = (date.getMonth() < 10) ? "0" + (date.getMonth() + 1).toString() : date.getMonth();
                let y = date.getFullYear();
    
                $('#toDate').val(dd + '-' + mm + '-' + y);
                $('#toDate').closest('.col').find('.datepicker-input').val(y + '-' + mm + '-' + dd);
    
                $('#toDate').datepicker('destroy');
                $('#toDate').datepicker({
                    format: 'dd-mm-yyyy',
                    startDate: dd + '-' + mm + '-' + y,
                    autoclose: true
                });
            });
    </script>
</body>

</html>