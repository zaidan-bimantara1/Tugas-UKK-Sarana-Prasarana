<?php
include "../../conf/conn.php";
$id = $_GET['id_ruang'];
$query = ("DELETE FROM ruang WHERE id_ruang ='$id'");
if(!mysqli_query($koneksi, "$query")){
die(mysqli_error($koneksi));
}else{
echo '<script>alert("Data Berhasil Dihapus !!!");
window.location.href="../../index.php?page=data_mahasiswa"</script>';
}
?>