<?php 

class Product {

    private $name;
    private $quantity;
    private $animalType;
    private $weight;
    private $description;
    private $price;


    function __construct($_name, $_quantity, $_animalType, $_weight, $_description, $_price)
    {
        $this->name = $_name;
        $this->quantity = $_quantity;
        $this->animalType = $_animalType;
        $this->weight = $_weight;
        $this->description = $_description;
        $this->price = $_price;
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
}