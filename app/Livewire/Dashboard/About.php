<?php

namespace App\Livewire\Dashboard;

use App\Models\About as ModelsAbout;
use Livewire\Component;
use Livewire\WithFileUploads;

class About extends Component
{
    use WithFileUploads;

    public $title_ar, $title_en, $description_ar, $description_en, $sub_title_ar, $sub_title_en, $sub_description_ar, $sub_description_en;
    public $first_card_image, $first_card_image_img, $first_card_title_ar, $first_card_title_en, $first_card_description_ar, $first_card_description_en;
    public $second_card_image, $second_card_image_img, $second_card_title_ar, $second_card_title_en, $second_card_description_ar, $second_card_description_en;
    public $third_card_image, $third_card_image_img, $third_card_title_ar, $third_card_title_en, $third_card_description_ar, $third_card_description_en;

    public function updateFirstCard()
    {
        $this->validate([
            'first_card_title_ar' => 'string|required',
            'first_card_title_en' => 'string|required',
            'first_card_description_ar' => 'string|required',
            'first_card_description_en' => 'string|required',
        ]);
        $about = ModelsAbout::first();
        $about->setTranslations('first_card_title', ['ar' => $this->first_card_title_ar, 'en' => $this->first_card_title_en]);
        $about->setTranslations('first_card_description', ['ar' => $this->first_card_description_ar, 'en' => $this->first_card_description_en]);

        if ($this->first_card_image) {
            $about->first_card_image = saveImage($this->first_card_image, 'first-card-image');
        }
        $about->update();
        $this->dispatch('alertSuccess', __("dashboard.operation accomplished successfully"));
    }
    public function updateSecondCard()
    {
        $this->validate([
            'second_card_title_ar' => 'string|required',
            'second_card_title_en' => 'string|required',
            'second_card_description_ar' => 'string|required',
            'second_card_description_en' => 'string|required',
        ]);
        $about = ModelsAbout::first();
        $about->setTranslations('second_card_title', ['ar' => $this->second_card_title_ar, 'en' => $this->second_card_title_en]);
        $about->setTranslations('second_card_description', ['ar' => $this->second_card_description_ar, 'en' => $this->second_card_description_en]);

        if ($this->second_card_image) {
            $about->second_card_image = saveImage($this->second_card_image, 'second-card-image');
        }
        $about->update();
        $this->dispatch('alertSuccess', __("dashboard.operation accomplished successfully"));
    }
    public function updateThirdCard()
    {
        $this->validate([
            'third_card_title_ar' => 'string|required',
            'third_card_title_en' => 'string|required',
            'third_card_description_ar' => 'string|required',
            'third_card_description_en' => 'string|required',
        ]);
        $about = ModelsAbout::first();
        $about->setTranslations('third_card_title', ['ar' => $this->third_card_title_ar, 'en' => $this->third_card_title_en]);
        $about->setTranslations('third_card_description', ['ar' => $this->third_card_description_ar, 'en' => $this->third_card_description_en]);

        if ($this->third_card_image) {
            $about->third_card_image = saveImage($this->third_card_image, 'third-card-image');
        }
        $about->update();
        $this->dispatch('alertSuccess', __("dashboard.operation accomplished successfully"));
    }

    public function updateAbout()
    {
        $this->validate([
            'title_ar' => 'string|required',
            'title_en' => 'string|required',
            'description_en' => 'string|required',
            'description_ar' => 'string|required',
            'sub_title_ar' => 'string|required',
            'sub_title_en' => 'string|required',
            'sub_description_ar' => 'string|required',
            'sub_description_en' => 'string|required',

        ]);
        $about = ModelsAbout::first();

        $about->setTranslations('title', ['ar' => $this->title_ar, 'en' => $this->title_en]);
        $about->setTranslations('description', ['ar' => $this->description_ar, 'en' => $this->description_en]);
        $about->setTranslations('sub_title', ['ar' => $this->sub_title_ar, 'en' => $this->sub_title_en]);
        $about->setTranslations('sub_description', ['ar' => $this->sub_description_ar, 'en' => $this->sub_description_en]);

        $about->update();
        $this->dispatch('alertSuccess', __("dashboard.operation accomplished successfully"));
    }

    public function render()
    {
        $about = ModelsAbout::first();
        $this->title_ar = $about->getTranslation('title', 'ar');
        $this->title_en = $about->getTranslation('title', 'en');
        $this->description_ar = $about->getTranslation('description', 'ar');
        $this->description_en = $about->getTranslation('description', 'en');
        $this->sub_title_ar = $about->getTranslation('sub_title', 'ar');
        $this->sub_title_en = $about->getTranslation('sub_title', 'en');
        $this->sub_description_ar = $about->getTranslation('sub_description', 'ar');
        $this->sub_description_en = $about->getTranslation('sub_description', 'en');

        $this->first_card_title_ar = $about->getTranslation('first_card_title', 'ar');
        $this->first_card_title_en = $about->getTranslation('first_card_title', 'en');
        $this->first_card_description_ar = $about->getTranslation('first_card_description', 'ar');
        $this->first_card_description_en = $about->getTranslation('first_card_description', 'en');
        $this->first_card_image_img = $about->first_card_image;

        $this->second_card_title_ar = $about->getTranslation('second_card_title', 'ar');
        $this->second_card_title_en = $about->getTranslation('second_card_title', 'en');
        $this->second_card_description_ar = $about->getTranslation('second_card_description', 'ar');
        $this->second_card_description_en = $about->getTranslation('second_card_description', 'en');
        $this->second_card_image_img = $about->second_card_image;

        $this->third_card_title_ar = $about->getTranslation('third_card_title', 'ar');
        $this->third_card_title_en = $about->getTranslation('third_card_title', 'en');
        $this->third_card_description_ar = $about->getTranslation('third_card_description', 'ar');
        $this->third_card_description_en = $about->getTranslation('third_card_description', 'en');
        $this->third_card_image_img = $about->third_card_image;

        return view('livewire.dashboard.about')->layout('layouts/dashboard');
    }
}
