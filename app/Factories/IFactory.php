<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 2/28/2022
 * Time: 11:35 PM
 */

namespace App\Factories;


interface IFactory
{
    public function getBank(string  $bankID): IBank;

    public function getCard(string  $cardID): ICard;
}
