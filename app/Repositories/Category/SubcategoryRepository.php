<?php
namespace App\Repositories\Category;

use App\Interfaces\Category\SubCategoryInterface;
use App\Models\Subcategorie;

class SubcategoryRepository implements SubCategoryInterface
{
    /** fetch all sub categories */
    public function getCategoryAll()
    {
        //
    }

    /** specific category  */
    public function getCategoryById($cateid)
    {
        //
    }

    /** create category */
    public function createCategory(array $categoryDetails)
    {
        return Subcategorie::create($categoryDetails);
    }

    /** udpate category */
    public function updateCategory($catid, $newCategoryDetails)
    {
        //
    }

    /** delete category */
    public function deleteCategory($catid)
    {
        //
    }
}

?>