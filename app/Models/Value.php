<?php

namespace App\Models;

use Database\Seeders\ValueSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class  Value extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['name'];

    protected array $translatable = ["name"];
    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}
