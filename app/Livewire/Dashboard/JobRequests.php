<?php

namespace App\Livewire\Dashboard;

use App\Models\RequestJob;
use Livewire\Component;

class JobRequests extends Component
{
    private $job_requests;

    public function deleteItem($id)
    {
        RequestJob::find($id)->delete();
        $this->dispatch('alertSuccess', __("dashboard.operation accomplished successfully"));
    }

    public function render()
    {
        $this->job_requests = RequestJob::latest()->paginate(10);
        return view('livewire.dashboard.job-requests', ['job_requests' => $this->job_requests])->layout('layouts/dashboard');
    }
}
