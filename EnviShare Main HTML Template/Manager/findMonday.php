<?php

require './entities/monday.php';
require './config/configDB.php';

class findMonday {

    public function find(){
       
        $monday = 'SELECT * FROM monday';
        $configDB = new connectDB();
        $db = $configDB->connectDataBase();
        $result = mysqli_query($db,$monday);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

        $mondayData = array();

        foreach($data as $task){

            


        }

    }
}








?>