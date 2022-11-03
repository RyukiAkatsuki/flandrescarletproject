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
        <!--Le contact-->
        <title>Contact</title>
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
            <h2 class="cont">Contact</h2>
            <strong><p class="ph">To contact if you need Flandre</p></strong>
            <?php
                include_once 'inc/menu.php'; 
            ?>
        </header>
        <section class="premier">
            <!--Si nous ne sommes pas résidents de ce monde-->
            <article class="portail">
                <p>If you are not at Gensokyo, you need to see Yukari Yakumo
                    She manage Gensokyo Borders. </br>You need to call her out very loud  
                    , on a place very calm.
                    if she doesn't come, contact her with email:
                    yukariyakumo@contact.fr </br>
                    If she asks you what you want, precise that you are here to
                    meet Flandre </br>To contact her because you are not from Gensokyo.
                    We fill the forms here.
                </p>
                <?php
                    include 'inc/formulaire.php';
                ?>

            </article>
            <article class="yu"></article>
        </section>
        <section class="seconde">
            <!--Quand on l'est ou bien qu'on vient tout juste d'arriver-->
            <article class="flandre">
            </article>
            <article class="dro2">
                <p>If you are resident or new at Gensokyo, go to the Scarlet Devil
                    Mansion, and ask to the Gate Guardian to open the door, ask now to the
                    maid where is Flandre Scarlet. </br>Be careful, Flandre doesn't frequent a lot
                    of humans, she can kill you. She has a instable
                    behaviour. At your peril, at least defend yourself
                    with magic.
                </p>
            </article>
        </section>
        <!-- Link between JS -->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/monscript.js"></script>
    </body>
</html>