


<?php 
class User
{

    private $name;
    private $lastName;


    function __construct($_name, $_lastName)
    {
        $this->name = $_name;
        $this->lastName = $_lastName;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLastname()
    {
        return $this->lastName;
    }

}