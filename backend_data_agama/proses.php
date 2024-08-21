<html>
<head>

</head>
<body>
<?php
require_once '../database/config.php';
session_start();

if(isset($koneksi,$_POST['hapus'])){
$idagama = trim(mysqli_real_escape_string($koneksi, $_POST['hp_id']));
$queryhapusagama = mysqli_query($koneksi, "DELETE FROM tbl_agama WHERE id='$idagama'") or die (mysqli_error($koneksi));

?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    swal("Berhasil", "Data Agama telah dihapus", "success");

    setTimeout(function(){
        window.location.href = "../backend_data_agama";

    }, 1500);
    </script>
<?php
}


if (isset($koneksi,$_POST['tambahdata'])){
$agama = trim(mysqli_real_escape_string($koneksi, $_POST['agama']));
$querytambahdata = mysqli_query($koneksi, "INSERT INTO tbl_agama VALUES('','$agama')") or die (mysqli_error($koneksi));

?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    swal("Berhasil", "Data Agama telah ditambah", "success");

    setTimeout(function(){
        window.location.href = "../backend_data_agama";

    }, 1500);
    </script>
<?php
}

if(isset($koneksi, $_POST['edit'])){

}

    $edid = trim(mysqli_real_escape_string($koneksi, $_POST['ed_id']));
    $edagama = trim(mysqli_real_escape_string($koneksi, $_POST['ed_agama']));
    $queryeditagama = mysqli_query($koneksi, "UPDATE tbl_agama SET agama='$edagama' WHERE id='$edid'") or die (mysqli_error($koneksi));

?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    swal("Berhasil", "Data Agama telah diubah", "success");

    setTimeout(function(){
        window.location.href = "../backend_data_agama";

    }, 1500);
    </script>
<?php

?>
</body>
</html>