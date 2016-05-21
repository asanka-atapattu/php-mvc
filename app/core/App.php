<?php

class App
{
    protected $controller = 'home';

    protected $method = 'index';

    protected $params = [];

    protected $flag =  false;

    public function __construct()
    {
        /*call for url*/
        $url = $this->parseurl();

        /*assign controller*/
        if(file_exists('../app/controllers/'.$url[0].'.php')){
            $this->controller = $url[0];
            $this->flag = true;
            unset($url[0]);
        }

        /*include controller*/
        require_once ('../app/controllers/'. $this->controller .'.php');

        /*create controller object*/
        $this->controller = new $this->controller;

        /*check mathod exist*/
        if(isset($url[1])){
            if($this->flag){
                if(method_exists($this->controller, $url[1])){
                    $this->method = $url[1];
                    unset($url[1]);
                }
            }else{
                $this->method = 'error';
            }

        }

        /*check parameters*/
        $this->params = $url ? array_values($url) : [];

        /*call member function of specific controller*/
        call_user_func_array([$this->controller, $this->method],$this->params);
    }

    public function parseurl(){
        if(isset($_GET['url'])){
            $url = explode('/' , filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));
            return $url;
        }
    }
    
}