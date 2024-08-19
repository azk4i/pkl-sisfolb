<?php
session_start();
require_once '../database/config.php';
?>
<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>SISTEM INFORMASI SLB</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="styles/app.min.css"/>
  <link rel="shortcut icon" href="../auth/assets/img/slblogo.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body class="page-loading">
  <!-- page loading spinner -->
  <div class="pageload">
    <div class="pageload-inner">
      <div class="sk-rotating-plane"></div>
    </div>
  </div>
  <!-- /page loading spinner -->
  <div class="app signin v2 usersession">
    <div class="session-wrapper">
      <div class="session-carousel slide" data-ride="carousel" data-interval="3000">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active" style="background-image:url(../auth/assets/img/ppdbslb.jpg);background-size:cover;background-repeat: no-repeat;background-position: 50% 50%;">
          </div>
           <div class="item" style="background-image:url(../auth/assets/img/guruslb.webp);background-size:cover;background-repeat: no-repeat;background-position: 50% 50%;">
          </div>
          <div class="item" style="background-image:url(../auth/assets/img/muridslb.jpg);background-size:cover;background-repeat: no-repeat;background-position: 50% 50%;">
          </div>
        </div>
      </div>
      <div class="card bg-white  blue no-border" style="background-color:#003399;">
        <div class="card-block">
          <form role="form" class="form-layout" action="" method="post">
            <div class="text-center m-b">    

              <img src="../auth/assets/img/slblogo.png" style='width:200px; height:200px;'/> 
              <h4 class="text-uppercase"><b><font color="#ffffff">SISTEM INFORMASI</font></b></h4>
              <h4 class="text-uppercase"><font color="#ffffff">SEKOLAH LUAR BIASA</font></h4>
            </div>
            <div class="form-inputs p-b">
              <label class="text-uppercase"><font color="#ffffff">Username</font></label>
              <input type="username" class="form-control input-lg" name="username" id="username" placeholder="input username" required>
              <label class="text-uppercase"><font color="#ffffff">Password</font></label>
              <input type="password" class="form-control input-lg" name="password" id="password"  placeholder="input password" required>
              <!-- <a href="lupapassword.php"><font color="#000000">Lupa Password?</font></a>
             --></div>
              
               <button class="btn btn-warning btn-block btn-lg" type="submit" name= "masuk" style="background-color:#ffc000;"><font color="#ffffff"><i class="fa-solid fa-user"></i>&nbsp<b>Login</b></font></button>
               

          <br>
          <center><font color="#ffffff"><small><em> Copyright &copy; Sekolah Luar Biasa </a></em></</small></font>
          <br/>  
           <font color="#ffffff"><?php echo date("Y"); ?></</small></font>
            </center>
          </form>
          <?php
          if(isset($koneksi, $_POST['masuk'])){
            $isianusername = trim(mysqli_escape_string($koneksi, $_POST['username']));
            $isianpw = md5(trim(mysqli_real_escape_string($koneksi, $_POST['password'])));
            $cekuser = mysqli_query($koneksi,"SELECT * FROM tbl_pengguna WHERE user='$isianusername' AND pass='$isianpw'") or die (mysqli_error($koneksi));

            $returnvalue = mysqli_num_rows($cekuser);

            if ($returnvalue> 0){
              // jika ada penggunanya
              $tampunganarray = mysqli_fetch_assoc($cekuser);
              $_SESSION['username'] = $isianusername;
              $_SESSION['nama'] = $tampunganarray['nama'];
              echo '<script>window.location="../backend"</script>';
            }
            else
            {
              //Jika tidak ada penggunanya
              echo '<script>window.location="../gagal"</script>';
            }

          }
          ?>
          

        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#bb0a1e;">
          <h4 class="modal-title"><font color="#ffffff">TERJADI KESALAHAN!</font></h4>
        </div>
        <div class="modal-body">
          <h5><p><b>mohon maaf tampaknya terjadi kesalahan....</b></p>
          <p>Username / email atau Password yang anda masukkan salah / tidak terdaftar pada sistem
           Silahkan dicoba kembali, atau hubungi administrator</p></h5>
           <p></p>
           <h5><p> Terimakasih.. </p></h5>

        
        </div>
        <div class="modal-footer" style="background-color:#fefdfd;">
          <button type="button" class="btn btn-danger" data-dismiss="modal" style="background-color:#bb0a1e;"><font color="#ffffff"><b> TUTUP </b></font></button>
        </div>
      </div>
    </div>
  </div>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <script src="scripts/app.min.js"></script>
 <script>
        // JavaScript untuk toggle show/hide password
        document.getElementById('password').addEventListener('click', function () {
            const passwordField = document.getElementById('password');
            const toggleButton = document.getElementById('password');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleButton.innerHTML = '<i class="fas fa-eye-slash"></i>'; // Icon untuk hide
            } else {
                passwordField.type = 'password';
                toggleButton.innerHTML = '<i class="fas fa-eye"></i>'; // Icon untuk show
            }
        });
  </script>

 <script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
</script>
 
</body>

</html>
