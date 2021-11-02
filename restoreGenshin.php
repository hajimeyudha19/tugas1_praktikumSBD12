
<?php
include  'config.php';
$sementaraGenshin = mysqli_query($mysqli, "SELECT * FROM genshin WHERE is_delete = 1 ORDER BY id_genshin DESC");
?>
<a href="index.php">Go to Home</a>
<h3>Tabel Genshin</h3>
    <table width='80%' border=1>
        
        <tr>
            <th>Pilihan Voucher</th>
            <th>Harga
                Voucher</th>
            <th>Aksi</th>
        </tr>
        <?php
        while ($item = mysqli_fetch_array($sementaraGenshin)) {
            echo "<tr>";
            echo "<td>" . $item['nama_genshin'] . "</td>";
            echo "<td>" . $item['harga_genshin'] . "</td>";
            echo "<td>
<a href='funcRestoreG.php?id=$item[id_genshin]'>Restore</a> | 
<a href='deletePermanentG.php?id=$item[id_genshin]'>Delete Permanent</a></td></tr>";
        }
        ?>
    </table>