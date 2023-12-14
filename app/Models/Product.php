<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock_quantity',
        'manufacturer',
        'supplier',
        'material',
        'minimum_order_quantity',
        'image',
    ];
    protected $primaryKey = 'id';

}
