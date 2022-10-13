<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Laravel\Sanctum\HasApiTokens;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = ['en_name', 'bn_name', 'cat_img_name'];

    public function subcategorie()
    {
        return $this->hasMany(Subcategorie::class);
    }

    public function childcategory()
    {
        return $this->hasMany(ChildCategory::class, 'categories_id');
    }
}
