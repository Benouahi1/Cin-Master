<?php

require_once '../controller/posts.controller.php';
require_once '../controller/comment.controller.php';
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION["username"])) {
    header('location: login.php');
}

$data = new ADD_Post();
$new_posts = $data->getposts();


if (isset($_POST['add_post'])) {
    $post = new ADD_post();
    $post->add_post();

    $data = new ADD_Post();
    $new_posts = $data->getposts();
}
if (isset($_POST['delete'])) {
    $delete = new ADD_Post();
    $delete->delete_post();
}
if (isset($_POST['update_post'])) {
    $update = new ADD_Post();
    $update->update_post();
}
if (isset($_POST['commentair'])) {
    $comment = new commentair_cnt();
    $comment->Add_comment();
}
$cmnt = new commentair_cnt();

?>


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
          <a class="nav-link" href="../view/index.php">close</a>
        </li>

</ul>      
    </div>
  </div>
</nav> -->
<?php require_once './navbar.php'; ?>
<main>
<div class="titre1">
<a class="but-start" href="./CreePste.php">Add poste</a>
</div>

<?php
    $comt = 0;
    foreach ($new_posts as $new_post) : ?>

        <div class="container col-lg-6 col-sm-12 this_post">
            <div class="col-lg-12 col-sm-12">
                <div class="pic_user">
                    <div class="pic_user_in">
                        <div class="pic"><img src="../img/téléchargement.png" alt=""></div>
                        <div class="user"> <label> <?php echo $new_post["createur"] ?></label></div>
                    </div>
                    <?php if ($new_post["createur"] == $_SESSION['username']) : ?>
                        <div class="crud">
                            <button>
                                <div class="dropdown">
                                    <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="../images/menu.png" alt="">
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">



                                        <!-- form delete  -->
                                        <form method="POST" onsubmit="return confirm('Are you sure ? You will not be able to go back !');">
                                            <?php $id = $new_post['id_post'] ?>
                                            <li><input class="updelet" type="button" class="<?php echo 'editmodal' . $comt ?>" data-bs-toggle="modal" data-bs-target="<?php echo '#staticBackdrops_update' . $comt ?>" value="Update"></li>
                                            <li> <input type="hidden" name="id_post" value="<?php echo $new_post['id_post'] ?>"> </li>
                                            <li><input class="updelet" type="submit" class="dropdown-item" name="delete" value="Delete"> </li>
                                        </form>

                                    </ul>
                                </div>
                            </button>

                        </div>
                    <?php endif; ?>

                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $(<?php echo '.editmodal' . $comt ?>).on('click', function() {
                        $(<?php echo '#staticBackdrops_update' . $comt ?>).modal('show');
                    })
                })
            </script>

            <form method="POST">
                <div class="modal fade" id="<?php echo 'staticBackdrops_update' . $comt ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Update </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body inputss">
                                <div class="">
                                    <input type="text" name="title" placeholder="Title" value="<?php echo $new_post['title'] ?>" required>
                                </div>
                            </div>

                            <div class="modal-body" inputss>
                                <div>
                                    <input type="text" name="description" placeholder="Description" value="<?php echo $new_post['description'] ?>" required>
                                </div>
                            </div>
                            <div class="modal-body" inputss>
                                <label> update category</label>
                                <select name="category" id="">
                                    <option value="fantasy">Fantasy</option>
                                    <option value="Action">Action</option>
                                    <option value="horror">horror</option>
                                    <option value="Drama">Drama</option>
                                    <option value="Romance">Romance</option>
                                </select>
                            </div>
                            <div class="modal-body" inputss>
                                <div>
                                    <input type="file" name="post_img" value="<?php echo '../images/' . $new_post['photo'] ?>" accept="image/png, image/jpeg">
                                </div>
                            </div>

                            <li> <input type="text" name="id_post" value="<?php echo 'ADA' ?>"> </li>
                            <li> <input type="text" name="id_post" value="<?php echo $new_post['id_post'] ?>"> </li>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="submit" name="update_post">Enregistre</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="title">
                <label> <?php echo $new_post['title'] ?> </label>
            </div>
            <div class="description"> <?php echo $new_post['descriptione'] ?></div>
            <div class="post_pic">
                <img src=" <?php echo '../images/' . $new_post['photo'] ?>" alt="">
            </div>


            <!-- comment -->
            <form method="POST">
                <div class="post_comnt">
                    <input type="text" name="comment" placeholder="Comment">
                    <li> <input type="hidden" name="id_post" value="<?php echo $new_post['id_post'] ?>"> </li>
                    <button class="cmnt_btn" type="submit" name="commenter"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-send btn_send" viewBox="0 0 16 16">
                            <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z" />
                        </svg></button>
                </div>
            </form>







            <!-- form update post  -->
            <?php $commentairs = $cmnt->getCmnt($new_post['id_post']); ?>

            <?php foreach ($commentairs as $commentair) : ?>
                <hr>
                <div class="users_cmnt">
                    <div class="pic_user_cmnt">

                        <div class="pic_user_cmnt"><img src="../images/téléchargement.png" alt=""></div>
                        <div class="user_cmnt"> <label> <?php echo $commentair['comment_createur'] ?> </label></div>
                    </div>
                    <label class="cmnt"> <?php echo $commentair['corp'] ?>
                        <hr>
                    </label>
                </div>

            <?php endforeach; ?>



        </div>

    <?php $comt++;
endforeach; ?>








</main>
    
</body>
</html>