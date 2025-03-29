<?php

namespace App\Livewire\Dashboard;

use App\Models\Service;
use App\Models\ServiceItem;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Services extends Component
{
    use WithFileUploads;
    use WithPagination;
    private $services;
    public $searchTerm;

    public $service_title_ar, $service_title_en, $service_description_ar, $service_description_en;

    public $image, $title_ar, $title_en, $description_ar, $description_en;
    public $id_item, $image_update, $title_ar_update, $title_en_update, $description_ar_update, $description_en_update, $img;

    public $createIsOpen = false;
    public $updateIsOpen = false;

    public function mount()
    {
        $service = Service::first();
        $this->service_title_ar = $service->getTranslation('title', 'ar');
        $this->service_title_en = $service->getTranslation('title', 'en');
        $this->service_description_ar = $service->getTranslation('description', 'ar');
        $this->service_description_en = $service->getTranslation('description', 'en');
    }

    public function updateService()
    {
        $this->validate([
            'service_title_ar' => 'string|required',
            'service_title_en' => 'string|required',
            'service_description_ar' => 'string|required',
            'service_description_en' => 'string|required',
        ]);
        $service = Service::first();

        $service->setTranslations('title', ['ar' => $this->service_title_ar, 'en' => $this->service_title_en]);
        $service->setTranslations('description', ['ar' => $this->service_description_ar, 'en' => $this->service_description_en]);

        $service->update();
        $this->dispatch('alertSuccess', __("dashboard.operation accomplished successfully"));
    }

    public function deleteItem($id)
    {
        ServiceItem::find($id)->delete();
    }

    public function addBtn()
    {
        $this->createIsOpen = true;
        $this->updateIsOpen = false;
    }

    public function editBtn($id)
    {
        $service = ServiceItem::find($id);
        $this->title_ar_update = $service->getTranslation('title', 'ar');
        $this->title_en_update = $service->getTranslation('title', 'en');
        $this->description_ar_update = $service->getTranslation('description', 'ar');
        $this->description_en_update = $service->getTranslation('description', 'en');
        $this->img = $service->image;
        $this->id_item = $id;
        $this->createIsOpen = false;
        $this->updateIsOpen = true;
    }

    public function submit()
    {
        $this->validate([
            'title_ar' => 'string|required',
            'title_en' => 'string|required',
            'description_ar' => 'string|required',
            'description_en' => 'string|required',
            'image' => 'file|required',
        ]);

        $imgLink = saveImage($this->image, 'services-image');
        ServiceItem::create([
            'title' => [
                'ar' => $this->title_ar,
                'en' => $this->title_en,
            ],
            'description' => [
                'ar' => $this->description_ar,
                'en' => $this->description_en,
            ],
            'image' => $imgLink
        ]);
        $this->createIsOpen = false;
        $this->updateIsOpen = false;
        $this->reset(['image', 'title_ar', 'title_en', 'description_ar', 'description_en']);
        $this->dispatch('alertSuccess', __("dashboard.operation accomplished successfully"));
    }

    public function update()
    {
        $this->validate([
            'id_item' => 'required',
            'title_ar_update' => 'string|required',
            'title_en_update' => 'string|required',
            'description_ar_update' => 'string|required',
            'description_en_update' => 'string|required',
            'image_update' => 'file|nullable',
        ]);

        $service = ServiceItem::find($this->id_item);

        if ($this->image_update) {
            $service->image = saveImage($this->image_update, 'services-image');
        }

        $service->setTranslations('title', ['ar' => $this->title_ar_update, 'en' => $this->title_en_update]);
        $service->setTranslations('description', ['ar' => $this->description_ar_update, 'en' => $this->description_en_update]);
        $service->update();
        $this->createIsOpen = false;
        $this->updateIsOpen = false;
        $this->reset(['image_update', 'title_ar_update', 'title_en_update', 'description_ar_update', 'description_en_update']);
        $this->dispatch('alertSuccess', __("dashboard.operation accomplished successfully"));
    }

    public function render()
    {
        $this->services = ServiceItem::latest()->paginate(10);
        return view('livewire.dashboard.services', ['services' => $this->services])->layout('layouts.dashboard');
    }
}
