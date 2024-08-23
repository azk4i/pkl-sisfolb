<?php
session_start();
$konstruktor ="data_administrator";
require_once '../database/config.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <title>SIFO SLB | Data Administrator</title>

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
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
        <div class="card">
              <div class="card-header" style="background-color:#003399">
                <h3 class="card-title"><font color="#ffffff"><i class="fa-solid fa-folder"></i> Data Admin " Administrator</font></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="row">
                <div class="col-lg-12">
                    <form role="form" class="form-layout" action="" method="post">
                    <div class="form-group">
                        <label>Cari Data Berdasrkan :</label>
                        <select class="form-control" name="kelamin">
                            <option value="All">--Semua Data--</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                        <br>
                        <button type="submit" class="btn btn-md btn-warning" name="cari" data-toggle="modal" data-target="#modal-tambahdata">
                            <i class="nav-icon fas fa-search"></i> Cari
                        </button>
                        </form>
                        <?php 
                        if(isset($koneksi, $_POST['cari'])) {
                            $no=1;
                            $valueselect = trim(
                                mysqli_real_escape_string($koneksi, $_POST['kelamin']));
                                ?>
                                <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                            <th>No</th>
                                            <th>NIK</th>
                                            <th>User</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            </thead>
                                            <tbody>
                                <?php
                            //echo $valueselect;
                            if($valueselect=="All")
                            {
                                $queryall = mysqli_query($koneksi, "SELECT * FROM tbl_pengguna") or die (mysqli_error($koneksi));

                                if(mysqli_num_rows($queryall)>0)
                                {
                                    while($arrayall=mysqli_fetch_array($queryall))
                                    {
                                        ?>
                                        
                                            <?php                                            
                                            ?>
                                            <tr>
                                                <td><?=$no++;?></td>
                                                <td><?=$arrayall['nik'];?></td>
                                                <td><?=$arrayall['user'];?></td>
                                                <td><?=$arrayall['nama'];?></td>
                                                <td><?=$arrayall['kelamin'];?></td>
                                            </tr>
                                            
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                    </table>
                                    <?php

                                }
                            }
                            elseif($valueselect=="L")
                            {
                                $queryall = mysqli_query($koneksi, "SELECT * FROM tbl_pengguna WHERE kelamin='$valueselect'") or die (mysqli_error($koneksi));

                                if(mysqli_num_rows($queryall)>0)
                                {
                                    while($arrayall=mysqli_fetch_array($queryall))
                                    {                                           
                                            ?>
                                            <tr>
                                                <td><?=$no++;?></td>
                                                <td><?=$arrayall['nik'];?></td>
                                                <td><?=$arrayall['user'];?></td>
                                                <td><?=$arrayall['nama'];?></td>
                                                <td><?=$arrayall['kelamin'];?></td>
                                            </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                    </table>
                                    <?php

                                }
                            }
                            
                            elseif($valueselect=="P")
                            {
                                $queryall = mysqli_query($koneksi, "SELECT * FROM tbl_pengguna WHERE kelamin='$valueselect'") or die (mysqli_error($koneksi));

                                if(mysqli_num_rows($queryall)>0)
                                {
                                    while($arrayall=mysqli_fetch_array($queryall))
                                    {
                                                                                       
                                            ?>
                                            <tr>
                                                <td><?=$no++;?></td>
                                                <td><?=$arrayall['nik'];?></td>
                                                <td><?=$arrayall['user'];?></td>
                                                <td><?=$arrayall['nama'];?></td>
                                                <td><?=$arrayall['kelamin'];?></td>
                                            </tr>
                                        <?php
                                    }
                                    ?>
                                     </tbody>
                                     </table>
                                    <?php

                                }
                            }
                        }
                        ?>
                    </div>
                </div>
              </div>
              </div>
              <!-- /.card-body -->
        </div>
            </div>
        </div>
        <!-- /.row -->
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

<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#003399">
              <h5 class="modal-title"><strong><font color="#ffffff">Hapus Data Pengguna</font></strong></h5>
              </button>
            </div>
      <form class="form-horizontal" action="hapus.php" method="POST" id="hapusdata">
            <div class="modal-body">
              <table>
                <th>
                  <tb>
                    <tr>
                      <td width="30%">NIK</td>
                      <td width="5%">:</td>
                      <td><input type="text" name="nikterpilih" class="form-control" hidden></input>
                      <input type="text" name="nikterpilih2" class="form-control" disabled></input></td>
                    </tr>
                    <tr>
                      <td width="30%">Nama Pengguna</td>
                      <td width="5%">:</td>
                      <td><input type="text" name="namaterpilih" class="form-control"></input></td>
                    </tr>
                    <tr>
                      <td width="30%">Username</td>
                      <td width="5%">:</td>
                      <td><input type="text" name="userterpilih" class="form-control"></input></td>
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

      <div class="modal fade" id="modal-edit">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#003399">
              <h5 class="modal-title"><strong><font color="#ffffff">Edit Data Pengguna</font></strong></h5>
              </button>
            </div>
      <form class="form-horizontal" action="edit.php" method="POST" id="editdata">
            <div class="modal-body">
              <table>
                <th>
                  <tb>
                    <tr>
                      <td width="30%">NIK</td>
                      <td width="5%">:</td>
                      <td><input type="text" name="ed_nikterpilih" class="form-control" hidden></input>
                      <input type="text" name="ed_nikterpilih2" class="form-control" disabled></input></td>
                    </tr>
                    <tr>
                      <td width="30%">Nama Pengguna</td>
                      <td width="5%">:</td>
                      <td><input type="text" name="ed_namaterpilih" class="form-control"></input></td>
                    </tr>
                    <tr>
                      <td width="30%">Username</td>
                      <td width="5%">:</td>
                      <td><input type="text" name="ed_userterpilih" class="form-control"></input></td>
                    </tr>
                  </tb>
                </th>
              </table>
            </div>
            <div class="modal-footer justify-content-right">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="submit" name="edit" class="btn btn-primary">Edit</button>
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
              <h5 class="modal-title"><strong><font color="#ffffff">Tambah Data Pengguna</font></strong></h5>
              </button>
            </div>
      <form class="form-horizontal" action="tambahdata.php" method="POST" id="tambahdata">
            <div class="modal-body">
              <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Input NIK">
                    <br>
                    <label for="nik">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Nama">
                    <br>
                    <label for="nik">Username</label>
                    <input type="text" class="form-control" id="user" name="user" placeholder="Input Username">
              </div>
              <select class="custom-select form-control-border" id="kode_agama">
                    <option>-- Pilih Agama --</option>
                    <?php
                    $panggilagama = mysqli_query($koneksi, "SELECT * FROM tbl_agama") or die (mysqli_error($koneksi));
                    while($dt_agama=mysqli_fetch_array($panggilagama)){
                      echo "<option value='$dt_agama[agama]'>$dt_agama[agama]</option>";
                    }
                    ?>
                  </select>
            </div>
            <div class="modal-footer justify-content-right">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
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
  $('#modal-default').on('show.bs.modal', function(e) {

      var ni = $(e.relatedTarget).data('nik');
      var u = $(e.relatedTarget).data('us');
      var n = $(e.relatedTarget).data('na');

      $(e.currentTarget).find('input[name="nikterpilih"]').val(ni);
      $(e.currentTarget).find('input[name="nikterpilih2"]').val(ni);
      $(e.currentTarget).find('input[name="userterpilih"]').val(u);
      $(e.currentTarget).find('input[name="namaterpilih"]').val(n);
  });
</script>

<script type="text/javascript">
  $('#modal-edit').on('show.bs.modal', function(e) {

      var ed_ni = $(e.relatedTarget).data('nik');
      var ed_u = $(e.relatedTarget).data('us');
      var ed_n = $(e.relatedTarget).data('na');

      $(e.currentTarget).find('input[name="ed_nikterpilih"]').val(ed_ni);
      $(e.currentTarget).find('input[name="ed_nikterpilih2"]').val(ed_ni);
      $(e.currentTarget).find('input[name="ed_userterpilih"]').val(ed_u);
      $(e.currentTarget).find('input[name="ed_namaterpilih"]').val(ed_n);
  });
</script>


</body>
</html>