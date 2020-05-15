<?php
namespace Paragon\Interfaces;

interface IPayment
{
    /**
     * Allow each payment methods to manipulate total price
     *
     * @param $total
     * @return float
     */
    public function getTotalPay($total);
}