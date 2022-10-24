<?php

session_start();

require "logic.php";
$content = $pdo->GetContent();
$article = $pdo->ViewContent();

?>



<!DOCTYPE html>
<html lang="en">
<head>

<title>Home</title>

<link rel="stylesheet" href="view.css">
</head>
<body>
    <nav>
        <img class="ucreate_logo" src="img/home/UCreate_UC_Only.png" alt="UCreate">
        <div class="call">
            <h2>Hi <?= $_SESSION['username'] ?>!</h2>
            <h1>Welcome To UCreate</h1>
        </div>
        <div><button><a href="./my_account.php">My Account</a></button></div>
        <div><button><a href="./create.php">Create</a></button></div>
 
    </nav>

        <section>
                <div>
                <?php foreach( $article as $article ) : ?>
                    <h2><?= $article['judul'];?></h2>
                    <p>Penulis : <?= $article['writer'];?> | Kategori : <?= $article['kategori'];?></p>
                    <p><?= $article['content'];?></p>
                <?php endforeach; ?>
                </div>
        </section>
<!-- 
            <section>
                <div>
                    <h2><?= $_GET['title'];?></h2>
                    <p>Penulis : <?= $_GET['writer'];?> | Kategori : <?= $_GET['kategori'];?></p>
                    <p><?= $_GET['content'];?></p>
                </div>
            </section> -->


  
    </body>
</html>