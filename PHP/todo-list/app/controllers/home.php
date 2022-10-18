<?php

class Home extends Controller {
    public function index(){
        $data = [
            'judul' => 'TODO List',
            'todo' => $this->model('homeModel')->getAll(),
        ];
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
    public function create(){
        $judul = $_POST['judul'];
        $this->model('homeModel')->create($judul);
        header('location:'.HOME_URL);
    }
    public function delete($id){
        $this->model('homeModel')->delete($id);
        header('location:'.HOME_URL);
    }
    public function update($id){
        $judul = $_POST['judul'];
        $this->model('homeModel')->update($id, $judul);
        header('location:'.HOME_URL);
    }
}
