<?php
    // per dire quali pagine sono autorizzate
    header("Access-Control-Allow-Origin: http://localhost:5173");
    header("Access-Control-Allow-Headers: X-Requested-With");

    // per far capire a js che si tratterà di un file json
    header('Content-Type: application/json');

    // creo una variabile che prende i dati del jason
    $todoListStr = file_get_contents("data.json");

    // porto nel frontend la variabile contenente il jason attraverso la chiamata axios.get in app.vue
    echo $todoListStr;
?>