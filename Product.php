<?php

class Product
{
    public $name;

    public $price;

    public function createProduct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function showPrice() {
        return 'Цена товара: ' . $this->price;
    }


}