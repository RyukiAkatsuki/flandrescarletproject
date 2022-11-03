<?php
    date_default_timezone_set('Europe/Paris');
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
        <!--The main page-->
        <title>Main Page</title>
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
            <!--Character Name-->
            <h2 class="perso">Flandre Scarlet</h2>
            <strong><p class="mini">A vampire not like the others</p></strong>
            <?php
                include_once 'inc/menu.php'; 
            ?>
        </header>   
        <h2>Prentation</h2>
        <!--We seperated the first section-->
        <section class="premier">
            <!--Short Presentation of the character - Where is she from-->
            <article class="gau">
                <p>Flandre Scarlet comes from the game Touhou Project
                    created by ZUN from Team Shanghai Alice, <br>The 
                    unique person of the Team. <br>
                    She comes from the game Touhou 6 - Embodiment of Scarlet Devil,
                    the extra boss of the game. <br>Her age: Approx 495 years old.
                    She is the little sister of Remilia Scarlet
                </p>
            </article>
            <article class="dro">
            </article>
        </section>
        <!--The second to showcase elsewise-->
        <section class="seconde">
            <article class="gau2">
            </article>
            <article class="dro2">
                <p>ZUN, (His real name: Jun'ya Ōta) is the only creator of Team Shanghai Alice,
                    he is programmer, compositor, game director, game producer
                    Game Designer, etc. He did everything
                    from scratch Touhou Project games.
                </p>
            </article>
        </section>
    </body>
</html>