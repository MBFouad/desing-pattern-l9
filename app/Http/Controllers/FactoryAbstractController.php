<?php

namespace App\Http\Controllers;

use App\Services\AsyncThreadService;
use App\Services\PaymentService;
use App\Services\SingletonService;
use Illuminate\Http\Request;

class FactoryAbstractController extends Controller
{
    public function __invoke()
    {
        $bank = 1;
        $card = 2;

        $payment = new PaymentService();
        $bankObj = $payment->getBank($bank);
        $cardObj = $payment->getCard($card);

        return response()->json(['bank' => $bankObj->getBankName(), 'card' => $cardObj->getCardName()]);
    }
}


