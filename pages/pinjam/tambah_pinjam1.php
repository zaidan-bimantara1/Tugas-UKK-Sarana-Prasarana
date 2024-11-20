<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      TAMBAH PEMINJAMAN
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">TAMBAH PEMINJAMAN</li>
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
            <form role="form" method="post" action="pages/pinjam/tambah_pinjam_proses1.php">
              <div class="box-body">
                <div class="form-group">
                  <label>id_inventaris</label>
                  <input type="number" name="id_inventaris" class="form-control" placeholder="id_inventaris" required>
                </div>
                <div class="form-group">
                  <label>id_peminjaman</label>
                  <input type="number" name="id_peminjaman" class="form-control" placeholder="id_peminjaman" required>
                </div>
                <div class="form-group">
                  <label>jumlah</label>
                  <input type="number" name="jumlah" class="form-control" placeholder="jumlah" required>
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