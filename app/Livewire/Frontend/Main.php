<?php

namespace App\Livewire\Frontend;

use App\Models\About;
use App\Models\AboutStatics;
use App\Models\Contact;
use App\Models\Partner;
use App\Models\PartnerItem;
use App\Models\Project;
use App\Models\Service;
use App\Models\ServiceItem;
use App\Models\Setting;
use Livewire\Component;

class Main extends Component
{
    public $settings, $about_statics, $about, $service, $service_items, $projects, $partner, $partner_items;

    public $name, $intro_phone, $phone_number, $email, $subject, $message;
    public function mount()
    {
        $this->settings = Setting::first();
        $this->about_statics = AboutStatics::latest()->get();
        $this->about = About::first();
        $this->service = Service::first();
        $this->service_items = ServiceItem::latest()->get();
        $this->projects = Project::latest()->take(3)->get();
        $this->partner = Partner::first();
        $this->partner_items = PartnerItem::latest()->get();
    }

    public function contactStore()
    {
        $this->validate([
            'name' => 'string|required',
            'phone_number' => 'required|numeric',
            'intro_phone' => 'nullable',
            'email' => 'string|required|email',
            'subject' => 'string|required',
            'message' => 'string|nullable',
        ]);

        Contact::create([
            'name' => $this->name,
            'phone_number' => $this->intro_phone . $this->phone_number,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);
        $this->reset(['name', 'phone_number', 'email', 'subject', 'message']);
        $this->dispatch('alertSuccess', __("dashboard.operation accomplished successfully"));
    }

    public function render()
    {
        return view('livewire.frontend.main')->layout('layouts.main');
    }
}
