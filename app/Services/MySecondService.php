<?php

namespace App\Services;

class MySecondService {

    public function fun(){
        echo 'class based binding..<br>';
    }

    public function details()
    {
        return [
            'server' => 'Server',
            'type' => 'VPS',
            'disk' => '300000Mb',
        ];
    }
}

?>