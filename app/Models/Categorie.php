<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Laravel\Sanctum\HasApiTokens;

class Categorie extends Model
{
    use HasFactory;

    public function subcategorie()
    {
        return $this->hasMany(Subcategorie::class);
    }
}
