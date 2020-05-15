<?php
namespace Paragon\Models;

class Product
{
    protected $name;
    protected $qty;
    protected $unitPrice;

    public function __construct($name, $qty, $unitPrice)
    {
        $this->name = $name;
        $this->qty = $qty;
        $this->unitPrice = $unitPrice;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return integer
     */
    public function getQuantity()
    {
        return $this->qty;
    }

    /**
     * @return double
     */
    public function getUniPrice()
    {
        return $this->unitPrice;
    }

    /**
     * @return double
     */
    public function getTotal()
    {
        return $this->getQuantity() * $this->getUniPrice();
    }
}