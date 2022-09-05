
<?php 
class User
{

    public $name;
    public $lastName;


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