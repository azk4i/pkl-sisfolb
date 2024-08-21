<!DOCTYPE html>
<html lang="en"></html>
<html>
<body>

<?php 
require_once '../database/config.php';
session_start();

$nik = trim(mysqli_real_escape_string($koneksi, $_POST['nikterpilih']));
$user = trim(mysqli_real_escape_string($koneksi, $_POST['userterpilih']));
$nama = trim(mysqli_real_escape_string($koneksi, $_POST['namaterpilih']));

$queryhapuspengguna = mysqli_query($koneksi, "DELETE FROM tbl_pengguna WHERE nik = '$nik'") or die (mysqli_error($koneksi));

?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    swal("Berhasil", "Cata Pengguna telah di hapus", "success");

    setTimeout(function() {
        window.location.href = "../backend_data_administrator";
    }, 2000);
    
</script>
</body>
</html>