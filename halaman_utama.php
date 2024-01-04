<?php
session_start();
include("koneksi.php");
if (!isset($_SESSION['admin_username'])) {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .sidebar {
            height: 60px;
            width: 100%;
            background-color: blue;
            display: flex;
            align-items: center;
            justify-content: left;
            padding-left: 20px;
            box-sizing: border-box;
        }

        .sidebar a {
            text-decoration: none;
            color: white;
            text-align: center;
            display: flex;
            display: block;
            margin-right: 20px;
        }

        .sidebar a:hover {
            color: red;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <?php if (in_array("guru", $_SESSION['admin_akses'])) { ?>
            <a href="dosen.php">Halaman Dosen</a>
        <?php } ?>
        <?php if (in_array("siswa", $_SESSION['admin_akses'])) { ?>
            <a href="data_mahasiswa.php">Data Mahasiswa</a>
        <?php } ?>
        <?php if (in_array("spp", $_SESSION['admin_akses'])) { ?>
            <a href="admin.php">Admin</a>
        <?php } ?>
        <a href="logout.php">
            <p>Logout</p>
        </a>
    </div>

</body>

</html>