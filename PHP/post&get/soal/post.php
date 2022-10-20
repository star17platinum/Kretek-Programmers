<?php
require "sambung.php";
$barang = $pdo->GetData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD POST</title>
</head>
<body>
    
    <form action="sambung.php" method="POST">

    <label for="namaBarang">Nama Barang</label>
    <input type="text" name="namaBarang" placeholder="Nama Barang">
    <label for="namaBarang">Harga Barang</label>
    <input type="text" name="hargaBarang" placeholder="Harga Barang">
    <button type="submit" name="create">Kirim!</button>
    <br><br>
    </form>
    <table class="table-post" border="1" cellspacing="0" cellpadding="15">
        <thead class="post">
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga Barang</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            <?php foreach($barang as $item): ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $item['namaBarang']; ?></td>
                <td><?= $item['hargaBarang'] ?></td>
                <td> <a href="hapus.php?Id=<?= $item['Id']?>"><input type="submit" value="Hapus"></a>
                <a href="update.php?Id=<?= $item['Id'] ?>"><input type="submit" value="Update" name=update></a></td>
            </tr>
            <?php $no++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>