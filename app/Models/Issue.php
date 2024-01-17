<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Issue extends Model
{
    use HasFactory, HasTranslations;

    protected $guarded = [];

    public array $translatable = ['title', 'image'];
}
