<?php

namespace App\Services;

class MyFirstService implements MyFirstInterface {

    //defination of sayHello()
    public function sayHello(){
        echo 'Hello, How are you ?<br>';
    }

    public function sayHi(){
        echo 'hi, say hi from inside service ....<br>';
    }

    //not need definition
    public function sayBye(){}
}

?>