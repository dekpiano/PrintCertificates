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
    'default_font_size' => 38,
    'default_font' => 'sarabun'
]);

$mpdf->SetTitle("เกียรติบัตร");

              $html = ' <div style="padding-top:220px;text-align: center;width:100%;font-weight: bold;">ทดสอบ</div>
             '; 

              $mpdf->SetDocTemplate('A4.pdf',true);
              
              $mpdf->WriteHTML($html);   
             
        $mpdf->Output('intiem.pdf','I'); // opens in browser
       
?>


</body>

</html>