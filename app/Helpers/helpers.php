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
 * Function <> allMainCategory
 * @param null
 * @return allcategory
 */
if (! function_exists('allMainCategory')) {
    function allMainCategory()
    {
        $category = DB::table('categories')->get();

        return $category;
    }
}