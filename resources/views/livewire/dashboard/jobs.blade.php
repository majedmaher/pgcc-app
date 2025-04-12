<div class="mt-100 w-100">
    <div class="card p-20">

        <h3>{{__('main.jobs')}}</h3>
        <h4>{{__('dashboard.page description', ['name'=> __('main.jobs')])}}</h4>
        <div class="card m-10 p-50-100 md-p-20 shadow"> 
            
            @if ($createIsOpen)
            <form class="w-100 d-flex flex-column gap-50 mt-50" method="POST" wire:submit.prevent='submit'>
                <div class="d-grid mt-50 grid-template-2 sm-grid-template-1 grid-gap-20">
                    <div class="grid-column-full">
                        <h4>{{__('dashboard.add item', ['name'=> __('dashboard.job')])}}</h4>
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
                        <button type="submit">{{__('dashboard.save and add')}}</button>
                    </div>
    
                </div>
            </form>
            @else
            <div class="save mt-50">
                <button class="mt-50" wire:click='addBtn'>{{__('dashboard.add item', ['name' => __('dashboard.job')])}}</button>
            </div>
            @endif

            @if ($updateIsOpen)
            <form class="w-100 d-flex flex-column gap-50 mt-50" method="POST" wire:submit.prevent='update'>
                <input type="hidden" name="id" wire:model.defer='id_item'>
                <div class="d-grid grid-template-2 sm-grid-template-1 grid-gap-20">
                    <div class="grid-column-full">
                        <h4>{{__('dashboard.update item', ['name'=> __('dashboard.job')])}}</h4>
                    </div>
                    
                    <div class="form-group">
                        <label  @error('title_ar_update') class="error" @enderror for="title-arabic">{{__('dashboard.title')}} ({{__('dashboard.arabic')}})</label>
                        <input type="text" name="title-arabic" @error('title_ar_update') class="is-invalid" @enderror wire:model.defer='title_ar_update' id="title-arabic">
                        @error('title_ar_update') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label @error('title_en_update') class="error" @enderror for="title-english">{{__('dashboard.title')}} ({{__('dashboard.english')}})</label>
                        <input type="text" name="title-english" @error('title_en_update') class="is-invalid" @enderror wire:model.defer='title_en_update' id="title-english">
                        @error('title_en_update') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label  @error('description_ar_update') class="error" @enderror for="description-arabic">{{__('dashboard.description')}} ({{__('dashboard.arabic')}})</label>
                        <input type="text" name="description-arabic" @error('description_ar_update') class="is-invalid" @enderror wire:model.defer='description_ar_update' id="description-arabic">
                        @error('description_ar_update') <span class="error">{{ __('dashboard.required') }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label @error('description_en_update') class="error" @enderror for="description-english">{{__('dashboard.description')}} ({{__('dashboard.english')}})</label>
                        <input type="text" name="description-english" @error('description_en_update') class="is-invalid" @enderror wire:model.defer='description_en_update' id="description-english">
                        @error('description_en_update') <span class="error">{{ __('dashboard.required') }}</span> @enderror
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
                    <th>{{__('dashboard.title')}}</th>
                    <th>{{__('dashboard.description')}}</th>
                    <th>{{__('dashboard.actions')}}</th>
                  </tr>
                  @if(!empty($jobs) && $jobs->count())
                    @foreach($jobs as $key => $job)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $job->title }}</td>
                            <td>{{ $job->description }}</td>
                            <td>
                                <div class="actions">
                                    <button wire:click='editBtn({{$job->id}})' class="btn btn-info">Edit</button>
                                    <button wire:click='deleteItem({{$job->id}})' wire:confirm='{{__('dashboard.confirmation message')}}' class="btn btn-danger">Delete</button>
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
                @if ($jobs->links()->paginator->hasPages())
                    <div class="mt-4 p-4 d-flex flex-justify-between">
                        {{ $jobs->onEachSide(1)->links('layouts.paginate') }}
                    </div>
                @endif
              </div>
        </div>
    </div>
</div>
