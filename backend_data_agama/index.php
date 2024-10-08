<?php
session_start();
$konstruktor ="data_agama";
require_once '../database/config.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <title>SIFO SLB | Data Agama</title>

  <?php
  include '../listlink.php';
  ?>
</head>
<!--
body tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color:#003399">
    <!-- Left navbar links -->
   <?php
   include '../navbar.php';
   ?> 
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4" style="background-color:#ffffff;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../auth/assets/img/slblogo.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
      <span class="brand-text font-weight-light"><font color="#000000"><strong><b>Admin SLB</b></strong></font></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    

    <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
    <?php
    include '../sidebar.php';
    ?>

          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
          <div class="card">
              <div class="card-header" style="background-color:#003399">
                <h3 class="card-title"><font color="#ffffff"><i class="fa-solid fa-folder"></i> Data Agama</font></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-tambahdata">
               <i class="nav-icon fas fa-plus"></i> Tambah Agama
              </button>
              <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-resetdata">
               <i class="nav-icon fas fa-rotate-right"></i> Reset
              </button>
                <table id="example1" class="table table-bordered table-sm">
                  <thead>
                  <tr>
                    <th width="5%"><center>No</center></th>
                    <th><center>Agama</center></th>
                    <th><center>Aksi</center></th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no = 1;
                    $sqlpanggilagama = mysqli_query($koneksi, "SELECT * FROM tbl_agama") or die (mysqli_error($koneksi));
                    
                    if (mysqli_num_rows($sqlpanggilagama) > 0) {
                        //jika ada data pada database
                    

                        // lakukan perulangan pemanggilan data
                        while ($data = mysqli_fetch_array($sqlpanggilagama)) {
                    
                    ?>

                  <tr>
                    <td><center><?=$no++?></center></td>
                    <td><?=$data['agama'];?></td>
                    <td>
                      <center>
                        <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-editdata"
                          data-edid="<?=$data['id'];?>" data-edagama="<?=$data['agama'];?>">
                          <i class="nav-icon fas fa-edit"></i> Edit
                        </button>

                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-hapus"
                          data-hpid="<?=$data['id'];?>" data-hpagama="<?=$data['agama'];?>">
                          <i class="nav-icon fas fa-trash"></i>
                        </button>
                      </center>
                    </td> 
                  </tr>
                  <?php

                        }
                    }
                    else
                    {
                        //jika tidak ada data pada database
                        echo "<tr><td colspan=\"4\" align=\"center\"><h5> Data kosong bjir!! </h5></td></tr>";
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

 <?php
 include '../footer.php';
 ?>
</div>

<div class="modal fade" id="modal-hapus">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#003399">
              <h5 class="modal-title"><strong><font color="#ffffff">Hapus Data Agama</font></strong></h5>
              </button>
            </div>
      <form class="form-horizontal" action="proses.php" method="POST" id="hapusdata">
            <div class="modal-body">
              <table>
                <th>
                  <tb>
                    <tr>
                      <td width="30%">ID</td>
                      <td width="5%">:</td>
                      <td><input type="text" name="hp_id" class="form-control" hidden></input>
                      <input type="text" name="hp_id2" class="form-control"></input></td>
                    </tr>
                    <tr>
                      <td width="30%">Agama</td>
                      <td width="5%">:</td>
                      <td><input type="text" name="hp_agama" class="form-control"></input></td>
                    </tr>
                  </tb>
                </th>
              </table>
            </div>
            <div class="modal-footer justify-content-right">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="submit" name="hapus" class="btn btn-primary">Hapus</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

      <div class="modal fade" id="modal-editdata">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#003399">
              <h5 class="modal-title"><strong><font color="#ffffff">Edit Data Pengguna</font></strong></h5>
              </button>
            </div>
      <form class="form-horizontal" action="proses.php" method="POST" id="editdata">
            <div class="modal-body">
               <table>
                <th>
                  <tb>
                    <tr>
                      <td width="30%">ID</td>
                      <td width="5%">:</td>
                      <td><input type="text" name="ed_id" class="form-control" hidden></input>
                      <input type="text" name="ed_id2" class="form-control" disabled></input></td>
                    </tr>
                    <tr>
                      <td width="30%">Agama</td>
                      <td width="5%">:</td>
                      <td><input type="text" name="ed_agama" class="form-control"></input></td>
                    </tr>
                  </tb>
                </th>
              </table>
            </div>
            <div class="modal-footer justify-content-right">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="submit" name="editdata" class="btn btn-primary">Edit</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

      <div class="modal fade" id="modal-tambahdata">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#003399">
              <h5 class="modal-title"><strong><font color="#ffffff">Tambah Data Agama</font></strong></h5>
              </button>
            </div>
      <form class="form-horizontal" action="proses.php" method="POST" id="tambahdata">
            <div class="modal-body">
              <div class="form-group">
                    <label for="nik">Agama</label>
                    <input type="text" class="form-control" id="agama" name="agama" placeholder="Input Agama">
              </div>
              </select>
            </div>
            <div class="modal-footer justify-content-right">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="submit" name="tambahdata" class="btn btn-primary">Tambah Data</button>
            </div>
      </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

       <div class="modal fade" id="modal-resetdata">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#003399">
              <h5 class="modal-title"><strong><font color="#ffffff">Reset Data Agama</font></strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
      <form class="form-horizontal" action="proses.php" method="POST" id="resetdata">
            <div class="modal-body">
              <h5>
                <br>Perhatian, anda akan mereset data!!<br>
             </h5>
             </p>
            </div>
              <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="reset" class="btn btn-primary">Ya Reset Data</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

<?php
include '../script.php';
?>

<script type="text/javascript">
  $('#modal-hapus').on('show.bs.modal', function(e) {

      var hpid = $(e.relatedTarget).data('hpid');
      var hpagama = $(e.relatedTarget).data('hpagama');

      $(e.currentTarget).find('input[name="hp_id"]').val(hpid);
      $(e.currentTarget).find('input[name="hp_id2"]').val(hpid);
      $(e.currentTarget).find('input[name="hp_agama"]').val(hpagama);
  });
</script>

<script type="text/javascript">
  $('#modal-editdata').on('show.bs.modal', function(e) {

      var edid = $(e.relatedTarget).data('edid');
      var edagama = $(e.relatedTarget).data('edagama');

      $(e.currentTarget).find('input[name="ed_id"]').val(edid);
      $(e.currentTarget).find('input[name="ed_id2"]').val(edid);
      $(e.currentTarget).find('input[name="ed_agama"]').val(edagama);
  });
</script>

<script src="../assets_adminlte/dist/js/adminlte.min.js"></script>
<script src="../assets_adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets_adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../assets_adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets_adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets_adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets_adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../assets_adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../assets_adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../assets_adminlte/plugins/jszip/jszip.min.js"></script>
<script src="../assets_adminlte/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../assets_adminlte/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../assets_adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../assets_adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../assets_adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets_adminlte/dist/js/adminlte.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>
</html>