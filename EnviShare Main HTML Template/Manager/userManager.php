<?php



include '../config/configDB.php';

class user{

    public function login($email, $password){ 

                    $getUser = "SELECT * FROM users WHERE email ='$email' AND pass ='$password' ";
                    $configDB = new database();
                    $db = $configDB->connectDB();
                    $query = mysqli_query($db, $getUser);
                    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

                    return $result;

            

                    

                     

    } 


// method create new user 
    public function register($fullname,$email,$password){
        

        $createUser = "INSERT INTO users(fullName,email,pass) VALUES('$fullname','$email','$password')";
        $configDB = new dataBase();
        $db = $configDB->connectDB();
        $result = mysqli_query($db, $createUser);
        Header('location:login.php');

     
    }
}

?>;