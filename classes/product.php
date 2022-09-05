<?php 

class Product {

    private $name;
    private $quantity;
    private $animalType;
    private $weight;
    private $description;
    private $price;
    private $sku;


    function __construct($_name, $_quantity, $_animalType, $_weight, $_description, $_price, $_sku)
    {
        $this->name = $_name;
        $this->quantity = $_quantity;
        $this->animalType = $_animalType;
        $this->weight = $_weight;
        $this->description = $_description;
        $this->price = $_price;
        $this->sku = $_sku;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getAnimalType()
    {
        return $this->animalType;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getSku()
    {
        return $this->sku;
    }
}