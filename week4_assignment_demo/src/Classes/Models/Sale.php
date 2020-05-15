<?php
namespace Paragon\Models;

use Paragon\Interfaces\IPayment;

class Sale
{
    /** @var Product */
    protected $product;

    /** @var IPayment */
    protected $payment;

    public function __construct($payment, $product = null)
    {
        $this->payment = $payment;
        $this->product = $product;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->payment->getTotalPay($this->product->getTotal());
    }

    /**
     * @return string
     */
    public function getPaymentMethod()
    {
        $className = explode('\\', get_class($this->payment));
        return $className[count($className) - 1];
    }
}