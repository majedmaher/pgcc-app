<?php

namespace App\Livewire\Frontend;

use App\Models\Setting;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Footer extends Component
{
    public $settings;
    public function mount()
    {
        $this->settings = Setting::first();
    }

    public function render()
    {
        return view('livewire.frontend.footer');
    }
}
