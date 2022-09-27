<?php

namespace App\Interfaces\Category;

interface CategoryInterface{
    public function getCategoryAll();
    public function getCategoryById($catid);
    public function createCategory(array $data);
    public function updateCategory($catid, array $data);
    public function deleteCategory($catid);
}

?>