<?php
header("Content-type:application/pdf");
ob_start();
include "../conf/conn.php";
require_once("../plugins/dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$id = $_GET['id'];
$query = mysqli_query($koneksi, "select * from ruang where id_ruang='$id'");

$html = '<center><h3>Data Ruangan</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
  <tr>
  <th>No</th>
  <th>Nama Ruangan</th>
  <th>Kode Ruangan</th>
  <th>Keterangan</th>
</tr>';
$no = 1;
while ($row = mysqli_fetch_array($query)) {
  $html .= "<tr><td>" . $no . "</td><td>" . $row['nama_ruang'] . "</td><td>" . $row['kode_ruang'] . "</td><td>" . $row['keterangan'] ."</td></tr>";
  $no++;
}

$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('Data Ruangan.pdf');