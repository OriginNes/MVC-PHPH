<?php
namespace App\Controllers;

class MainController extends Controller{
    public function index(){
        $this->render('main/index', []);
    }
    public function error404(){
        $this->render('main/error404', []);
    }
}