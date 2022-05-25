<?php


include '../config/configDB.php';

class user{

    // check user credentials if true  and return them in an array


    public function login($email, $password){ 

                    $config = new dataBase();
                    $db = $config->connectDB();
                    $getUser = "SELECT * FROM users WHERE email = '$email' AND pass = '$password'";
                    $query = mysqli_query($db, $getUser);
                    $result = mysqli_fetch_assoc($query);
                    $_SESSION['username'] = $result['fullName'];

                    if($result['email'] == $email AND $result['pass'] ==  $password){
                        header("Location: dashboard.php" );
                    }
                    
         
                    

                     

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