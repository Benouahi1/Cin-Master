<?php
if(!isset($_SESSION)){
    session_start();
}
 ?>
 <!DOCTYPE html>
<html lang="en">
 <head>
 <link rel="stylesheet" href="../sass_indix/navbar/nav.css">
 </head>

<body>
    <nav id="navbar">
        
        <div class="nav_container"> 
            
            <a href="">CINE MASTER</a>
        </div>
        <ul class="nav_links">
                <li class="iteam"><a href="./index.php">Home</a> </li>
                <li class="iteam"><a href="./poste.php">Posts</a> </li>
              
              
                <?php
                if(isset($_SESSION['username'])) :?>
                    <li class="iteam"><a href="../controller/lougout.php">Logout</a></li>
                    <?php   else :?>
                        
                        <li class="iteam"><a href="./login.php">Login</a></li>
                <?php endif ?>
               
        </ul>
       
    
    </nav>
    <script src="../sass_indix/nav.js"></script>
</body>
</html>