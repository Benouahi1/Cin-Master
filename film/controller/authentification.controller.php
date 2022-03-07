<?php

require_once '../models/authentification.model.php';
    class login{
        public function sign_up() {
        if(isset($_POST['submit'])){
                $data=array(
                    'username' => $_POST['username'],
                    'email'    => $_POST['email'],
                    'passworde' => password_hash($_POST['passworde'], PASSWORD_BCRYPT)
                );
            }
            $result=user::add_user($data);
        }

        public function login(){
            
            if(isset($_POST['login'])){
                $data['username'] = $_POST['username'];
        
            $result=user::get_user($data);
            if($result->username===$_POST['username'] && password_verify($_POST['passworde'] ,$result->passworde)){
                if(!isset($_SESSION)) session_start();
                $_SESSION['username']=$result->username; 
                    header('location:poste.php');
            }
        }
    }}