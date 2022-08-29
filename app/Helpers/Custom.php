<?php
/**
 * Register config/app.php  in Class Aliases 
 * Aliases name CustomHelper
 * Autor: Akash
 */
namespace App\Helpers;

class Custom {

    public static function uppercase($str)
    {
        return strtoupper($str);
    }
}