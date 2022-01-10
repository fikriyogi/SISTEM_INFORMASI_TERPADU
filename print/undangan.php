<?php
//inc master file
require('../add-on/fpdf/fpdf.php');

//extending class fpdf
class pdf extends FPDF {
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

//menampilan tulisan PENGUMUMAN dan NOMOR
    function surat($hal, $nomor){
        $this->Ln(8);
        $this->SetFont('Times','B',16);
        $this->Cell(137,5,$hal,0,1,'C');
        $this->SetFont('Times','B',12);
        $this->Cell(137,5,$nomor,0,1,'C');
    }

//isi surat
    function body1($teks){
        $this->Ln(3);
        $this->SetFont('Times','',12);
        for ($i=0; $i < count($teks); $i++)
        $this->MultiCell(0,5,$teks[$i]);
}

function body2($tutup){
        $this->Ln(2);
        $this->SetFont('Times','',12);
        for ($i=0;$i < count($tutup); $i++)
        $this->MultiCell(0,5,$tutup[$i]);
    }

function catatan($ctt){
        $this->Ln(0);
        $this->SetFont('Times','B',11);
        $this->Cell(0,5,'Catatan',0,1,'L');
        $this->SetFont('Times','I',10);
        for ($i=0;$i < count($ctt);$i++)
        $this->MultiCell(0,3,$ctt[$i]);
    }

function idSiswa($nama, $id, $kelas){
        $this->Ln(2);
        $this->SetFont('Times','',12);
        $this->Cell(15);
        $this->Cell(10,5,'Nama',0,0,'L');
        $this->Cell(15);
        $this->Cell(2,5,':',0,0,'L');
        $this->Cell(5);
        $this->Cell(1,5,$nama,0,1,'L');
        $this->Cell(15);
        $this->Cell(10,5,'No. Ujian',0,0,'L');
        $this->Cell(15);
        $this->Cell(2,5,':',0,0,'L');
        $this->Cell(5);
        $this->Cell(1,5,$id,0,1,'L');
        $this->Cell(15);
        $this->Cell(10,5,'Kelas',0,0,'L');
        $this->Cell(15);
        $this->Cell(2,5,':',0,0,'L');
        $this->Cell(5);
        $this->Cell(1,5,$kelas,0,1,'L');
    }

function kepsek() {
        $this->Ln(5);
        $this->Cell(75);
        $this->Cell(0,5,'Pagar Alam, 15 Mei 2015',0,1,'L');
        $this->Cell(75);
        $this->Cell(0,5,'Kepala Sekolah,',0,1,'L');    
    }

    function kepsek2(){
        $this->Ln(20);
        $this->Cell(75);
        $this->SetFont('Times','B',12);
        $this->Cell(0,5,'MARDIONO, S.Pd, M.Pd',0,1,'L');
        $this->SetFont('Times','',12);
        $this->Cell(75);
        $this->Cell(0,5,'NIP. 19601113 198603 1 003,',0,1,'L');
    }
}

$pdf = new pdf();

// It will be called downloaded.pdf
// header("Content-Disposition:attachment;filename='downloaded.pdf'");
//Mulai dokumen
$pdf->AddPage('P', 'A5');
//meletakkan gambar
$pdf->letak('../assets/img/logo.png');

$pdf->judul('PEMERINTAH KABUPATEN KAMPAR', 'DINAS PENDIDIKAN KEPEMUDAAN DAN OLAHRAGA','SD NEGERI 004 PULAU TERAP','Jl. Tengku H. Karim SH, Pulau Terap Hp. 085264972892', 'Website: http://sdn004pulauterap.blogspot.com | E-Mail: sdn004pulauterap@gmail.com');
$pdf->garis();
$pdf->surat('Penting', '424/22/2302');
$pdf->body1('Selamat malam, kembali lagi dengan kami, kali ini kami akan share bagaimana membuat laporan menggunakan PHP MySQL dan library FPDF.');
$pdf->body2('asdsaldkljasj dj;lsajdajsdoeijfekjflaksfasjdklasjdlasd');
$pdf->catatan('catatan');
$pdf->idSiswa('Fikri YOogi', '0838','Kelas V');
$pdf->kepsek();
$pdf->kepsek2();


