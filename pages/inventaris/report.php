<?php
ob_start();
include "../../conf/conn.php";
require_once("../../plugins/dompdf/autoload.inc.php");

use Dompdf\Dompdf;
$dompdf = new Dompdf();
//$id = $_GET['id'];
$query = mysqli_query($koneksi,"select * from inventaris");

$html = '<center><h3>Daftar Inventaris </h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
<tr>
<th>No</th>
<th>Nama</th>
<th>Kondisi</th>
<th>Keterangan</th>
<th>Jumlah</th>
<th>Id_jenis</th>
<th>Tanggal_register</th>
<th>Id_ruang</th>
<th>Kode_inventaris</th>
<th>Id_petugas</th>
</tr>
';
$no = 1;
while($row = mysqli_fetch_array($query))
{
$html .= "<tr>
<td>".$no."</td>
<td>".$row['nama']."</td>
<td>".$row['kondisi']."</td>
<td>".$row['keterangan']."</td>
<td>".$row['jumlah']."</td>
<td>".$row['id_jenis']."</td>
<td>".$row['tanggal_register']."</td>
<td>".$row['id_ruang']."</td>
<td>".$row['kode_inventaris']."</td>
<td>".$row['id_petugas']."</td></tr>";
 $no++;
}

$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'Landscape');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan Inventaris.pdf');
?>

