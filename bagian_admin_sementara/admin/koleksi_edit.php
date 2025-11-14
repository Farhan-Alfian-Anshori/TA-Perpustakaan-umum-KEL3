<?php
include "../koneksi.php";

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM koleksi WHERE id_koleksi=$id");
$row  = mysqli_fetch_assoc($data);

if (isset($_POST['update'])) {

    $judul     = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $tahun     = $_POST['tahun'];
    $jumlah    = $_POST['jumlah'];

    $sql = "UPDATE koleksi SET
                judul='$judul',
                pengarang='$pengarang',
                tahun='$tahun',
                jumlah='$jumlah'
            WHERE id_koleksi=$id";

    mysqli_query($conn, $sql);

    header("Location: koleksi.php");
    exit;
}
?>

<h2>Edit Buku</h2>

<form method="POST">
    Judul: <input type="text" name="judul" value="<?= $row['judul'] ?>"><br><br>
    Pengarang: <input type="text" name="pengarang" value="<?= $row['pengarang'] ?>"><br><br>
    Tahun: <input type="number" name="tahun" value="<?= $row['tahun'] ?>"><br><br>
    Jumlah: <input type="number" name="jumlah" value="<?= $row['jumlah'] ?>"><br><br>

    <button type="submit" name="update">Update</button>
</form>

<a href="koleksi.php">Kembali</a>
<br><br>
