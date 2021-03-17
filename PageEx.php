<?php
session_start();
include_once  'db_connect.php';
$mysqli = connect();
$sel = select("SELECT * FROM tb_certificate_project WHERE proj_ID = '".$_GET['ExIdProject']."'");
//print_r($sel);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@200&display=swap" rel="stylesheet">
</head>

<body style="font-family: Sarabun">

<?php
 require_once __DIR__ . '/vendor/autoload.php';


$mpdf = new \Mpdf\Mpdf([
    'orientation' => 'L',
    'format' => [210, 297],
    'default_font_size' => $sel[0]['proj_FontSize'],
    'default_font' => 'sarabun'
]);

$mpdf->SetTitle("เกียรติบัตร");

              $html = ' <div style="padding-top:'.$sel[0]["proj_AxisX"].'px;text-align: center;width:100%;font-weight: bold;z-index:99;color:'.$sel[0]["proj_FontColor"].';">'.$sel[0]["proj_NameTest"].'</div>
              <div style="position: absolute; left:0; right: 0; top: 0; bottom: 0;z-index:-99">
              <img src="uploads/'.$sel[0]["proj_Img"].'" 
                   style="width: 210mm; height: 297mm; margin: 0;" />
          </div>'; 

              //$mpdf->SetDocTemplate('A4.pdf',true);
              
              $mpdf->WriteHTML($html);   
             
        $mpdf->Output('intiem.pdf','I'); // opens in browser
       
?>


</body>

</html>