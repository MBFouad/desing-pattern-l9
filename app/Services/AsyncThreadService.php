<?php

namespace App\Services;


class AsyncThreadService extends \Threaded
{
    public function run()
    {
        $objA = SingletonService::getInstance();
        $objA->addCount();
        print_r($objA->getCount());
    }
}

//$pool = new AsyncThreadService();
