<?php

namespace App\Livewire\Frontend;

use App\Models\About;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Setting;
use Livewire\Component;

use function Laravel\Prompts\alert;

class Navbar extends Component
{
    public $settings, $about_title, $service_title, $partner_title;
    public function mount()
    {
        $this->settings = Setting::first();
        $this->about_title = About::select('title')->first();
        $this->service_title = Service::select('title')->first();
        $this->partner_title = Partner::select('title')->first();
    }
    // public function mount($logo, $about_title, $service_title, $partner_title)
    // {
    //     $this->logo = $logo;
    //     $this->about_title = $about_title;
    //     $this->service_title = $service_title;
    //     $this->partner_title = $partner_title;
    // }
    public function render()
    {
        return view('livewire.frontend.navbar');
    }
}
