<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\Category\CategoryInterface;
use App\Interfaces\Category\SubCategoryInterface;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Category\SubcategoryRepository;

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
