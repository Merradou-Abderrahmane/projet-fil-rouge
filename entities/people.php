<?php

class People {
    private $id;
    private $name;
    private $photo;
    private $phone;
    
    function getId(){
        return $this->id;
    }

    function setId($value) {
        $this->id = $value;
    }
 
    function getName(){
        return $this->name;
    }

    function setName($value) {
        $this->name = $value;
    }
     
    function getPhoto(){
        return $this->photo;
    }

    function setPhoto($value){
        $this->photo = $value;
    }

    function getPhone(){
        return $this->phone;
    }

    function setPhone($value){
        $this->phone = $value;
    }
}