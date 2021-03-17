<?php 
session_start();
include_once  '../../db_connect.php';
$mysqli = connect();
$ID = $mysqli->real_escape_string($_POST['ProjID']);
$sel = select("SELECT * FROM tb_certificate_project WHERE proj_ID = '".$ID."'");

echo json_encode($sel);

?>