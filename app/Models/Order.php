<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillabe = [
        'user_id',
        'product_id',
        'receivement_type',
        'status',
        'payment_type',
    ];

    protected function user()
    {
        $this->belongsTo(User::class);
    }

    protected function products()
    {
        $this->hasMany(Product::class);
    }
}
