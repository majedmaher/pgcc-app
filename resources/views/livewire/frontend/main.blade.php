<div>
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
            <div class="about-desc d-flex flex-column gap-50">
                <div class="first">
                    <h2>{{$about->sub_title}}</h2>
                    <h3 class="text-start mt-20">{{$about->sub_description}}</h3>
                </div>
                <div class="second">
                    <h2>{{$about->second_sub_title}}</h2>
                    <h3 class="text-start mt-20">{{$about->second_sub_description}}</h3>
                </div>
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

    <div id="projects" class="projects d-flex flex-column gap-50 position-relative w-100 container border-box my-20 bg-section align-items-center">
        <div class="projects-title">
            <h2>Company Projects</h2>
        </div>
        <div class="projects-content d-grid grid-template-3 grid-gap-30 text-center">
            @foreach ($projects as $project)
            <div class="project-item transition-duration-500 cursor-pointer shadow-hover rounded pb-10">
                <div class="project-item-image">
                    <img class="rounded" height="50px" src="{{asset($project->image)}}" alt="{{$project->title}}">
                </div>
                <div class="project-item-title">
                    <h3>{{$project->title}}</h3>
                </div>
                <div class="project-item-description">
                    <h4>{{$project->description}}</h4>
                </div>
            </div>
            @endforeach
        </div>
        <div class="project-footer">
            <div class="all-project-btn text-white">
                <a class=" transition-duration-500 text-secondary-hover bg-opacity-hover bg-secondary p-20 rounded" href="{{route('projects')}}" wire:navigate.hover target="_blank" rel="noopener noreferrer">{{__('main.all projects')}}</a>
            </div>
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
                <form class="h-100 d-flex justify-content-between flex-column" method="POST" wire:submit.prevent='contactStore'>
                    @csrf
                    <div class="row d-flex flex-wrap justify-content-between">
                        <div class="name-field">
                            <label for="name" for="name" class="name-label @error('name') 'error' @enderror">{{__('main.name')}}</label>
                            <input required="true" wire:model.defer='name' type="text" class="w-100" name="name" id="name" placeholder="{{__('main.name example')}}" />
                            @error('name') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                        </div>
                        <div class="phone-field">
                            <label for="number" class="phone-label @error('phone_number') 'error' @enderror">{{__('dashboard.phone number')}}</label>
                            <div class="phone d-flex justify-content-start gap-3">
                                <input required="true" wire:model.defer='phone_number' class="number" type="number" name="phone_number" id="phone-number" placeholder="00 000 0000" />
                                @error('phone_number') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                                <select required="true" wire:model.defer='intro_number' name="intro_phone" id="itro-phone">
                                    <option selected value="972">+972</option>
                                    <option value="970">+970</option>
                                    <option value="971">+971</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex flex-wrap justify-content-between">
                        <div class="email-field">
                            <label for="email" class="email-label @error('email') 'error' @enderror">{{__('dashboard.email address')}}</label>
                            <input required="true" wire:model.defer='email' type="email" class="w-100" name="email" id="email" placeholder="example@example.example" />
                            @error('email') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                        </div>
                        <div class="subject-field">
                            <label for="subject" class="subject-label @error('subject') 'error' @enderror">{{__('main.subject')}}</label>
                            <input required="true" wire:model.defer='subject' type="text" class="w-100" name="subject" id="subject" placeholder="{{__('main.subject example')}}" />
                            @error('subject') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="textarea-field">
                            <label for="textarea" class="textarea @error('message') 'error' @enderror">{{__('main.How can we help?')}}</label>
                            <textarea wire:model.defer='message' class="w-100" name="message" id="textarea" rows="10" placeholder="{{__('main.Allusive text')}}"></textarea>
                            @error('message') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                        </div>
                    </div>
                    <div class="row buttons d-flex gap-20">
                        <button class="text-white bg-main" type="submit">{{__('main.Send')}}</button>
                        <a href="{{$settings->whatsapp}}" target="_blank" rel="noopener noreferrer">{{__('main.Send a message on WhatsApp')}}</a>
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

</div>

@push('seo')
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
@endpush

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('assets/frontend/owl-carousel.js')}}"></script>
@endpush