<?php

namespace App\Livewire\Frontend;

use App\Mail\RequestJobEmail;
use App\Models\JobItem;
use App\Models\RequestJob;
use App\Models\Setting;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;

class Jobs extends Component
{
    use WithFileUploads;

    public $settings, $jobs, $name, $intro_number, $phone_number, $email, $cv, $message;

    public function mount()
    {
        $this->settings = Setting::first();
        $this->jobs = JobItem::latest()->get();
    }

    public function save()
    {
        $this->validate([
            'name' => 'string|required',
            'phone_number' => 'string|required',
            'email' => 'string|required',
            'cv' => 'file|required',
            'message' => 'string|nullable',
        ]);

        $cv_path = saveImage($this->cv, 'cv-jobs');
        $request = RequestJob::create([
            'name' => $this->name,
            'phone_number' => $this->intro_number . $this->phone_number,
            'email' => $this->email,
            'message' => $this->message,
            'cv' => $cv_path
        ]);

        $this->reset(['cv', 'name', 'phone_number', 'email', 'message']);
        $this->dispatch('alertSuccess', __("dashboard.operation accomplished successfully"));

        Mail::to('info@pgcc.com.sa')->send(new RequestJobEmail([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'message' => $request->message,
            'cv' => $request->cv,
        ]));
    }

    public function render()
    {
        return view('livewire.frontend.jobs')->layout('layouts.main');
    }
}
