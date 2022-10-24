<?php

session_start();

if(is_null($_SESSION['username']) || is_null($_SESSION['password'])) {
       

    header("Location:login.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>

<title>Create</title>

<link rel="stylesheet" href="create.css">
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
                <h2>Create Here</h2>
                <br>
                <input type="hidden" name="username" value="<?= $_SESSION['username'];?>" >
                <label for="title">Judul Artikel :</label>
                <br>
                <input type="text" class="title" name="title" placeholder="Title">
                <br><br>
                <label for="type">Judul Artikel :</label>
                <br>
                <select name="pilih" id="" >
                    <option >Berita</option>
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
                <textarea name="content" id="" placeholder="Isi Artikel"></textarea>
                <br><br>
                <label for="writer">Nama Penulis :</label>
                <br>
                <input type="text" name="writer" placeholder="Nama Penulis" value="<?= $_SESSION['username'] ?>">
                <br><br>
                <button type="submit" name="posting">Unggah</button>
            </form>
        </div>
    </section>
</body>
</html>

