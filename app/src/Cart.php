<?php

namespace App;

use App\Item;

class Cart
{
    /**
     * @var array
     */
    private $items;

    public function __construct()
    {
        $this->items = [];
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Item $item
     * @return void
     */
    public function addItemToCart(Item $item): void
    {
        $this->items[] = $item;
    }

    /**
     * @return bool
     */
    public function cartValid(): bool
    {
        return count($this->items) > 0;
    }
}
