<html>
<body>

<?php 
require_once '../database/config.php';
session_start();

if(isset($koneksi, $_POST['tambahdata'])) {

}

$unique = trim(mysqli_real_escape_string($koneksi, $_POST['nik']));
$user = trim(mysqli_real_escape_string($koneksi, $_POST['user']));
$nama = trim(mysqli_real_escape_string($koneksi, $_POST['nama']));
$pass = md5($user);

$queryceknikuser = mysqli_query($koneksi, "SELECT nik, user FROM tbl_pengguna WHERE nik = '$unique' AND user = '$user'") or die (mysqli_error($koneksi));

if (mysqli_num_rows($queryceknikuser)>0)
{
?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    swal("Duplikat Data", "NIK atau Username sudah terdapat pada database", "error");

    setTimeout(function() {
        window.location.href = "../backend_data_administrator";
    }, 1000);
</script>
<?php 
}
else
{
    $tambahdata = mysqli_query($koneksi, "INSERT INTO tbl_pengguna VALUES (
    '$unique',
    '$user',
    '$pass',
    '$nama')")
    or die (mysqli_error($koneksi));
?>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    swal("Berhasil", "Data pengguna berhasil diinput", "success");

    setTimeout(function() {
    window.location.href = "../backend_data_administrator";
    }, 1000);
</script>
<?php 
}
?>
</body>
</html>