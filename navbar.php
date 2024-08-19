<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><font color="#ffffff"><i class="fa-solid fa-play"></i></font></a>
      </li>
      </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <a class="nav-link" data-toggle="dropdown" href="#">
        <font color="#ffffff">
          Welkom admin tampan, <strong><?=$_SESSION['nama'] ?></strong> &nbsp <i class="fa-solid fa-bars"></i> 
        </font>

        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-lock mr-2"></i> Ganti Password
          </a>
          <div class="dropdown-divider"></div>
          <a href="../auth/logout.php" class="dropdown-item">
            <i class="fas fa-sign-out-alt mr-2"></i> Keluar
          </a>
          
    </ul>