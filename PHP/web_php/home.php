<?php

require "logic.php";
$content = $pdo->GetContent();

?>



<!DOCTYPE html>
<html lang="en">
<head>

<title>Home</title>

<link rel="stylesheet" href="home.css">
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

    <aside>
        <div>
            <img class="" src="img/home/UCreate.png" alt="UCreate">
            <h2>A GREETING CARD</h2>
            <h3>from me</h3>
            <p>Hi UCreator!</p>
            <p>Thanks for using UCreate, hope U like and enjoy it.</p>
        </div>
    </aside>

        <?php foreach( $content as $isi ) : ?>
            <section>
                <div>
                    <a href="./view.php?id=<?= $isi['id'];?>">
                        <h2><?= $isi['judul'];?></h2>
                    </a>
                        <p>Penulis : <?= $isi['writer'];?> | Kategori : <?= $isi['kategori'];?></p>
                        <p><?= $isi['content'];?></p>
                    
                </div>
            </section>
        <?php endforeach; ?>

    <!-- <section>
        <div>
            <h2>Judul Artikel</h2>
            <p>Isi Artikel</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, at? Distinctio dolorum dolor facere nesciunt impedit vel explicabo aspernatur sapiente quo repellat dicta suscipit excepturi, a ipsum corporis voluptatibus! Voluptas?. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, eius voluptatem recusandae itaque voluptas doloribus debitis praesentium doloremque placeat blanditiis, quasi nihil. Doloremque animi quam quod voluptatem deleniti fugit pariatur!</p>
        </div>
    </section>
    <section>
        <div>
            <h2>Judul Artikel</h2>
            <p>Isi Artikel</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, at? Distinctio dolorum dolor facere nesciunt impedit vel explicabo aspernatur sapiente quo repellat dicta suscipit excepturi, a ipsum corporis voluptatibus! Voluptas?. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, eius voluptatem recusandae itaque voluptas doloribus debitis praesentium doloremque placeat blanditiis, quasi nihil. Doloremque animi quam quod voluptatem deleniti fugit pariatur!</p>
        </div>
    </section>
    <section>
        <div>
            <h2>Judul Artikel</h2>
            <p>Isi Artikel</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, at? Distinctio dolorum dolor facere nesciunt impedit vel explicabo aspernatur sapiente quo repellat dicta suscipit excepturi, a ipsum corporis voluptatibus! Voluptas?. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, eius voluptatem recusandae itaque voluptas doloribus debitis praesentium doloremque placeat blanditiis, quasi nihil. Doloremque animi quam quod voluptatem deleniti fugit pariatur!</p>
        </div>
    </section>
    <section>
        <div>
            <h2>Judul Artikel</h2>
            <p>Isi Artikel</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, at? Distinctio dolorum dolor facere nesciunt impedit vel explicabo aspernatur sapiente quo repellat dicta suscipit excepturi, a ipsum corporis voluptatibus! Voluptas?. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, eius voluptatem recusandae itaque voluptas doloribus debitis praesentium doloremque placeat blanditiis, quasi nihil. Doloremque animi quam quod voluptatem deleniti fugit pariatur!</p>
        </div>
    </section> -->
    </body>
</html>