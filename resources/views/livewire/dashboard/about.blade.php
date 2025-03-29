<div class="mt-100 w-100">
    <div class="card p-20">

        <h3>{{__('main.about us')}}</h3>
        <h4>{{__('dashboard.page description', ['name'=> __('main.about us')])}}</h4>
        <div class="card m-10 p-50-100 md-p-20 shadow"> 
            

            <form class="w-100 d-flex flex-column gap-50" method="POST" wire:submit.prevent='updateAbout'>
                <div class="d-grid grid-template-2 sm-grid-template-1 grid-gap-20">
                    <div class="grid-column-full">
                        <h4>{{__('dashboard.update item', ['name'=> __('dashboard.about section')])}}</h4>
                    </div>
                    <div class="form-group">
                        <label  @error('title_ar') class="error" @enderror for="title-arabic">{{__('dashboard.title')}} ({{__('dashboard.arabic')}})</label>
                        <input type="text" name="title-arabic" @error('title_ar') class="is-invalid" @enderror wire:model.defer='title_ar' id="title-arabic">
                        @error('title_ar') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label @error('title_en') class="error" @enderror for="title-english">{{__('dashboard.title')}} ({{__('dashboard.english')}})</label>
                        <input type="text" name="title-english" @error('title_en') class="is-invalid" @enderror wire:model.defer='title_en' id="title-english">
                        @error('title_en') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label  @error('description_ar') class="error" @enderror for="description-arabic">{{__('dashboard.description')}} ({{__('dashboard.arabic')}})</label>
                        <input type="text" name="description-arabic" @error('description_ar') class="is-invalid" @enderror wire:model.defer='description_ar' id="description-arabic">
                        @error('description_ar') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label @error('description_en') class="error" @enderror for="description-english">{{__('dashboard.description')}} ({{__('dashboard.english')}})</label>
                        <input type="text" name="description-english" @error('description_en') class="is-invalid" @enderror wire:model.defer='description_en' id="description-english">
                        @error('description_en') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                </div>
                <div class="d-grid grid-template-2 sm-grid-template-1 grid-gap-20">
                    
                    <div class="form-group">
                        <label  @error('sub_title_ar') class="error" @enderror for="title-arabic">{{__('dashboard.title')}} ({{__('dashboard.arabic')}})</label>
                        <input type="text" name="title-arabic" @error('sub_title_ar') class="is-invalid" @enderror wire:model.defer='sub_title_ar' id="title-arabic">
                        @error('sub_title_ar') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label @error('sub_title_en') class="error" @enderror for="title-english">{{__('dashboard.title')}} ({{__('dashboard.english')}})</label>
                        <input type="text" name="title-english" @error('sub_title_en') class="is-invalid" @enderror wire:model.defer='sub_title_en' id="title-english">
                        @error('sub_title_en') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label  @error('sub_description_ar') class="error" @enderror for="description-arabic">{{__('dashboard.description')}} ({{__('dashboard.arabic')}})</label>
                        <input type="text" name="description-arabic" @error('sub_description_ar') class="is-invalid" @enderror wire:model.defer='sub_description_ar' id="description-arabic">
                        @error('sub_description_ar') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label @error('sub_description_en') class="error" @enderror for="description-english">{{__('dashboard.description')}} ({{__('dashboard.english')}})</label>
                        <input type="text" name="description-english" @error('sub_description_en') class="is-invalid" @enderror wire:model.defer='sub_description_en' id="description-english">
                        @error('sub_description_en') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <div class="save">
                        <button type="submit">{{__('dashboard.save the changes')}}</button>
                    </div>
    
                </div>
            </form>
<br />
<hr />
<br/>
            <form class="w-100 d-flex flex-column gap-50" method="POST" wire:submit.prevent='updateFirstCard'>
                <div class="d-grid grid-template-2 sm-grid-template-1 grid-gap-20">
                    <div class="grid-column-full">
                        <h4>{{__('dashboard.update item', ['name'=> __('dashboard.about the card element')])}} 1</h4>
                    </div>
                    <div class="form-group">
                        <label  @error('first_card_title_ar') class="error" @enderror for="title-arabic">{{__('dashboard.title')}} ({{__('dashboard.arabic')}})</label>
                        <input type="text" name="title-arabic" @error('first_card_title_ar') class="is-invalid" @enderror wire:model.defer='first_card_title_ar' id="title-arabic">
                        @error('first_card_title_ar') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label @error('first_card_title_en') class="error" @enderror for="title-english">{{__('dashboard.title')}} ({{__('dashboard.english')}})</label>
                        <input type="text" name="title-english" @error('first_card_title_en') class="is-invalid" @enderror wire:model.defer='first_card_title_en' id="title-english">
                        @error('first_card_title_en') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label  @error('first_card_description_ar') class="error" @enderror for="description-arabic">{{__('dashboard.description')}} ({{__('dashboard.arabic')}})</label>
                        <input type="text" name="description-arabic" @error('first_card_description_ar') class="is-invalid" @enderror wire:model.defer='first_card_description_ar' id="description-arabic">
                        @error('first_card_description_ar') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label @error('first_card_description_en') class="error" @enderror for="description-english">{{__('dashboard.description')}} ({{__('dashboard.english')}})</label>
                        <input type="text" name="description-english" @error('first_card_description_en') class="is-invalid" @enderror wire:model.defer='first_card_description_en' id="description-english">
                        @error('first_card_description_en') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label @error('first_card_image') class="error" @enderror for="image-update">{{__('dashboard.image')}}</label>
                        <input type="file" name="first_card_image" wire:model.defer='first_card_image' id="image-update" accept="image/png, image/jpg, image/gif, image/jpeg, image/webp"/>
                        <div wire:loading wire:target="first_card_image">Uploading...</div>
                        @error('first_card_image') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <img src="{{asset($first_card_image_img)}}" alt="img" width="100" height="100">
                    </div>
                </div>
                

                <div class="d-flex justify-content-center">
                    <div class="save">
                        <button type="submit">{{__('dashboard.save the changes')}}</button>
                    </div>
    
                </div>
            </form>
            
