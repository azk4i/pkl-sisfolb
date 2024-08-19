<?php
// Mulai sesi
session_start();

// Periksa apakah pengguna telah menekan tombol konfirmasi
if (isset($_POST['confirm_logout'])) {
    // Hapus sesi dan logout
    session_unset();
    session_destroy();
    header("Location: index.php"); // Redirect ke halaman login setelah logout
    exit();
}

// Periksa jika pengguna membatalkan logout
if (isset($_POST['cancel_logout'])) {
    header("Location: ../backend/index.php"); // Redirect kembali ke halaman utama atau halaman sebelumnya
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Logout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow: hidden; /* Hentikan scrolling latar belakang */
        }
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 1); /* Overlay transparan */
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .confirmation-box {
            padding: 20px;
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.9); /* Kotak dengan transparansi */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Bayangan kotak */
            text-align: center;
            width: 300px; /* Lebar kotak */
        }
        button {
            padding: 8px 16px;
            margin: 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }
        .confirm-btn {
            background-color: #4CAF50; /* Hijau */
            color: white;
        }
        .cancel-btn {
            background-color: #f44336; /* Merah */
            color: white;
        }
    </style>
</head>
<body>
    <div class="overlay">
        <div class="confirmation-box">
            <p>Apakah Anda yakin ingin logout?</p>
            <form action="logout.php" method="post">
                <button type="submit" name="confirm_logout" class="confirm-btn">Ya, Logout</button>
                <button type="submit" name="cancel_logout" class="cancel-btn">Batal</button>
            </form>
        </div>
    </div>
</body>
</html>
