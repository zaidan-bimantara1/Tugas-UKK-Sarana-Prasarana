<!-- php
$query = mysql_query("SELECT * FROM mahasiswa WHERE id_mahasiswa='".$_GET['id']."'");
$row = mysql_fetch_array($query);
?> -->
<?php
$query = mysqli_query($koneksi, "SELECT * FROM jenis WHERE id_jenis='".$_GET['id_jenis']."'")
or die(mysqli_error($koneksi));
$row = mysqli_fetch_array($query);
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      UBAH BARANG
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">UBAH BARANG</li>
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
            <form role="form" method="post" action="pages/barang/ubah_barang_proses.php">
              <div class="box-body">
                <input type="hidden" name="id_jenis" value="<?php echo $row['id_jenis']; ?>">
                <div class="form-group">
                  <label>Nama Barang</label>
                  <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" value="<?php echo $row['nama_jenis']; ?>" required>
                </div>
                <div class="form-group">
                  <label>Kode</label>
                  <input type="text" name="Kode" class="form-control" placeholder="Kode" value="<?php echo $row['kode_jenis']; ?>" required>
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" name="ket" class="form-control" placeholder="Keterangan" value="<?php echo $row['keterangan']; ?>" required>
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