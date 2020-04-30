 <?php  
require('fpdf/fpdf.php'); 

class PDF extends FPDF 
{ 
function Footer() 
{ 
$this->SetY(-27); 
$this->SetFont('Arial','I',8); 
$this->Cell(0,10,'This certificate has been ©  © produced by thetutor',0,0,'R'); 
} 
} 
$pdf = new FPDF('L','pt','A4'); 
//Loading data 
$pdf->SetTopMargin(20); $pdf->SetLeftMargin(20); $pdf->SetRightMargin(20); 
$pdf->AddPage(); 
//  Print the edge of
$pdf->Image("fpdf/serti.jpg", 5, 10, 840); 
// Print the certificate logo  
// $pdf->Image("fpdf/tt1.png", 140, 180, 240); 
// Print the title of the certificate  
// $pdf->SetFont('helvetica','B',45); 
// $pdf->Cell(780,300,"SERTIFIKAT APRESIASI",0,0,'C'); 
$pdf->SetFont('helvetica','B',34); 
$pdf->SetXY(300,250); 
$pdf->Cell(250,25,"Rasyid Hafiz",0,0,'C'); 
 
$pdf->SetFont('Arial','B',22); 
$pdf->SetXY(250,340); 
$judul = "Flutter Interact '19 Meetup"; 
$pdf->MultiCell(350,18,$judul,0,'C',0); 

$pdf->SetFont('Arial','',12); 
$pdf->SetXY(250,420); 
$waktu = "Sabtu, 21 Desember 2019"; 
$pdf->MultiCell(350,14,$waktu,0,'C',0);

$pdf->SetFont('Arial','',14); 
$pdf->SetXY(300,450); 
$tempat = "Pusat Unggulan IPTEK Fakultas Ilmu Komputer dan Teknologi Informasi Universitas Sumatera Utara"; 
$pdf->MultiCell(250,19,$tempat,0,'C',0);

// $pdf->SetFont('Arial','B',16); 
// $pdf->SetXY(370,470); 
// $signataire = "TheTUTOR"; 
// $pdf->Cell(350,19,$signataire,"T",0,'C'); 
$pdf->Output(); 
?> 