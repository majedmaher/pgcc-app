<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ServiceItem extends Model
{
    use HasTranslations;
    public $translatable = ['title', 'description'];

    protected $guarded = [];
}
