<?php
    require_once __DIR__.'/../entities/mysqlconnection.php';
    require_once __DIR__.'/../entities/artisan.php';

    class ArtisanManager extends MySqlConnection {

        public function getAllArtisans(){
            $sqlGetData = 'SELECT * FROM artisan';
            $result = mysqli_query($this->getConnection(), $sqlGetData);
            $artisansList = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
            $artisans = array();
    
            foreach($artisansList as $artisanList){
                $artisan = new Artisan();
                $artisan->setId($artisanList['id']);
                $artisan->setName($artisanList['name']);
                $artisan->setDescription($artisanList['description']);
                $artisan->setPhoto($artisanList['photo']);
                $artisan->setAddress($artisanList['address']);
                $artisan->setPhone($artisanList['phone']);
                array_push($artisans, $artisan);
            }
            return $artisans;
        }

        private function filterUserInput($artisan){
            
            $filteredArtisan = new Artisan();

            $name = mysqli_escape_string($this->getConnection(),$artisan->getName());
            $description = mysqli_escape_string($this->getConnection(),$artisan->getDescription());
            $photo = mysqli_escape_string($this->getConnection(),$artisan->getPhoto());
            $address = mysqli_escape_string($this->getConnection(),$artisan->getAddress());
            $phone = mysqli_escape_string($this->getConnection(),$artisan->getPhone());

            $filteredArtisan->setName($name);
            $filteredArtisan->setDescription($description);
            $filteredArtisan->setAddress($address);
            $filteredArtisan->setPhone($phone);
            $filteredArtisan->setPhoto($photo);

            return $filteredArtisan;
        }

        public function insertArtisan($artisanInput){

            $artisan = $this->filterUserInput($artisanInput);

            $name = $artisan->getName();
            $description = $artisan->getDescription();
            $address = $artisan->getAddress();
            $phone = $artisan->getPhone();
            $photo = $artisan->getPhoto();

            // sql insert query
            $sqlInsertQuery = "INSERT INTO artisan
                                (`name`, 
                                `description`, 
                                `address`, 
                                phone,
                                photo) 
                                VALUES('$name', 
                                        '$description',
                                        '$address',
                                        '$phone', 
                                        '$photo')";

        mysqli_query($this->getConnection(), $sqlInsertQuery);
        }

        public function uploadPhoto($fileName, $tempName){

            $folder = __DIR__.'/../uploads/' .$fileName;
            // Now let's move the uploaded image into the folder: uploads
            move_uploaded_file($tempName, $folder);
        }


        // sql delete query
        public function deleteArtisan($id){
            $sqlDeleteQuery = "DELETE FROM artisan WHERE id= $id";
            mysqli_query($this->getConnection(), $sqlDeleteQuery);
        }

        public function editArtisan($artisanInput, $id){
            $artisan = $this->filterUserInput($artisanInput);

            $name = $artisan->getName();
            $description = $artisan->getDescription();
            $address = $artisan->getAddress();
            $phone = $artisan->getPhone();
            $photo = $artisan->getPhoto();
     
            // Update query
            $sqlUpdateQuery = "UPDATE artisan SET 
                                `name`='$name', 
                                `description`n='$description',
                                `address`='$address',
                                phone='$phone',
                                photo='$photo' 
                                WHERE id=$id";
     
             // Make query 
             mysqli_query($this->getConnection(), $sqlUpdateQuery);
       
        }

        public function getArtisan($id){
            $sqlGetQuery = "SELECT * FROM artisan WHERE id= $id";
        
            // get result
            $result = mysqli_query($this->getConnection(), $sqlGetQuery);
        
            // fetch to array
            $artisan_data = mysqli_fetch_assoc($result);

            $artisan = new Artisan();

            $artisan->setId($artisan_data['id']);
            $artisan->setName($artisan_data['name']);
            $artisan->setDescription($artisan_data['description']);
            $artisan->setAddress($artisan_data['address']);
            $artisan->setPhone($artisan_data['phone']);
            $artisan->setPhoto($artisan_data['photo']);
            return $artisan;
        }  
        // filter input later
        public function searchByInput($searchInput){
            $searchQuery = "SELECT * FROM artisan WHERE `name` = '$searchInput' OR  `description` = '$searchInput' OR `address` = '$searchInput'";
            $result = mysqli_query($this->getConnection(), $searchQuery);
            $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

            $artisanArray = array();
            foreach($data as $searchedArtisan){

                $artisan = new Artisan();
                $artisan->setPhoto($searchedArtisan['photo']);
                $artisan->setName($searchedArtisan['name']);
                $artisan->setDescription($searchedArtisan['description']);
                $artisan->setAddress($searchedArtisan['address']);
                $artisan->setPhone($searchedArtisan['photo']);

                array_push($artisanArray, $artisan);

            }
            return $artisanArray;
        }


    }
?>