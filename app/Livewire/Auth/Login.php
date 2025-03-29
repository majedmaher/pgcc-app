<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.auth')]
class Login extends Component
{
    #[Validate('required')]
    public string $name;

    #[Validate('required')]
    public string $password;

    public function submit(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string'],
        ]);


        // $user = User::where('name', $this->name)->first();
        // Auth::login($user);


        $this->dispatch('alertError', strlen($this->name));

        if (strlen($this->name) > 0 && strlen($this->password) > 0) {
            $user = User::where('name', $validated['name'])->first();
            if ($user) {
                if (Hash::check($this->password, $user->password)) {
                    auth()->login($user);
                    $this->redirect(route('dashboard.settings', absolute: false), navigate: true);
                } else {
                    $this->dispatch('alertError', __("auth.error login"));
                }
            } else {
                $this->dispatch('alertError', __("auth.error login"));
            }
        } else {
            $this->dispatch('alertError', __("auth.error empty login"));
        }
    }
}
