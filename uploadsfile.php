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
 require_once "excel/PHPExcel.php";//เรียกใช้ library สำหรับอ่านไฟล์ excel

 $tmpfname = "stu.xlsx";//กำหนดให้อ่านข้อมูลจากไฟล์จากไฟล์ชื่อ
 //สร้าง object สำหรับอ่านข้อมูล ชื่อ $excelReader
 $excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
 $excelObj = @$excelReader->load($tmpfname);//อ่านข้อมูลจากไฟล์ชื่อ test_excel.xlsx
 $worksheet = $excelObj->getSheet(0);//อ่านข้อมูลจาก sheet แรก
 $lastRow = $worksheet->getHighestRow(); 
//นับว่า sheet แรกมีทั้งหมดกี่แถวแล้วเก็บจำนวนแถวไว้ในตัวแปรชื่อ $lastRow

$mpdf = new \Mpdf\Mpdf([
    'orientation' => 'L',
    'format' => [190, 278],
    'default_font_size' => 38,
    'default_font' => 'sarabun'
]);
$mpdf->SetTitle("เกียรติบัตร");

        for ($row = 1; $row <= $lastRow; $row++)//วน loop อ่านข้อมูลเอามาแสดงทีละแถว
       {         
              $html = '<div style="padding-top:220px;text-align: center;width:100%;font-weight: bold;">'.$worksheet->getCell('B'.$row)->getValue().'</div>'; 

              $mpdf->SetDocTemplate('YVY.pdf',true);
              
              $mpdf->WriteHTML($html);
              $mpdf->AddPage();
              
        }
        $mpdf->Output('intiem.pdf','I'); // opens in browser
?>


</body>

</html>