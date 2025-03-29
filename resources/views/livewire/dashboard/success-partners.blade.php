<div class="mt-100 w-100">
    <div class="card p-20">

        <h3>{{__('main.partners')}}</h3>
        <h4>{{__('dashboard.page description', ['name'=> __('main.partners')])}}</h4>
        <div class="card m-10 p-50-100 md-p-20 shadow"> 
            

            <form class="w-100 d-flex flex-column gap-50" method="POST" wire:submit.prevent='updatePartner'>
                <div class="d-grid grid-template-2 sm-grid-template-1 grid-gap-20">
                    <div class="grid-column-full">
                        <h4>{{__('dashboard.update item', ['name'=> __('dashboard.partner section')])}}</h4>
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

                <div class="d-flex justify-content-center">
                    <div class="save">
                        <button type="submit">{{__('dashboard.save the changes')}}</button>
                    </div>
    
                </div>
            </form>
            

            @if ($createIsOpen)
            <form class="w-100 d-flex flex-column gap-50 mt-50" method="POST" wire:submit.prevent='submit'>
                <div class="d-grid mt-50 grid-template-2 sm-grid-template-1 grid-gap-20">
                    <div class="grid-column-full">
                        <h4>{{__('dashboard.add item', ['name'=> __('dashboard.partner')])}}</h4>
                    </div>
                    <div class="form-group grid-column-full">
                        <label @error('image') class="error" @enderror for="image">{{__('dashboard.image')}}</label>
                        <input type="file" name="image" wire:model.defer='image' id="image" accept="image/png, image/jpg, image/gif, image/jpeg, image/webp"/>
                        <div wire:loading wire:target="image">Uploading...</div>
                        @error('image') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                </div>
    
                <div class="d-flex justify-content-center">
                    <div class="save">
                        <button type="submit">{{__('dashboard.save and add')}}</button>
                    </div>
    
                </div>
            </form>
            @else
            <div class="save mt-50">
                <button class="mt-50" wire:click='addBtn'>{{__('dashboard.add item', ['name' => __('dashboard.partner')])}}</button>
            </div>
            @endif

            @if ($updateIsOpen)
            <form class="w-100 d-flex flex-column gap-50 mt-50" method="POST" wire:submit.prevent='update'>
                <input type="hidden" name="id" wire:model.defer='id_item'>
                <div class="d-grid grid-template-2 sm-grid-template-1 grid-gap-20">
                    <div class="grid-column-full">
                        <h4>{{__('dashboard.update item', ['name'=> __('dashboard.partner')])}}</h4>
                    </div>
                    <div class="form-group">
                        <label @error('image_update') class="error" @enderror for="image-update">{{__('dashboard.image')}}</label>
                        <input type="file" name="image_update" wire:model.defer='image_update' id="image-update" accept="image/png, image/jpg, image/gif, image/jpeg, image/webp"/>
                        <div wire:loading wire:target="image_update">Uploading...</div>
                        @error('image_update') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <img src="{{asset($img)}}" alt="img" width="100" height="100">
                    </div>
                </div>
    
                <div class="d-flex justify-content-center">
                    <div class="save">
                        <button type="submit">{{__('dashboard.save the changes')}}</button>
                    </div>
    
                </div>
            </form>
            @endif
            <div class="mt-20" style="overflow-x:auto;">
                <table>
                  <tr>
                    <th>#</th>
                    <th>{{__('dashboard.image')}}</th>
                    <th>{{__('dashboard.actions')}}</th>
                  </tr>
                  @if(!empty($partners) && $partners->count())
                    @foreach($partners as $key => $partner_item)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td><img src="{{ asset($partner_item->image) }}" alt="{{$partner_item->title}}" width="50" height="50"></td>
                            <td>
                                <div class="actions">
                                    <button wire:click='editBtn({{$partner_item->id}})' class="btn btn-info">Edit</button>
                                    <button wire:click='deleteItem({{$partner_item->id}})' wire:confirm='{{__('dashboard.confirmation message')}}' class="btn btn-danger">Delete</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    @else
                        <tr>
                            <td colspan="10">{{__('dashboard.no data')}}</td>
                        </tr>
                    @endif
                </table>
                @if ($partners->links()->paginator->hasPages())
                    <div class="mt-4 p-4 d-flex flex-justify-between">
                        {{ $partners->onEachSide(1)->links('layouts.paginate') }}
                    </div>
                @endif
              </div>
        </div>
    </div>
</div>
