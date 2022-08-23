<?php

namespace Strategy;

class QiwiPayment implements IPayment
{
    function pay($totalPrice, $phone)
    {
        echo "Сервисом Qiwi произведена оплата в размере $totalPrice рублей по номеру телефона $phone" . "<br>";
    }
}