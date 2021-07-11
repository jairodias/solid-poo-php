<?php

namespace App;

use App\Cart;

class Order
{
    private $status;

    /**
     * @var Cart
     */
    private $cart;
    private $totalOrder;

    public function __construct()
    {
        $this->status = 'open';
        $this->cart = new Cart;
        $this->totalOrder = 0;
    }

    public function getCart()
    {
        return $this->cart;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus(string $status)
    {
        $this->status = $status;
    }

    public function confirmOrder()
    {
        if ($this->cart->cartValid()) {
            $this->setStatus('confirmed');
            return true;
        }

        return false;
    }
}
