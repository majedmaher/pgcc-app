<?php

namespace App\Livewire\Dashboard;

use App\Models\Contact as ModelsContact;
use Livewire\Component;

class Contact extends Component
{
    private $contacts;

    public function deleteItem($id)
    {
        ModelsContact::find($id)->delete();
        $this->dispatch('alertSuccess', __("dashboard.operation accomplished successfully"));
    }

    public function render()
    {
        $this->contacts = ModelsContact::latest()->paginate(10);
        return view('livewire.dashboard.contact', ['contacts' => $this->contacts])->layout('layouts/dashboard');
    }
}
