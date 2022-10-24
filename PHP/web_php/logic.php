<?php



session_start();

class ConnectPDO {

    protected $username = "jura";
    protected $password = "1313hut";

    public function __construct() {
        $this->db = new PDO("mysql:host=localhost;dbname=UCreate", $this->username, $this->password);
    }

    public function CreateUser() {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "INSERT INTO userData (username,email,password) VALUES ('$username','$email','$password')";
        $data = $this->db->prepare($query);
        $data->execute();

        header("Location:home.php");
    }

    public function InitialUser() {
        $query = "SELECT * FROM userData";
        $data = $this->db->prepare($query);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);

        $username = $_POST['username'];
        $password = $_POST['password'];

        foreach($result as $user){
            if($user['username']==$username && $user['password']==$password){
                $_SESSION['username']= $username;
                $_SESSION['password']= $password;

                if(!is_null($_POST['cekbok'])) {
                    setcookie("username",$_POST['username'],time()+3600,"/");
                    setcookie("password",$_POST['password'],time()+3600,"/");
                }

                header("Location:home.php");
            } elseif ($user['username']!=$username || $user['password']!=$password) {
                echo "salah coy";
            }
        }
    }

    public function LogoutUser() {
        session_start();
        session_unset();
        session_destroy();
        setcookie("username","",time()-3600,"/");
        setcookie("password","",time()-3600,"/");
        header("Location:login.php");
    }

    public function CreateContent() {

        $title = $_POST['title'];
        $pilih = $_POST['pilih'];
        $content = $_POST['content'];
        $writer = $_POST['writer'];
        $username = $_SESSION['username'];
        $query = "INSERT INTO userContent (username,writer,judul,kategori,content) VALUES ('$username','$writer','$title','$pilih','$content')";
        $data = $this->db->prepare($query);
        $data->execute();

        header("Location:my_account.php");

    }

    public function UpdateContent() {

        $title = $_POST['title'];
        $pilih = $_POST['pilih'];
        $content = $_POST['content'];
        $writer = $_POST['writer'];
        $id = $_POST['id'];
        $query = "UPDATE userContent SET `writer` = '$writer', `judul` = '$title', `kategori` ='$pilih', `content` = '$content' WHERE id = '$id'";
        $data = $this->db->prepare($query);
        $data->execute();

        header("Location:my_account.php");

    }


    public function DeleteContent($id) {

        $query = "DELETE FROM userContent WHERE id = '$id'";
        $data = $this->db->prepare($query);
        $data->execute();

        header("Location:my_account.php");
    }





    public function GetContent() {
        $query = "SELECT * FROM userContent";
        $data = $this->db->prepare($query);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function ViewContent() {
        $id = $_GET['id'];
        $query = "SELECT * FROM userContent WHERE id = '$id'";
        $data = $this->db->prepare($query);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function GetMyContent() {
        $username = $_SESSION['username'];
        $query = "SELECT * FROM userContent WHERE username = '$username'";
        $data = $this->db->prepare($query);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function GetMyAccount() {
        $username = $_SESSION['username'];
        $query = "SELECT * FROM userData WHERE username = '$username'";
        $data = $this->db->prepare($query);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


}

$pdo = new ConnectPDO();

if(isset($_POST['sign-in'])) {
    if(!is_null($_POST['cekbok'])) {
        setcookie("username",$_POST['username'],time()+3600,"/");
        setcookie("password",$_POST['password'],time()+3600,"/");
    }
    $_SESSION['username']= $_POST['username'];
    $_SESSION['password']= $_POST['password'];
    $pdo->CreateUser();

}
if(isset($_POST['log-in'])) {
    $pdo->InitialUser();
}

if(isset($_POST['logout'])) {
    $pdo->LogoutUser();
}

if(isset($_POST['posting'])) {
    if(!is_null($_SESSION['username']) || !is_null($_SESSION['password'])) {
       

        $pdo->CreateContent();
    } else {
        header("Location:login.php");
    }    
}

if(isset($_POST['update'])) {
    $pdo->UpdateContent();
}





?>
