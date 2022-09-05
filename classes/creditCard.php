<?php 

class CreditCard
{

    private $name;
    private $lastName;
    private $number;
    private $expiryDate;
    private $cvvCode;


    function __construct($_name, $_lastName, $_number, $_expiryDate, $_cvvCode)
    {
        $this->name = $_name;
        $this->lastName = $_lastName;
        $this->number = $_number;
        $this->expiryDate = $_expiryDate;
        $this->cvvCode = $_cvvCode;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    public function getCvvCode()
    {
        return $this->cvvCode;
    }

}

