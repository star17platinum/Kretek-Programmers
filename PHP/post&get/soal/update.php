<?php
require "sambung.php";

$id = $_GET["Id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="sambung.php" method="GET">
<label for="namaBarang">Update Barang</label>
    <input type="text" name="namaBarang" placeholder="Ganti Barang!">
    <input type="text" name="hargaBarang" placeholder="Ganti Harga!">
    <input type="hidden" name="Id" value="<?=$id?>">
    <button type="submit" name="update">Update!</button>
    </form>
    <br><br>

</body>
</html>
<?php
// $namabarang = $_POST["namaBarang"];


?>