<?php
include "../koneksi.php";

$sql = "SELECT p.id_peminjaman, pem.nama, p.tanggal_pinjam, p.tanggal_kembali, p.status
        FROM peminjaman p
        JOIN pemustaka pem ON p.id_pemustaka = pem.id_pemustaka";

$query = mysqli_query($conn, $sql);
?>

<h2>Data Peminjaman</h2>

<table border="1" cellpadding="5">
    <tr>
        <th>ID Pinjam</th>
        <th>Pemustaka</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>Status</th>
        <th>Detail</th>
        <th>Edit Status</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($query)) { ?>
    <tr>
        <td><?= $row['id_peminjaman'] ?></td>
        <td><?= $row['nama'] ?></td>
        <td><?= $row['tanggal_pinjam'] ?></td>
        <td><?= $row['tanggal_kembali'] ?></td>
        <td><?= $row['status'] ?></td>
        <td>
            <a href="peminjaman_detail.php?id=<?= $row['id_peminjaman'] ?>">Lihat</a>
        </td>
        <td>
            <a href="peminjaman_edit.php?id=<?= $row['id_peminjaman'] ?>">Edit</a>
        </td>
    </tr>
    <?php } ?>
</table>

<a href="index.php">Kembali</a>
<br><br>
