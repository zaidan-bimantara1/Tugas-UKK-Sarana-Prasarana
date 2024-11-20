<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>DATA INVENTARIS</h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">DATA INVENTARIS</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <a href="index.php?page=tambah_inventaris" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
              <a href="pages/inventaris/report.php" class="btn btn-info" role="button" title="Generate PDF"><i class="glyphicon glyphicon-file"></i> Print PDF</a>

            </div>
            <div class="box-body table-responsive">
              <table id="mahasiswa" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Kondisi</th>
                  <th>Keterangan</th>
                  <th>Jumlah</th>
                  <th>Id_jenis</th>
                  <th>Tanggal_register</th>
                  <th>Id_ruang</th>
                  <th>Kode_inventaris</th>
                  <th>Id_petugas</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                include "conf/conn.php";
                $no = 0;
                $query = mysqli_query($koneksi, "call GetAllInventaris()") or die(mysqli_error($koneksi));
                while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                  <td><?= ++$no; ?></td>
                  <td><?= $row['nama']; ?></td>
                  <td><?= $row['kondisi']; ?></td>
                  <td><?= $row['keterangan']; ?></td>
                  <td><?= $row['jumlah']; ?></td>
                  <td><?= $row['id_jenis']; ?></td>
                  <td><?= $row['tanggal_register']; ?></td>
                  <td><?= $row['id_ruang']; ?></td>
                  <td><?= $row['kode_inventaris']; ?></td>
                  <td><?= $row['id_petugas']; ?></td>
                  <td>
                    <a href="index.php?page=ubah_inventaris&id_inventaris=<?= $row['id_inventaris']; ?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="pages/barang/hapus_inventaris.php?id_inventaris=<?= $row['id_inventaris']; ?>" class="btn btn-danger" role="button" title="Hapus Data" onclick="return confirm('Yakin Ingin Menghapus?')"><i class="glyphicon glyphicon-trash"></i></a>
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
