<?php
namespace App\Repositories\Category;

use App\Interfaces\Category\CategoryInterface;
use App\Models\Categorie;

class CategoryRepository implements CategoryInterface
{
    public function getCategoryAll()
    {
        return Categorie::all();
    }
}

?>