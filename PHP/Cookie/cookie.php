<?php
//cookie untuk mengingat user agar tidak login kembali (exam. fitur REMEMBER ME){mengidentifikasi pengguna}
//syntax untuk cookie = setcookie("cookie_name","cookie_value","expire","path") -> pmanggilan cookie = $_COOKIE['cookie_name']
//path untuk menunjukkan coookie bisa digunakan dimana
//expire menggunakan detik
//untuk menghapus cookie bagian time hanya di ubah dengan - (seperti membuat cookie yang baru tapi dengan cara menguranginya)
$cookie_name = "user";
$cookie_value = "Hasan Rizky";
setcookie($cookie_name,$cookie_value,time()+(86400 * 30),"/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar COOKIES</title>
</head>
<body>
    <?php if($_COOKIE[$cookie_name]){
        echo "Ini COOKIES";
    }else{
        echo "COOKIES missing";
    }
    ?>
</body>
</html>