<?php
class Post{

    public $post_id;
    public $post_title;
    public $post_content;
    public $post_author;
    public $post_date;
    public $post_published;
    public $db;

    public function __construct()
    {
        $this->db = Connection::getInstance();
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this,$f='__construct'.$i)) {
            call_user_func_array(array($this,$f),$a);
        }
    }

    public function __construct6($id,$title,$content,$author,$date,$published)
    {
        $this->post_id = $id;
        $this->post_title = $title;
        $this->post_content = $content;
        $this->post_author = $author;
        $this->post_date = $date;
        $this->post_published = $published;
    }

    public function _find($id)
    {

    }

    public function _findAll()
    {
        $list = [];
        $req = $this->db->query('SELECT * FROM post_reg');
        foreach ($req->fetchAll() as $post) {
            $list[] = new Post($post['pid'],$post['ptitle'],$post['pcontent'],$post['pauthor'],$post['pdate'],$post['ppublished']);
        }
        return $list;
    }

    public function _delete($id)
    {
        $stmt = $this->db->prepare('DELETE FROM post_reg WHERE pid=:p_id');
        $stmt->execute(array('p_id'=>$id));
         $affected_rows = $stmt->rowCount();
        return $affected_rows;
    }

    public function _search($id)
    {

    }
    public function _insert($a,$b,$c,$d)
    {
        $stmt = $this->db->prepare('INSERT INTO post_reg(ptitle,pdate,pauthor,pcontent,ppublished) VALUES (:p_title,:p_date,:p_author,:p_content,:p_published)');
        $stmt->execute(array('p_title'=>$a,'p_date'=>$b,'p_author'=>$c,'p_content'=>$d,'p_published'=>'2'));
        $affected_rows = $stmt->rowCount();
        return $affected_rows;
    }
}