<?php
session_start();
include "../koneksi.php";

if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit;
}

$id = $_GET['id'];

$sql = "SELECT * FROM peminjaman WHERE id_peminjaman = $id";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);

if (isset($_POST['update'])) {

    $status = $_POST['status'];

    if ($status == "Dikembalikan") {

        $today = date("Y-m-d");

        $update = "UPDATE peminjaman 
                   SET status='$status', tanggal_kembali='$today'
                   WHERE id_peminjaman=$id";

    } else {
        $update = "UPDATE peminjaman 
                   SET status='$status', tanggal_kembali=NULL
                   WHERE id_peminjaman=$id";
    }

    mysqli_query($conn, $update);
    header("Location: peminjaman.php");
    exit;
}
?>

<a href="peminjaman.php">Kembali</a>
<br><br>

<h2>Edit Status Peminjaman</h2>

<form method="POST">
    Status:
    <select name="status">
        <option value="Dipinjam" <?= ($data['status']=="Dipinjam" ? "selected" : "") ?>>Dipinjam</option>
        <option value="Dikembalikan" <?= ($data['status']=="Dikembalikan" ? "selected" : "") ?>>Dikembalikan</option>
    </select>
    <br><br>

    <button type="submit" name="update">Update Status</button>
</form>
