<?php 
    include 'inc/dbh_inc_blog.php'
?>

<!DOCTYPE html>
<!--
     o   -   o   -   o   -   o   -   o   -   o  -   o   -  o
    /|\     /|\     /|\     /|\     /|\     /|\    /|\    /|\
    \|/     \|/     \|/     \|/     \|/     \|/    \|/    \|/
     o   -   o   -   o   -   o   -   o   -   o  -   o   -  o
    /|\     /|\     /|\     /|\     /|\     /|\    /|\    /|\
    \|/     \|/     \|/     \|/     \|/     \|/    \|/    \|/
    Representation of Flandre Scarlet Wings
-->
<html lang="FR">
    <head>
        <!--The blog-->
        <title>Blog</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
        <!-- Link between JS -->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/monscript.js"></script>
        <style>
            .btn{
                color: orange;
                text-decoration: none;
            }
            .btn:hover{
                background-color: purple;
            }
        </style>
    </head>
    <body>
        <header>
            <?php
                include_once 'inc/changemode.php';
            ?>
            <h2 class="perso">Blog</h2>
            <strong><p class="mini">Blog of a vampire</p></strong>
            <?php
                include_once 'inc/menu.php'; 
            ?>
        </header>
        <div class="container mt-5">

        <!-- Display any info -->
        <?php if(isset($_REQUEST['info'])){ ?>
            <?php if($_REQUEST['info'] == "added"){?>
                <div class="alert alert-success" role="alert">
                    Post has been added successfully
                </div>
            <?php }?>
        <?php } ?>

        <!-- Create a new Post button -->
        <div class="text-center">
            <a href="create.php" class="btn">+ Create a new post</a>
        </div>

        <!-- Display posts from database -->
        <div class="row">
            <?php foreach($query as $q){ ?>
                <div class="">
                    <div class="" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $q['title'];?></h5>
                            <p class="card-text"><?php echo substr($q['content'], 0, 50);?>...</p>
                            <a href="view.php?id=<?php echo $q['id']?>" class="">Read More <span class="text-danger">&rarr;</span></a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>

        </div>
    </body>
</html>