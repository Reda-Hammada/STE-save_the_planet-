<?php
include '../Manager/displayTasks.php';

$task = new day();
$tasks = $task->fetchTasks();

session_start();
echo"welcome Mr " . $_SESSION['username'] . " this is your dashboard";


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($tasks as $dayEntity){ ?>

        <ul>
            <li><?php echo  $dayEntity->getTask1() ?></li>
            <li><?php echo  $dayEntity->getTask2()?></li>
            <li><?php echo  $dayEntity->getTask3() ?></li>
            <li><?php echo  $dayEntity->getTask4() ?></li>
            <li><?php echo  $dayEntity->getTask5()?></li>
            <li><?php echo  $dayEntity->getTask6() ?></li>
        </ul>

    <?php } ?>
    </body>
</html>