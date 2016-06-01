<?php
class Products extends Controller{
    public $userModel;

    public function __construct()
    {
        //$this->userModel = $this->model('User');
    }

    public function index(){
        //$this->view('users/login');
    }

    public function payment(){
        $this->view('products/payment');
    }

}