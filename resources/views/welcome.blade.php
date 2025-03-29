<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="{{isset($settings->description) ?? $settings->description}}">
        <meta name="keywords" content="{{isset($settings->keywords) ?? $settings->keywords}}">
        <meta name="author" content="Majed Maher">
        <link rel="shortcut icon" type="x-icon" href="{{asset($settings->logo)}}">
        <link rel="canonical" href="{{ url()->current() }}" />

        {{-- <link rel="stylesheet" href="{{asset('assets/frontend/style.min.css')}}" /> --}}
       <link rel="stylesheet" href="{{asset('assets/frontend/style.css')}}" />
       <link rel="stylesheet" media="(max-width: 768px)" href="{{asset('assets/frontend/responsive.css')}}">
        <title>{{isset($settings->title) ? $settings->title : "PGCC Company"}}</title>
        <link rel="apple-touch-icon" href="{{asset($settings->logo)}}">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

      </head>
{{-- <body> --}}
    <body {{app()->getLocale() == 'en' ? 'class=ltr' : ''}}>
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
                        <a href="#main" class="nav-link transition-duration-500">{{__('main.main')}}</a>
                        <a href="#about-us" class="nav-link transition-duration-500">{{$about->title}}</a>
                        <a href="#services" class="nav-link transition-duration-500">{{$service->title}}</a>
                        <a href="#partners" class="nav-link transition-duration-500">{{$partner->title}}</a>
                        <a href="#contact" class="nav-link transition-duration-500">{{__('main.connect with us')}}</a>
                    </div>
                    <div class="nav-actions text-white">
                        <a href="#contact" rel="noopener noreferrer" class=" order-button transition-duration-500 text-secondary-hover bg-white-hover banner-order-btn-1">{{__('main.order now')}}</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="main" class="border-box position-relative overflow-hidden">
            <div class="banner w-100 d-flex flex-column justify-content-center align-items-center text-white">
                <div class="scroll-down-icon z-1 position-absolute float-start-10">
                    <img src="{{asset('imgs/basic/go-to-down-icon.png')}}" alt="scroll-down" srcset="" loading="lazy" />
                </div>
                <div class="banner-title text-center">
    
                    <h1>{{$settings->main_title}}</h1>
                    <h2 class="tajawal-medium text-white">{{$settings->description_main}}</h2>
                </div>
                <div class="banner-action-buttons d-flex  mt-50 gap-20 align-items-center z-1">
                    <div class="banner-order-btn">
                        <a href="#contact" rel="noopener noreferrer" class="banner-order-btn-1 text-secondary-hover bg-white-hover transition-duration-500">{{__('main.order now')}}</a>
                    </div>
                    <div class="banner-order-btn">
                        <a href="{{asset($settings->profile)}}" target="_blank" rel="noopener noreferrer"class="banner-order-btn-2 text-decoration-underline">{{__('main.download profile')}}</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="about-us" class="analysis position-relative w-100 container border-box my-20 bg-section">
            <div class="analysis-items rounded d-flex flex-wrap gap-5 justify-content-between align-items-center border-box p-20">
                @foreach ($about_statics as $key => $about_static )  
                    <div class="analysis-item d-flex flex-column align-items-center">
                        <div class="analysis-icon">
                            <img src="{{asset($about_static->image)}}" alt="analysis-icon" loading="lazy" />
                        </div>
                        <div class="analysis-title">
                            @if (app()->getLocale() == 'ar')
                                <span>{{$about_static->before_number . $about_static->after_number}}<span id="counter-item-{{$key}}" class="counter-item" data-count="{{$about_static->number}}">{{$about_static->number}}</span></span>
                            @else
                                <span>{{$about_static->before_number}}<span id="counter-item-{{$key}}" class="counter-item" data-count="{{$about_static->number}}">{{$about_static->number}}</span>{{$about_static->after_number}}</span>
                            @endif
                        </div>
                        <div class="analysis-description">
                            <span>{{$about_static->description}}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="about-us container bg-section">
            <div class="about-header d-flex flex-column">
                <h2>{{$about->title}}</h2>
                <h3 class="mt-10">{{$about->description}}</h3>
            </div>
            <div class="about-content mt-20 d-flex align-items-center">
                <div>
                    <div class="about-cards d-flex flex-column gap-20">
                        <div class="about-card d-flex">
                            <div class="card-icon">
                                <img src="{{asset($about->first_card_image)}}" alt="card-icon" loading="lazy" />
                            </div>
                            
                            <div class="card-desc">
                                <h3>{{$about->first_card_title}}</h3>
                                <h4>{{$about->first_card_description}}</h4>
                            </div>
                        </div>
                        <div class="about-card d-flex">
                            <div class="card-icon">
                                <img src="{{asset($about->second_card_image)}}" alt="card-icon" loading="lazy" />
                            </div>
                            
                            <div class="card-desc">
                                <h3>{{$about->second_card_title}}</h3>
                                <h4>{{$about->second_card_description}}</h4>
                            </div>
                        </div>
                        <div class="about-card d-flex">
                            <div class="card-icon">
                                <img src="{{asset($about->third_card_image)}}" alt="card-icon" loading="lazy" />
                            </div>
                            
                            <div class="card-desc">
                                <h3>{{$about->third_card_title}}</h3>
                                <h4>{{$about->third_card_description}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-desc">
                    <h2>{{$about->sub_title}}</h2>
                    <h3 class="text-start mt-20">{{$about->sub_description}}</h3>
                </div>
            </div>
        </div>

        <div id="services" class="services container">
            <div class="services-header d-flex flex-column">
                <h2>{{$service->title}}</h2>
                <h3 class="mt-10">{{$service->description}}</h3>
            </div>
            <div class="services-content d-flex flex-wrap gap-20 mt-20 justify-content-around">
                @foreach ($service_items as $service_item)
                <div class="service-item">
                    <div class="service-content text-white">
                        <div class="service-icon">
                            <img src="{{asset($service_item->image)}}" alt="service-icon" loading="lazy">
                        </div>
                        <h3 class="service-title text-white text-start mt-10">{{$service_item->title}}</h3>
                        <h4 class="service-desc text-start mt-10">{{$service_item->description}}</h4>
                    </div>
                    <div class="service-order mt-10">
                        <a href="#contact" rel="noopener noreferrer">{{__('main.order now')}}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div id="partners" class="partners container bg-section">
            <div class="partners-header d-flex flex-column">
                <h2>{{$partner->title}}</h2>
                <h3 class="mt-10">{{$partner->description}}</h3>
            </div>
            <div class="partners-carousel mt-10">
                <div class="owl-carousel owl-theme">
                    @foreach ($partner_items as $partner_item)
                        <div class="item"><img src="{{asset($partner_item->image)}}" alt="partner-item"></div>
                    @endforeach
                </div>
                
            </div>
        </div>

        <div id="contact" class="contact container d-flex">
            <div class="contact-form d-flex flex-column">
                <div class="contact-header">
                    <h2 class="text-start">{{__('main.connect with us')}}</h2>
                    <h3 class="text-start mt-20">{{__('contact description')}}</h3>
                </div>
                <div class="form h-100 mt-20">
                    <form class="h-100 d-flex justify-content-between flex-column" method="post">
                        @csrf
                        <div class="row d-flex flex-wrap justify-content-between">
                            <div class="name-field">
                                <label for="name" class="name-label">{{__('main.name')}}</label>
                                <input required type="text" class="w-100" name="name" id="name" placeholder="{{__('main.name example')}}" />
                            </div>
                            <div class="phone-field">
                                <label for="number" class="phone-label">{{__('dashboard.phone number')}}</label>
                                <div class="phone d-flex justify-content-start gap-3">
                                    <input required class="number" type="number" name="phone_number" id="phone-number" placeholder="00 000 0000" />
                                    <select name="intro_phone" id="itro-phone">
                                        <option value="972">+972</option>
                                        <option value="970">+970</option>
                                        <option value="971">+971</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex flex-wrap justify-content-between">
                            <div class="email-field">
                                <label for="email" class="email-label">{{__('dashboard.email address')}}</label>
                                <input required type="email" class="w-100" name="email" id="email" placeholder="example@example.example" />
                            </div>
                            <div class="subject-field">
                                <label for="subject" class="subject-label">{{__('main.subject')}}</label>
                                <input required type="text" class="w-100" name="subject" id="subject" placeholder="{{__('main.subject example')}}" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="textarea-field">
                                <label for="textarea" class="textarea">{{__('main.How can we help?')}}</label>
                                <textarea class="w-100" name="message" id="textarea" rows="10" placeholder="{{__('main.Allusive text')}}"></textarea>
                            </div>
                        </div>
                        <div class="row buttons d-flex gap-20">
                            <button class="text-white bg-main" type="submit">{{__('main.Send')}}</button>
                            <a href="https://whatsapp.com" target="_blank" rel="noopener noreferrer">{{__('main.Send a message on WhatsApp')}}</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="contact-detail d-flex flex-column p-20">
                <h2 class="text-start">{{__('main.our location')}}</h2>
                <h4>{{__('main.location description')}}</h4>
                <iframe class="w-100 mt-10" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d115950.79797401329!2d46.67701!3d24.745329!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1742479256826!5m2!1sen!2sus" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="contact-logo text-center mt-10">
                <img class="w-30" src="{{asset($settings->logo)}}" alt="logo" loading="lazy" />
                </div>
            </div>
        </div>

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

        <div class="back-to-top position-fixed cursor-pointer">
            <img src="{{asset('imgs/basic/arrow-Icon.png')}}" alt="backToTop" />
        </div>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        <script src="{{asset('assets/frontend/main.js')}}"></script>
</body>
</html>