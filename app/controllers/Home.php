<?php
class Home extends Controller{

    public function index($name = ''){
        $user = $this->model('User');
        $user->name = $name;
        $this->view('home/index',['name'=>$user->name]);
    }

    public function error(){
        $this->view('home/error');
    }

    public function search($name = '')
    {
        $respond_object = $this->model('User');
        $respond_mail = $respond_object->send_mail('asanka@makeusawebsite.lk','test head','test body');
        if($respond_mail){
            $this->view('users/verify');
        }else{
            $this->view('home/error');
        }
    }
}