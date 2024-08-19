<!DOCTYPE html>
<html lang="en"></html>
<html>
<body>

<?php
require_once '../database/config.php';
session_start();

$nik = @$_GET['unique'];
$nama = @$_GET['nama'];

echo $nik." | ".$nama;

$queryhapuspengguna = mysqli_query($koneksi, "DELETE FROM tbl_pengguna WHERE nik = '$nik'") or die (mysqli_error($koneksi));

?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    swal("Berhasil", "Cata Pengguna telah dihapus", "success");

    setTimeout(function() {
        window.location.href = "../backend_data_administrator";
    }, 3000);
    
</script>
</body>
</html>