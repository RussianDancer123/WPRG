<?php

namespace zad2;
class Product
{
    private string $name;
    private float $price;
    private int $quantity;

    public function __construct(string $name, int $price, int $quantity){
        $this->setName($name);
        $this->setPrice($price);
        $this->setQuantity($quantity);
    }

    public function __toString(): string{
        return "Product: ".$this->getName().", Price: ".$this->getPrice().", Quantity: ".$this->getQuantity();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }



}