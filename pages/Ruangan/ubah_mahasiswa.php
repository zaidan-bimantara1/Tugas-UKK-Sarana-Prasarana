<!-- php
$query = mysql_query("SELECT * FROM mahasiswa WHERE id_mahasiswa='".$_GET['id']."'");
$row = mysql_fetch_array($query);
?> -->
<?php
$query = mysqli_query($koneksi, "SELECT * FROM ruang WHERE id_ruang='".$_GET['id_ruang']."'")
or die(mysqli_error($koneksi));
$row = mysqli_fetch_array($query);
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      UBAH Ruangan
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">UBAH Ruangan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="pages/Ruangan/ubah_mahasiswa_proses.php">
              <div class="box-body">
              <input type="hidden" name="id_ruang" value="<?php echo $row['id_ruang']; ?>">
                <div class="form-group">
                  <label>Nama Ruangan</label>
                  <input type="text" name="nama_ruang" class="form-control" placeholder="Nama Ruang" value="<?php echo $row['nama_ruang']; ?>" required>
                </div>
                <div class="form-group">
                  <label>Kode</label>
                  <input type="text" name="kode_ruang" class="form-control" placeholder="Kode" value="<?php echo $row['kode_ruang']; ?>" required>
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" value="<?php echo $row['keterangan']; ?>" required>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->