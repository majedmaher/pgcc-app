<?php

namespace App\Livewire\Dashboard;

use App\Models\Job;
use App\Models\JobItem;
use Livewire\Component;
use Livewire\WithPagination;

class Jobs extends Component
{
    use WithPagination;
    private $jobs;

    public $title_ar, $title_en, $description_ar, $description_en;
    public $id_item, $title_ar_update, $title_en_update, $description_ar_update, $description_en_update;

    public $createIsOpen = false;
    public $updateIsOpen = false;

    public function deleteItem($id)
    {
        JobItem::find($id)->delete();
    }

    public function addBtn()
    {
        $this->createIsOpen = true;
        $this->updateIsOpen = false;
    }

    public function editBtn($id)
    {
        $job = JobItem::find($id);
        $this->title_ar_update = $job->getTranslation('title', 'ar');
        $this->title_en_update = $job->getTranslation('title', 'en');
        $this->description_ar_update = $job->getTranslation('description', 'ar');
        $this->description_en_update = $job->getTranslation('description', 'en');
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
        ]);

        JobItem::create([
            'title' => [
                'ar' => $this->title_ar,
                'en' => $this->title_en,
            ],
            'description' => [
                'ar' => $this->description_ar,
                'en' => $this->description_en,
            ],
        ]);
        $this->createIsOpen = false;
        $this->updateIsOpen = false;
        $this->reset(['title_ar', 'title_en', 'description_ar', 'description_en']);
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
        ]);

        $job = JobItem::find($this->id_item);


        $job->setTranslations('title', ['ar' => $this->title_ar_update, 'en' => $this->title_en_update]);
        $job->setTranslations('description', ['ar' => $this->description_ar_update, 'en' => $this->description_en_update]);
        $job->update();
        $this->createIsOpen = false;
        $this->updateIsOpen = false;
        $this->reset(['title_ar_update', 'title_en_update', 'description_ar_update', 'description_en_update']);
        $this->dispatch('alertSuccess', __("dashboard.operation accomplished successfully"));
    }

    public function render()
    {
        $this->jobs = JobItem::latest()->paginate(10);
        return view('livewire.dashboard.jobs', ['jobs' => $this->jobs])->layout('layouts.dashboard');
    }
}
