<?php 
    include "inc/dbh_inc_blog.php";
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
        <title>Add Post</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
        <!-- Link between JS -->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/monscript.js"></script>
    </head>
    <body>
        <header>
            <?php
                include_once 'inc/changemode.php';
            ?>
            <h2 class="perso">Create a Blog Post</h2>
            <strong><p class="mini">Here you create your blog post</p></strong>
            <?php
                include_once 'inc/menu.php'; 
            ?>
        </header>
        <div class="container mt-5">
            <form method="GET">
                <input type="text" placeholder="Blog Title" class="" name="title">
                <textarea name="content" class="" cols="30" rows="10"></textarea>
                <button class="btn btn-dark" name="new_post">Add Post</button>
            </form>
        </div>

    </body>
</html>