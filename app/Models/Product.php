<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    public static function getAllProducts()
    {
        return self::where('stock', true)->get()->sortBy('sort_order');
    }
}
