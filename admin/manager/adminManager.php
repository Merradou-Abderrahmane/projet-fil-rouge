<?php

    require_once __DIR__.'/../entities/mysqlconnection.php';
    require_once __DIR__.'/../entities/admin.php';
class AdminManager extends MySqlConnection {
    public function logIn ($username, $password){

        // fetch admin credentials from database
        
        $query = "SELECT * FROM admin WHERE name = '$username' AND password = '$password'";
        $result = mysqli_query($this->getConnection(), $query);
        $row = mysqli_fetch_object($result);
        
                    if(!empty($row)){
                        
                if($username == $row->name AND  $password == $row->password){
        
                    $_SESSION['id'] = $row->id;
                    $_SESSION['name'] = $row->name;
                    $_SESSION['password'] = $row->password;
                    
                    header('location:./../index.php');
                }
              
                    }
            }
        
}
?>