<?php
//autoload di gunakan untuk memanggil beberapa class d beberapa file yang berbeda
//nama class dengan  nama fie nya harus sama dengan format .php
//cara penulisan nya function __autoload($class){ require_once($class.".php"); }->php v7


//php v8.1
function my_autoload($class){
    require_once($class.".php");
}

spl_autoload_register();

$bebek = new bebek;
$pitik = new pitik;