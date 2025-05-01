<div>
    
    <div class="footer bg-main container d-flex flex-wrap justify-content-between">
        <div class="d-flex flex-basis-30 m-flex-basis-100 flex-column justify-content-start gap-10 align-items-center">
            <div class="footer-logo d-flex m-flex-wrap m-justify-content-center">
                <img class="w-auto" src="{{asset($settings->logo)}}" alt="footer-logo" loading="lazy" />
                <img class="w-auto" src="{{asset('imgs/basic/vision-2030-3.png')}}" alt="footer-logo" loading="lazy" />
            </div>
            <div class="description-footer text-white">
                <h5>{{$settings->description_footer}}</h5>
            </div>
            <div class="copyright d-flex justify-content-center flex-column text-white margin-top-auto">
                <h5>{{__('main.copyright')}} © <span id="copyright">2025</span></h5>
                <h6>{{ __('main.develop footer') }}</h6>
            </div>
        </div>

        <div class="d-flex flex-basis-30 m-flex-basis-100 flex-column gap-20 text-white align-items-center">
            <div class="quick-links d-flex flex-column gap-10 align-items-center">
                <h5 class="footer-title">{{__('main.Quick links')}}</h5>
            
                <a href="{{route('home')}}#main" @if (url()->current() != route('home'))
                    wire:navigate.hover
                @endif class="text-secondary-hover transition-duration-500">{{__('main.main')}}</a>
                <a href="{{route('home')}}#about-us" @if (url()->current() != route('home'))
                    wire:navigate.hover
                @endif class="text-secondary-hover transition-duration-500">{{$about_title->title}}</a>
                <a href="{{route('home')}}#services" @if (url()->current() != route('home'))
                    wire:navigate.hover
                @endif class="text-secondary-hover transition-duration-500">{{$service_title->title}}</a>
                <a href="{{route('home')}}#projects" @if (url()->current() != route('home'))
                    wire:navigate.hover
                @endif class="text-secondary-hover transition-duration-500">{{__('main.projects')}}</a>
                <a href="{{route('home')}}#partners" @if (url()->current() != route('home'))
                    wire:navigate.hover
                @endif class="text-secondary-hover transition-duration-500">{{$partner_title->title}}</a>
                <a href="{{route('jobs')}}#content" @if (url()->current() != route('jobs'))
                    wire:navigate.hover
                @endif class="text-secondary-hover transition-duration-500">{{__('main.jobs')}}</a>
                <a href="{{route('home')}}#contact" @if (url()->current() != route('home'))
                    wire:navigate.hover
                @endif class="text-secondary-hover transition-duration-500">{{__('main.connect with us')}}</a>

            </div>
            
            <div class="footer-partners  d-flex flex-column gap-10 align-items-center">
                <h5 class="footer-title">{{__('main.partners')}}</h5>
                @foreach ($partners as $partner)
                    <a class="text-secondary-hover transition-duration-500" href="{{$partner->link}}" target="_blank" rel="noopener noreferrer"><span>{{$partner->name}}</span></a>
                @endforeach
            </div>
        </div>

        <div class="d-flex flex-basis-30 m-flex-basis-100 flex-column gap-10 justify-content-between text-center text-white align-items-center">
            <div class="footer-contacts d-flex gap-10 flex-column">
                <h4 class="footer-title">{{$settings->email}}</h4>
                <h6>{{__('dashboard.phone number') .': '. $settings->phone_number}}</h6>
                <h6>{{__('dashboard.mobile number') .': '. $settings->mobile_number}}</h6>
                <h6>{{__('main.post code') .': '. $settings->post_code}}</h6>
                <h6>{{__('main.s b') . ': '. $settings->sb_number }}</h6>
            </div>
            <div class="footer-social-contacts d-flex gap-10 flex-column">
                <h5>{{__('main.follow us')}}</h5>
                <hr class="opacity-30 w-100" />
                <div class="social-accounts d-flex flex-wrap justify-content-around gap-10">
                    <a height="23" href="{{asset($settings->facebook)}}" target="_blank" rel="noopener noreferrer"><img src="{{asset('imgs/basic/facebook-icon.png')}}" alt="facebook-account"></a>
                    <a height="23" href="{{asset($settings->linkedin)}}" target="_blank" rel="noopener noreferrer"><img src="{{asset('imgs/basic/linkedIn-icon.png')}}" alt="linkedin-account"></a>
                    <a height="23" href="{{asset($settings->instagram)}}" target="_blank" rel="noopener noreferrer"><img src="{{asset('imgs/basic/instagram-icon.png')}}" alt="instagram-account"></a>
                    <a height="23" href="{{asset($settings->twitter)}}" target="_blank" rel="noopener noreferrer"><img src="{{asset('imgs/basic/x-icon.png')}}" alt="x-account"></a>
                    <a height="23" href="{{asset($settings->telegram)}}" target="_blank" rel="noopener noreferrer"><img src="{{asset('imgs/basic/tik-tok.png')}}" alt="tik-tok-account"></a>
                    <a height="23" href="{{asset($settings->whatsapp)}}" target="_blank" rel="noopener noreferrer"><img src="{{asset('imgs/basic/whatsapp-icon.png')}}" alt="whatsapp-account"></a>
                </div>
            </div>
        </div>
    </div>

    <div id="back-to-top" class="back-to-top d-none position-fixed cursor-pointer">
        {{-- <img src="{{asset('imgs/basic/arrow-Icon.png')}}" alt="backToTop" /> --}}
    </div>
</div>
