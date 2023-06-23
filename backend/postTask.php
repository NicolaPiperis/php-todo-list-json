<?php
    header("Access-Control-Allow-Origin: http://localhost:5173");
    header("Access-Control-Allow-Headers: X-Requested-With");

    header('Content-Type: application/json');

    $newTask = $_POST;

    $newTasksStr = file_get_contents("data.json");
    $newTasks = json_decode($newTasksStr);

    $newTasks[] = $newTask;

    $newTasksStr = json_encode($newTasks);

    file_put_contents("data.json", $newTasksStr);
    echo $newTasksStr;
?>



