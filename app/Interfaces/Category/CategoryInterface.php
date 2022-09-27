<?php

namespace App\Interfaces\Category;

interface CategoryInterface{
    public function getCategoryAll();
    public function createCategory(array $data);
}

?>