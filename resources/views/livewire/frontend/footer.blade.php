<div>
    
    <div class="footer bg-main container d-flex flex-wrap justify-content-between">
        <div class="d-flex flex-wrap gap-10 align-items-center">
            <div class="footer-logo">
                <img src="{{asset($settings->logo)}}" alt="footer-logo" loading="lazy" />
            </div>
            <div class="copyright d-flex justify-content-center flex-column text-white">
                <h5>{{$settings->description_footer}} © <span id="copyright">2025</span></h5>
                <h6>{{__('main.develop footer')}}</h6>
            </div>
        </div>
        <div class="d-flex flex-column gap-10 text-white align-items-center">
            <h5>{{__('main.follow us')}}</h5>
            <hr class="opacity-30 w-100" />
            <div class="social-accounts d-flex flex-wrap justify-content-between gap-10">
                <a href="{{asset($settings->facebook)}}" target="_blank" rel="noopener noreferrer"><img src="{{asset('imgs/basic/facebook-icon.png')}}" alt="facebook-account"></a>
                <a href="{{asset($settings->linkedin)}}" target="_blank" rel="noopener noreferrer"><img src="{{asset('imgs/basic/linkedIn-icon.png')}}" alt="linkedin-account"></a>
                <a href="{{asset($settings->instagram)}}" target="_blank" rel="noopener noreferrer"><img src="{{asset('imgs/basic/instagram-icon.png')}}" alt="instagram-account"></a>
                <a href="{{asset($settings->twitter)}}" target="_blank" rel="noopener noreferrer"><img src="{{asset('imgs/basic/x-icon.png')}}" alt="x-account"></a>
                <a href="{{asset($settings->telegram)}}" target="_blank" rel="noopener noreferrer"><img src="{{asset('imgs/basic/telegram-icon.png')}}" alt="telegram-account"></a>
                <a href="{{asset($settings->whatsapp)}}" target="_blank" rel="noopener noreferrer"><img src="{{asset('imgs/basic/whatsapp-icon.png')}}" alt="whatsapp-account"></a>
            </div>
        </div>
    </div>

    <div id="back-to-top" class="back-to-top d-none position-fixed cursor-pointer">
        {{-- <img src="{{asset('imgs/basic/arrow-Icon.png')}}" alt="backToTop" /> --}}
    </div>
</div>
