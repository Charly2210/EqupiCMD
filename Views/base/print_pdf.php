<?php

$pdf = new AppData\Config\libs\fpdf\fpdf('L','cm','letter');
$pdf->AddPage();

$pdf->SetFont('Arial','B',8);
$pdf->Cell(2);
$pdf->Image('AppData\Config\libs\fpdf\libros21.jpg','20.5','2','6.5','3','JPG','http://localhost/EqupiCMD/');
$pdf->Ln();

$pdf->SetFont('Arial','B',20);
$pdf->SetTextColor('3','11','1');
$pdf->SetX(3);
$pdf->Cell(0,2,'SaveInfo',0,0,'C');
$pdf->ln();

$pdf->SetFont('Arial','B',30);
$pdf->SetTextColor('32','118','193');
$pdf->SetX(3);
$pdf->Cell(0,3,'Reporte de Descargas',0,0,'L');
$pdf->ln();

$pdf->SetFillColor(0,220,255);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','B',12);
$pdf->SetX(2);
$pdf->Cell(4,1.5,utf8_decode('id_Prestamo'),1,0,'C',true);
$pdf->Cell(4,1.5,utf8_decode('Nombre_al'),1,0,'C',true);
$pdf->Cell(4,1.5,utf8_decode('Apellido_p'),1,0,'C',true);
$pdf->Cell(4.4,1.5,utf8_decode('Titulo'),1,0,'C',true);
$pdf->Cell(4,1.5,utf8_decode('Fecha'),1,0,'C',true);
$pdf->Cell(4,1.5,utf8_decode('Cuenta'),1,0,'C',true);
$pdf->Cell(4,1.5,utf8_decode('Codigo de barras'),1,0,'C',true);


$pdf->SetFillColor(255,255, 255);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',10);

//$n=1;
while ($row=mysqli_fetch_array($datos))
{
    $pdf->ln();
    $pdf->SetX(2);
    $pdf->Cell(4,0.6,utf8_decode($row [0]),1,0,'C',true);
    $pdf->Cell(4,0.6,utf8_decode($row [1]),1,0,'C',true);
    $pdf->Cell(4,0.6,utf8_decode($row [2]),1,0,'C',true);
    $pdf->Cell(4.4,0.6,utf8_decode($row [3]),1,0,'C',true);
    $pdf->Cell(4,0.6,utf8_decode($row [4]),1,0,'C',true);
    $pdf->Cell(4,0.6,utf8_decode($row [5]),1,0,'C',true);
    $pdf->Cell(4,0.6,utf8_decode($row [6]),1,0,'C',true);


}

$pdf->SetY(-4.7);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(0,2,'Carretera Federal Valle de Bravo Km 30, Ejido San Antonio Laguna,',0,0,'C');
$pdf->SetY(-4.2);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(0,2,'51200 Valle de Bravo, Méx. Page. '.$pdf->PageNo(),0,0,'C');

$pdf->Output();
?>

