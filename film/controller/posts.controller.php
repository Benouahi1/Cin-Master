<?php

// use post as GlobalPost;

require_once '../models/posts.model.php';
    class ADD_Post{
        
        public function add_post(){
             $data = array(
                'username' => $_SESSION['username'],
                'title'=>$_POST['title'],
                'descriptione'=>$_POST['descriptione'],
                'category'=>$_POST['category'],
                'post_img'=>$_POST['post_img'],
            );
            $result=Post::addpost($data);
        }
        public function getposts(){
            return post::getAllPosts();
            header('location:poste.php');
        }
        public function getpost(){
            $id =array('id_post'=> $_POST['id_post']);
            return post::getOnePost($id);
            header('location:poste.php');
        }
        
        public function delete_post(){
            $data = array(
                'id_post' => $_POST['id_post']
            );
            post::delete_post($data);
            header('location:poste.php');
        }
        public function update_post(){
            $data_update = array(
                'id_post'=>$_POST['id_post'],
                'title'  =>$_POST['title'],
                'descriptione'=>$_POST['descriptione'],
                'category'=>$_POST['category'],
                'post_img'=>$_POST['post_img'],
            );
            $result=post::update_post($data_update);
            // print_r();
            header('location:poste.php');
        }
    }
