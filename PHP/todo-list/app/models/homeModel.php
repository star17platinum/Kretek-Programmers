<?php

class homeModel extends Database {
    function __construct(){
        $this->db = new Database;
    }
    function getAll(){
        $this->db->query('SELECT * from list');
        return $this->db->getAllData();
    }
    function create($judul){
        $this->db->query("INSERT into list values (null, :judul)");
        $this->db->bind('judul', $judul);
        $this->db->execute();
    }
    function delete($id){
        $this->db->query("DELETE from list where id=:id");
        $this->db->bind('id',$id);
        $this->db->execute();
    }
    function update($id, $judul){
        $this->db->query("UPDATE list set judul=:judul where id=:id");
        $this->db->bind('judul', $judul);
        $this->db->bind('id', $id);
        $this->db->execute();
    }
    
}