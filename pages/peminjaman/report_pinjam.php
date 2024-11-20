<?php
ob_start();
include "../../conf/conn.php";
require_once("../../plugins/dompdf/autoload.inc.php");

use Dompdf\Dompdf;
$dompdf = new Dompdf();
//$id = $_GET['id'];
$query = mysqli_query($koneksi,"select * from peminjaman");

$html = '<center><h3>Daftar Peminjaman </h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
<tr>
<th>No</th>
<th>tanggal pinjam</th>
<th>tanggal kembali</th>
<th>status peminjaman</th>
<th>Id petugas</th>
</tr>
';
$no = 1;
while($row = mysqli_fetch_array($query))
{
$html .= "<tr>
<td>".$no."</td>
<td>".$row['tanggal_pinjam']."</td>
<td>".$row['tanggal_kembali']."</td>
<td>".$row['status_peminjaman']."</td>
<td>".$row['id_petugas']."</td> </tr>";
 $no++;
}

$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'Landscape');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan Peminjaman.pdf');
?>

