<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>
    <!-- header-section start -->
    <header class="header-section-1">
        <div class="header-bottom-layout-2">
            <div class="header-left">
                <div class="logo-wrap-2">
                    <a href="index-2.html">
                        <img src="assets/img/logo/logo-white.svg" alt="logo"/>
                    </a>
                </div>
            </div>
            <div class="w-100 d-none d-xl-block">
                <div class="header-middle">
                    <nav class="main-menu-2 d-none d-xl-block">
                        <ul>
                            <li>
                                <a href="{{ route('welcome') }}">Home</a>
                            </li>

                            <li class="has-dropdown">
                                <a href="#">Funds</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('about-the-fund') }}">About the Fund</a></li>
                                    <li><a href="{{ route('sub-funds') }}">Sub-Funds</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="#">Documents</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('documents') }}">Documents</a></li>
                                    <li><a href="{{ route('governance-service-providers') }}">Governance & Service
                                            Providers</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('about-the-group') }}">About the Group</a></li>
                            <li><a href="{{ route('contact-us') }}">Contact</a></li>
                            <li><a href="{{ route('how-to-invest') }}">How to Invest</a></li>
                        </ul>
                    </nav>
                    <div class="header-info-wrap">
                        <div class="header-info-3 d-none d-xl-flex">
                            <div class="header-info-icon">
                                <i class="fa-regular fa-phone-volume"></i>
                            </div>
                            <div class="header-info-content">
                                <span>Contact Us!</span>
                                <p><a href="tel:+1629555-0129">+1 (629) 555-0129</a></p>
                            </div>
                        </div>
                        <div class="header-btn-wrap d-none d-xl-flex">
                            <a href="about.html" class="e-primary-btn has-icon">
                                Explore More
                                <span class="icon-wrap">
                                    <span class="icon">
                                        <i class="fa-regular fa-arrow-right"></i>
                                        <i class="fa-regular fa-arrow-right"></i>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-right">

                <div class="header-bar-3 d-xl-none" data-toggle="menubar">
                    <div class="bar bar-1"></div>
                    <div class="bar bar-2"></div>
                    <div class="bar bar-3"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-section end -->

    <livewire:off-canvas-menubar/>
</div>
