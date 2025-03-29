<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class About extends Model
{
    use HasTranslations;
    public $translatable = ['title', 'description', 'sub_title', 'sub_description', 'first_card_title', 'first_card_description', 'second_card_title', 'second_card_description', 'third_card_title', 'third_card_description'];

    protected $guarded = [];
}
