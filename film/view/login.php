<?php 
require_once '../controller/authentification.controller.php';


if(!isset($_SESSION)){
	session_start();
}
if($_SESSION["username"] ?? false){
	header('location:poste.php');
}
if(isset($_POST['login'])){
	$user= new login();
	$user->login();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../sass_indix/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ciné Master</title>
</head>
<body>

<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php">Ciné Master</a>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav> -->
<?php require_once './navbar.php'; ?>
<?php

?>

   <div class="container a">
    <form method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="passworde" class="form-control" id="exampleInputPassword1">
    </div>
    
    <button type="submit" name="submit" class="btn btn-primary">Login</button>
    </form>
    <a href="./sign.php" class="txt3">
								Don't have account ?
							</a>
</div>


    
</body>
</html>