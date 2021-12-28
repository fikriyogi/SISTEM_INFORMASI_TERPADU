<?php
//includes master file
require('../add-on/fpdf/fpdf.php');

class pdf extends FPDF{
function letak($gambar){
//memasukkan gambar untuk header
$this->Image($gambar,10,10,20,25);
//menggeser posisi sekarang
}


function judul($teks1, $teks2, $teks3, $teks4, $teks5){
$this->Cell(25);
$this->SetFont('Times','B','12');
$this->Cell(0,5,$teks1,0,1,'C');
$this->Cell(25);
$this->Cell(0,5,$teks2,0,1,'C');
$this->Cell(25);
$this->SetFont('Times','B','15');
$this->Cell(0,5,$teks3,0,1,'C');
$this->Cell(25);
$this->SetFont('Times','I','8');
$this->Cell(0,5,$teks4,0,1,'C');
$this->Cell(25);
$this->Cell(0,2,$teks5,0,1,'C');
}


function garis(){
$this->SetLineWidth(1);
$this->Line(10,36,138,36);
$this->SetLineWidth(0);
$this->Line(10,37,138,37);
}
}
//instantisasi objek
$pdf = new pdf();
header("Content-type:application/pdf");

// It will be called downloaded.pdf
// header("Content-Disposition:attachment;filename='downloaded.pdf'");
//Mulai dokumen
$pdf->AddPage('P', 'A5');
//meletakkan gambar
$pdf->letak('../assets/img/logo.png');
//meletakkan judul disamping logo diatas
$pdf->judul('PEMERINTAH KABUPATEN KAMPAR', 'DINAS PENDIDIKAN KEPEMUDAAN DAN OLAHRAGA','SD NEGERI 004 PULAU TERAP','Jl. Tengku H. Karim SH, Pulau Terap Hp. 085264972892', 'Website: http://sdn004pulauterap.blogspot.com | E-Mail: sdn004pulauterap@gmail.com');
//membuat garis ganda tebal dan tipis
$pdf->garis();

$pdf->Output('hasilunsman4pga.pdf','I');