<?php
include "../../conf/conn.php";
if($_POST)
{
$id = $_POST['id_jenis'];
$nama_barang = $_POST['nama_barang'];
$Kode = $_POST['Kode'];
$ket = $_POST['ket'];

$query = ("UPDATE jenis SET nama_jenis='$nama_barang',kode_jenis='$Kode',keterangan='$ket' WHERE id_jenis ='$id'");
// echo $query;

if(!mysqli_query($koneksi, "$query")){
die(mysqli_error($koneksi));
}else{
echo '<script>alert("Data Berhasil Diubah !!!");
window.location.href="../../index.php?page=data_brg"</script>';
}
}
?>