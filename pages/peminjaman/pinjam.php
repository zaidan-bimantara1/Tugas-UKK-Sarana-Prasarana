<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>DETAIL PEMINJAMAN</h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">DETAIL PEMINJAMAN</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <a href="index.php?page=tambah_pinjam" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
              <a href="pages/peminjaman/report_pinjam.php" class="btn btn-info" role="button" title="Generate PDF"><i class="glyphicon glyphicon-file"></i> Print PDF</a>

            </div>
            <div class="box-body table-responsive">
              <table id="mahasiswa" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>id peminjaman</th>
                  <th>tanggal pinjam</th>
                  <th>tanggal kembali</th>
                  <th>status peminjaman</th>
                  <th>Id petugas</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                include "conf/conn.php";
                $no = 0;
                $query = mysqli_query($koneksi, "SELECT * FROM peminjaman ORDER BY id_peminjaman DESC") or die(mysqli_error($koneksi));
                while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                  <td><?= ++$no; ?></td>
                  <td><?= $row['id_peminjaman ']; ?></td>
                  <td><?= $row['tanggal_pinjam']; ?></td>
                  <td><?= $row['tanggal_kembali']; ?></td>
                  <td><?= $row['status_peminjaman']; ?></td>
                  <td><?= $row['id_petugas']; ?></td>
                  <td>
                    <a href="index.php?page=ubah_pinjam&id_peminjaman=<?= $row['id_peminjaman']; ?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="pages/peminjaman/hapus_pinjam.php?id_peminjaman=<?= $row['id_peminjaman']; ?>" class="btn btn-danger" role="button" title="Hapus Data" onclick="return confirm('Yakin Ingin Menghapus?')"><i class="glyphicon glyphicon-trash"></i></a>
                    <a href="pages/report_pinjam.php?id_peminjaman=<?= $row['id_peminjaman']; ?>" class="btn btn-warning" role="button" title="Cetak Data"><i class="glyphicon glyphicon-print"></i></a>         
                  </td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>

<!-- Javascript Datatable -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#mahasiswa').DataTable();
  });
</script>
