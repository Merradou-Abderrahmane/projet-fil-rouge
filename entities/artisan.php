<?php
    require_once 'people.php';
    class Artisan extends People {
        private $description;
        private $address;
      
        function getDescription(){
            return $this->description;
        }

        function setDescription($value){
            $this->description = $value;
        }

        function getAddress(){
            return $this->address;
        }

        function setAddress($value){
            $this->address = $value;
        }
        
        function getCategory(){
            return $this->category;
        }

        function setCategory($value){
            $this->category = $value;
        }

    }
?>