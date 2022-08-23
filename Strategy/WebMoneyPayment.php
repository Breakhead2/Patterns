<?php

namespace Strategy;

class WebMoneyPayment implements IPayment
{

    function pay($totalPrice, $phone)
    {
        echo "Сервисом WebMoney произведена оплата в размере $totalPrice рублей по номеру телефона $phone" . "<br>";
    }
}