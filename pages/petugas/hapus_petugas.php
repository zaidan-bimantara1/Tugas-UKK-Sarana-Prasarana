<?php
include "../../conf/conn.php";
// Pastikan 'id_petugas' ada dalam parameter URL
if (isset($_GET['id_petugas'])) {
    $id_petugas = $_GET['id_petugas'];
    // Lakukan sanitasi data jika diperlukan
    $id_petugas = mysqli_real_escape_string($koneksi, $id_petugas);

    // Buat query DELETE dengan menggunakan nama kolom yang benar
    $query = "DELETE FROM petugas WHERE id_petugas ='$id_petugas'";

    // Jalankan query DELETE
    if (mysqli_query($koneksi, $query)) {
        echo '<script>alert("Data Berhasil Dihapus !!!"); window.location.href="../../index.php?page=petugas"</script>';
    } else {
        echo "Gagal menghapus data petugas: " . mysqli_error($koneksi);
    }
} else {
    echo "ID Petugas tidak ditemukan dalam parameter URL.";
}
?>?>