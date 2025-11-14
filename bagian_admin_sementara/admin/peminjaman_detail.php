<?php
include "../koneksi.php";

$id = $_GET['id'];

$q = mysqli_query($conn, 
"SELECT kd.id_detail, k.judul, kd.jumlah
 FROM peminjaman_detail kd
 JOIN koleksi k ON kd.id_koleksi = k.id_koleksi
 WHERE kd.id_peminjaman = $id");
?>

<h2>Detail Peminjaman ID: <?= $id ?></h2>
<table border="1">
    <tr>
        <th>ID Detail</th><th>Judul Buku</th><th>Jumlah</th>
    </tr>

    <?php while ($d = mysqli_fetch_assoc($q)) { ?>
    <tr>
        <td><?= $d['id_detail'] ?></td>
        <td><?= $d['judul'] ?></td>
        <td><?= $d['jumlah'] ?></td>
    </tr>
    <?php } ?>
</table>

<a href="peminjaman.php">Kembali</a>
<br><br>