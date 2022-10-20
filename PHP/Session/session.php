<?php
//session untuk memudahkan user agar tidak login kembali ketika web browser trsebut blm ditutup
//session syntax = session_start() cara pemanggilan nya = $_SESSION['session_name'] = session_value
//session_start() wajib digunakan untuk mmanggil session tersebut
//untuk menghapus ny kita hanya perlu menggunakan session_destroy() setelah memanggilnya dengan session_start()
//untuk menghapus salah satu session nya dengan cara unset($_SESSION['session_name'])
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar SESSION</title>
</head>
<body>
    <?php
    $_SESSION["favfood"] = "Rendang";
    $_SESSION["favdrink"] = "Jus Alpukat";
        echo "makanan favoritku adalah ".$_SESSION["favfood"]."<br>";
        echo "minuman favoritku adalah ".$_SESSION["favdrink"];
    ?>
</body>
</html>