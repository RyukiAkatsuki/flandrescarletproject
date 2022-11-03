<?php
    date_default_timezone_set('Europe/Paris');
    include 'inc/dbh_inc_com.php';
    include 'inc/comment_inc.php';
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
        <!--The gallery-->
        <title>Gallery</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
        <!-- Link between JS -->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/monscript.js"></script>
        <style>
            textarea {
                width: 500px;
                height: 150px;
                background-color:  #2e0014;
                color: orange;
                resize: none;
            }
            button {
                width: 100px;
                height: 30px;
                background-color: #2e0014;
                border: none;
                color: orange;
                font-family: 'Crimson Text', serif;
                font-weight: 400;
                cursor: pointer;
                margin-bottom: 60px;
            }
            .comment-box
            {
                width: 815px;
                padding: 20px;
                margin-bottom: 4px;
                background-color: #2e0014;
                border-radius: 4px;
                color:orange;
                position: relative;
            }
            .comment-box p
            {
                font-family: 'Crimson Text', serif;
                font-size: 14px;
                line-height: 16px;
                font-weight: 100;
            }
            .edit-form{
              position: absolute;
              top: 0px;
              right: 0px;
            }

            .edit-form button{
              width: 50px;
              height: 10px;
              opacity: 0.2;
            }

            .edit-form button:hover{
              opacity: 1;
            }

            .delete-form{
              position: absolute;
              top: 0px;
              right: 60px;
            }

            .delete-form button{
              width: 50px;
              height: 10px;
              opacity: 0.2;
            }

            .delete-form button:hover{
              opacity: 1;
            }

            @media screen and (max-width:640px)
            {
                textarea {
                width: 250px;
                height: 75px;
                background-color:  #2e0014;
                color: orange;
                resize: none;
            }
            }
        </style>
    </head>
    <body>
        <header>
            <?php
                include_once 'inc/changemode.php';
            ?>
            <h2 class="perso">The Gallery</h2>
            <strong><p class="mini">Here you have her gallery</p></strong>
            <?php
                include_once 'inc/menu.php'; 
            ?>
        </header>
<!-- Images used to open the lightbox -->
<div class="row">
  <div class="column">
    <img src="images/gallery/sample_1.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="images/gallery/sample_2.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="images/gallery/sample_3.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="images/gallery/sample_4.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="images/gallery/sample_5.jpg" onclick="openModal();currentSlide(5)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="images/gallery/sample_6.jpg" onclick="openModal();currentSlide(6)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="images/gallery/sample_7.jpg" onclick="openModal();currentSlide(7)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="images/gallery/sample_8.jpg" onclick="openModal();currentSlide(8)" class="hover-shadow">
  </div>
</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 8</div>
      <img src="images/gallery/sample_1.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 8</div>
      <img src="images/gallery/sample_2.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 8</div>
      <img src="images/gallery/sample_3.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 8</div>
      <img src="images/gallery/sample_4.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">5 / 8</div>
      <img src="images/gallery/sample_5.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">6 / 8</div>
      <img src="images/gallery/sample_6.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">7 / 8</div>
      <img src="images/gallery/sample_7.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">8 / 8</div>
      <img src="images/gallery/sample_8.jpg" style="width:100%">
    </div>

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <!-- Thumbnail image controls -->
    <div class="column">
      <img class="demo" src="images/gallery/sample_1.jpg" onclick="currentSlide(1)" alt="First">
    </div>

    <div class="column">
      <img class="demo" src="images/gallery/sample_2.jpg" onclick="currentSlide(2)" alt="Second">
    </div>

    <div class="column">
      <img class="demo" src="images/gallery/sample_3.jpg" onclick="currentSlide(3)" alt="Third">
    </div>

    <div class="column">
      <img class="demo" src="images/gallery/sample_4.jpg" onclick="currentSlide(4)" alt="Fourth">
    </div>

    <div class="column">
      <img class="demo" src="images/gallery/sample_5.jpg" onclick="currentSlide(5)" alt="Fifth">
    </div>

    <div class="column">
      <img class="demo" src="images/gallery/sample_6.jpg" onclick="currentSlide(6)" alt="Sixth">
    </div>

    <div class="column">
      <img class="demo" src="images/gallery/sample_7.jpg" onclick="currentSlide(7)" alt="Seventh">
    </div>

    <div class="column">
      <img class="demo" src="images/gallery/sample_8.jpg" onclick="currentSlide(8)" alt="Eighth">
    </div>
  </div>
</div>
    <?php
        echo "<form method='POST' action='".setComments($conn)."'>
            <input type='hidden' name='uid' value='Anonymous'>
            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
            <textarea name='message'></textarea><br>
            <button type='submit' name='commentSubmit'>Comment</button>
        </form>";

        getComments($conn);
    ?>
    </body>
</html>