<?php
namespace Paragon\Libs;

use Paragon\Interfaces\IPayment;

class ABA implements IPayment
{
    public function getTotalPay($total)
    {
        return floatval($total);
    }
}