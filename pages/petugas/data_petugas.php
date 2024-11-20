<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      DATA PETUGAS
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">DATA PETUGAS</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <a href="pages/registrasi.php" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
          </div>
            <div class="box-body table-responsive">
              <table id="mahasiswa" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Nama lengkap</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php
                include "conf/conn.php";
                $no=0;
                //$query=mysql_query("SELECT * FROM mahasiswa ORDER BY id_mahasiswa DESC");
                $query=mysqli_query($koneksi,"SELECT * FROM petugas ORDER BY id_petugas  DESC")
                or die(mysqli_error($koneksi));
                while ($row=mysqli_fetch_array($query))
                {
                ?>

                <tr>
                  <td><?php echo $no=$no+1;?></td>
                  <td><?php echo $row['username'];?></td>
                  <td><?php echo $row['password'];?></td>
                  <td><?php echo $row['nama_petugas'];?></td>
                  <td><?php echo $row['level'];?></td>

                  <td>
                  <a href="pages/petugas/hapus_petugas.php?id_petugas=<?=$row['id_petugas'];?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash" onclick="return confirm ('Yakin Ingin Menghapus?')"></i></a>
                  </td>
                </tr>

                <?php } ?>

                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->

<!-- Javascript Datatable -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#mahasiswa').DataTable();
  });
</script>