<?php
require_once '../models/comment.model.php';
class commentair_cnt{
    public function Add_comment(){
        $data = array(
            'comment_createur' => $_SESSION['username'],
            'comment'=>$_POST['comment'],
            'id_post'=>$_POST['id_post']
        );
        $result=commentair::add_cmnt($data);
    }

    public function getCmnt($data){
      
        // $result = commentair::getAllcmnts($data);
        return commentair::getAllcmnts($data);

        header('location:posts.php');
    }
}