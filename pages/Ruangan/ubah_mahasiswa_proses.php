<?php
include "../../conf/conn.php";
if($_POST)
{
$id = $_POST['id_ruang'];
$nama_ruang = $_POST['nama_ruang'];
$Kode = $_POST['kode_ruang'];
$ket = $_POST['keterangan'];
$query = ("UPDATE ruang SET nama_ruang='$nama_ruang',kode_ruang='$Kode',keterangan='$ket' WHERE id_ruang ='$id'");
if(!mysqli_query($koneksi, "$query")){
die(mysqli_error($koneksi));
}else{
echo '<script>alert("Data Berhasil Diubah !!!");
window.location.href="../../index.php?page=data_mahasiswa"</script>';
}
}
?>