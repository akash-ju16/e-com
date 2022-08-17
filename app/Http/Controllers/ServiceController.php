<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\MyFirstInterface;
use App\Services\MySecondService;
use App\Services\MyThirdService;

class ServiceController extends Controller
{
    public function displayService(MyFirstInterface $custom_service, MySecondService $sec_custom_service)
    {
        //first service based on interfaces
        $custom_service->sayHello();
        $custom_service->sayHi();

        //second service based on class
        $sec_custom_service->fun();
        $details = $sec_custom_service->details();
        echo '<pre>';
        print_r($details);

        //without bind and without register provide 
        MyThirdService::staticFun();
        die;
    }
}
