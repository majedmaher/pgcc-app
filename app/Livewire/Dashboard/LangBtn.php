<?php

namespace App\Livewire\Dashboard;

use App\Traits\LaravelLocalizationTrait;
use Livewire\Component;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class LangBtn extends Component
{
    use LaravelLocalizationTrait;

    public $laravelLocalization;

    // protected $listeners = ['changeLanguage'];

    public function mount()
    {
        $this->laravelLocalization = LaravelLocalization::class;
    }

    public function changeLanguage()
    {
        $lang = app()->getLocale() === 'ar' ? 'en' : 'ar';
        $url = $this->changeUrl($this->laravelLocalization, $lang);
        return $this->redirect(url($url), navigate: true);
    }
    public function render()
    {
        return view('livewire.dashboard.lang-btn');
    }
}
