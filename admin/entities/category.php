<?php

class Category{
    private $id;
    private $name;
    private $photo;

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
}

?>