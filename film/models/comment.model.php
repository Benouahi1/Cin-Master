<?php
    require_once '../database/db_connection.php';
    class commentair{
        static public function add_cmnt($data){
            $db=Database::connect()->prepare("INSERT INTO commentaire (comment_createur , post_id , corp)
            VALUES (:comment_createur ,:id_post , :comment)");
             $db->bindParam(':comment_createur',$data['comment_createur']);
             $db->bindParam(':id_post',$data['id_post']);
             $db->bindParam(':comment',$data['comment']);

             $db->execute();
        }

        static public function getAllcmnts($data){
            $db=Database::connect()->prepare("SELECT * FROM commentaire WHERE post_id = :id_post");
            // WHERE id_post = :id_post
            $db->bindParam(':id_post',$data);

            $db->execute();
            $commentss=$db->fetchAll();
            $db=NULL;
            // print_r($commentss);
            // print_r($commentss);
            
            return $commentss;
           
        }
    }