<?php
include "../koneksi.php";

if (isset($_POST['simpan'])) {

    $judul     = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $tahun     = $_POST['tahun'];
    $jumlah    = $_POST['jumlah'];

    $sql = "INSERT INTO koleksi (judul, pengarang, tahun, jumlah)
            VALUES ('$judul', '$pengarang', '$tahun', '$jumlah')";

    mysqli_query($conn, $sql);

    header("Location: koleksi.php");
    exit;
}
?>

<h2>Tambah Buku</h2>

<form method="POST">
    Judul: <input type="text" name="judul"><br><br>
    Pengarang: <input type="text" name="pengarang"><br><br>
    Tahun: <input type="number" name="tahun"><br><br>
    Jumlah: <input type="number" name="jumlah"><br><br>

    <button type="submit" name="simpan">Simpan</button>
</form>

<a href="koleksi.php">Kembali</a>
<br><br>