<br />
<hr />
<br/>
            <form class="w-100 d-flex flex-column gap-50" method="POST" wire:submit.prevent='updateSecondCard'>
                <div class="d-grid grid-template-2 sm-grid-template-1 grid-gap-20">
                    <div class="grid-column-full">
                        <h4>{{__('dashboard.update item', ['name'=> __('dashboard.about the card element')])}} 2</h4>
                    </div>
                    <div class="form-group">
                        <label  @error('second_card_title_ar') class="error" @enderror for="title-arabic">{{__('dashboard.title')}} ({{__('dashboard.arabic')}})</label>
                        <input type="text" name="title-arabic" @error('second_card_title_ar') class="is-invalid" @enderror wire:model.defer='second_card_title_ar' id="title-arabic">
                        @error('second_card_title_ar') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label @error('second_card_title_en') class="error" @enderror for="title-english">{{__('dashboard.title')}} ({{__('dashboard.english')}})</label>
                        <input type="text" name="title-english" @error('second_card_title_en') class="is-invalid" @enderror wire:model.defer='second_card_title_en' id="title-english">
                        @error('second_card_title_en') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label  @error('second_card_description_ar') class="error" @enderror for="description-arabic">{{__('dashboard.description')}} ({{__('dashboard.arabic')}})</label>
                        <input type="text" name="description-arabic" @error('second_card_description_ar') class="is-invalid" @enderror wire:model.defer='second_card_description_ar' id="description-arabic">
                        @error('second_card_description_ar') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label @error('second_card_description_en') class="error" @enderror for="description-english">{{__('dashboard.description')}} ({{__('dashboard.english')}})</label>
                        <input type="text" name="description-english" @error('second_card_description_en') class="is-invalid" @enderror wire:model.defer='second_card_description_en' id="description-english">
                        @error('second_card_description_en') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label @error('second_card_image') class="error" @enderror for="image-update">{{__('dashboard.image')}}</label>
                        <input type="file" name="second_card_image" wire:model.defer='second_card_image' id="image-update" accept="image/png, image/jpg, image/gif, image/jpeg, image/webp"/>
                        <div wire:loading wire:target="second_card_image">Uploading...</div>
                        @error('second_card_image') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <img src="{{asset($second_card_image_img)}}" alt="img" width="100" height="100">
                    </div>
                </div>
                

                <div class="d-flex justify-content-center">
                    <div class="save">
                        <button type="submit">{{__('dashboard.save the changes')}}</button>
                    </div>
    
                </div>
            </form>
            
<br />
<hr />
<br/>
            <form class="w-100 d-flex flex-column gap-50" method="POST" wire:submit.prevent='updateThirdCard'>
                <div class="d-grid grid-template-2 sm-grid-template-1 grid-gap-20">
                    <div class="grid-column-full">
                        <h4>{{__('dashboard.update item', ['name'=> __('dashboard.about the card element')])}} 3</h4>
                    </div>
                    <div class="form-group">
                        <label  @error('third_card_title_ar') class="error" @enderror for="title-arabic">{{__('dashboard.title')}} ({{__('dashboard.arabic')}})</label>
                        <input type="text" name="title-arabic" @error('third_card_title_ar') class="is-invalid" @enderror wire:model.defer='third_card_title_ar' id="title-arabic">
                        @error('third_card_title_ar') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label @error('third_card_title_en') class="error" @enderror for="title-english">{{__('dashboard.title')}} ({{__('dashboard.english')}})</label>
                        <input type="text" name="title-english" @error('third_card_title_en') class="is-invalid" @enderror wire:model.defer='third_card_title_en' id="title-english">
                        @error('third_card_title_en') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label  @error('third_card_description_ar') class="error" @enderror for="description-arabic">{{__('dashboard.description')}} ({{__('dashboard.arabic')}})</label>
                        <input type="text" name="description-arabic" @error('third_card_description_ar') class="is-invalid" @enderror wire:model.defer='third_card_description_ar' id="description-arabic">
                        @error('third_card_description_ar') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label @error('third_card_description_en') class="error" @enderror for="description-english">{{__('dashboard.description')}} ({{__('dashboard.english')}})</label>
                        <input type="text" name="description-english" @error('third_card_description_en') class="is-invalid" @enderror wire:model.defer='third_card_description_en' id="description-english">
                        @error('third_card_description_en') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>


                    <div class="form-group">
                        <label @error('third_card_image') class="error" @enderror for="image-update">{{__('dashboard.image')}}</label>
                        <input type="file" name="third_card_image" wire:model.defer='third_card_image' id="image-update" accept="image/png, image/jpg, image/gif, image/jpeg, image/webp"/>
                        <div wire:loading wire:target="third_card_image">Uploading...</div>
                        @error('third_card_image') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <img src="{{asset($third_card_image_img)}}" alt="img" width="100" height="100">
                    </div>

                </div>
                

                <div class="d-flex justify-content-center">
                    <div class="save">
                        <button type="submit">{{__('dashboard.save the changes')}}</button>
                    </div>
    
                </div>
            </form>
            
        </div>
    </div>
</div>