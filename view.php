<?php

    include "inc/dbh_inc_blog.php";

?>

<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>View Post</title>
</head>
<body>
    <header>
            <?php
                include_once 'inc/changemode.php';
            ?>
            <h2 class="perso">View Post</h2>
            <strong><p class="mini">Here is where you view your post, <br>you can also edit it</p></strong>
            <?php
                include_once 'inc/menu.php'; 
            ?>
        </header>

   <div class="container mt-5">

        <?php foreach($query as $q){?>
            <div class="">
                <h1><?php echo $q['title'];?></h1>

                <div class="">
                    <a href="edit.php?id=<?php echo $q['id']?>" class="btn" name="edit">Edit</a>
                    <form method="POST">
                        <input type="text" hidden value='<?php echo $q['id']?>' name="id">
                        <button class="btn" name="delete">Delete</button>
                    </form>
                </div>

            </div>
            <p class=""><?php echo $q['content'];?></p>
        <?php } ?>    

        <a href="blog.php" class="btn">Go Home</a>
   </div>

</body>
</html>