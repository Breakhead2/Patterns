<?php

namespace Strategy;

interface IPayment
{
    function pay($totalPrice, $phone);
}