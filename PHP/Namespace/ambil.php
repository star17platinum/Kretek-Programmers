<?php

include("namespace.php");
include("panggil.php");
use car\mobil as car;
$a= new car();
$a->cars();
echo "<br>";
use file\model\mobils\mobil as mobils;
$b = new mobils;
$b->car();