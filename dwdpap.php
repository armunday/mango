<?php

require("utility.php");

$str="SELECT * from answer where question_id=$_GET[id]  ";
$result=ExecuteQuery($str);
$row1=mysql_fetch_array($result);
	
$str1="SELECT * from question where question_id=$_GET[id]  ";
$result1=ExecuteQuery($str1);
$row2=mysql_fetch_array($result1);

require("fpdf.php");

class PDF extends FPDF
{
// Page header

// Page footer
    function Footer() //Aa function page ma footer nakhva mate 6. jo footer nakhvu hoy to j aa function no use kar j. Me page no print karaya 6 jo.
    {
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
	$this->Cell(190 - $this->GetStringWidth('Page '.$this->PageNo().'/{nb}'));
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

$pdf = new PDF();
//page number mate
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->MultiCell(0,10,'Technical Discussion Forum','TB','C');
// TB stands for Top Border
// C stands for center

$pdf->SetFont('Arial','B',14);
$pdf->MultiCell(0,10, $row2['question_detail'],'TB','C');

$pdf->SetFont('Arial','B',14);
$pdf->MultiCell(0,10,$row1['answer_detail'],'TB','C');

$pdf->SetFont('Arial','',12);

$pdf->Output(); // Aa function uper na code no use kari ne PDF generate kar se ane automatic download karva aapi de se.

	
?>