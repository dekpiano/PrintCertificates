<?php 
session_start();
include_once  '../../db_connect.php';
$mysqli = connect();

$target_dir = "../../uploads/";
$target_file = $target_dir;
$uploadOk = 1;
$imageFileType = explode('.',$_FILES['proj_Img']['name']);
$NewName = date('YmdHis').'.'.@$imageFileType[1];

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["proj_Img"]["tmp_name"]);
  if($check !== false) {
    $response['message'] = "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    $response['message'] = "File is not an image.";
    $uploadOk = 0;
  }
}


// Check file size
if ($_FILES["proj_Img"]["size"] > 500000) {
  $response['message'] = "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if(@$imageFileType[1] != "jpg" && @$imageFileType[1] != "jpeg" && @$imageFileType[1] != "png") {
  $response['message'] = "อัพโหลด เฉพาะสกุลไฟล์ jpg png เท่านั้น";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  //$response['message'] = "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["proj_Img"]["tmp_name"], $target_file.$NewName)) {
    
    
    $data  = array(
      'proj_NameProject' => $mysqli->real_escape_string($_POST['proj_NameProject']), 
      'proj_Topic' => $mysqli->real_escape_string($_POST['proj_Topic']),
      'proj_Abbreviution' => $mysqli->real_escape_string($_POST['proj_Abbreviution']),
      'proj_NumberStart' => $mysqli->real_escape_string($_POST['proj_NumberStart']),
      'proj_Years' => $mysqli->real_escape_string($_POST['proj_Years']),
      'proj_Img' => $NewName,
      'proj_User' => $_SESSION["AdminID"],
      'proj_CreateDate' => date('Y-m-d H:i:s'),
      'proj_NameTest' => "ชื่อ นามสกุล",
      'proj_AxisX' => 220,
      'proj_FontSize' => 30,
      'proj_FontColor' => '#000000'
    );

    $add = insert('tb_certificate_project',$data);
    if($add == 1){
      $response['status'] = 1; 
      $response['message'] = "สำเร็จ";
    }
    
  } else {
    $response['message'] = "Sorry, there was an error uploading your file.";
  }
}

echo json_encode($response);
?>