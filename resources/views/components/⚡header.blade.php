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
                <div class="logo-wrap">
                    <a href="{{ route('home') }}">
                        <img src="{{asset('assets/img/logo/fund_logo.svg')}}" alt="logo">
                    </a>
                </div>
            </div>
            <div class="w-100 d-none d-xl-block">
                <div class="header-middle">
                    <nav class="main-menu-2 d-none d-xl-block">
                        <ul>
                            @foreach (\App\Enums\SiteMenu::cases() as $item)
                                <li><a href="{{ $item->route() }}">{{ $item->label() }}</a></li>
                            @endforeach
                        </ul>
                    </nav>

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
