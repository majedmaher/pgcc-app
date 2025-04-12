<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class JobItem extends Model
{
    use HasTranslations;
    public $translatable = ['title', 'description'];

    protected $guarded = [];
}
