<?php


class Product
{
    var $name;
    var $description;
    var $price;


    function __construct(String $name, String $description, float $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    function get()
    {
        return "{$this->name}, {$this->description},{$this->price}<hr>";
    }

    function __destruct()
    {
        echo 'Entrei no destrutor .... uuuaaaauuu';
    }

}

$product1 = new Product('TV','Muito boa','4.500');
echo $product1->get();

$product2 = new Product('Geladeira', 'Gela muito', '5.900');
echo $product2->get();
