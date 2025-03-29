<div class="mt-100 w-100">
    <div class="card p-20">

        <h3>{{__('dashboard.settings')}}</h3>
        <h4>{{__('dashboard.settings description')}}</h4>
        <div class="card m-10 p-50-100 md-p-20 shadow">
            <form class="w-100 d-flex flex-column gap-50" wire:submit.prevent='updateSetting'>
                <div class="d-grid grid-template-2 sm-grid-template-1 grid-gap-20">
                    <div class="grid-column-full">
                        <h4>{{__('dashboard.main section')}}</h4>
                    </div>
                    
                    <div class="form-group">
                        <label  @error('main_title_ar') class="error" @enderror for="main-title-arabic">{{__('dashboard.main title')}} ({{__('dashboard.arabic')}})</label>
                        <input required='false' type="text" name="main-title-arabic" @error('main_title_ar') class="is-invalid" @enderror wire:model.defer='main_title_ar' id="main-title-arabic" />
                        @error('main_title_ar') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label @error('main_title_en') class="error" @enderror for="main-title-english">{{__('dashboard.main title')}} ({{__('dashboard.english')}})</label>
                        <input required='false' type="text" name="main-title-english" @error('main_title_en') class="is-invalid" @enderror wire:model.defer='main_title_en' id="main-title-english" />
                        @error('main_title_en') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label @error('main_description_ar') class="error" @enderror for="description-main-arabic">{{__('dashboard.description main')}} ({{__('dashboard.arabic')}})</label>
                        <input required='false' type="text" name="description-main-arabic" @error('main_description_ar') class="is-invalid" @enderror wire:model.defer='main_description_ar' id="description-main-arabic" />
                        @error('main_description_ar') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label @error('main_description_en') class="error" @enderror for="description-main-english">{{__('dashboard.description main')}} ({{__('dashboard.english')}})</label>
                        <input required='false' type="text" name="description-main-english" @error('main_description_en') class="is-invalid" @enderror wire:model.defer='main_description_en' id="description-main-english" />
                        @error('main_description_en') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                </div>
                <div class="d-grid grid-template-2 sm-grid-template-1 grid-gap-20">
                    <div class="grid-column-full">
                        <h4>{{__('dashboard.footer section')}}</h4>
                    </div>
                    
                    <div class="form-group grid-column-full">
                        <label @error('description_footer_ar') class="error" @enderror for="description-footer-arabic">{{__('dashboard.description footer') . ' (' . __('dashboard.arabic') . ')'}}</label>
                        <textarea name="description-footer-arabic" wire:model.defer='description_footer_ar' @error('description_footer_ar') class="is-invalid" @enderror id="description-footer-arabic" cols="30" rows="4"></textarea>
                        @error('description_footer_ar') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group grid-column-full">
                        <label @error('description_footer_en') class="error" @enderror for="description-footer-english">{{__('dashboard.description footer') . ' (' . __('dashboard.english') . ')'}}</label>
                        <textarea name="description-footer-english" wire:model.defer='description_footer_en' @error('description_footer_en') class="is-invalid" @enderror id="description-footer-english" cols="30" rows="4"></textarea>
                        @error('description_footer_en') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                </div>

                <div class="d-grid grid-template-3 sm-grid-template-1 grid-gap-20">
                    <div class="grid-column-full">
                        <h4>{{__('dashboard.social media accounts')}}</h4>
                    </div>
                    
                    <div class="form-group">
                        <label @error('whatsapp') class="error" @enderror for="whatsapp">{{__('dashboard.whatsapp account')}}</label>
                        <input required='false' type="text" wire:model.defer='whatsapp' @error('whatsapp') class="is-invalid" @enderror name="whatsapp" id="whatsapp" />
                        @error('whatsapp') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label @error('twitter') class="error" @enderror for="twitter">{{__('dashboard.twitter account')}}</label>
                        <input required='false' type="text" wire:model.defer='twitter' @error('twitter') class="is-invalid" @enderror name="twitter" id="twitter" />
                        @error('twitter') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label @error('linkedin') class="error" @enderror for="linkedin">{{__('dashboard.linkedin account')}}</label>
                        <input required='false' type="text" wire:model.defer='linkedin' @error('linkedin') class="is-invalid" @enderror name="linkedin" id="linkedin" />
                        @error('linkedin') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                </div>
                <div class="d-grid grid-template-3 sm-grid-template-1 grid-gap-20">
                    <div class="grid-column-full">
                        <h4>{{__('dashboard.social media accounts')}}</h4>
                    </div>
                    
                    <div class="form-group">
                        <label @error('instagram') class="error" @enderror for="instagram">{{__('dashboard.instagram account')}}</label>
                        <input required='false' type="text" wire:model.defer='instagram' @error('instagram') class="is-invalid" @enderror name="instagram" id="instagram" />
                        @error('instagram') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label @error('facebook') class="error" @enderror for="facebook">{{__('dashboard.facebook account')}}</label>
                        <input required='false' type="text" wire:model.defer='facebook' @error('facebook') class="is-invalid" @enderror name="facebook" id="facebook" />
                        @error('facebook') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label @error('telegram') class="error" @enderror for="telegram">{{__('dashboard.telegram account')}}</label>
                        <input required='false' type="text" wire:model.defer='telegram' @error('telegram') class="is-invalid" @enderror name="telegram" id="telegram" />
                        @error('telegram') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                </div>

                
