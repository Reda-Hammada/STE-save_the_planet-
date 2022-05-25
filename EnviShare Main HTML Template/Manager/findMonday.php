<?php

require './entities/monday.php';
require './config/configDB.php';

class findMonday {

   // method to fetch data from the database to display
    public function find(){
        
        $configDB = new dataBase();
        $database = $configDB->connectDB();
        $monday = 'SELECT * FROM days';
        $result = mysqli_query($database,$monday);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

        // $mondayData = array();

        return print_r($data);

        // foreach($data as $task){

        //     $mondayEntity = new Monday();
        //     $mondayEntity->setTask1($task['task1']);





        // }

    }
}








?>