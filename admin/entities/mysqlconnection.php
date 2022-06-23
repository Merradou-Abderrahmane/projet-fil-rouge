<?php 

class MySqlConnection{
    private $host;
    private $user;
    private $password;
    private $database;

    protected function getConnection(){
        $this->host = "localhost";
        $this->user = "test";
        $this->password = "test123";
        $this->database = "biaawcheria";

        $connection = new mysqli($this->host , $this->user , $this-> password , $this->database);
        return $connection;
    }
}