<?php
$pdf = new \TCPDF();
$pdf->AddPage('L', 'mm', 'A4');
$pdf->SetFont('', 'B', 14);
$img_file = K_PATH_IMAGES . 'image_demo.jpg';
$pdf->Cell(10, 1, "Column 1", 0, 0, 'C');
$pdf->Cell(120, 1, "Column 2", 0, 0, 'C');
$pdf->SetAutoPageBreak(true, 0);
// Add Header
$pdf->Ln(10);
$pdf->SetFont('', 'B', 12);
$pdf->Cell(20, 8, "No", 1, 0, 'C');
$pdf->Cell(100, 8, " i", 1, 0, 'C');
$pdf->Cell(120, 8, "Alamat", 1, 0, 'C');
$pdf->Cell(37, 8, "Telp", 1, 1, 'C');
$pdf->SetFont('', '', 12);
$data['data_user'] = $this->session->userdata(['msg'][0]);
$data['data_user_detail'] = $this->session->userdata(['detail'][0]);
$session = ($data['data_user']);
$data_session = ($session['ID']);
$kegiatan = $this->m_kegiatan->kegiatan_report($data_session)->result_array();
$no = 0;

foreach ($kegiatan as $data) {
    $no++;
    $pdf->Cell(20, 8, $no, 1, 0, 'C');
    $pdf->Cell(100, 8, $data['tittle'], 1, 0);
    $pdf->Cell(120, 8, $data['date'], 1, 0);
    $pdf->Cell(37, 8, $data['detail'], 1, 1);
}
$pdf->SetFont('', 'B', 10);
$pdf->Cell(277, 10, "Laporan Pdf Menggunakan Tcpdf, Instalasi Tcpdf dengan Download Library", 0, 1, 'L');
$pdf->Output('Laporan-Tcpdf-CodeIgniter.pdf');
