<?php

class ConnectPDO {
    protected $username = "rizz";
    protected $pass = "040516";

    public function __construct()
    {
        $this->db = new PDO
        ("mysql:host=localhost;dbname=warung", $this->username, $this->pass);
    }
    public function CreateData(){
        //Code
        $namabarang = $_POST["namaBarang"];
        $hargabarang = $_POST["hargaBarang"];
        $query = "INSERT INTO brang(namaBarang,hargaBarang) VALUES ('$namabarang','$hargabarang')";
        $data = $this->db->prepare($query);
        $data->execute();

        header("Location:post.php");
    }
    public function DeleteData($id){

        $query = "DELETE FROM `brang` WHERE Id = '$id'";
        $data = $this->db->prepare($query);
        $data->execute();

        header("Location:post.php");
    }
    public function UpdateData(){
        $namabarang = $_GET["namaBarang"];
        $hargabarang = $_GET["hargaBarang"];
        $id = $_GET["Id"];
        $query = "UPDATE brang SET `namaBarang`='$namabarang', `hargaBarang`='$hargabarang' WHERE Id = '$id'";
        $data = $this->db->prepare($query);
        $data->execute();

        header("Location:post.php");

    }
    public function GetData(){
        $query = "SELECT * FROM brang";
        $data = $this->db->prepare($query);
        $data->execute();
        $result = $data->fetchAll(
            PDO::FETCH_ASSOC
        );
        return $result;
    }
}
$pdo = new ConnectPDO();
if(isset($_POST["create"])){
    $pdo->CreateData();
}

if(isset($_GET["update"])){
    $pdo->UpdateData();
}