<?php
include "../../conf/conn.php";
if($_POST)
{
    $nama_ruang = $_POST['nama_ruang'];
    $kode_ruang = $_POST['kode_ruang'];
    $keterangan = $_POST['keterangan'];
    
    // Query yang diperbaiki tanpa menyertakan id_ruang
    $query = "INSERT INTO ruang (nama_ruang, kode_ruang, keterangan) VALUES ('$nama_ruang', '$kode_ruang', '$keterangan')";

    if(!mysqli_query($koneksi, $query)){
        die(mysqli_error($koneksi));
    } else {
        echo '<script>alert("Data Berhasil Ditambahkan !!!");
        window.location.href="../../index.php?page=data_mahasiswa"</script>';
    }
}
?>
