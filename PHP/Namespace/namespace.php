<?php
//cara mendeklarasikan sebuah namespace => namespace name_namespace
//namespace untuk mmudahkan memanggil code ke file yang laen
//sama seperti include tapi memudahkan lebih mudah menuliskan syntaax
//untuk membedakan clas yang sama di file yang berbeda
//name space bisa d tulis lebih dari satu =>namespace folder_name\folder_name\namespace_name
//namespace ganda ini untuk navigasi di dalam folder mana file tersebut terletak

namespace file\model\mobils;
class mobil{
    public function car(){
        echo "ini mobil namespace mobils";
    }
}