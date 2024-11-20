<?php
include "../../conf/conn.php";
if($_POST)
{
$nama_barang = $_POST['nama'];
$kode = $_POST['kode'];
$ket = $_POST['ket'];
$query = ("INSERT INTO jenis (`id_jenis`, `nama_jenis`, `kode_jenis`, `keterangan`) VALUES ('','".$nama_barang."','".$kode."','".$ket."')");
// echo $query;
if(!mysqli_query($koneksi, "$query")){
die(mysqli_error($koneksi));
}else{
echo '<script>alert("Data Berhasil Ditambahkan !!!");
window.location.href="../../index.php?page=data_brg"</script>';
}
 }
?>