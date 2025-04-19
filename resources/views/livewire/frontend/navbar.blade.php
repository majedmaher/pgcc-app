<div>
    <div class="header content position-fixed z-99">
        <div class="nav-header transition-duration-500 shadow w-100 d-flex flex-wrap justify-content-between align-items-center container pt-10 pb-10">
            <div class="header-content w-100 d-flex justify-content-between align-items-center">
                <div class="nav-logo d-flex justify-content-between">
                    <a href="#main">
                        <div class="logo-img">
                            <img src="{{asset($settings->logo)}}" alt="logo-pgcc" loading="lazy" />
                        </div>
                    </a>

                    <div class="menu-icon">
                        <div class="menu-box cursor-pointer d-none">
                            <span for='menu-toggle' class="menu-icon d-flex align-items-center w-100 h-100">
                            <div class="menu-button"></div>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="nav-content d-flex flex-wrap justify-content-between text-white">
                    <a href="{{route('home')}}#main" @if (url()->current() != route('home'))
                        wire:navigate.hover
                    @endif class="nav-link transition-duration-500">{{__('main.main')}}</a>
                    <a href="{{route('home')}}#about-us" @if (url()->current() != route('home'))
                        wire:navigate.hover
                    @endif class="nav-link transition-duration-500">{{$about_title->title}}</a>
                    <a href="{{route('home')}}#services" @if (url()->current() != route('home'))
                        wire:navigate.hover
                    @endif class="nav-link transition-duration-500">{{$service_title->title}}</a>
                    <a href="{{route('home')}}#projects" @if (url()->current() != route('home'))
                        wire:navigate.hover
                    @endif class="nav-link transition-duration-500">{{__('main.projects')}}</a>
                    <a href="{{route('home')}}#partners" @if (url()->current() != route('home'))
                        wire:navigate.hover
                    @endif class="nav-link transition-duration-500">{{$partner_title->title}}</a>
                    <a href="{{route('jobs')}}#content" @if (url()->current() != route('jobs'))
                        wire:navigate.hover
                    @endif class="nav-link transition-duration-500">{{__('main.jobs')}}</a>
                    <a href="{{route('home')}}#contact" @if (url()->current() != route('home'))
                        wire:navigate.hover
                    @endif class="nav-link transition-duration-500">{{__('main.connect with us')}}</a>
                </div>
                <div class="nav-actions text-white">
                    <a href="{{route('home')}}#contact" wire:navigate.hover rel="noopener noreferrer" class=" order-button transition-duration-500 text-secondary-hover bg-white-hover banner-order-btn-1">{{__('main.order now')}}</a>
                    <a href="{{app()->getLocale() == 'ar' ? LaravelLocalization::getLocalizedURL('en') : LaravelLocalization::getLocalizedURL('ar') }}" wire:navigate.hover rel="noopener noreferrer" class=" order-button transition-duration-500 p-20 text-white text-secondary-hover">{{app()->getLocale() == 'ar' ? 'English' : 'العربية'}}</a>
                </div>
            </div>
        </div>
    </div>

    <div id="main" class="border-box d-block position-relative overflow-hidden">
        <video autoplay muted loop id="myVideo">
            <source src="{{asset($settings->background_video)}}" type="video/mp4">
        </video>
        <div class="banner w-100 d-flex flex-column justify-content-center align-items-center text-white">
            <div id="animation-container" class="scroll-down-icon z-1 position-absolute float-start-10">
                {{-- <img src="{{asset('imgs/basic/scrolldown.svg')}}" alt="scroll-down" srcset="" loading="lazy" /> --}}
            </div>
            <div class="banner-title text-center z-10">

                <h1>{{$settings->main_title}}</h1>
                <h2 class="tajawal-medium text-white">{{$settings->description_main}}</h2>
            </div>
            <div class="banner-action-buttons d-flex  mt-50 gap-20 align-items-center z-1">
                <div class="banner-order-btn">
                    <a href="#contact" rel="noopener noreferrer" class="banner-order-btn-1 text-secondary-hover bg-white-hover transition-duration-500">{{__('main.order now')}}</a>
                </div>
                <div class="banner-order-btn">
                    <a href="{{asset($settings->profile)}}" target="_blank" rel="noopener noreferrer"class="banner-order-btn-2 bg-opacity-hover transition-duration-500 text-decoration-underline">{{__('main.download profile')}}</a>
                </div>
            </div>
        </div>
    </div>
</div>
