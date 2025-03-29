<?php

namespace App\Livewire\Dashboard;

use App\Models\Partner;
use App\Models\PartnerItem;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class SuccessPartners extends Component
{
    use WithFileUploads;
    use WithPagination;
    private $partners;
    public $searchTerm;


    public $image, $title_ar, $title_en, $description_ar, $description_en;
    public $id_item, $image_update, $title_ar_update, $title_en_update, $description_ar_update, $description_en_update, $img;

    public $createIsOpen = false;
    public $updateIsOpen = false;

    public function mount()
    {
        $partner = Partner::first();
        $this->title_ar = $partner->getTranslation('title', 'ar');
        $this->title_en = $partner->getTranslation('title', 'en');
        $this->description_ar = $partner->getTranslation('description', 'ar');
        $this->description_en = $partner->getTranslation('description', 'en');
    }

    public function updatePartner()
    {
        $this->validate([
            'title_ar' => 'string|required',
            'title_en' => 'string|required',
            'description_ar' => 'string|required',
            'description_en' => 'string|required',
        ]);
        $partner = Partner::first();

        $partner->setTranslations('title', ['ar' => $this->title_ar, 'en' => $this->title_en]);
        $partner->setTranslations('description', ['ar' => $this->description_ar, 'en' => $this->description_en]);

        $partner->update();
        $this->dispatch('alertSuccess', __("dashboard.operation accomplished successfully"));
    }

    public function deleteItem($id)
    {
        PartnerItem::find($id)->delete();
    }

    public function addBtn()
    {
        $this->createIsOpen = true;
        $this->updateIsOpen = false;
    }

    public function editBtn($id)
    {
        $service = PartnerItem::find($id);
        $this->img = $service->image;
        $this->id_item = $id;
        $this->createIsOpen = false;
        $this->updateIsOpen = true;
    }

    public function submit()
    {
        $this->validate([
            'image' => 'file|required',
        ]);

        $imgLink = saveImage($this->image, 'partners-image');
        PartnerItem::create([
            'image' => $imgLink
        ]);
        $this->createIsOpen = false;
        $this->updateIsOpen = false;
        $this->reset(['image']);
        $this->dispatch('alertSuccess', __("dashboard.operation accomplished successfully"));
    }

    public function update()
    {
        $this->validate([
            'id_item' => 'required',
            'image_update' => 'file|required',
        ]);

        $partner = PartnerItem::find($this->id_item);

        $partner->image = saveImage($this->image_update, 'partners-image');

        $partner->update();
        $this->createIsOpen = false;
        $this->updateIsOpen = false;
        $this->reset(['image_update']);
        $this->dispatch('alertSuccess', __("dashboard.operation accomplished successfully"));
    }

    public function render()
    {
        $this->partners = PartnerItem::latest()->paginate(10);
        return view('livewire.dashboard.success-partners', ['partners' => $this->partners])->layout('layouts.dashboard');
    }
}
