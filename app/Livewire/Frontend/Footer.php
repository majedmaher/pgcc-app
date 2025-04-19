<?php

namespace App\Livewire\Frontend;

use App\Models\PartnerItem;
use App\Models\Setting;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Footer extends Component
{
    public $settings, $partners;
    public function mount()
    {
        $this->partners = PartnerItem::latest()->take(3)->get();
        $this->settings = Setting::first();
    }

    public function render()
    {
        return view('livewire.frontend.footer');
    }
}
