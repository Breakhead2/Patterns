<?php

namespace Strategy;

class Shop
{
    public function choosePayment(IPayment $payment, $totalPrice, $phone)
    {
        return $payment->pay($totalPrice, $phone);
    }
}