<?php
/**
 * Create folder App\Helpers in App Folder
 * Create File helpers.php
 * set pathe in composer.json "files":["app/Helpers/helpers.php"]
 * command run composer dum-autoload
 * Author: Akash
 */

use Illuminate\Support\Facades\DB;


/**
 * for uppercase method
 */
if(! function_exists('allUpper')) {
    function allUpper($str) 
    {
        return strtoupper($str);
    }
}

/**
 * Function <> get_main_category
 * @param null
 * @return allcategory
 */
if (! function_exists('get_main_category')) {
    function get_main_category()
    {
        $category = DB::table('categories')->get();

        return $category;
    }
}