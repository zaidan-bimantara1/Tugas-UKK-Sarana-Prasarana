<?php
include "../../conf/conn.php";
$id_inventaris = $_GET['id_inventaris'];
$query = ("DELETE FROM inventaris WHERE id_inventaris ='$id_inventaris'");
if(!mysqli_query($koneksi, "$query")){
die(mysqli_error($koneksi));
}else{
echo '<script>alert("Data Berhasil Dihapus !!!");
window.location.href="../../index.php?page=inventaris"</script>';
}
?>