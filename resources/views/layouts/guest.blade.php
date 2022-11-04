<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        header {
            position: relative;
            background-color: black;
            height: 100vh;
            min-height: 25rem;
            width: 100%;
            overflow: hidden;
        }

        header video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: 0;
            -ms-transform: translateX(-50%) translateY(-50%);
            -moz-transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
        }

        @media (pointer: coarse) and (hover: none) {
            header {
                background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
            }

            header video {
                display: none;
            }
        }

        .navlogo {
            width: 260px !important;
            padding-top: 16px;
            height: auto !important;
            transition: all cubic-bezier(0.785, 0.135, 0.15, 0.86) 0.7s;
        }

        .booking-wrapper {
            position: absolute !important;
            bottom: auto;
            top: calc(100vh - 128px) !important;
            left: calc(50% - 480px) !important;
            width: 960px !important;
            z-index: 100;
        }

        .booking-inner {
            background-color: #fff;
            position: relative;
            padding: 12px 0;
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

        .booking-field-input {
            border: 1px solid #978057;
            background-color: #fff !important;
            padding: 0.375rem 0.75rem;
            padding-top: 26px;
            font-size: 12px;
            font-weight: 400;
            color: #182430;
            letter-spacing: .02em;
            cursor: pointer;
            line-height: 1.5;
            border-radius: 2px;
        }

        .btn-gold:hover,
        .btn-outline-gold:hover {
            color: #fff;
            background-color: #382b25;
            border-color: #382b25;
        }

        .btn-gold {
            color: #fff;
            background-color: #e4c568;
            border-color: #e4c568;
        }

        .booking-field-icon {
            position: absolute;
            top: 33%;
            right: 7%;
            font-size: 16px;
            color: #182430;
        }

        .header-iframe-youtube {
            width: 102%;
            height: 120%;
            top: -10%;
            left: -1%;
            position: absolute;
            pointer-events: none;
        }

        iframe {
            border: 0;
        }

        .description {
            padding: 90px 0;
            font-size: 18px;
        }

        .bg-light-gray {
            background: #f2f2f2;
        }

        .description h1 {
            font-size: 40px;
        }

        h1.underline:after,
        h2.underline:after,
        h3.underline:after,
        h4.underline:after {
            content: " ";
            display: table;
            margin: 20px auto 10px auto;
            width: 54px;
            border-bottom: 3px solid #e1c266;
            margin-bottom: 5vh;
        }
    </style>
    @stack('css')
</head>

<body>
    <header>
        <nav class="navbar fixed-top navbar-expand grow-menu navbar-dark bg-dark bg-opacity-50" style="">
            <div class="container-fluid justify-content-center text-uppercase">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item"><a href="https://hanginggardensofbali.com/" class="nav-link px-2 px-xl-3 text-white"><i class="fas fa-home"></i></a></li>
                    <li class="nav-item"><a href="https://hanginggardensofbali.com/villas" class="nav-link px-2 px-xl-3 text-white">Villas</a></li>
                    <li class="nav-item"><a href="https://hanginggardensofbali.com/hidden-palace" class="nav-link px-2 px-xl-3 text-white">Hidden Palace</a></li>
                    <li class="nav-item"><a href="https://hanginggardensofbali.com/experiences" class="nav-link px-2 px-xl-3 text-white">Experiences</a></li>
                    <li class="nav-item"><a href="https://hanginggardensofbali.com/spa-collection" class="nav-link px-2 px-xl-3 text-white">Spa</a></li>
                </ul>
                <a href="https://hanginggardensofbali.com/" class="navbar-brand mx-2">
                    <img src="https://hanginggardensofbali.com/themes/mindimedia-theme/assets/images/hanginggarden-logo.png" class="navlogo fade-in">
                </a>
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item"><a href="https://hanginggardensofbali.com/restaurant" class="nav-link px-2 px-xl-3 text-white">Restaurant</a></li>
                    <li class="nav-item"><a href="https://hanginggardensofbali.com/weddings" class="nav-link px-2 px-xl-3 text-white">Weddings</a></li>
                    <li class="nav-item"><a href="https://hanginggardensofbali.com/gallery" class="nav-link px-2 px-xl-3 text-white">Gallery</a></li>
                    <li class="nav-item"><a href="https://hanginggardensofbali.com/contact" class="nav-link px-2 px-xl-3 text-white">Contact Us</a></li>
                </ul>
            </div>
        </nav>
        <section class="header-image vh-100 overflow-hidden position-relative">
            <iframe src="https://www.youtube.com/embed/9RA48trBz24?autoplay=1&amp;mute=1&amp;controls=0&amp;loop=1&amp;rel=0&amp;showinfo=0&amp;iv_load_policy=3&amp;playlist=9RA48trBz24" class="header-iframe-youtube"></iframe>
        </section>
        <div class="booking-wrapper">
            <div class="booking-inner">
                <div class="booking-form-wrapper">
                    <div class="booking-form-wrapper-inner">
                        <form class="d-flex h-100" action="https://staahmax.staah.net/be/indexpackdetail?" method="get" target="_blank">
                            <input type="hidden" name="propertyId" class="datepicker-input" value="MzQ1MQ">
                            <input type="hidden" name="viewtype" class="datepicker-input" value="roomview">
                            <div class="col px-1 position-relative h-100">
                                <label class="booking-field-text">Arrival</label>
                                <input type="text" class="form-control booking-field-input h-100 w-100 datepicker" id="fromDate" value="30-10-2022" readonly="true">
                                <i class="fa fa-calendar booking-field-icon"></i>
                                <input type="hidden" name="checkIn" class="datepicker-input" value="2022-10-30">
                            </div>
                            <div class="col px-1 position-relative h-100">
                                <label class="booking-field-text">Departure</label>
                                <input type="text" class="form-control booking-field-input h-100 w-100 datepicker" id="toDate" value="31-10-2022" readonly="true">
                                <i class="fa fa-calendar booking-field-icon"></i>
                                <input type="hidden" name="checkOut" class="datepicker-input" value="2022-10-31">
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
                                <input type="text" class="form-control booking-field-input h-100 w-100" name="promo_code" placeholder="...">
                                <i class="fa fa-tag booking-field-icon"></i>
                            </div>
                            <div class="col px-1 position-relative h-100">
                                <button type="submit" class="btn btn-gold text-uppercase rounded-0 fw-bold h-100 w-100">BOOK</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="description bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="underline fw-bold text-uppercase">Hanging Gardens of Bali</h1>
                    <p>The Hanging Gardens of Bali, a luxurious destination in the heart of the jungle. Situated near Payangan, a town village North of Ubud and resting in the centre of the magical island of Gods. Overlooking the Ayung River and ancient Dalem Segara temple, the award-winning resort stands on the edge of a stunning valley, surrounded by lush rain forests and picturesque rice terraces. An award-winning destination, proudly holding the title of the: “World's First Seven Stars Boutique Hotel” and designated as one of the World’s most desirable destinations to visit.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Page section example for content below the video header -->
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <p>The HTML5 video element uses an mp4 video as a source. Change the source video to add in your own background! The header text is vertically centered using flex utilities that are built into Bootstrap.</p>
                    <p>The overlay color and opacity can be changed by modifying the <code>background-color</code> and <code>opacity</code> properties of the <code>.overlay</code> class in the CSS.</p>
                    <p>Set the mobile fallback image in the CSS by changing the background image of the header element within the media query at the bottom of the CSS snippet.</p>
                    <p class="mb-0">
                        Created by <a href="https://startbootstrap.com">Start Bootstrap</a>
                    </p>
                </div>
            </div>
        </div>
    </section>


    {{ $slot }}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @stack('js')
</body>

</html>
