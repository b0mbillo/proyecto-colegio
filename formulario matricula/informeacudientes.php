<?php 
require('../fpdf/fpdf.php');


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../encabezado.png',12,8,270);
    // Arial bold 15
    $this->SetFont('Arial','B',13);
     $this->Ln(38);
    // Movernos a la derecha
    $this->Cell(90);
    // Título
    $this->Cell(100,10,'ACUDIENTES',0,0,'C');
     $this->Cell(20);
$this->Cell(60,10,date('l,F,j,Y'),0,1);



    // Salto de línea
    $this->Ln(10);

   $this ->Cell(10,15,'ID',1,0,'C');
    $this->Cell(63,15,'NOMBRES',1,0,'C');
$this->Cell(32,15,'DOCUMENTO',1,0,'C');
$this->Cell(45,15,'CORREO',1,0,'C');
$this->Cell(40,15,'DIRECCION',1,0,'C');
$this->Cell(28,15,'TELEFONO',1,0,'C');
$this->Cell(25,15,'CELULAR',1,0,'C');
$this->Cell(34,15,'PARENTESCO',1,1,'C');

}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

include('conexion.php');
$result = mysqli_query($conexion,"SELECT * FROM fichoacudiente");
$pdf = new PDF('landscape');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

while ($row = $result->fetch_assoc()) {
$pdf->Cell(10,10,$row['idfichoacudiente'],1,0,'C');
$pdf->Cell(63,10,$row['nombrecompleto'],1,0,'C');
$pdf->Cell(32,10,$row['numerodocumento'],1,0,'C');
$pdf->Cell(45,10,$row['correo'],1,0,'C');
$pdf->Cell(40,10,$row['direccion'],1,0,'C');
$pdf->Cell(28,10,$row['telefono'],1,0,'C');
$pdf->Cell(25,10,$row['celular'],1,0,'C');
$pdf->Cell(34,10,$row['parentesco'],1,1,'C');
$pdf->Output();}

 ?>