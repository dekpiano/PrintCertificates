<?php 
    include_once  '../../db_connect.php';
    $mysqli = connect();

    session_destroy();
    header("Location: ../../index.php");
?>