<?php 
 
 class connectDB {

    private $connect = null;

    public function connectDB(){

        if(is_null($this->connect)){
     
          $this->connect = mysqli_connect('localhost','problemSolvers','123456','habits');

        }

        else{

            if(!$this->connect){

                $message = "database connection eroor : " . mysqli_connect_erro();

                throw new exception($message);
             }

        }
    }
 }