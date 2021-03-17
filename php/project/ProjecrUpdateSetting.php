<?php 
session_start();
include_once  '../../db_connect.php';
$mysqli = connect();


$data  = array(
    'proj_NameTest' => $mysqli->real_escape_string($_POST['proj_NameTest']), 
    'proj_AxisX' => $mysqli->real_escape_string($_POST['proj_AxisX']),
    'proj_FontSize' => $mysqli->real_escape_string($_POST['proj_FontSize']),
    'proj_FontColor' => $mysqli->real_escape_string($_POST['proj_FontColor']),    
    'proj_NumberAxisX' => $mysqli->real_escape_string($_POST['proj_NumberAxisX']),    
    'proj_NumberAxisY' => $mysqli->real_escape_string($_POST['proj_NumberAxisY']),
    'proj_User' => $_SESSION["AdminID"]
  );

  $update = update("tb_certificate_project",$data,"proj_ID=".$_POST['proj_ID']);
    if ($update){
        $response['status'] = 1; 
      $response['message'] = "สำเร็จ";
    }else{
        $response['message'] = "ตั้งค่าไม่สำเร็จ";
    }

    echo json_encode($response);
?>