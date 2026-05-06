<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>
    <!-- header-section start -->
    <header class="header-section">
        <div class="header-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="header-bottom-layout">
                            <div class="header-left">
                                <div class="logo-wrap">
                                    <a href="{{ route('home') }}">
                                        <img src="{{asset('assets/img/logo/fund_logo.svg')}}" alt="logo">
                                    </a>
                                </div>
                                <nav class="main-menu d-none d-xl-block">
                                    <ul>
                                        @foreach (\App\Enums\SiteMenu::cases() as $item)
                                            <li><a href="{{ $item->route() }}">{{ $item->label() }}</a></li>
                                        @endforeach
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-right">

                                <div class="header-bar open-sidebar d-none d-xl-flex" data-toggle="sidebar">
                                    <div class="bar bar-1"></div>
                                    <div class="bar bar-2"></div>
                                    <div class="bar bar-3"></div>
                                </div>
                                <div class="header-bar open-mobile-menu d-xl-none" data-toggle="menubar">
                                    <div class="bar bar-1"></div>
                                    <div class="bar bar-2"></div>
                                    <div class="bar bar-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-section end -->

    <livewire:off-canvas-menubar/>
</div>
