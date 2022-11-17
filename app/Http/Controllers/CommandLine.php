<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommandLine extends Controller
{
    /** How to add multiple columns in already made table in Laravel */

    //php artisan make:migration add_first_item_and_second_item_and_next_item_to_tablename

    /** how to create controller with folder name */
    //php artisan make:controller Relation/RelationController

    /** TABLE CREATE */
    // php artisan make:migration create_posts_table 

    /** using seeder */
    //php artisan make:seeder FilenameSeeder

    /** using factory */
    //php artisan make:factory PostFactory

    /** model with migration */
    //php artisan make:model ModelName -m

    /** database new table upload */
    //php artisan migrate

/** 
 * data insert using seeder
 * 
 */

// php artisan make:seeder FilenameSeeder
//     -using db facade for insert data
//     -using array for insert multiple data
//     -using carbon for insert date

// run seeder file all/specific file
//     -using call method

// for all 
//     php artisan db:seed
// for specific
//     php artisan db:seed --class=SubcateSeeder

//api
//php artisan make:controller Api/ProductController

//php artisan make:resource ProductResource
}
