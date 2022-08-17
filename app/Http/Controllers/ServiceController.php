<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\MyFirstInterface;

class ServiceController extends Controller
{
    public function displayService(MyFirstInterface $custom_service)
    {
        $custom_service->sayHello();
        $custom_service->sayHi();

        exit;
    }
}
