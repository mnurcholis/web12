<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'file',
    ];

    protected function file(): Attribute
    {
        return Attribute::make(
            get: fn ($file) => asset('/storage/products/' . $file),
        );
    }
}
