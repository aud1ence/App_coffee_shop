<?php

namespace App\Models;

class Database
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=coffee_shop_management';
        $this->username = 'root';
        $this->password = '1234';
    }

}