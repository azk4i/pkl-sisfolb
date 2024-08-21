<html>
    <head>

    </head>
<body>
<?php 
require_once '../database/config.php';
session_start();

if(isset($koneksi,$_POST['hapus'])){

$idagama  = trim(mysqli_real_escape_string($koneksi, $_POST['hp_id']));
$queryhapusagama = mysqli_query($koneksi, "DELETE FROM tbl_agama WHERE id='$idagama'") or die (mysqli_error($koneksi));

?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    swal("Berhasil", "Data Agama Telah dihapus", "success");

    setTimeout(function(){
        window.location.href = "../backend_data_agama";

    }, 2000);
    </script>
    <?php 
    }

    if(isset($koneksi,$_POST['tambahdata'])){

        $agama = trim(mysqli_real_escape_string($koneksi, $_POST['agama']));
        $querytambahdata = mysqli_query($koneksi,"INSERT INTO tbl_agama VALUES ('','$agama')") or die (mysqli_error($koneksi));
    
    ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
    swal("Berhasil", "Data Agama Telah ditambah", "success");

    setTimeout(function(){
        window.location.href = "../backend_data_agama";

    }, 2000);
    </script>
    <?php 
    }
    if(isset($koneksi, $_POST['editdata'])){
        $id    = trim(mysqli_real_escape_string($koneksi, $_POST['ed_id']));
        $agama = trim(mysqli_real_escape_string($koneksi, $_POST['ed_agama']));
       
        
        $queryupdate = mysqli_query($koneksi, "UPDATE tbl_agama SET agama='$agama' WHERE id='$id'") or die (mysqli_error($koneksi));
        
        ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            swal("Berhasil", "Data Agama Berhasil Diedit", "success");
        
            setTimeout(function(){
            window.location.href = "../backend_data_agama";
        
            }, 2000);
        </script>
            <?php
        }
        
        if(isset($koneksi,$_POST['reset'])){

            $queryhapusagama = mysqli_query($koneksi, "TRUNCATE TABLE tbl_agama ") or die (mysqli_error($koneksi));
            
            ?>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script>
                swal("Berhasil", "Data Agama Telah direset", "success");
            
                setTimeout(function(){
                    window.location.href = "../backend_data_agama";
            
                }, 2000);
                </script>
                <?php 
                }
        ?>

</body>
</html>