<hr />
               

                <div class="d-grid grid-template-2 sm-grid-template-1 grid-gap-20">
                    <div class="grid-column-full">
                        <h3>SEO</h3>
                    </div>

                    <div class="form-group">
                        <label  @error('title_ar') class="error" @enderror for="main-title-arabic">{{__('dashboard.title website')}} ({{__('dashboard.arabic')}})</label>
                        <input required='false' type="text" name="main-title-arabic" @error('title_ar') class="is-invalid" @enderror wire:model.defer='title_ar' id="main-title-arabic" />
                        @error('title_ar') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label @error('title_en') class="error" @enderror for="main-title-english">{{__('dashboard.title website')}} ({{__('dashboard.english')}})</label>
                        <input required='false' type="text" name="main-title-english" @error('title_en') class="is-invalid" @enderror wire:model.defer='title_en' id="main-title-english" />
                        @error('title_en') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group grid-column-full">
                        <label for="description-arabic">{{__('dashboard.description') . ' (' . __('dashboard.arabic') . ')'}}</label>
                        <textarea wire:model.defer='description_ar' name="description-arabic" id="description-arabic" cols="30" rows="3"></textarea>
                    </div>
                    <div class="form-group grid-column-full">
                        <label for="description-english">{{__('dashboard.description') . ' (' . __('dashboard.english') . ')'}}</label>
                        <textarea wire:model.defer='description_en' name="description-english" id="description-english" cols="30" rows="3"></textarea>
                    </div>

                    <div class="form-group grid-column-full">
                        <label for="keywords-arabic">{{__('dashboard.keywords') . ' (' . __('dashboard.arabic') . ')'}}</label>
                        <input required='false' type="text" wire:model.defer='keywords_ar' name="keywords-arabic" id="keywords-arabic" data-role="tagsinput" />
                    </div>
                    <div class="form-group grid-column-full">
                        <label for="keywords-english">{{__('dashboard.keywords') . ' (' . __('dashboard.english') . ')'}}</label>
                        <input required='false' type="text" wire:model.defer='keywords_en' name="keywords-english" id="keywords-english" data-role="tagsinput" />
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="save">
                        <button type="submit">{{__('dashboard.save the changes')}}</button>
                    </div>
                </div>
            </form>

            <br />
            <br />
            <br />
            <hr />
            
            <form class="w-100 d-flex flex-column gap-50" wire:submit.prevent='updateLogo'>
                <div class="d-grid grid-template-2 sm-grid-template-1 grid-gap-20">
                        <div class="grid-column-full">
                            <h3>{{__('dashboard.files section')}}</h3>
                        </div>
                        <div class="form-group">
                            <label for="logo">{{__('dashboard.logo')}}</label>
                            <input required="false" type="file" name="logo" wire:model.defer='logo' id="logo" accept="image/png, image/jpg, image/gif, image/jpeg, image/webp" />
                            <div wire:loading wire:target="logo">Uploading...</div>
                        </div>
                        <div class="form-group text-center">
                            <img src="{{asset($logo_img)}}" alt="{{$main_title_ar}}">
                        </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="save">
                        <button type="submit">{{__('dashboard.upload logo')}}</button>
                    </div>
                </div>
            </form>

            <br />
            <hr />

            <form class="w-100 d-flex flex-column gap-50" wire:submit.prevent='updateProfile'>
                <div class="d-grid grid-template-2 sm-grid-template-1 grid-gap-20">
                        <div class="form-group">
                            <label for="image-who-are-we">{{__('dashboard.profile file')}}</label>
                            <input required='false' type="file" name="image-who-are-we" wire:model.defer='profile' id="image-who-are-we" / />
                            <div wire:loading wire:target="profile">Uploading...</div>
                        </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="save">
                        <button type="submit">{{__('dashboard.upload profile')}}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@push('styles')
<link rel="stylesheet" href="{{asset('assets/dashboard/tagsinput.css')}}" /> 
@endpush

@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.6.0/bootstrap-tagsinput.min.js" integrity="sha512-SXJkO2QQrKk2amHckjns/RYjUIBCI34edl9yh0dzgw3scKu0q4Bo/dUr+sGHMUha0j9Q1Y7fJXJMaBi4xtyfDw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endpush