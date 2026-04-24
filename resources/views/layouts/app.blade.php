<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100..900;1,100..900&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet" />

    <!-- Vendors Css -->
    <link rel="stylesheet" href="assets/vendor/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendor/fontawesome-pro/fontawesome.min.css" />
    <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/vendor/aos/aos.css" />
    <link rel="stylesheet" href="assets/vendor/fancybox/fancybox.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/spacing.css" />
    <link rel="stylesheet" href="assets/css/main.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body>
    <!-- preloader start-->
    <div id="preloader">
        <div class="preloader">
            <img src="assets/img/thumbs/preloader.gif" alt="preloader">
        </div>
    </div>
    <!-- preloader end  -->
    @if (request()->route()->getName() === 'welcome')
        <livewire:header />
    @else
        <livewire:header-secondary />
    @endif
    {{ $slot }}
    <main>
        @livewireScripts
    </main>
    <!-- footer-section start -->
    <footer class="footer-section footer-section-2 p-t-125 p-t-md-100 p-t-xs-80 p-b-50">
        <div class="container">
            <div class="row justify-content-between row-gap-md-5 row-gap-4 p-b-80">
                <div class="col-xl-4 col-lg-8 col-md-7">
                    <div class="footer-widget">
                        <div class="about-widget">
                            <div class="footer-logo">
                                <a href="index-2.html">
                                    <img src="assets/img/logo/logo-white.svg" alt="logo" />
                                </a>
                            </div>
                            <div class="text">
                                <p>
                                    Introducing our team of talented and skilled professionals
                                    who are ready to increase your productivity and bring your
                                    business.
                                </p>
                            </div>
                            <div class="info">
                                <p><b>We Are Available !!</b></p>
                                <p>Mon-Sat: <span>10:00am to 07:30pm</span></p>
                            </div>
                            <div class="social-links">
                                <a href="https://facebook.com/">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://twitter.com/">
                                    <i class="fab fa-x-twitter"></i>
                                </a>
                                <a href="https://www.instagram.com/">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://linkedin.com/">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-5">
                    <div class="footer-widget">
                        <h3 class="w-title">
                            <span><img src="assets/img/icons/icon-1.svg" alt="icon" /></span>
                            Quick Links
                        </h3>
                        <ul>
                            <li><a href="about.html">About Company</a></li>
                            <li><a href="services.html">Our Causes</a></li>
                            <li><a href="camping-donation.html">Investor Presentation</a></li>
                            <li><a href="donations.html">Pricing Plan</a></li>
                            <li><a href="volunteer.html">Meet Our Team</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-5">
                    <div class="footer-widget">
                        <h3 class="w-title">
                            <span><img src="assets/img/icons/icon-1.svg" alt="icon" /></span>
                            Our Services
                        </h3>
                        <ul>
                            <li><a href="camping-details.html">Tree Plantation</a></li>
                            <li><a href="camping-donation.html">Forest Cleaning</a></li>
                            <li><a href="services-details.html">Plastic Recycling</a></li>
                            <li><a href="project.html">Natural Power</a></li>
                            <li><a href="project.html">Renewable Energy</a></li>
                            <li><a href="project-details.html">Water Refine</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-5">
                    <div class="footer-widget">
                        <h3 class="w-title">
                            <span><img src="assets/img/icons/icon-1.svg" alt="icon" /></span>
                            Get in Touch
                        </h3>
                        <div class="get-in-touch">
                            <a href="#" class="footer-address">
                                <div class="icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="text">
                                    <h6>Address</h6>
                                    <p>Jones Street, New York, USA</p>
                                </div>
                            </a>
                            <a href="mailto:support@example.com" class="email">
                                <div class="icon">
                                    <i class="fa-solid fa-paper-plane"></i>
                                </div>
                                <div class="text">
                                    <h6>Email</h6>
                                    <p>Support@example.com</p>
                                </div>
                            </a>
                            <a href="tel:+70264566579" class="phone">
                                <div class="icon">
                                    <i class="fa-solid fa-phone-arrow-up-right"></i>
                                </div>
                                <div class="text">
                                    <h6>Phone</h6>
                                    <p>+70 264 566 579</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="row">
                <div class="col-xl-12">
                    <div class="container">
                        <div class="footer-bottom-layout">
                            <div class="footer-copyright">
                                © 2026 Econest. All Rights Reserved.
                            </div>
                            <div class="footer-bottom-menu">
                                <ul>
                                    <li><a href="contact.html">Terms & Condition</a></li>
                                    <li><a href="contact.html">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-section end -->

    <!-- Vendors Js -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/popper/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/fancybox/fancybox.umd.js"></script>
    <script src="assets/vendor/counter/purecounter.js"></script>

    <!-- Main Js -->
    <script src="assets/js/script.js"></script>
</body>

</html>
