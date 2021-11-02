<?php
include 'config.php';
$voucher = mysqli_query($mysqli, "SELECT * FROM valorant WHERE is_delete = 0 ORDER BY id_valo DESC");
$genshin = mysqli_query($mysqli, "SELECT * FROM genshin WHERE is_delete = 0 ORDER BY id_genshin DESC");
$bundle = mysqli_query($mysqli, "SELECT A.id_bundle, A.nama_bundle, A.harga_bundle, B.nama_valo, C.nama_genshin 
from bundle A INNER JOIN valorant B ON A.id_valo = B.id_valo INNER JOIN genshin C ON A.id_genshin = C.id_genshin")

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Tugas Modul 1 Kel 12</title>
</head>

<body>
    <h1> TOKO VOUCHER GAME ONLINE </h1>
    <h2> by kelompok 12 </h2>
    <h3> Tabel Valorant </h3>
    <table width='80%' border=1>
        <a href="addValorant.php"> Tambah Valorant </a>
        <br>
        <a href="restoreValorant.php">Restore Delete Valorant</a>
        <tr>
            <th> Pilihan Voucher </th>
            <th> Harga Voucher </th>
            <th> Aksi </th>
        </tr>
        <?php
        while ($item = mysqli_fetch_array($voucher)) {
            echo "<tr>";
            echo "<td>" . $item['nama_valo'] . "</td>";
            echo "<td>" . $item['harga_valo'] . "</td>";
            echo "<td>
<a href='editValorant.php?id=$item[id_valo]'>Edit</a> | 
<a href='deleteValorant.php?id=$item[id_valo]'>Delete</a></td></tr>";
        }

        ?>
    </table>
    <h3>Tabel Genshin</h3>
    <table width='80%' border=1>
        <a href="addGenshin.php">Tambah Genshin</a>
        <br>
        <a href="restoreGenshin.php">Restore Delete Genshin</a>
        <tr>
            <th>Pilihan Voucher</th>
            <th>Harga
                Voucher</th>
            <th>Aksi</th>
        </tr>
        <?php
        while ($item = mysqli_fetch_array($genshin)) {
            echo "<tr>";
            echo "<td>" . $item['nama_genshin'] . "</td>";
            echo "<td>" . $item['harga_genshin'] . "</td>";
            echo "<td>
<a href='editGenshin.php?id=$item[id_genshin]'>Edit</a> | 
<a href='deleteGenshin.php?id=$item[id_genshin]'>Delete</a></td></tr>";
        }
        ?>
    </table>
    <h3>Tabel Bundle</h3>
    <table width='80%' border=1>
        <tr>
            <th>Nama Bundle</th>
            <th>Valorant</th>
            <th>Genshin</th>
            <th>Harga Bundle</th>
            <th>Aksi</th>
        </tr>
        <?php
        while ($item = mysqli_fetch_array($bundle)) {
            echo "<tr>";
            echo "<td>" . $item['nama_bundle'] . "</td>";
            echo "<td>" . $item['nama_valo'] . "</td>";
            echo "<td>" . $item['nama_genshin'] . "</td>";
            echo "<td>" . $item['harga_bundle'] . "</td>";
            echo "<td>
<a href='deletePermanentB.php?id=$item[id_bundle]'>Delete</a></td></tr>";
        }
        ?>
    </table>
</body>

</html>