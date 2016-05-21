<?php
class Users extends Controller{
    public $userModel;

    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function login(){
        $this->view('users/login');
    }

    public function register(){
        $this->view('users/register');
    }

    public function adduser(){
        $validation_result = Validator::validate([
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required',
            'username'=>'required',
            'password'=>'required',
        ]);

        if(Validator::findKey($validation_result,'error')){
            $this->view('users/register',$validation_result);
        }else{
            $respond = $this->userModel->insert($_POST['fname'],$_POST['lname'],$_POST['username'],$_POST['password'],$_POST['email']);
            if($respond){
                echo "pass";
                $respond_mail = $this->userModel->send_mail($_POST['email'],'test head','test body');
                if($respond_mail){
                    $this->view('users/verify');
                }else{
                    $this->view('home/error');
                }

//                $to = $_POST['email'];
//                $subject = "Verify email";
//                $message = '
//                    Thanks for signing up!<br>
//                    Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.<br><br>
//
//                    ------------------------
//                    Username: '.$_POST['username'].'
//                    Password:  Password
//                    ------------------------
//
//                    Please click this link to activate your account:
//                    http://php-mvc.dev/public/users/verify?email='.$_POST['email'].'&hash='.$hash.'
//                    ';
//
//                    $headers = 'From:noreply@http://php-mvc.dev' .'\r\n'; // Set from headers
//                    mail($to, $subject, $message, $headers); // Send our email
            }else{
                echo"fail";
            }
        }
    }

    public function loguser(){
        $secure_password = md5(trim($_POST['pass']));
        $uname = trim($_POST['user']);
        $respond = $this->userModel->login($uname,$secure_password);
        if($respond == 'inactive'){
            $this->view('home/message',['type'=>'error-page','msg'=>'Sorry..! Your account is not activated.']);
        }else if($respond == true){
            $this->view('home/message',['type'=>'','msg'=>$_SESSION['userSession']]);
        }else{
            $this->view('home/error');
        }

    }

    





}