<?php

include "../conf/conn.php";

$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$nama = $_POST['nama_petugas'];
$hashedPassword = md5($password);

$query = "INSERT INTO petugas (`username`, `password` , `nama_petugas` , `level`) VALUES ('$username','$hashedPassword','$nama','$level')";

if($koneksi->query($query)) {

    header("location: ../index.php");

} else{
echo "Data Gagal Disimpan!";

}

?>