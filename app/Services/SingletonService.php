<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 2/22/2022
 * Time: 9:28 PM
 */

namespace App\Services;


class SingletonService
{


    private $count;
    private static $instance = null;

    private function __construct()
    {
        $this->count = 0;
    }

    public static function getInstance(): self
    {
        if (!self::$instance) {
            self::$instance = new SingletonService();
        }
        return self::$instance;
    }

    public function addCount(): void
    {
        $this->count++;
    }

    public function getCount(): int
    {
        return $this->count;
    }

}
