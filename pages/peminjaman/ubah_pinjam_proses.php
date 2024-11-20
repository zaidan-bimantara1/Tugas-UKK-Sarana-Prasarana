<?php
include "../../conf/conn.php";
if($_POST)
{
    $id = $_POST['id_peminjaman'];
    $tanggal_pinjam = $_POST['tanggal_pinjam'];
    $tanggal_kembali = $_POST['tanggal_kembali'];
    $status_peminjaman = $_POST['status_peminjaman'];
    $id_petugas = $_POST['id_petugas'];
$query = ("UPDATE peminjaman SET tanggal_pinjam='$tanggal_pinjam',tanggal_kembali='$tanggal_kembali',status_peminjaman='$status_peminjaman',id_petugas='$id_petugas' WHERE id_peminjaman ='$id'");
if(!mysqli_query($koneksi, "$query")){
die(mysqli_error($koneksi));
}else{
    // echo $query;
    echo '<script>alert("Data Berhasil Di ubah !!!");
    window.location.href="../../index.php?page=peminjaman"</script>';
}
}
?>