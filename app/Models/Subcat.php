<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcat extends Model
{
    use HasFactory;

    public function maincat(){

        return $this->hasOne(Categorie::class);
    }
}
