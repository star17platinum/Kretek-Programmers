<?php
session_start();

if(!is_null($_SESSION['username']) && !is_null($_SESSION['password'])) {
       

    header("Location:home.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

<title>Log-in</title>

<link rel="stylesheet" href="signin.css">
</head>
<body>
    <nav>
        <img class="ucreate_logo" src="img/login/UCreate.png" alt="UCreate">
        <br><br>
        <form action="logic.php" method="post">
            <h2>Log-In</h2>
            <br>
            <input type="text" name="username" placeholder="Nama Pengguna" required>
            <br><br>
            <input type="password" name="password" placeholder="Masukan Password" required>
            <br><br>
            <label for="cekbok"> Ingat saya!</label>            
            <input type="checkbox" name="cekbok" id="cekbok">
            <br>
            <button type="submit" name="log-in">Log-in</button>
        </form>
        <p>Tidak punya akun? <a href="./signin.php">Buat akun</a></p>
    </nav>
</body>
</html>