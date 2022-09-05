<?php 

class Food extends Product
{

    private $brand;
    private $storageSuggestions;



    function __construct($_brand, $_storageSuggestions, $_name, $_quantity, $_animalType, $_weight, $_description, $_price, $_sku, $_expiryDate)
    {

        parent::__construct($_name, $_quantity, $_animalType, $_weight, $_description, $_price, $_sku, $_expiryDate);

        $this->brand = $_brand;
        $this->storageSuggestions = $_storageSuggestions;
    }

    public function getBrand()
    {
        return $this->brand;
    }

    public function getStorageSuggestions()
    {
        return $this->storageSuggestions;
    }

}


