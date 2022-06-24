<?php

class Category{
    private $id;
    private $category;
    private $photo;

    function getId(){
        return $this->id;
    }

    function setId($value) {
        $this->id = $value;
    }

    function getCategory(){
        return $this->category;
    }

    function setCategory($value) {
        $this->category = $value;
    }

    function getPhoto(){
        return $this->photo;
    }

    function setPhoto($value){
        $this->photo = $value;
    }
}

?>