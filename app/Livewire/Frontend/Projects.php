<?php

namespace App\Livewire\Frontend;

use App\Models\Project;
use App\Models\Setting;
use Livewire\Component;

class Projects extends Component
{
    private $projects;
    public $settings;

    public function mount()
    {
        $this->settings = Setting::select(['logo', 'title', 'description', 'keywords'])->first();
    }

    public function render()
    {
        $this->projects = Project::latest()->paginate(6);

        return view('livewire.frontend.projects', ['projects' => $this->projects])->layout('layouts.main');
    }
}
