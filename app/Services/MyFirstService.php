<?php

namespace App\Services;

class MyFirstService implements MyFirstInterface {

    //defination of sayHello()
    public function sayHello(){
        echo 'Hello, How are you ?';
    }

    public function sayHi(){
        echo 'hi, say hi from inside service ....';
    }
}

?>