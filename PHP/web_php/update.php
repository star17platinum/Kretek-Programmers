<?php

session_start();
require "logic.php";
$content = $pdo->GetMyContent();
$article = $pdo->ViewContent();
?>


<!DOCTYPE html>
<html lang="en">
<head>

<title>Update</title>

<link rel="stylesheet" href="update.css">
</head>
<body>
    <nav>
        <img class="ucreate_logo" src="img/home/UCreate_UC_Only.png" alt="UCreate">
        <div class="call">
            <h2>Hi <?= $_SESSION['username'] ?>!</h2>
            <h1>Let's Make a Big Change</h1>
        </div>
        <div><button><a href="./my_account.php">My Account</a></button></div>
        <div><button><a href="./home.php">Home</a></button></div>
 
    </nav>
    <section>
        <div>
            <form action="logic.php" method="post">
                <h2>Update Ur Article</h2>
                <br>
                <?php foreach( $article as $article ) : ?>
                <input type="hidden" name="username" value="<?= $_SESSION['username'];?>" >
                <input type="hidden" name="id" value="<?= $article['id'];?>" >
                <label for="title">Judul Artikel :</label>
                <br>
                <input type="text" class="title" name="title"  value="<?= $article['judul'];?>" placeholder="Title">
                <br><br>
                <label for="type">Jenis Artikel :</label>
                <br>
                <select name="pilih" id=""  >
                    <option value="<?= $article['kategori'];?>"><?= $article['kategori'];?></option>
                    <option value="Berita">Berita</option>
                    <option value="Keagamaan">Keagamaan</option>
                    <option value="Lifestyle">Lifestyle</option>
                    <option value="Olahraga">Olahraga</option>
                    <option value="Hiburan">Hiburan</option>
                    <option value="Kesehatan">Kesehatan</option>
                    <option value="Kecantikan">Kecantikan</option>
                    <option value="Wisata">Wisata</option>
                </select>
                <br><br>
                <label for="content">Isi Artikel :</label>
                <br>
                <textarea name="content" id="" placeholder="Isi Artikel" ><?= $article['content'];?></textarea>
                <br><br>
                <label for="writer">Nama Penulis :</label>
                <br>
                <input type="text" name="writer" placeholder="Nama Penulis" value="<?= $article['writer'];?>">
                <br><br>
                <button type="submit" name="update">Perbaharui</button>
                <?php endforeach; ?>
            </form>
        </div>
    </section>
</body>
</html>

