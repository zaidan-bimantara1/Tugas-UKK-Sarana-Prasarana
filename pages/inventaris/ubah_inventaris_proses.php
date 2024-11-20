<?php
include "../../conf/conn.php";
if($_POST)
{
$id = $_POST['id_inventaris'];
$nama = $_POST['nama'];
$kondisi = $_POST['kondisi'];
$keterangan = $_POST['keterangan'];
$jumlah = $_POST['jumlah'];
$id_jenis = $_POST['id_jenis'];
$tanggal_register = $_POST['tanggal_register'];
$id_ruang = $_POST['id_ruang'];
$kode_inventaris = $_POST['kode_inventaris'];
$id_petugas = $_POST['id_petugas'];

$query = ("UPDATE inventaris 
SET nama='$nama',kondisi='$kondisi',keterangan='$keterangan',jumlah='$jumlah',id_jenis='$id_jenis',tanggal_register='$tanggal_register',id_ruang='$id_ruang',kode_inventaris='$kode_inventaris',id_petugas='$id_petugas' WHERE id_inventaris ='$id'");

if(!mysqli_query($koneksi, "$query")){
die(mysqli_error($koneksi));
}else{
echo '<script>alert("Data Berhasil Diubah !!!");
window.location.href="../../index.php?page=inventaris"</script>';
}
}
?>