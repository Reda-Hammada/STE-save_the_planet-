<?php 
 
 class dataBase {


  public function connectDB() {


    $connect = null ;

    if($connect == null):

        $connect = mysqli_connect('localhost','Reda','123456', 'habits');

    else:

        $message = "database error";

        throw new exception($message);

    
    endif;

    return $connect;
}

 }