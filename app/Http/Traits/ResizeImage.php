<?php

namespace App\Http\Traits;
use Image;

Trait ResizeImage {

    public function imageresize($image_file, $path){

        $image_file = $image_file;
        $image_name = $image_file->getClientOriginalName();

        /** image resize using php intervention package */
        $resize_image = Image::make($image_file->getRealPath());
        $resize_image->resize(40, 40);
        $resize_image->save($path .$image_name);

        return $image_name;
    }
}
?>