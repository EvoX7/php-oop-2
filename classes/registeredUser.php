

<?php

class RegisteredUser extends User
{
    private $email;
    protected $password;
    private $address;
    private $phone;


    function __construct($_name, $_lastName, $_email, $_password, $_address, $_phone)
    {
        parent::__construct($_name, $_lastName);

        $this->email = $_email;
        $this->password = $_password;
        $this->address = $_address;
        $this->phone = $_phone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getPhone()
    {
        return $this->phone;
    }
}
