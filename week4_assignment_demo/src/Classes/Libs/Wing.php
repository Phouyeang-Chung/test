<?php
namespace Paragon\Libs;

use Paragon\Interfaces\IPayment;

class Wing implements IPayment
{

    public function getTotalPay($total)
    {
        return floatval($total);
    }
}