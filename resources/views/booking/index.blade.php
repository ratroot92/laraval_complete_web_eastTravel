@php $counter = 0;
$whitelist = [
// IPv4 address
'127.0.0.1',

// IPv6 address
'::1'
];
$path = "";
if (in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
$path = "";
}
else {
$path="../public/";
}
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <title>The Travel - Tour Travel</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- FAV ICON -->
    <link rel="shortcut icon" href="{{asset('/theme/travel')}}/images/fav.ico">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:400,500,700" rel="stylesheet">
    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="{{asset('/theme/travel')}}/css/font-awesome.min.css">
    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="{{asset('/theme/travel')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('/theme/travel')}}/css/materialize.css">
    <link rel="stylesheet" href="{{asset('/theme/travel')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/theme/travel')}}/css/mob.css">
    <link rel="stylesheet" href="{{asset('/theme/travel')}}/css/animate.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{asset('/theme/travel')}}/js/html5shiv.js"></script>
    <script src="{{asset('/theme/travel')}}/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!-- MOBILE MENU -->
    <section>
        <div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
                <div class="ed-mm-left">
                    <div class="wed-logo">
                        <a href="main.html"><img src="{{asset('/theme/admin')}}/images/logo.png" alt="" />
                        </a>
                    </div>
                </div>
                <div class="ed-mm-right">
                    <div class="ed-mm-menu">
                        <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                        <div class="ed-mm-inn">
                            <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                            <h4>Home pages</h4>
                            <ul>
                                <li><a href="booking-all.html">Home page 1</a></li>
                                <li><a href="booking-all.html">Home page 2</a></li>
                                <li><a href="booking-tour-package.html">Home page 3</a></li>
                                <li><a href="booking-hotel.html">Home page 4</a></li>
                                <li><a href="booking-car-rentals.html">Home page 5</a></li>
                                <li><a href="booking-flight.html">Home page 6</a></li>
                                <li><a href="booking-slider.html">Home page 7</a></li>
                            </ul>
                            <h4>Tour Packages</h4>
                            <ul>
                                <li><a href="all-package.html">All Package</a></li>
                                <li><a href="family-package.html">Family Package</a></li>
                                <li><a href="honeymoon-package.html">Honeymoon Package</a></li>
                                <li><a href="group-package.html">Group Package</a></li>
                                <li><a href="weekend-package.html">WeekEnd Package</a></li>
                                <li><a href="regular-package.html">Regular Package</a></li>
                                <li><a href="custom-package.html">Custom Package</a></li>
                            </ul>
                            <h4>Sighe Seeings Pages</h4>
                            <ul>
                                <li><a href="places.html">Seight Seeing 1</a></li>
                                <li><a href="places-1.html">Seight Seeing 2</a></li>
                                <li><a href="places-2.html">Seight Seeing 3</a></li>
                            </ul>
                            <h4>User Dashboard</h4>
                            <ul>
                                <li><a href="dashboard.html">My Bookings</a></li>
                                <li><a href="db-my-profile.html">My Profile</a></li>
                                <li><a href="db-my-profile-edit.html">My Profile edit</a></li>
                                <li><a href="db-travel-booking.html">Tour Packages</a></li>
                                <li><a href="db-hotel-booking.html">Hotel Bookings</a></li>
                                <li><a href="db-event-booking.html">Event bookings</a></li>
                                <li><a href="db-payment.html">Make Payment</a></li>
                                <li><a href="db-refund.html">Cancel Bookings</a></li>
                                <li><a href="db-all-payment.html">Prient E-Tickets</a></li>
                                <li><a href="db-event-details.html">Event booking details</a></li>
                                <li><a href="db-hotel-details.html">Hotel booking details</a></li>
                                <li><a href="db-travel-details.html">Travel booking details</a></li>
                            </ul>
                            <h4>Other pages:1</h4>
                            <ul>
                                <li><a href="tour-details.html">Travel details</a></li>
                                <li><a href="hotel-details.html">Hotel details</a></li>
                                <li><a href="all-package.html">All package</a></li>
                                <li><a href="hotels-list.html">All hotels</a></li>
                                <li><a href="booking.html">Booking page</a></li>
                            </ul>
                            <h4 class="ed-dr-men-mar-top">User login pages</h4>
                            <ul>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="login.html">Login and Sign in</a></li>
                                <li><a href="forgot-pass.html">Forgot pass</a></li>
                            </ul>
                            <h4>Other pages:2</h4>
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="testimonials.html">Testimonials</a></li>
                                <li><a href="events.html">Events</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="tips.html">Tips Before Travel</a></li>
                                <li><a href="price-list.html">Price List</a></li>
                                <li><a href="discount.html">Discount</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="sitemap.html">Site map</a></li>
                                <li><a href="404.html">404 Page</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--HEADER SECTION-->
    <section>
        <!-- TOP BAR -->
        <div class="ed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ed-com-t1-left">
                            <ul>
                                <li><a href="#">Contact: Lake Road, Suite 180 Farmington Hills, U.S.A.</a>
                                </li>
                                <li><a href="#">Phone: +101-1231-1231</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-right">
                            <ul>
                                <li><a href="login.html">Sign In</a>
                                </li>
                                <li><a href="register.html">Sign Up</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- LOGO AND MENU SECTION -->
        <div class="top-logo" data-spy="affix" data-offset-top="250">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wed-logo">
                            <a href="main.html"><img src="{{asset('/theme/admin')}}/images/logo.png" alt="" />
                            </a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="main.html">Home</a>
                                </li>
                                <li class="about-menu">
                                    <a href="family-package.html" class="mm-arr">Packages</a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="about-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay menu-about" href="all-package.html">
                                                            <img src="{{asset('/theme/admin')}}/images/sight/5.jpg" alt="">
                                                            <span>Popular Package</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="mm1-com mm1-s2">
                                                    <p>Want to change the world? At Berkeley we’re doing just that. When you join the Golden Bear community, you’re part of an institution that shifts the global conversation every single day.</p>
                                                    <a href="all-package.html" class="mm-r-m-btn">Read more</a>
                                                </div>
                                                <div class="mm1-com mm1-s3">
                                                    <ul>
                                                        <li><a href="booking-all.html">All Booking</a></li>
                                                        <li><a href="booking-tour-package.html">Tour Package Booking</a></li>
                                                        <li><a href="booking-hotel.html">Hotel Booking</a></li>
                                                        <li><a href="booking-car-rentals.html">Car Rentals Booking</a></li>
                                                        <li><a href="booking-flight.html">Flight Booking</a></li>
                                                        <li><a href="booking-slider.html">Slider Booking</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-s4">
                                                    <ul>
                                                        <li><a href="all-package.html">All Package</a></li>
                                                        <li><a href="family-package.html">Family Package</a></li>
                                                        <li><a href="honeymoon-package.html">Honeymoon Package</a></li>
                                                        <li><a href="group-package.html">Group Package</a></li>
                                                        <li><a href="weekend-package.html">WeekEnd Package</a></li>
                                                        <li><a href="regular-package.html">Regular Package</a></li>
                                                        <li><a href="custom-package.html">Custom Package</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="admi-menu">
                                    <a href="#" class="mm-arr">Seight Seeing</a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="admi-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="places.html">
                                                            <img src="{{asset('/theme/admin')}}/images/sight/1.jpg" alt="">
                                                            <span>Seight Seeing - 1</span>
                                                        </a>
                                                    </div>
                                                    <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros. Vestibulum congue nec eros quis lacinia. Mauris non tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.</p>
                                                    <a href="places.html" class="mm-r-m-btn">Read more</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="places-1.html">
                                                            <img src="{{asset('/theme/admin')}}/images/sight/2.jpg" alt="">
                                                            <span>Seight Seeing - 2</span>
                                                        </a>
                                                    </div>
                                                    <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros. Vestibulum congue nec eros quis lacinia. Mauris non tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.</p>
                                                    <a href="places-1.html" class="mm-r-m-btn">Read more</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="places-2.html">
                                                            <img src="{{asset('/theme/admin')}}/images/sight/3.jpg" alt="">
                                                            <span>Seight Seeing - 3</span>
                                                        </a>
                                                    </div>
                                                    <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros. Vestibulum congue nec eros quis lacinia. Mauris non tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.</p>
                                                    <a href="places-2.html" class="mm-r-m-btn">Read more</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s4">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="places-3.html">
                                                            <img src="{{asset('/theme/admin')}}/images/sight/4.jpg" alt="">
                                                            <span>Seight Seeing - 4</span>
                                                        </a>
                                                    </div>
                                                    <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros. Vestibulum congue nec eros quis lacinia. Mauris non tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.</p>
                                                    <a href="places-3.html" class="mm-r-m-btn">Read more</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="hotels-list.html">Hotels</a></li>
                                <!--<li><a class='dropdown-button ed-sub-menu' href='#' data-activates='dropdown1'>Courses</a></li>-->
                                <li class="cour-menu">
                                    <a href="#!" class="mm-arr">All Pages</a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="cour-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm1-com mm1-cour-com mm1-s3">
                                                    <h4>Home pages</h4>
                                                    <ul>
                                                        <li><a href="booking-all.html">Home page 1</a></li>
                                                        <li><a href="booking-all.html">Home page 2</a></li>
                                                        <li><a href="booking-tour-package.html">Home page 3</a></li>
                                                        <li><a href="booking-hotel.html">Home page 4</a></li>
                                                        <li><a href="booking-car-rentals.html">Home page 5</a></li>
                                                        <li><a href="booking-flight.html">Home page 6</a></li>
                                                        <li><a href="booking-slider.html">Home page 7</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-cour-com mm1-s3">
                                                    <h4>Tour Packages</h4>
                                                    <ul>
                                                        <li><a href="all-package.html">All Package</a></li>
                                                        <li><a href="family-package.html">Family Package</a></li>
                                                        <li><a href="honeymoon-package.html">Honeymoon Package</a></li>
                                                        <li><a href="group-package.html">Group Package</a></li>
                                                        <li><a href="weekend-package.html">WeekEnd Package</a></li>
                                                        <li><a href="regular-package.html">Regular Package</a></li>
                                                        <li><a href="custom-package.html">Custom Package</a></li>
                                                    </ul>
                                                    <h4 class="ed-dr-men-mar-top">Sighe Seeings Pages</h4>
                                                    <ul>
                                                        <li><a href="places.html">Seight Seeing 1</a></li>
                                                        <li><a href="places-1.html">Seight Seeing 2</a></li>
                                                        <li><a href="places-2.html">Seight Seeing 3</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-cour-com mm1-s3">
                                                    <h4>User Dashboard</h4>
                                                    <ul>
                                                        <li><a href="dashboard.html">My Bookings</a></li>
                                                        <li><a href="db-my-profile.html">My Profile</a></li>
                                                        <li><a href="db-my-profile-edit.html">My Profile edit</a></li>
                                                        <li><a href="db-travel-booking.html">Tour Packages</a></li>
                                                        <li><a href="db-hotel-booking.html">Hotel Bookings</a></li>
                                                        <li><a href="db-event-booking.html">Event bookings</a></li>
                                                        <li><a href="db-payment.html">Make Payment</a></li>
                                                        <li><a href="db-refund.html">Cancel Bookings</a></li>
                                                        <li><a href="db-all-payment.html">Prient E-Tickets</a></li>
                                                        <li><a href="db-event-details.html">Event booking details</a></li>
                                                        <li><a href="db-hotel-details.html">Hotel booking details</a></li>
                                                        <li><a href="db-travel-details.html">Travel booking details</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-cour-com mm1-s3">
                                                    <h4>Other pages:1</h4>
                                                    <ul>
                                                        <li><a href="tour-details.html">Travel details</a></li>
                                                        <li><a href="hotel-details.html">Hotel details</a></li>
                                                        <li><a href="all-package.html">All package</a></li>
                                                        <li><a href="hotels-list.html">All hotels</a></li>
                                                        <li><a href="booking.html">Booking page</a></li>
                                                    </ul>
                                                    <h4 class="ed-dr-men-mar-top">User login pages</h4>
                                                    <ul>
                                                        <li><a href="register.html">Register</a></li>
                                                        <li><a href="login.html">Login and Sign in</a></li>
                                                        <li><a href="forgot-pass.html">Forgot pass</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-cour-com mm1-s4">
                                                    <h4>Other pages:2</h4>
                                                    <ul>
                                                        <li><a href="about.html">About Us</a></li>
                                                        <li><a href="testimonials.html">Testimonials</a></li>
                                                        <li><a href="events.html">Events</a></li>
                                                        <li><a href="blog.html">Blog</a></li>
                                                        <li><a href="tips.html">Tips Before Travel</a></li>
                                                        <li><a href="price-list.html">Price List</a></li>
                                                        <li><a href="discount.html">Discount</a></li>
                                                        <li><a href="faq.html">FAQ</a></li>
                                                        <li><a href="sitemap.html">Site map</a></li>
                                                        <li><a href="404.html">404 Page</a></li>
                                                        <li><a href="contact.html">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="events.html">Events</a>
                                </li>
                                <li><a href="dashboard.html">Profile</a>
                                </li>
                                <li><a href="contact.html">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- TOP SEARCH BOX -->
        <div class="search-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-form">
                            <form class="tourz-search-form">
                                <div class="input-field">
                                    <input type="text" id="select-city" class="autocomplete">
                                    <label for="select-city">Enter city</label>
                                </div>
                                <div class="input-field">
                                    <input type="text" id="select-search" class="autocomplete">
                                    <label for="select-search" class="search-hotel-type">Search over a million tour and travels, sight seeings, hotels and more</label>
                                </div>
                                <div class="input-field">
                                    <input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn"> </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END TOP SEARCH BOX -->
    </section>
    <!--END HEADER SECTION-->

    <!--DASHBOARD-->
    <section>
        <div class="tr-register">
            <div class="tr-regi-form v2-search-form">
                <h4>Booking by <span>Email</span></h4>
                <p>It's free and always will be.</p>
                <form class="contact__form" method="post" action="#">
                    <div class="alert alert-success contact__msg" style="display: none" role="alert">
                        Thank you for arranging a wonderful trip for us! Our team will contact you shortly!
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" class="validate" name="name" required>
                            <label>Enter your name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input type="number" class="validate" name="phone" required>
                            <label>Enter your phone</label>
                        </div>
                        <div class="input-field col s6">
                            <input type="email" class="validate" name="email" required>
                            <label>Enter your email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" id="select-city-1" class="autocomplete validate" name="city">
                            <label for="select-city-1">Select City or Place</label>
                        </div>
                        <div class="input-field col s12">
                            <select name="package">
                                <option value="" disabled selected>Select your package</option>
                                <option value="Honeymoon Package">Honeymoon Package</option>
                                <option value="Family Package">Family Package</option>
                                <option value="Holiday Package">Holiday Package</option>
                                <option value="Group Package">Group Package</option>
                                <option value="Regular Package">Regular Package</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input type="text" id="from" name="arrival" readonly>
                            <label for="from">Arrival Date</label>
                        </div>
                        <div class="input-field col s6">
                            <input type="text" id="to" name="departure" readonly>
                            <label for="to">Departure Date</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <select name="noofadults">
                                <option value="" disabled selected>No of adults</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                        <div class="input-field col s6">
                            <select name="noofchildrens">
                                <option value="" disabled selected>No of childrens</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <select name="minprice">
                                <option value="" disabled selected>Min Price</option>
                                <option value="$200">$200</option>
                                <option value="$500">$500</option>
                                <option value="$1000">$1000</option>
                                <option value="$5000">$5000</option>
                                <option value="$10,000">$10,000</option>
                                <option value="$50,000">$50,000</option>
                            </select>
                        </div>
                        <div class="input-field col s6">
                            <select name="maxprice">
                                <option value="" disabled selected>Max Price</option>
                                <option value="$200">$200</option>
                                <option value="$500">$500</option>
                                <option value="$1000">$1000</option>
                                <option value="$5000">$5000</option>
                                <option value="$10,000">$10,000</option>
                                <option value="$50,000">$50,000</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="submit" value="Book Now" class="waves-effect waves-light tourz-sear-btn v2-ser-btn">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--END DASHBOARD-->
    <!--====== TIPS BEFORE TRAVEL ==========-->
    <section>
        <div class="rows tips tips-home tb-space home_title">
            <div class="container tips_1">
                <!-- TIPS BEFORE TRAVEL -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <h3>Tips Before Travel</h3>
                    <div class="tips_left tips_left_1">
                        <h5>Bring copies of your passport</h5>
                        <p>Aliquam pretium id justo eget tristique. Aenean feugiat vestibulum blandit.</p>
                    </div>
                    <div class="tips_left tips_left_2">
                        <h5>Register with your embassy</h5>
                        <p>Mauris efficitur, ante sit amet rhoncus malesuada, orci justo sollicitudin.</p>
                    </div>
                    <div class="tips_left tips_left_3">
                        <h5>Always have local cash</h5>
                        <p>Donec et placerat ante. Etiam et velit in massa. </p>
                    </div>
                </div>
                <!-- CUSTOMER TESTIMONIALS -->
                <div class="col-md-8 col-sm-6 col-xs-12 testi-2">
                    <!-- TESTIMONIAL TITLE -->
                    <h3>Customer Testimonials</h3>
                    <div class="testi">
                        <h4>John William</h4>
                        <p>Ut sed sem quis magna ultricies lacinia et sed tortor. Ut non tincidunt nisi, non elementum lorem. Aliquam gravida sodales</p>
                        <address>Illinois, United States of America</address>
                    </div>
                    <!-- ARRANGEMENTS & HELPS -->
                    <h3>Arrangement & Helps</h3>
                    <div class="arrange">
                        <ul>
                            <!-- LOCATION MANAGER -->
                            <li>
                                <a href="#"><img src="{{asset('/theme/admin')}}/images/Location-Manager.png" alt=""> </a>
                            </li>
                            <!-- PRIVATE GUIDE -->
                            <li>
                                <a href="#"><img src="{{asset('/theme/admin')}}/images/Private-Guide.png" alt=""> </a>
                            </li>
                            <!-- ARRANGEMENTS -->
                            <li>
                                <a href="#"><img src="{{asset('/theme/admin')}}/images/Arrangements.png" alt=""> </a>
                            </li>
                            <!-- EVENT ACTIVITIES -->
                            <li>
                                <a href="#"><img src="{{asset('/theme/admin')}}/images/Events-Activities.png" alt=""> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== FOOTER 1 ==========-->
    <section>
        <div class="rows">
            <div class="footer1 home_title tb-space">
                <div class="pla1 container">
                    <!-- FOOTER OFFER 1 -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="disco">
                            <h3>30%<span>OFF</span></h3>
                            <h4>Eiffel Tower,Rome</h4>
                            <p>valid only for 24th Dec</p> <a href="booking.html">Book Now</a>
                        </div>
                    </div>
                    <!-- FOOTER OFFER 2 -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="disco1 disco">
                            <h3>42%<span>OFF</span></h3>
                            <h4>Colosseum,Burj Al Arab</h4>
                            <p>valid only for 18th Nov</p> <a href="booking.html">Book Now</a>
                        </div>
                    </div>
                    <!-- FOOTER MOST POPULAR VACATIONS -->
                    <div class="col-md-6 col-sm-12 col-xs-12 foot-spec footer_places">
                        <h4><span>Most Popular</span> Vacations</h4>
                        <ul>
                            <li><a href="tour-details.html">Angkor Wat</a> </li>
                            <li><a href="tour-details.html">Buckingham Palace</a> </li>
                            <li><a href="tour-details.html">High Line</a> </li>
                            <li><a href="tour-details.html">Sagrada Família</a> </li>
                            <li><a href="tour-details.html">Statue of Liberty </a> </li>
                            <li><a href="tour-details.html">Notre Dame de Paris</a> </li>
                            <li><a href="tour-details.html">Taj Mahal</a> </li>
                            <li><a href="tour-details.html">The Louvre</a> </li>
                            <li><a href="tour-details.html">Tate Modern, London</a> </li>
                            <li><a href="tour-details.html">Gothic Quarter</a> </li>
                            <li><a href="tour-details.html">Table Mountain</a> </li>
                            <li><a href="tour-details.html">Bayon</a> </li>
                            <li><a href="tour-details.html">Great Wall of China</a> </li>
                            <li><a href="tour-details.html">Hermitage Museum</a> </li>
                            <li><a href="tour-details.html">Yellowstone</a> </li>
                            <li><a href="tour-details.html">Musée d'Orsay</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== FOOTER 2 ==========-->
    <section>
        <div class="rows">
            <div class="footer">
                <div class="container">
                    <div class="foot-sec2">
                        <div>
                            <div class="row">
                                <div class="col-sm-3 foot-spec foot-com">
                                    <h4><span>Holiday</span> Tour & Travels</h4>
                                    <p>World's leading tour and travels Booking website,Over 30,000 packages worldwide.</p>
                                </div>
                                <div class="col-sm-3 foot-spec foot-com">
                                    <h4><span>Address</span> & Contact Info</h4>
                                    <p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A. Landmark : Next To Airport</p>
                                    <p> <span class="strong">Phone: </span> <span class="highlighted">+101-1231-1231</span> </p>
                                </div>
                                <div class="col-sm-3 col-md-3 foot-spec foot-com">
                                    <h4><span>SUPPORT</span> & HELP</h4>
                                    <ul class="two-columns">
                                        <li> <a href="#">About Us</a> </li>
                                        <li> <a href="#">FAQ</a> </li>
                                        <li> <a href="#">Feedbacks</a> </li>
                                        <li> <a href="#">Blog </a> </li>
                                        <li> <a href="#">Use Cases</a> </li>
                                        <li> <a href="#">Advertise us</a> </li>
                                        <li> <a href="#">Discount</a> </li>
                                        <li> <a href="#">Vacations</a> </li>
                                        <li> <a href="#">Branding Offers </a> </li>
                                        <li> <a href="#">Contact Us</a> </li>
                                    </ul>
                                </div>
                                <div class="col-sm-3 foot-social foot-spec foot-com">
                                    <h4><span>Follow</span> with us</h4>
                                    <p>Join the thousands of other There are many variations of passages of Lorem Ipsum available</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== FOOTER - COPYRIGHT ==========-->
    <section>
        <div class="rows copy">
            <div class="container">
                <p>Copyrights © 2017 Company Name. All Rights Reserved</p>
            </div>
        </div>
    </section>
    <section>
        <div class="icon-float">
            <ul>
                <li><a href="#" class="sh">1k <br> Share</a> </li>
                <li><a href="#" class="fb1"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                <li><a href="#" class="gp1"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                <li><a href="#" class="tw1"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                <li><a href="#" class="li1"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                <li><a href="#" class="wa1"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
                <li><a href="#" class="sh1"><i class="fa fa-envelope-o" aria-hidden="true"></i></a> </li>
            </ul>
        </div>
    </section>
    <!--======== SCRIPT FILES =========-->
    <script src="{{asset('/theme/travel')}}/js/mail.js"></script>


    <!--========= Scripts ===========-->
    <script src="{{asset('/theme/travel')}}/js/jquery-latest.min.js"></script>
    <script src="{{asset('/theme/travel')}}/js/bootstrap.js"></script>
    <script src="{{asset('/theme/travel')}}/js/wow.min.js"></script>
    <script src="{{asset('/theme/travel')}}/js/materialize.min.js"></script>
    <script src="{{asset('/theme/travel')}}/js/custom.js"></script>
</body>

</html>