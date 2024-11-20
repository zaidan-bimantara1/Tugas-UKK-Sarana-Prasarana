<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      TAMBAH RUANGAN
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">TAMBAH RUANGAN</li>
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
            <form role="form" method="post" action="pages/Ruangan/tambah_mahasiswa_proses.php">
              <div class="box-body">
              <div class="form-group">
                  <label>Nama Ruangan</label>
                  <input type="text" name="nama_ruang" class="form-control" placeholder="Nama Ruang" required>
                </div>
                <div class="form-group">
                  <label>Kode</label>
                  <input type="text" name="kode_ruang" class="form-control" placeholder="Kode Ruang" required>
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" name="keterangan" class="form-control" placeholder="Keterangan Ruang" required>
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