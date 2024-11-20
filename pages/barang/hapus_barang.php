<?php
include "../../conf/conn.php";
$id_jenis = $_GET['id_jenis'];
$query = ("DELETE FROM jenis WHERE id_jenis ='$id_jenis'");
if(!mysqli_query($koneksi, "$query")){
die(mysqli_error($koneksi));
}else{
echo '<script>alert("Data Berhasil Dihapus !!!");
window.location.href="../../index.php?page=data_brg"</script>';
}
?>