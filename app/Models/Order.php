<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'delivery_method_id',
        'payment_type_id',
        'comment',
        'sum',
        'products',
        'address'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

}
