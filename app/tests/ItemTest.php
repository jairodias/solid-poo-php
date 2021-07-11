<?php

use App\Item;
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
    /**
     * @var Item
     */
    private $itemEntitie;

    public function setUp()
    {
        $this->itemEntitie = new Item;
    }

    /**
     * @test
     */
    public function shouldBeItemValid()
    {
        $this->itemEntitie->setDescription('Geladeira');
        $this->itemEntitie->setValue(2750.23);

        $result = $this->itemEntitie->itemValid();

        $this->assertTrue($result);
    }
}
