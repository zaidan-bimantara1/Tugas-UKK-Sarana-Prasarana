<?php
include "../../conf/conn.php";
if($_POST)
{
    $id_inventaris = $_POST['id_inventaris'];
    $id_peminjaman = $_POST['id_peminjaman'];
    $jumlah = $_POST['jumlah'];
    
    
    // Query yang diperbaiki tanpa menyertakan id_ruang
    $query = "INSERT INTO pinjam (id_inventaris, id_peminjaman, jumlah) VALUES ('$id_inventaris', '$id_peminjaman', '$jumlah')";

    if(!mysqli_query($koneksi, $query)){
        die(mysqli_error($koneksi));
    } else {
        echo '<script>alert("Data Berhasil Ditambahkan !!!");
        window.location.href="../../index.php?page=pinjam"</script>';
    }
}
?>
