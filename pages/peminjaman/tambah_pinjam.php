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
            <form role="form" method="post" action="pages/peminjaman/tambah_pinjam_proses.php">
              <div class="box-body">
                <div class="form-group">
                  <label>tanggal_pinjam</label>
                  <input type="date" name="tanggal_pinjam" class="form-control" placeholder="tanggal_pinjam" required>
                </div>
                <div class="form-group">
                  <label>tanggal_kembali</label>
                  <input type="date" name="tanggal_kembali" class="form-control" placeholder="tanggal_kembali" required>
                </div>

                <div class="form-group">
                <label>Status Pinjam</label>
                  <select class="form-control" name="status_peminjaman">
                    <option value="">- status_peminjaman -</option>
                    <option >Pinjam</option>
                    <option >Kembali</option>
                    </select>
                </div>
                <div class="form-group">
                  <label>id_petugas</label>
                  <input type="text" name="id_petugas" class="form-control" placeholder="pegawai" required>
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