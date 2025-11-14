<?php
include "../koneksi.php";

$query = mysqli_query($conn, "SELECT * FROM pemustaka");
?>

<h2>Data Pemustaka</h2>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Alamat</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($query)) { ?>
    <tr>
        <td><?= $row['id_pemustaka'] ?></td>
        <td><?= $row['nama'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['alamat'] ?></td>
    </tr>
    <?php } ?>
</table>

<a href="index.php">Kembali</a>
<br><br>
