<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Setting extends Model
{
    use HasTranslations;

    public $translatable = ['title', 'keywords', 'description', 'main_title', 'description_main', 'description_footer'];
    protected $guarded = [];
}
