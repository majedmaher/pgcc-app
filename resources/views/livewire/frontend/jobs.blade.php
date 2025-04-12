<div>
    <div id="content">
        <div id="job" class="contact container d-flex">
            <div class="contact-form d-flex flex-column">
                <div class="contact-header">
                    <h2 class="text-start">{{__('main.apply for a job')}}</h2>
                </div>
                <div class="form h-100 mt-20">
                    <form class="h-100 d-flex justify-content-between flex-column gap-20" method="POST" wire:submit.prevent='save'>
                        @csrf
                        <div class="row d-flex flex-wrap justify-content-between">
                            <div class="name-field">
                                <label for="name" for="name" class="name-label @error('name') 'error' @enderror">{{__('main.name')}}</label>
                                <input required="true" wire:model.defer='name' type="text" class="w-100" name="name" id="name" placeholder="{{__('main.name example')}}" />
                                @error('name') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                            </div>
                            <div class="phone-field">
                                <label for="number" class="phone-label @error('phone_number') 'error' @enderror">{{__('dashboard.mobile number')}}</label>
                                <div class="phone d-flex justify-content-start gap-3">
                                    <input required="true" wire:model.defer='phone_number' class="number" type="number" name="phone_number" id="phone-number" placeholder="505760252" />
                                    @error('phone_number') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                                    <select required="true" wire:model.defer='intro_number' name="intro_phone" id="itro-phone">
                                        <option selected value="966">+966</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex flex-wrap justify-content-between">
                            <div class="email-field">
                                <label for="email" class="email-label @error('email') 'error' @enderror">{{__('dashboard.email address')}}</label>
                                <input required="true" wire:model.defer='email' type="email" class="w-100" name="email" id="email" placeholder="{{__('dashboard.email address example')}}" />
                                @error('email') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                            </div>
                            <div class="cv-field">
                                <label for="cv" class="cv-label @error('cv') 'error' @enderror">{{__('main.cv')}}</label>
                                <input required="true" wire:model.defer='cv' type="file" class="w-100" name="cv" id="cv" />
                                @error('cv') <span class="error">{{ __('dashboard.required') }}</span> @enderror
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
                        </div>
                    </form>
                </div>
            </div>
            <div class="contact-detail d-flex flex-column p-20">
                

                <div class="accordion">
                    @foreach ($jobs as $job)
                        <button class="accordion-btn">{{$job->title}}</button>
                        <div class="panel">
                            <p>{{$job->description}}</p>
                        </div>
                    @endforeach
                </div>

                {{-- <div class="wrapper">
                    <div class="accordion active">
                        <div class="accordion_tab active">
                            Accordion Title
                            <div class="accordion_arrow">
                                <img src="https://i.imgur.com/PJRz0Fc.png" alt="arrow">
                            </div>
                        </div>
                        <div class="accordion_content">
                            <div class="accordion_item">
                            <p class="item_title">Accordion SubTitle</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto quis sed praesentium dolorem hic ipsam maiores magnam voluptatem deleniti sunt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion_tab">
                            Accordion Title
                            <div class="accordion_arrow">
                                <img src="https://i.imgur.com/PJRz0Fc.png" alt="arrow">
                            </div>
                        </div>
                        <div class="accordion_content">
                            <div class="accordion_item">
                            <p class="item_title">Accordion SubTitle</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto quis sed praesentium dolorem hic ipsam maiores magnam voluptatem deleniti sunt.</p>
                            </div>
                            <div class="accordion_item">
                            <p class="item_title">Accordion SubTitle</p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto quis sed praesentium dolorem hic ipsam maiores magnam voluptatem deleniti sunt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion">
                        <div class="accordion_tab">
                            Accordion Title
                            <div class="accordion_arrow">
                                <img src="https://i.imgur.com/PJRz0Fc.png" alt="arrow">
                            </div>
                        </div>
                        <div class="accordion_content">
                        <div class="accordion_item">
                        <p class="item_title">Accordion SubTitle</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto quis sed praesentium dolorem hic ipsam maiores magnam voluptatem deleniti sunt.</p>
                        </div>
                        <div class="accordion_item">
                        <p class="item_title">Accordion SubTitle</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto quis sed praesentium dolorem hic ipsam maiores magnam voluptatem deleniti sunt.</p>
                        </div>
                    </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
