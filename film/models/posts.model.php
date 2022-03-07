<?php
    require_once '../database/db_connection.php';
class post{
    static public function addpost($data){
        $db=Database::connect()->prepare("INSERT INTO posts(createur , title , descriptione , photo , categorie)
                                        VALUES(:username,:title , :descriptione , :post_img , :category)");
        $db->bindParam(':username',$data['username']);
        $db->bindParam(':title',$data['title']);
        $db->bindParam(':descriptione',$data['descriptione']);
        $db->bindParam(':post_img',$data['post_img']);
        $db->bindParam(':category',$data['category']);
        $db->execute();
}
    static public function getAllPosts(){
        $db=Database::connect()->prepare("SELECT * FROM posts");
        $db->execute();
        $posts=$db->fetchAll();
        $db=NULL;
        
        // print_r($posts);
        
        return $posts;
    }
    static public function getOnePost($id){
        $db=Database::connect()->prepare("SELECT * FROM posts WHERE id_post = :id_post");
        $db->bindParam(':id_post',$id);
        $db->execute();
        $posts=$db->fetchAll();
        $db=NULL;
        
        // print_r($posts);
        
        return $posts;
    }
    static public function update_post($data_update){
        $db=Database::connect()->prepare("UPDATE posts SET title = :title , descriptione = :descriptione , photo = :post_img , categorie = :category 
                                            WHERE id_post = :id_post");

        $db->bindParam(':id_post',$data_update['id_post']);
        $db->bindParam(':title',$data_update['title']);
        $db->bindParam(':descriptione',$data_update['descriptione']);
        $db->bindParam(':post_img',$data_update['post_img']);
        $db->bindParam(':category',$data_update['category']);

        $db->execute();
    }

    static public function delete_post($data){
        $db=Database::connect()->prepare("DELETE FROM posts WHERE id_post = :id_post ");
        $db->bindParam(':id_post',$data['id_post']);
        $db->execute();
    }
}
// $test = new post();
// $test ->getAllPosts();