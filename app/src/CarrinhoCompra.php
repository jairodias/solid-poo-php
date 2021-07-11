<?php

namespace App;

class CarrinhoCompra
{
    // atributos
    private $items;
    private $status;
    private $totalValue;

    public function __construct()
    {
        $this->items = [];
        $this->status = 'open';
        $this->totalValue = 0;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function addItemToCart(string $item, float $value)
    {
        array_push($this->items, [
            'item' => $item,
            'value' => $value
        ]);

        $this->totalValue += $value;
    }

    public function getTotalValue()
    {
        return $this->totalValue;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function confirmedOrder()
    {
        if ($this->cartValid()) {
            $this->status = 'confirmed';
            $this->sendMail();

            return true;
        }

        return false;
    }

    public function sendMail()
    {
        echo "... email enviado";
    }

    public function cartValid()
    {
        return count($this->items) > 0;
    }
}
