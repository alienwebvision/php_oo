<?php

class Product
{
    var $name;
    var $description;
    var $price;


    function get(): String
    {
        return "{$this->name}, {$this->description}, {$this->price}, {$this->weight} <hr>";
    }

    function setName(String $name)
    {
        $this->name = $name;
    }
    function setDescription(String $description)
    {
        $this->description = $description;
    }

    function getName()
    {
        return strtolower($this->name);
    }
}

$tv = new Product;
$tv->setName('TV');
$tv->description = 'Smart TV';
$tv->price = 4.500;
echo $tv->getName();
echo $tv->get();


$geladeira = new Product;
$geladeira->setName('Geladeira');
$geladeira->description = 'Degelo Automático';
$geladeira->price = 2.900;
echo $geladeira->get();

$microondas = new Product();
$microondas->setName('Microondas');
$microondas->description = 'Muito Potente';
$microondas->price = 600;
$microondas->weight = 33;
echo $microondas->get();
