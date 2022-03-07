<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../sass_indix/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Ciné Master</a>
    
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../view/index.php">close</a>
        </li>

</ul>      
    </div>
  </div>
</nav> -->
<?php require_once './navbar.php'; ?>
<main>


<?php
require '../controller/Posts.Controller.php';
?>

<input type="hidden" name="Id_post">
<form action="" class="container" method="POST">
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Titre</label>
  <input type="text" name="Titre" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Discription</label>
  <input type="text" name="Discriptione" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">photo</label>
  <input type="file" name="Photo" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Categorie</label>
  <input type="text" name="Categorie" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
</div>
<button type="submit" name="submit" class="btn btn-primary">Cree</button>
</form>










</main>
    
</body>
</html>