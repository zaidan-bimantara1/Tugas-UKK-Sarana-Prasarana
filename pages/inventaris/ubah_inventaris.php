<!-- php
$query = mysql_query("SELECT * FROM mahasiswa WHERE id_mahasiswa='".$_GET['id']."'");
$row = mysql_fetch_array($query);
?> -->
<?php
$query = mysqli_query($koneksi, "SELECT * FROM inventaris WHERE id_inventaris='".$_GET['id_inventaris']."'")
or die(mysqli_error($koneksi));
$row = mysqli_fetch_array($query);
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      UBAH INVENTARIS
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">UBAH INVENTARIS</li>
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
            <form role="form" method="post" action="pages/inventaris/ubah_inventaris_proses.php">
              <div class="box-body">
                <input type="hidden" name="id_inventaris" value="<?php echo $row['id_inventaris']; ?>">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama barang" required>
                </div>
                <div class="form-group">
                  <label>Kondisi</laabel>
                  <select class="form-control" name="kondisi">
                    <option value="">- Pilih kondisi -</option>
                    <option value="admin">baik</option>
                    <option value="user">rusak</option>
                    </select>
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" name="keterangan" class="form-control" placeholder="Keterangan barang" required>
                </div>
                <div class="form-group">
                  <label>Jumlah</label>
                  <input type="number" name="jumlah" class="form-control" placeholder="Nama barang" required>
                </div>
                <div class="form-group">
                  <label>id_jenis</label>
                  <input type="number" name="id_jenis" class="form-control" placeholder="id_jenis" required>
                </div>
                <div class="form-group">
                  <label>tanggal_register</label>
                  <input type="date" name="tanggal_register" class="form-control" placeholder="tanggal_register" required>
                </div>
                <div class="form-group">
                  <label>id_ruang</label>
                  <input type="number" name="id_ruang" class="form-control" placeholder="id_ruang" required>
                </div>
                <div class="form-group">
                  <label>kode_inventaris</label>
                  <input type="number" name="kode_inventaris" class="form-control" placeholder="kode_inventaris" required>
                </div>
                <div class="form-group">
                  <label>id_petugas</label>
                  <input type="number" name="id_petugas" class="form-control" placeholder="id_petugas" required>
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