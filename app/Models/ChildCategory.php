<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildCategory extends Model
{
    use HasFactory;

    protected $fillable = ['child_en_name', 'child_bn_name','categories_id', 'subcategories_id'];

    public function subcategorie()
    {
        return $this->belongsTo(Subcategorie::class, 'subcategories_id');
    }

    public function maincategory()
    {
        return $this->belongsTo(Categorie::class, 'categories_id');
    }

}
