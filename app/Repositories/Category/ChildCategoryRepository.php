<?php
namespace App\Repositories\Category;

use App\Interfaces\Category\ChildCategoryInterface;
use App\Models\{Subcategorie,Categorie,ChildCategory};

class ChildCategoryRepository implements ChildCategoryInterface
{
    /** fetch all sub categories */
    public function getCategoryAll()
    {
        return ChildCategory::all();
    }

    /** child category with category and also sub-category */
    public function getChildCategoryWithCategoryWirhSubCategory()
    {
        return ChildCategory::with(['subcategorie','maincategory'])->get();
    }

    /** specific category  */
    public function getCategoryById($cateid)
    {
        return ChildCategory::findOrFail($cateid);
    }

    /** create category */
    public function createCategory(array $categoryDetails)
    {
        return ChildCategory::create($categoryDetails);
    }

    /** udpate category */
    public function updateCategory($catid, $newCategoryDetails)
    {
        return ChildCategory::whereId($catid)->update($newCategoryDetails);
    }

    /** delete category */
    public function deleteCategory($catid)
    {
        ChildCategory::destroy($catid);
    }
}

?>