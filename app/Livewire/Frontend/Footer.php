<?php

namespace App\Livewire\Frontend;

use App\Models\About;
use App\Models\Partner;
use App\Models\PartnerItem;
use App\Models\Service;
use App\Models\Setting;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Footer extends Component
{
    public $settings, $partners;
    public $about_title, $service_title, $partner_title;
    public function mount()
    {
        $this->partners = PartnerItem::latest()->take(3)->get();
        $this->settings = Setting::first();
        $this->about_title = About::select('title')->first();
        $this->service_title = Service::select('title')->first();
        $this->partner_title = Partner::select('title')->first();
    }

    public function render()
    {
        return view('livewire.frontend.footer');
    }
}
