<?php

namespace App;

class Item
{
    private $description;
    private $value;

    public function __construct()
    {
        $this->description = '';
        $this->value = 0;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue(float $value)
    {
        return $this->value = $value;
    }

    public function itemValid()
    {
        if (empty($this->getDescription())) return false;
        if ($this->getValue() == 0) return false;

        return true;
    }
}
