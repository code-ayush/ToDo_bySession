<?php

session_start();
    $item = $_POST["item"];
    array_push($_SESSION['todoCollection'], ['caption'=> $item, 'isCompleted'=> false]);


    header("Location: {$_SERVER['HTTP_REFERER']}");
?>