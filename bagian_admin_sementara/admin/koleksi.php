<?php
include "../koneksi.php";

$query = mysqli_query($conn, "SELECT * FROM koleksi");
?>

<h2>Data Koleksi Buku</h2>
<a href="koleksi_tambah.php">Tambah Buku</a><br><br>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Tahun</th>
        <th>Jumlah</th>
        <th>Aksi</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($query)) { ?>
    <tr>
        <td><?= $row['id_koleksi'] ?></td>
        <td><?= $row['judul'] ?></td>
        <td><?= $row['pengarang'] ?></td>
        <td><?= $row['tahun'] ?></td>
        <td><?= $row['jumlah'] ?></td>
        <td>
            <a href="koleksi_edit.php?id=<?= $row['id_koleksi'] ?>">Edit</a>
        </td>
    </tr>
    <?php } ?>
</table>

<a href="index.php">Kembali ke Dashboard</a>
<br><br>

