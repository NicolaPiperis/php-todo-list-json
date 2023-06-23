<?php
    // per dire quali pagine sono autorizzate
    header("Access-Control-Allow-Origin: http://localhost:5173");
    header("Access-Control-Allow-Headers: X-Requested-With");

    // per far capire a js che si tratterà di un file json
    header('Content-Type: application/json');

    // mi prendo l'oggetto nuova task da app.vue
    $newTask = $_POST;

    // prendo da data.json l'array di oggetti
    $newTasksStr = file_get_contents("data.json");

    // lo trasformo in un array leggibile da php 
    $newTasks = json_decode($newTasksStr);

    // prendo l'array e ci pusho dentro l'oggetto nuova task preso da APP.vue tramite il $_POST
    $newTasks[] = $newTask;
    
    // rimando l'array a data.json
    file_put_contents("data.json", json_encode($newTasks));
    // rispondo alla chiamata axios con il nuovo array con dentro l'oggetto newtask
    echo json_encode($newTasks);

    // DA 20/24, STESSA COSA CON SINTASSI DIFFERENTE
    // $newTasksStr = json_encode($newTasks);
    // file_put_contents("data.json", $newTasksStr);
    // echo $newTasksStr;
    ?>



