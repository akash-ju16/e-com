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

    /** specific category  */
    public function getCategoryById($cateid)
    {
        return Categorie::findOrFail($cateid);
    }

    /** create category */
    public function createCategory(array $categoryDetails)
    {
        return Categorie::create($categoryDetails);
    }

    /** udpate category */
    public function updateCategory($catid, $newCategoryDetails)
    {
        return Categorie::whereId($catid)->update($newCategoryDetails);
    }

    /** delete category */
    public function deleteCategory($catid)
    {
        Categorie::destroy($catid);
    }
}

?>