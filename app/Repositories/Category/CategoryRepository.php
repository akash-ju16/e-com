<?php
namespace App\Repositories\Category;

use App\Interfaces\Category\CategoryInterface;
use App\Models\Categorie;

class CategoryRepository implements CategoryInterface
{
    /** fetch all categories */
    public function getCategoryAll()
    {
        return Categorie::all();
    }

    /** create category */
    public function createCategory(array $categoryDetails)
    {
        return Categorie::create($categoryDetails);
    }
}

?>