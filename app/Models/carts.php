<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carts extends Model
{
    protected $fillable = [
        'order_id',
        'products_id',
        'qty',
        'subtotal',
    ];

    use HasFactory;
}
