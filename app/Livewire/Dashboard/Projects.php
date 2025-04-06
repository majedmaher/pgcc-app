<?php

namespace App\Livewire\Dashboard;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Projects extends Component
{
    use WithFileUploads;
    use WithPagination;
    private $projects;


    public $image, $title_ar, $title_en, $description_ar, $description_en;
    public $id_item, $image_update, $title_ar_update, $title_en_update, $description_ar_update, $description_en_update, $img;

    public $createIsOpen = false;
    public $updateIsOpen = false;


    public function deleteItem($id)
    {
        Project::find($id)->delete();
    }

    public function addBtn()
    {
        $this->createIsOpen = true;
        $this->updateIsOpen = false;
    }

    public function editBtn($id)
    {
        $project = Project::find($id);
        $this->title_ar_update = $project->getTranslation('title', 'ar');
        $this->title_en_update = $project->getTranslation('title', 'en');
        $this->description_ar_update = $project->getTranslation('description', 'ar');
        $this->description_en_update = $project->getTranslation('description', 'en');
        $this->img = $project->image;
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

        $imgLink = saveImage($this->image, 'projects-image');
        Project::create([
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

        $project = Project::find($this->id_item);

        if ($this->image_update) {
            $project->image = saveImage($this->image_update, 'projects-image');
        }

        $project->setTranslations('title', ['ar' => $this->title_ar_update, 'en' => $this->title_en_update]);
        $project->setTranslations('description', ['ar' => $this->description_ar_update, 'en' => $this->description_en_update]);
        $project->update();
        $this->createIsOpen = false;
        $this->updateIsOpen = false;
        $this->reset(['image_update', 'title_ar_update', 'title_en_update', 'description_ar_update', 'description_en_update']);
        $this->dispatch('alertSuccess', __("dashboard.operation accomplished successfully"));
    }

    public function render()
    {
        $this->projects = Project::latest()->paginate(10);
        return view('livewire.dashboard.projects', ['projects' => $this->projects])->layout('layouts.dashboard');
    }
}
