<?php
    require_once '../database/db_connection.php';
    class user{
        static public function add_user($data){
            $db=Database::connect()->prepare('INSERT INTO users(username , email , passworde)
                                            VALUES(:username , :email, :passworde)');
                $db->bindParam( ':username',$data['username']);
                $db->bindParam( ':email',$data['email']);
                $db->bindParam( ':passworde',$data['passworde']);

                try{
                    $db->execute();
                    header('location:login.php');
                }catch(PDOException $e){
                    if(str_contains($e->getMessage(),"Duplicate")){
                        echo "an account with this info already exists";
                    }else{
                        die($e->getMessage());
                    }
                }
        }
        static public function get_user($data){
            $username=$data['username'];
            try{
                $db=Database::connect()->prepare('SELECT * FROM users WHERE username = :username');
                $db->execute(array(':username'=>$username));
                return $db->fetch(PDO::FETCH_OBJ);

            }catch(PDOException $e){
                return 'error ' . $e->getMessage();
            };

        }
    }


    