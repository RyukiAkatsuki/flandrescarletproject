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

    <title>Edit Blog Post</title>
</head>
<body>
    <header>
            <?php
                include_once 'inc/changemode.php';
            ?>
            <h2 class="perso">Edit Post</h2>
            <strong><p class="mini">Here you edit post</p></strong>
            <?php
                include_once 'inc/menu.php'; 
            ?>
        </header>

   <div class="container mt-5">
        <?php foreach($query as $q){ ?>
            <form method="POST">
                <input type="text" hidden value='<?php echo $q['id']?>' name="id">
                <input type="text" placeholder="Blog Title" class="" name="title" value="<?php echo $q['title']?>">
                <textarea name="content" class="" cols="30" rows="10"><?php echo $q['content']?></textarea>
                <button class="" name="update">Update</button>
            </form>
        <?php } ?>    
   </div>


</body>
</html>