<?php

    require_once __DIR__.'/../entities/mysqlconnection.php';
    require_once __DIR__.'/../entities/admin.php';
class AdminManager extends MySqlConnection {
    public function logIn ($name, $password){

// fetch admin credentials from database

$query = "SELECT * FROM admin WHERE `name` = $name AND `password` = $password";
$result = mysqli_query($this->getConnection(), $query);
$row = mysqli_fetch_assoc($result);

        if($row['name'] == $name && $row['password'] == $password){
            $_SESSION['id'] = $result->id;
            $_SESSION['password'] = $result->password;
            header('location:/../index.php');
        }
        // else{
        //     header('location:./../admin/login.php');
        //         }
    }
}
?>