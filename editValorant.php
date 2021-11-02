<?php
// include database connection file
include_once("config.php");
// Check if form is submitted for data update, then redirect to homepage after update
if(isset($_POST['update']))
{
$id = $_POST['id'];
$nama=$_POST['nama'];
$harga=$_POST['harga'];
// update data
$result = mysqli_query($mysqli, "UPDATE valorant SET nama_valo='$nama',harga_valo='$harga' WHERE id_valo=$id");
// Redirect to homepage to display updated data in list
header("Location: index.php");
}
?>
<?php
// Display selected valorant based on id
// Getting id from url
$id = $_GET['id'];
// Fetch data based on id
$result = mysqli_query($mysqli, "SELECT * FROM valorant WHERE id_valo=$id");
while($valorant = mysqli_fetch_array($result))
{
$nama = $valorant['nama_valo'];
$harga = $valorant['harga_valo'];
}
?>
<html>
<head>
<title>Edit Valorant</title>
</head>
<body>
<a href="index.php">Home</a>
<br/><br/>
<h2>Kelompok 12</h2>
<h2>Menu Edit Valorant</h2>
<form name="update_valorant" method="post"
action="editValorant.php">
<table border="0">
<tr>
<td>Pilihan Voucher</td>
<td><input type="text" name="nama" value=<?php echo
$nama;?>></td>
</tr>
<tr>
<td>Harga Voucher</td>
<td><input type="text" name="harga" value=<?php echo
$harga;?>></td>
</tr>
<tr>
<td><input type="hidden" name="id" value=<?php echo
$_GET['id'];?>></td>
<td><input type="submit" name="update"
value="Update"></td>
</tr>
</table>
</form>
</body>
</html>