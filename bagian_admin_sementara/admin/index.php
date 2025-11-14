
<?php
session_start();
include "../koneksi.php";
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit;
}
?>

<h2>Dashboard Admin</h2>

<a href="koleksi.php">Kelola Koleksi Buku</a><br>
<a href="pemustaka.php">Lihat Daftar Pemustaka</a><br>
<a href="peminjaman.php">Kelola Peminjaman</a><br>
<a href="../logout.php">Logout</a>
