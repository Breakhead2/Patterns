<?php

namespace Strategy;

class YandexPayment implements IPayment
{

    function pay($totalPrice, $phone)
    {
        echo "Сервисом Yandex произведена оплата в размере $totalPrice рублей по номеру телефона $phone" . "<br>";
    }
}
