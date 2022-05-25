<?php

include '../config/configDB.php';

class user{


    public function register($fullname,$email,$password){
        

        $createUser = "INSERT INTO users(fullName,email,pass) VALUES ('$fullname','$email','$password')";
        $configDB = new dataBase();
        $db = $configDB->connectDB();
        $result = mysqli_query($db, $createUser);

     
    }
}

?>