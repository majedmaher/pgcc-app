<?php

namespace App\Livewire\Dashboard;

use App\Models\Setting as ModelsSetting;
use Livewire\Component;
use Livewire\WithFileUploads;

class Setting extends Component
{
    use WithFileUploads;

    public $logo, $logo_img, $profile, $title_ar, $title_en, $main_title_ar, $main_title_en, $main_description_ar, $main_description_en, $profile_link, $description_footer_ar, $description_footer_en, $whatsapp, $twitter, $linkedin, $instagram, $facebook, $telegram, $description_en, $description_ar, $keywords_ar, $keywords_en;


    public function updateLogo()
    {
        $setting = ModelsSetting::first();
        if ($this->logo) {
            $setting->logo = saveImage($this->logo, 'logo');
            $setting->update();
            $this->dispatch('logoChanged', $setting->logo);
            $this->dispatch('alertSuccess', __("dashboard.operation accomplished successfully"));
        }
    }

    public function updateProfile()
    {
        $setting = ModelsSetting::first();
        if ($this->profile) {
            $setting->profile = saveImage($this->profile, 'profile');
            $setting->update();
            $this->dispatch('alertSuccess', __("dashboard.operation accomplished successfully"));
        }
    }

    public function updateSetting()
    {
        $this->validate([
            // 'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title_ar' => 'string|required',
            'title_en' => 'string|required',
            'main_title_ar' => 'string|required',
            'main_title_en' => 'string|required',
            'main_description_ar' => 'string|required',
            'main_description_en' => 'string|required',
            'description_footer_ar' => 'string|required',
            'description_footer_en' => 'string|required',
            'whatsapp' => 'string|required',
            'twitter' => 'string|required',
            'linkedin' => 'string|required',
            'instagram' => 'string|required',
            'facebook' => 'string|required',
            'telegram' => 'string|required',
            'description_en' => 'string|required',
            'description_ar' => 'string|required',
            'keywords_ar' => 'string|required',
            'keywords_en' => 'string|required',
        ]);
        $setting = ModelsSetting::first();

        $setting->setTranslations('title', ['ar' => $this->title_ar, 'en' => $this->title_en]);
        $setting->setTranslations('main_title', ['ar' => $this->main_title_ar, 'en' => $this->main_title_en]);
        $setting->setTranslations('description_main', ['ar' => $this->main_description_ar, 'en' => $this->main_description_en]);
        $setting->setTranslations('description_footer', ['ar' => $this->description_footer_ar, 'en' => $this->description_footer_en]);
        $setting->setTranslations('description', ['ar' => $this->description_ar, 'en' => $this->description_en]);
        $setting->setTranslations('keywords', ['ar' => $this->keywords_ar, 'en' => $this->keywords_en]);
        $setting->whatsapp = $this->whatsapp;
        $setting->twitter = $this->twitter;
        $setting->linkedin = $this->linkedin;
        $setting->instagram = $this->instagram;
        $setting->facebook = $this->facebook;
        $setting->telegram = $this->telegram;
        $setting->update();
        $this->dispatch('alertSuccess', __("dashboard.operation accomplished successfully"));
    }

    public function render()
    {
        $setting = ModelsSetting::first();
        $this->title_ar = $setting->getTranslation('title', 'ar');
        $this->title_en = $setting->getTranslation('title', 'en');
        $this->main_title_ar = $setting->getTranslation('main_title', 'ar');
        $this->main_title_en = $setting->getTranslation('main_title', 'en');
        $this->logo_img = $setting->logo;
        // $this->img = $setting->image_who_ar_we;
        $this->main_description_ar = $setting->getTranslation('description_main', 'ar');
        $this->main_description_en = $setting->getTranslation('description_main', 'en');
        $this->description_footer_ar = $setting->getTranslation('description_footer', 'ar');
        $this->description_footer_en = $setting->getTranslation('description_footer', 'en');
        $this->whatsapp = $setting->whatsapp;
        $this->twitter = $setting->twitter;
        $this->linkedin = $setting->linkedin;
        $this->instagram = $setting->instagram;
        $this->facebook = $setting->facebook;
        $this->telegram = $setting->telegram;
        $this->keywords_ar = $setting->getTranslation('keywords', 'ar');
        $this->keywords_en = $setting->getTranslation('keywords', 'en');
        $this->description_ar = $setting->getTranslation('description', 'ar');
        $this->description_en = $setting->getTranslation('description', 'en');
        return view('livewire.dashboard.setting')->layout('layouts/dashboard');
    }
}
