<?php
session_start();
$konstruktor ="master_data";
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
        
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        
        <strong>Ini adalah halaman Master data</strong>

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

</body>
</html>