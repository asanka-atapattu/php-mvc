<?php

class Posts extends Controller{

    public $postModel;

    public function __construct()
    {
        $this->postModel = $this->model('Post');
    }

    public function index(){
        $post_list = $this->postModel->_findAll();
        $this->view('posts/index',$post_list);
    }

    public function add(){
        $this->view('posts/add');
    }

    public function addnewpost(){
        $validate_post = Validator::validate([
            'post_title'=>'required',
            'post_content'=>'required',
            'post_author'=>'required',
            'post_date'=>'required',
        ]);

        if(Validator::findKey($validate_post,'error')){
            $this->view('posts/add',$validate_post);
        }else{
            $post_respond = $this->postModel->_insert($_POST['post_title'],$_POST['post_date'],$_POST['post_author'],$_POST['post_content']);
            if($post_respond>0){
                $post_list = $this->postModel->_findAll();
                $this->view('posts/index',$post_list);
            }
        }
    }

    public function edit(){
        $post_list = $this->postModel->_findAll();
        $this->view('posts/edit',$post_list);
    }
    
    public function remove($id){
        $post_respond = $this->postModel->_delete($id);
        if($post_respond>0){
            $post_list = $this->postModel->_findAll();
            $this->view('posts/edit',$post_list);
        }

    }
}
