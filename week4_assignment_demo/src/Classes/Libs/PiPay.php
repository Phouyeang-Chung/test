<?php
namespace Paragon\Libs;

use Paragon\Interfaces\IPayment;

class PiPay implements IPayment
{
    public function getTotalPay($total)
    {
        return floatval($total);
    }
}