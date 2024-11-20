<?php
include "../../conf/conn.php";
if($_POST)
{
    $tanggal_pinjam = $_POST['tanggal_pinjam'];
    $tanggal_kembali = $_POST['tanggal_kembali'];
    $status_peminjaman = $_POST['status_peminjaman'];
    $id_petugas = $_POST['id_petugas'];
    
    
    // Query yang diperbaiki tanpa menyertakan id_ruang
    $query = "INSERT INTO peminjaman (tanggal_pinjam, tanggal_kembali, status_peminjaman, id_petugas ) VALUES ('$tanggal_pinjam', '$tanggal_kembali', '$status_peminjaman', '$id_petugas ')";

    if(!mysqli_query($koneksi, $query)){
        die(mysqli_error($koneksi));
    } else {
        echo '<script>alert("Data Berhasil Ditambahkan !!!");
        window.location.href="../../index.php?page=peminjaman"</script>';
    }
}
?>
