<?php
if(isset($_GET['page'])){
  $page = $_GET['page'];
switch ($page) {
// Beranda
  case 'data_mahasiswa':
    include 'pages/Ruangan/data_mahasiswa.php';
    break;
    case 'tambah_mahasiswa':
include 'pages/Ruangan/tambah_mahasiswa.php';
break;
case 'ubah_mahasiswa';
include 'pages/Ruangan/ubah_mahasiswa.php';
break;
case 'ubah_mahasiswa';
include 'pages/Ruangan/ubah_mahasiswa.php';
break;
case 'data_barang';
include 'pages/transaksi-single/transaksi_barang.php';
break;
case 'data_multibarang':
  include 'pages/multibarang/data_transaksi_barang.php';
  break;
  case 'bayar':
   include 'pages/multibarang/bayar.php';
   break;
case 'data_brg':
  include 'pages/barang/data_barang.php';
  break;
  case 'tambah_barang':
    include 'pages/barang/tambah_barang.php';
    break;
    case 'ubah_barang':
      include 'pages/barang/ubah_barang.php';
      break;
case 'petugas':
  include 'pages/petugas/data_petugas.php';
  break;
  case 'tambah_petugas':
    include 'pages/petugas/tambah_petugas.php';
    break;
    case 'ubah_petugas':
      include 'pages/petugas/ubah_petugas.php';
      break;

case 'dt_single';
  include 'pages/transaksi-single/dt_single.php';
  break;  
  case 'dt_multi':
    include 'pages/multibarang/dt_multi.php';
    break;
    case 'tbl_jual':
      include 'pages/multibarang/tbl_jual.php';
      break;

  case 'inventaris':
    include 'pages/inventaris/inventaris.php';
    break;
    case 'tambah_inventaris':
      include 'pages/inventaris/tambah_inventaris.php';
      break;
      case 'ubah_inventaris':
        include 'pages/inventaris/ubah_inventaris.php';
        break;

  case 'peminjaman':
    include 'pages/peminjaman/pinjam.php';
    break;
    case 'tambah_pinjam':
      include 'pages/peminjaman/tambah_pinjam.php';
      break;
        case 'ubah_pinjam':
          include 'pages/peminjaman/ubah_pinjam.php';
          break;

          case 'pinjam':
            include 'pages/pinjam/pinjam1.php';
            break;
            case 'tambah_pinjam1':
              include 'pages/pinjam/tambah_pinjam1.php';
              break;
                case 'ubah_pinjam1':
                  include 'pages/pinjam/ubah_pinjam1.php';
                  break;
            
  }
}else{
    include "pages/beranda.php";
  }
?>