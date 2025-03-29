<?php

namespace App\Livewire\Dashboard;

use App\Models\AboutStatics;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Statics extends Component
{
    use WithFileUploads;
    use WithPagination;

    private $statics;

    public $image, $number, $after_number, $before_number, $description_ar, $description_en;
    public $id_item, $image_update, $number_update, $after_number_update, $before_number_update, $description_ar_update, $description_en_update, $img;


    public $createIsOpen = false;
    public $updateIsOpen = false;

    public function deleteItem($id)
    {
        AboutStatics::find($id)->delete();
    }

    public function addBtn()
    {
        $this->createIsOpen = true;
        $this->updateIsOpen = false;
    }

    public function editBtn($id)
    {
        $static_item = AboutStatics::find($id);
        $this->description_ar_update = $static_item->getTranslation('description', 'ar');
        $this->description_en_update = $static_item->getTranslation('description', 'en');
        $this->img = $static_item->image;
        $this->number_update = $static_item->number;
        $this->after_number_update = $static_item->after_number;
        $this->before_number_update = $static_item->before_number;
        $this->id_item = $id;
        $this->createIsOpen = false;
        $this->updateIsOpen = true;
    }

    public function submit()
    {
        $this->validate([
            'description_ar' => 'string|required',
            'description_en' => 'string|required',
            'number' => 'required',
            'image' => 'file|required',
        ]);

        $imgLink = saveImage($this->image, 'statics-image');
        AboutStatics::create([
            'description' => [
                'ar' => $this->description_ar,
                'en' => $this->description_en,
            ],
            'number' => $this->number,
            'after_number' => $this->after_number,
            'before_number' => $this->before_number,
            'image' => $imgLink
        ]);
        $this->createIsOpen = false;
        $this->updateIsOpen = false;
        $this->reset(['image', 'description_ar', 'description_en', 'number', 'after_number', 'before_number']);
        $this->dispatch('alertSuccess', __("dashboard.operation accomplished successfully"));
    }

    public function update()
    {
        $this->validate([
            'id_item' => 'required',
            'description_ar_update' => 'string|required',
            'description_en_update' => 'string|required',
            'number_update' => 'required',
            'image_update' => 'file|nullable',
        ]);

        $static_item = AboutStatics::find($this->id_item);

        if ($this->image_update) {
            $static_item->image = saveImage($this->image_update, 'statics-image');
        }

        $static_item->number = $this->number_update;
        $static_item->before_number = $this->before_number_update;
        $static_item->after_number = $this->after_number_update;
        $static_item->setTranslations('description', ['ar' => $this->description_ar_update, 'en' => $this->description_en_update]);
        $static_item->update();
        $this->createIsOpen = false;
        $this->updateIsOpen = false;
        $this->reset(['image', 'description_ar', 'description_en', 'number_update', 'after_number_update', 'before_number_update']);
        $this->dispatch('alertSuccess', __("dashboard.operation accomplished successfully"));
    }

    public function render()
    {
        $this->statics = AboutStatics::latest()->paginate(10);
        return view('livewire.dashboard.statics', ['statics' => $this->statics])->layout('layouts.dashboard');
    }
}
