<?php

require "logic.php";


$nomor = $_GET['id'];

$pdo->DeleteContent($nomor);
?>

