<?php

class Database
{
    private $host = HOST, 
            $username = USERNAME, 
            $password = PASSWORD, 
            $dbname = DB_NAME;
    protected $stmt;
    function __construct()
    {
        try {
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
            $this->db = new PDO($dsn, $this->username, $this->password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            die($e->getMessage());
        }
    }

    function query($query)
    {
        $this->stmt = $this->db->prepare($query);
    }
    function bind($var, $val, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($val) :
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($val) :
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($val) :
                    $type = PDO::PARAM_NULL;
                    break;
                default : $type = PDO::PARAM_STR;
            }

        }
        $this->stmt->bindValue($var, $val, $type);
    }
    function execute(){
        $this->stmt->execute();
    }
    function getOneData(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_COLUMN);
    }
    function getAllData(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
