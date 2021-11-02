<?php
include  'config.php';
$sementaraValorant = mysqli_query($mysqli, "SELECT * FROM valorant WHERE is_delete = 1 ORDER BY id_valo DESC");
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
        while ($item = mysqli_fetch_array($sementaraValorant)) {
            echo "<tr>";
            echo "<td>" . $item['nama_valo'] . "</td>";
            echo "<td>" . $item['harga_valo'] . "</td>";
            echo "<td>
<a href='funcRestoreV.php?id=$item[id_valo]'>Restore</a> | 
<a href='deletePermanentV.php?id=$item[id_valo]'>Delete Permanent</a></td></tr>";
        }
        ?>
    </table>