<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 2/28/2022
 * Time: 11:40 PM
 */

namespace App\Classes;


use App\Factories\IBank;

class BankB implements IBank
{

    public function getBankName(): string
    {
        return "QNB";
    }
}
