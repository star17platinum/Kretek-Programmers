<?php
session_start();

require "logic.php";
$content = $pdo->GetMyContent();
$account = $pdo->GetMyAccount();



if(is_null($_SESSION['username']) || is_null($_SESSION['password'])) {
       

    header("Location:login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>

<title>My Account</title>

<link rel="stylesheet" href="my_account.css">
</head>
<body>
    <nav>
        <img class="ucreate_logo" src="img/my_account/UCreate_UC_Only.png" alt="UCreate">
        <div class="call">
            <h2>Hi <?= $_SESSION['username'] ?>!</h2>
            <h1>Let's Make a Big Change</h1>
        </div>
        <div><button><a href="./create.php">Create</a></button></div>
        <div><button><a href="./home.php">Home</a></button></div>

 
    </nav>
    
    <!-- <aside>
        <div>
            <img class="" src="img/my_account/UCreate.png" alt="UCreate">
            <h2>Account Information</h2>
            <p>Username : Blablabla</p>
            <p>Email : jujur@mail.mei-mei</p>
            <p>Password : WKWKKWKW</p>
        </div>
    </aside> -->



        <?php foreach( $account as $akun ) : ?>
            <aside>
                <div>
                    <img class="" src="img/my_account/UCreate.png" alt="UCreate">
                    <h2>Account Information</h2>
                    <p>Username : <?= $akun['username'];?></p>
                    <p>Email : <?= $akun['email'];?></p>
                    <p>Password : <?= $akun['password'];?></p>       
                    <form action="logic.php" method="post"><button type="submit" name="logout">Log-Out
                        <!-- <a class="logout"href="./home.php">Log-Out</a> -->
                    </button></form>

                </div>
            </aside>
        <?php $no++; ?>
    <?php endforeach; ?>



        <?php foreach( $content as $isi ) : ?>
            <section>
                <div>
                    <h2><?= $isi['judul'];?></h2>
                    <p>Penulis : <?= $isi['writer'];?> | Kategori : <?= $isi['kategori'];?></p>
                    <p><?= $isi['content'];?></p>
                    <a  href="./delete.php?id=<?= $isi['id'];?>"><img class="trush" src="img/my_account/trush.png" alt="hapus" ></a>
                    <a  href="./update.php?id=<?= $isi['id'];?>"><img class="pen" src="img/my_account/pen.png" alt="edit" ></a>
                </div>
            </section>
        <?php $no++; ?>
    <?php endforeach; ?>


    <!-- <section>
        <div>
            <h2>Judul Artikel</h2>
            <p>Isi Artikel</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, at? Distinctio dolorum dolor facere nesciunt impedit vel explicabo aspernatur sapiente quo repellat dicta suscipit excepturi, a ipsum corporis voluptatibus! Voluptas?. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, eius voluptatem recusandae itaque voluptas doloribus debitis praesentium doloremque placeat blanditiis, quasi nihil. Doloremque animi quam quod voluptatem deleniti fugit pariatur!</p>
        </div>

        <div>
            <h2>Judul Artikel</h2>
            <p>Isi Artikel</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, at? Distinctio dolorum dolor facere nesciunt impedit vel explicabo aspernatur sapiente quo repellat dicta suscipit excepturi, a ipsum corporis voluptatibus! Voluptas?. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, eius voluptatem recusandae itaque voluptas doloribus debitis praesentium doloremque placeat blanditiis, quasi nihil. Doloremque animi quam quod voluptatem deleniti fugit pariatur!</p>
        </div>

        <div>
            <h2>Judul Artikel</h2>
            <p>Isi Artikel</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, at? Distinctio dolorum dolor facere nesciunt impedit vel explicabo aspernatur sapiente quo repellat dicta suscipit excepturi, a ipsum corporis voluptatibus! Voluptas?. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, eius voluptatem recusandae itaque voluptas doloribus debitis praesentium doloremque placeat blanditiis, quasi nihil. Doloremque animi quam quod voluptatem deleniti fugit pariatur!</p>
        </div>
    </section> -->
</body>
</html>