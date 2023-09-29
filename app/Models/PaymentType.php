<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class PaymentType extends Model
{
    use HasFactory, HasTranslations;


    public array $translatable = ['name', 'estimated_time'];

    protected $fillable = [
      'name'
    ];
}
