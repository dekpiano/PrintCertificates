<?php 
    include_once  '../../db_connect.php';

    $mysqli = connect();
    
    $log_username = $mysqli->real_escape_string($_POST['username']);
	$log_password = $mysqli->real_escape_string($_POST['password']);

    $sel_login = select("SELECT * FROM tb_certificate_admin WHERE certifi_admin_username = '".$log_username."' AND certifi_admin_password = '".$log_password."'");

    if (count($sel_login) == 1) {
        $_SESSION["AdminID "] = $sel_login[0]['certifi_admin_id '];
        $_SESSION["AminFullname"] = $sel_login[0]['certifi_admin_fullname'];
       
        header("Location: ../../PageMain.php");
        
    }else{
        header("Location: ../../index.php");
    }


?>