<?php
include "../../conf/conn.php";
if($_POST)
{
    $nama = $_POST['nama'];
    $kondisi = $_POST['kondisi'];
    $keterangan = $_POST['keterangan'];
    $jumlah = $_POST['jumlah'];
    $id_jenis = $_POST['id_jenis'];
    $tanggal_register = $_POST['tanggal_register'];
    $id_ruang = $_POST['id_ruang'];
    $kode_inventaris = $_POST['kode_inventaris'];
    $id_petugas = $_POST['id_petugas'];

    
    // Query yang diperbaiki tanpa menyertakan id_ruang
    $query = "INSERT INTO inventaris (nama, kondisi, keterangan, jumlah, id_jenis, tanggal_register, id_ruang, kode_inventaris, id_petugas) 
    VALUES ('$nama', '$kondisi', '$keterangan','$jumlah', '$id_jenis', '$tanggal_register','$id_ruang', '$kode_inventaris', '$id_petugas')";

    if(!mysqli_query($koneksi, $query)){
        die(mysqli_error($koneksi));
    } else {
        echo '<script>alert("Data Berhasil Ditambahkan !!!");
        window.location.href="../../index.php?page=inventaris"</script>';
    }
}
?>
