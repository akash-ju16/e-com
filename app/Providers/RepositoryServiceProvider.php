<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\Category\CategoryInterface;
use App\Interfaces\Category\SubCategoryInterface;
use App\Interfaces\Category\ChildCategoryInterface;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Category\SubcategoryRepository;
use App\Repositories\Category\ChildCategoryRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CategoryInterface::class, CategoryRepository::class);
        $this->app->bind(SubCategoryInterface::class, SubcategoryRepository::class);
        $this->app->bind(ChildCategoryInterface::class, ChildCategoryRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
