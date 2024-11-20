<?php
include "../../conf/conn.php";
$id_peminjaman = $_GET['id_peminjaman'];
$query = ("DELETE FROM peminjaman WHERE id_peminjaman ='$id_peminjaman'");
if(!mysqli_query($koneksi, "$query")){
die(mysqli_error($koneksi));
}else{
echo '<script>alert("Data Berhasil Dihapus !!!");
window.location.href="../../index.php?page=peminjaman"</script>';
}
?>