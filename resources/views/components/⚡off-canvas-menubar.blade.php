<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
    <!-- off-canvas-menubar start -->
    <div class="off-canvas-menubar">
        <div class="off-canvas-menubar-body">
            <div class="off-canvas-head">
                <div class="off-canvas-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/img/logo/fund_logo.svg') }}" alt="logo" />
                    </a>
                </div>
                <div class="off-canvas-menubar-close" data-close="menubar">
                    <i class="fa-regular fa-xmark"></i>
                </div>
            </div>

            <div class="off-canvas-menu">
                <ul>
                    @foreach (\App\Enums\SiteMenu::cases() as $item)
                        <li><a href="{{ $item->route() }}">{{ $item->label() }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="off-canvas-menubar-overlay" data-close="menubar"></div>
    </div>
    <!-- off-canvas-menubar end -->
</div>
