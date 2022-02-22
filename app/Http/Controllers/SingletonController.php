<?php

namespace App\Http\Controllers;

use App\Services\SingletonService;
use Illuminate\Http\Request;

class SingletonController extends Controller
{
    public function __invoke()
    {

        $objA = SingletonService::getInstance();
        $objA->addCount();

        $objB = SingletonService::getInstance();
        $objB->addCount();

        $objC = SingletonService::getInstance();
        $objC->addCount();
        $objC->addCount();

        return response()->json(['$objAOfUsers' => $objA->getCount(), '$objBOfUsers' => $objB->getCount()]);
    }
}
