<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Project extends Model
{
    use HasTranslations;
    public $translatable = ['title', 'description'];

    protected $guarded = [];
}
