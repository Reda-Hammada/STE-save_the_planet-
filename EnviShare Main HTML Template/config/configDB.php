<?php 
 
 class connectDB {

    private $connect = null;

    public function connectDataBase(){

        if(is_null($this->connect)){
     
          $this->connect = mysqli_connect('localhost','problemSolvers','123456','habits');

        }

        else{

            if(!$this->connect){

                $message = "database connection error : " . mysqli_connect_erro();

                throw new exception($message);
             }

        }
    }
 }