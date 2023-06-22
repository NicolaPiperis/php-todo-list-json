<?php
    header("Access-Control-Allow-Origin: http://localhost/backend/");
    header("Access-Control-Allow-Headers: X-Requested-With");

    header('Content-Type: application/json');

    $todoList = [
        "html",
        "css",
        "javascript",
        "vue",
        "php"
    ];

    echo json_encode($todoList);
?>