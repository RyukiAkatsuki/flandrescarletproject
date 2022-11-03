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
        <!--Her history-->
        <title>Story of Flandre Scarlet</title>
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
            <h2 class="hist">Her story</h2>
            <strong><p class="enf">A difficult childhood and life</p></strong>
            <?php
                include_once 'inc/menu.php'; 
            ?>
        </header>
        <section class="premier">
            <!--Her birth and others-->
            <article class="gau">
                <p>Flandre Scarlet was born in 1508 at old time
                    , we don't know precise the month neither 
                    the day, let's say she was born in August 11, 1508.
                    She comes from the world Gensokyo (Land of Illusion)
                    but she is from the Outside World originally.
                    When she was born, she was been sealed during 495 years
                    by her sister who judging her powers too much dangerous for everyone. 
                    Human and Youkai (from Japanese Forklore). 
                    By judging her powers, we can see that can she destroy
                    every physics element by aiming with the "eye" and by
                    gripping her right fist. An example at right: A metorite
                </p>
            </article>
            <!--Une image de météorite détruite-->
            <article class="met">
            </article>
        </section>
        <section class="seconde">
            <!--Une image d'elle avec les ailes-->
            <article class="wings">
            </article>
            <!--Ses ailes sont très différentes-->
            <article class="dro2">
                <p>As we can see, Flandre doesn't have the same wings as a vampire,
                    indeed because her wings are crystals, near to rainbow, her old wings
                    were been snatched by her own strenght because she has no control of her power 
                    and she stayed at the mansion during 495 years.
                </p>
                <!--Rappel: Ce n'est pas de l'arc-en-ciel !-->
                <p>Her Crystals Color </p>
                <?php
                    include 'inc/crystal.php';
                ?>
                <!--On n'oublie pas les musiques !-->
                <h2>Her Stage Theme and Boss Theme</h2>
                <?php 
                    include 'inc/audio.php';
                ?>
            </article>
        </section>
    </body>
</html>