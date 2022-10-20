<?php

// ini_set('display_errors',1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
class Controller
{
    public function view($view, $data = []){
        require_once '../app/view/'.$view.'.php';
    }
    public function model($model){
        require_once '../app/model/'.$model.'.php';
        return new $model;
    }
}