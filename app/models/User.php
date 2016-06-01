<?php

class User{
    public $fname;
    public $lname;
    public $user;
    public $pwd;
    public $email;
    public $active;
    public $db;

    public function __construct() {
        $this->db = Connection::getInstance();
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this,$f='__construct'.$i)) {
            call_user_func_array(array($this,$f),$a);
        }
    }

    protected function __construct6($fname, $lname, $uname, $pwd, $email, $active) {
        $this->fname  = $fname;
        $this->lname = $lname;
        $this->user = $uname;
        $this->pwd = $pwd;
        $this->email = $email;
        $this->active = $active;
    }

    public function all() {
        $list = [];
        $req = $this->db->query('SELECT * FROM user_reg');
        // we create a list of Post objects from the database results
        foreach($req->fetchAll() as $post) {
            $list[] = new User($post['fname'], $post['lname'], $post['uname'], $post['pwd'], $post['email'], $post['active']);
        }
        return $list;
    }

    public  function find($id){
        // we make sure $id is an integer
        $id = intval($id);
        $req = $this->db->prepare('SELECT * FROM user_reg WHERE id = :id');
        // the query was prepared, now we replace :id with our actual $id value
        $req->execute(array('id' => $id));
        $post = $req->fetch();
        return new User($post['fname'], $post['lname'], $post['uname'], $post['pwd'], $post['email'], $post['active']);
    }

    public function remove($id) {
        // we make sure $id is an integer
        $id = intval($id);
        $req = $this->db->prepare('DELETE FROM user_reg WHERE id = :id');
        // the query was prepared, now we replace :id with our actual $id value
        $a = $req->execute(array('id' => $id));
        return $a;
    }

    public function activeAccount($mail,$hash){
        $stmt = $this->db->prepare('UPDATE user_reg SET active=:active WHERE email=:email AND hash_val=:hash');
        $stmt->execute(array('active'=>1,'email'=>$mail,'hash'=>$hash));
        $affected_rows = $stmt->rowCount();
        return $affected_rows;
    }

    public function insert($a,$b,$c,$d,$e){
        $hash = md5( rand(0,1000) );
        $stmt = $this->db->prepare('INSERT INTO user_reg (fname,lname,uname,pwd,hash_val,email,active) VALUES(:fname,:lname,:uname,:pwd,:hash_val,:email,:active)');
        $stmt->execute(array('fname'=>$a,'lname'=>$b,'uname'=>$c,'pwd'=>md5($d),'hash_val'=>$hash,'email'=>$e,'active'=>0));
        return $stmt;

    }

    public function login($un,$up){
        $stmt = $this->db->prepare('SELECT * FROM user_reg WHERE uname=:uname AND pwd=:pass');
        $stmt->execute(array(':uname'=>$un, ':pass'=>$up));
        $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
        if($stmt->rowCount()==1){
            if($userRow['active'] == '1'){
                $_SESSION['userSession']=$userRow['id'];
                return 'true';
            }else{
                return 'inactive';
            }
        }else{
            return 'false';
        }
    }

    public function lastId(){
        $stmt = $this->db->lastInsertId();
        return $stmt;
    }

    public function idLoggedIn(){

        if(isset($_SESSION['userSession'])){
            return true;
        }else{
            return false;
        }
    }

    public function logout(){
        session_destroy();
        $_SESSION['userSession'] = false;
    }

    function send_mail($email,$message,$subject)
    {
        require_once('../app/libs/phpmailer/class.phpmailer.php');
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug  = 0;
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = "ssl";
        $mail->Host       = "smtp.gmail.com";
        $mail->Port       = 465;
        $mail->AddAddress($email);
        $mail->Username="email@gmail.com";
        $mail->Password="emailpassword";
        $mail->SetFrom('email@gmail.com','Coding Cage');
        $mail->AddReplyTo("email@gmail.com","Coding Cage");
        $mail->Subject    = $subject;
        $mail->MsgHTML($message);
        //$mail->Send();

        if($mail->Send())
        {
            return true;
        }
        else
        {
           return false;
        }
    }
}