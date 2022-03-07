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
    <a class="navbar-brand" href="#">Ciné Master</a>
    
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
          
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./login.php">Sign</a>
        </li>
        
        
      </ul>
      
    </div>
  </div>
</nav> -->
<?php require_once './navbar.php'; ?>

   <main>
        <div>
            <div class="titre1">
                <p class="titre2">Ciné Master</p>
                <a class="but-start" href="#about">GET Start</a>
            </div>
            <p class="About" id="about">
                Ici, vous pouvez enregistrer et mettre votre opinion sur les types de films et de séries, et vous pouvez également mettre une photo d'un film et votre opinion sur vous et vous connaîtrez l'opinion des autres dans le film
            </p>
            <img class="img" src="../img/img.2.jpg" alt="">
           
        </div>
        <div class="exampl">
                <div class="exp1">
                    
                    <p>
                    Une histoire de prise d'otages ça peut toujours être bon à voir encore faut-il savoir mettre du suspense et de la nervosité dans la mise en scène. Au-delà de la peur bénéficie d'un casting de qualité et n'est pas à proprement parlé un mauvais film pourtant à aucun instant ça fonctionne.
                    </p>
                    <img class="img3" src="../img/img.3.png" alt="">
                   
                </div>
                    <div class="exp2">
                        <img class="img3" src="../img/img.4.jpg" alt="">
                    <p>
                    l dépeint un futur dystopique dans lequel la réalité perçue par la plupart des humains est une simulation virtuelle en se connectant à la « Matrice », créée par des machines douées d'intelligence, afin d'asservir les êtres humains, à leur insu, et de se servir de la chaleur et de l'activité électrique de leur corps comme source d'énergie. Le programmeur informatique Neo apprend cette vérité et commence une rébellion.
                    </p>
                    
                </div>

        </div>

        <div class="contact" id="contact">
            <h3>Contact</h3>
            <input type="text" placeholder="nom"><br>
            <input type="email" placeholder="email"><br>
            <textarea name="text" cols="30" rows="10" placeholder="Enter your message"></textarea><br>
            <input class="but" type="button" value="Send">
        </div>


        







   </main>
    <footer>
        <hr><br>


    </footer>


    
</body>
</html>