<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'prod_name',
        'prod_name_bangla',
        'prod_description',
        'prod_price',
        'prod_unit',
        'prod_stock',
        'categories_id',
        'subcategories_id',
        'prod_attribute',
        'product_image'
    ];

}
