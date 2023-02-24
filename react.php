<?php
session_start();
require_once 'FPDF/fpdf.php';
require_once 'config.php';
$query="SELECT f.*,r.* FROM `floorplan` f inner join registration r on f.uid=r.id WHERE statusset=1;";
$data = mysqli_query($conn,$query);

//    if(isset($_POST['btn_pdf']))
//    {
    $pdf =new FPDF('p','mm','a4');
    $pdf->SetFont('Times', 'B', 20);
    $pdf->AddPage();
    $pdf->SetFont('Times', 'B', 20);
    
    
$pdf->Rect(10, 8, 190, 280, 'D');

    while($row = mysqli_fetch_assoc($data))   
    {
$pdf->Cell(30);
$pdf->Cell(60,20,' DREAM HOME  -Your Dream Comes True ');
$pdf->Ln();
$pdf->Line(10,40,200,40);
$pdf->Ln(15);
$pdf->SetFont('Times', 'B', 13);
$pdf->Cell(45,5,'   NAME :',0,0,'C');
$pdf->Cell(45,5,$row['fname'],1,0);
$pdf->Cell(45,5,'   ADDRESS :',0,0,'C');
$pdf->Cell(45,5,$row['address'],1,1);
$pdf->Cell(45,5,'   PHONE NUMBER:',0,0,'C');
$pdf->Cell(45,5,$row['phonenumber'],1,0);
$pdf->Cell(45,5,' DATE :',0,0,'C');
$pdf->Cell(45,5,$row['createdate'],1,0,);
$pdf->SetFont('Times', 'B', 13);
$pdf->Line(10,60,200,60);
$pdf->Ln(30);
$pdf->Cell(50,5,' Square Feet :',0,0);
$pdf->Cell(10);
$pdf->Cell(50,5,$row['squarefeet'].' sq.ft',0,0);
$pdf->Cell(10,5,' Bed Room : ',0,0);
$pdf->Cell(50);
$pdf->Cell(50,5,$row['bedroom'],0,1);
$pdf->Cell(50,5,'bathroom :',0,0);
$pdf->Cell(10);
$pdf->Cell(50,5,$row['bathroom'],0,0);
$pdf->Cell(50,5,' Home Type :',0,0);
$pdf->Cell(5);
$pdf->Cell(50,5,$row['hometype'],0,1);
$pdf->Ln(20);
$pdf->Cell(50,5,'Drawing Room',0,0);
$pdf->Cell(50);
$pdf->Cell(50,5,$row['drawingroom'],1,1);
$pdf->Ln(5);
$pdf->Cell(50,5,' Automatic Gate',0,0);
$pdf->Cell(50);
$pdf->Cell(50,5,$row['automaticgate'],1,1);
$pdf->Ln(5);
$pdf->Cell(50,5,' Open Area',0,0);
$pdf->Cell(50);
$pdf->Cell(50,5,$row['openarea'],1,1);
$pdf->Ln(5);
$pdf->Cell(50,5,' CCTV',0,0);
$pdf->Cell(50);
$pdf->Cell(50,5,$row['cctv'],1,1);
$pdf->Ln(5);
$pdf->Cell(50,5,'  MINI library',0,0);
$pdf->Cell(50);
$pdf->Cell(50,5,$row['library'],1,1);
$pdf->Ln(5);
$pdf->Cell(50,5,'Garden',0,0);
$pdf->Cell(50);
$pdf->Cell(50,5,$row['garden'],1,1);
$pdf->Ln(5);
$pdf->Cell(50,5,' YOGA Room',0,0);
$pdf->Cell(50);
$pdf->Cell(50,5,$row['yoga'],1,1);
$pdf->Ln(5);
$pdf->Cell(50,5,' Prayer Area',0,0);
$pdf->Cell(50);
$pdf->Cell(50,5,$row['prayerarea'],1,1);
$pdf->Ln(5);
$pdf->Line(10,190,200,190);
$pdf->Ln(20);
$pdf->Cell(50,5,' Adittional information',0,0);
$pdf->Cell(10);
$pdf->Cell(90 ,60,$row['additional'],1,1);
$pdf->Ln(5);



$pdf->Line(10,190,200,190);


    }
    $pdf->SetFont('Times','','10');
    // while($row = mysqli_fetch_assoc($data))   
    // {
        // $pdf->Cell(50,5,' squarefeet',0,0);
        // $pdf->cell('30','10',$row['squarefeet'],'1','0','C');
        // $pdf->cell('60','10',$row['garden'],'1','0','C');
        // // $pdf->cell('15','10',$row['email'],'1','0','C');
        // $pdf->cell('60','10',$row['bedroom'],'1','1','C');
    $path="Desktop";
    $pdf->Output();
    // $pdf->Output($_filelocation.$file_name,'F');
    // echo"upload sucessfully"

// }
    ?>