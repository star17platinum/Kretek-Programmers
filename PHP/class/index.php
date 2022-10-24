<?php

class perpustakaan {

    public $perpus = [
        [
            'judul' => 'MATEMATIKA',
            'ISBN' => '01-223'
        ],
        [
            'judul' => 'FISIKA',
            'ISBN' => '02-553'
        ]
    ];

    public function array(){

        $data = $this-> perpus;
        foreach($data as $key => $value){

            $nomor = $key + 1;
            echo $nomor."      ".$value['judul']."     ".$value['ISBN']."\n";
        };   

    }

    public function data_buku($numb,$value1,$value2){
        echo $numb."      ".$value1."     ".$value2;
    }

    public function buku_kembali(){
        echo "Berapa banyak buku yang dikembalikan : ";
        $in = trim(fgets(STDIN));

        $data = $this-> perpus;

        for($i=2;$i<=$in+1;$i++){
            echo "Judul Buku : ";
        $data[$i]['judul'] = trim((fgets(STDIN)));
    
            echo "ISBN Buku :";
        $data[$i]['ISBN'] = trim((fgets(STDIN)));
            echo "\n";
        };
        
        echo "DATA BUKU PERPUSTAKAAN\n\n";
        echo "No.    Judul     ISBN\n";
        foreach($data as $key => $value){

            $nomor = $key + 1;
            
            echo $nomor."      ".$value['judul']."     ".$value['ISBN']."\n";
        }; 
        
    }

    public function buku_dipinjam(){
        $data = $this-> perpus;
        echo "Masukan nomor urut buku yang akan dipinjam sesuai data diatas : ";
        $out = trim((fgets(STDIN)));

        echo "\n";
        echo "Kamu berhasil meminjam buku: ".$data[$out-1]['judul']."\n";

        unset($data[$out-1]);
        echo "\n";
        echo "DATA BUKU PERPUSTAKAAN\n\n";
        echo "No.    Judul     ISBN\n";
        foreach($data as $key => $value){

            $nomor = $key + 1;
            
            echo $nomor."      ".$value['judul']."     ".$value['ISBN']."\n";
            
        };

    }
}



echo "DATA BUKU PERPUSTAKAAN\n\n";

echo "No.    Judul     ISBN\n";

$display_awal = new perpustakaan;

$display_awal->array();
echo "\n";

echo 'Masukan "1" untuk mengembalikan buku.'."\n";
echo 'Masukan "2" untuk meminjam buku.'."\n";
echo "Masukan perintah : ";
$action = trim(fgets(STDIN));
echo "\n";

if($action == 1){
    
    $display_awal-> buku_kembali();
 
} elseif($action == 2 ){

    $display_awal-> buku_dipinjam();

} else {
    echo "Masukkan perintah : $action";
}





