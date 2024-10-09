<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'categories_id',
        'desc',
        'price',
        'qty',
    ];

    public function comment(): HasMany
    {
        return $this->hasMany(comment::class);
    }

    public function cart(): HasMany
    {
        return $this->hasMany(cart::class);
    }
}

