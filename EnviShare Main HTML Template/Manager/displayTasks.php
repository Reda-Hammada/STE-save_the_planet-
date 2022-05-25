<?php

require '../entities/day.php';
require '../config/configDB.php';

class day {

   // method to fetch data from the database to display
    public function fetchTasks(){
        
        $configDB = new dataBase();
        $database = $configDB->connectDB();
        $tasks = 'SELECT * FROM days';
        $result = mysqli_query($database,$tasks);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);


    
        // die(); // used this pre built function to debug the code

         $dayData = array();


         foreach($data as $task){

           $dayEntity = new newDay();
           $dayEntity->setTask1($task['taks1']);
           $dayEntity->setTask2($task['taks2']);
           $dayEntity->setTask3($task['taks3']);
           $dayEntity->setTask4($task['taks4']);
           $dayEntity->setTask5($task['taks5']);
           $dayEntity->setTask6($task['taks6']);
         
         

           array_push($dayData, $dayEntity);
        }


        return $dayData;

    }
}








?>