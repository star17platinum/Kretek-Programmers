<?php
//session dapat di panggil dari file lain
session_start();
// unset($_SESSION["favfood"]);
//untuk menghacurkan semua session
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if($_SESSION["favfood"]){
        echo "makanan favoritku adalah ".$_SESSION["favfood"];
        
    }elseif($_SESSION["favdrink"]){
        echo "minuman favoritku adalah ".$_SESSION["favdrink"];
    }else {
        echo "SESSION missing";
    }
    ?>
</body>
</html>