<?php

namespace App\Interfaces\Category;

interface ChildCategoryInterface{
    public function getCategoryAll();
    public function getChildCategoryWithCategoryWirhSubCategory();
    public function getCategoryById($catid);
    public function createCategory(array $data);
    public function updateCategory($catid, array $data);
    public function deleteCategory($catid);
}

?>