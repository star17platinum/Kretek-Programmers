<?php
session_start();

if(!is_null($_SESSION['username']) && !is_null($_SESSION['password'])) {
       

    header("Location:home.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>

<title>Sign-in</title>

<link rel="stylesheet" href="signin.css">
</head>
<body>
    <nav>
        <img class="ucreate_logo" src="img/login/UCreate.png" alt="UCreate">
        <br><br>
        <form action="logic.php" method="post">
            <h2>Sign-In</h2>
            <br>
            <input type="text" name="username" placeholder="Nama Pengguna" required>
            <br><br>
            <input type="email" name="email" placeholder="Masukan E-mail" required>
            <br><br>
            <input type="password" name="password" placeholder="Masukan Password" required>
            <br><br>
            <input class="check" type="checkbox" name="cekbok">
            <label for="cekbok"> Ingat saya!</label><br>
            <button type="submit" name="sign-in">Sign-in</button>
        </form>
        <p>Sudah punya akun? <a href="./login.php">Masuk akun</a></p>
    </nav>
</body>
</html>