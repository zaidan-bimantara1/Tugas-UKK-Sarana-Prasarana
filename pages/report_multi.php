<?php
header("Content-type:application/pdf");
ob_start();
include "../conf/conn.php";
require_once("../plugins/dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
// $id = $_GET['id'];
$query = mysqli_query($koneksi, "select * detail_jual.*, jual.tgl,barang.nama_barang ");

$html = '<center><h3>Data Mahasiswa</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
  <tr>
  <th>No</th>
  <th>id jual</th>
  <th>id barang</th>
  <th>Harga</th>
  <th>Qty</th>
  <th>Total</th>
  </tr>';
$no = 1;
while ($row = mysqli_fetch_array($query)) {
  $html .= "<tr><td>" . $no . "</td><td>" . $row['id_jual'] . "</td><td>" . $row['nama_barang'] . "</td><td>" . $row['harga'] . "</td><td>" . $row['qty'] ."</td></tr> ". $row['total'] . "</td></tr>" . $row['tgl'] . "</td></tr>";
  $no++;
}

$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan_pilih_mahasiswa.pdf');