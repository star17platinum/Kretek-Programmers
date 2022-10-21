<?php

require "sambung.php";
$id = $_GET['Id'];

$pdo->DeleteData($id);

?>