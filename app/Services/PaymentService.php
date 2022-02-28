<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 2/28/2022
 * Time: 11:38 PM
 */

namespace App\Services;


use App\Classes\BankA;
use App\Classes\BankB;
use App\Classes\CardA;
use App\Classes\CardB;
use App\Factories\IBank;
use App\Factories\ICard;
use App\Factories\IFactory;

class PaymentService implements IFactory
{

    public function getBank(string $bankID): IBank
    {
        switch ($bankID) {
            case 1:
                return new  BankA();
            case 2:
                return new  BankB();
        }

    }

    public function getCard(string $cardID): ICard
    {
        switch ($cardID) {
            case 1:
                return new  CardA();
            case 2:
                return new  CardB();
        }
    }
}
