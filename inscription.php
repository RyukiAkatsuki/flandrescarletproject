<?php 
	include 'inc/fonction.php'
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
        <title>Sign Up Page</title>
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
            <h2 class="perso">Sign Up</h2>
            <strong><p class="mini">Here is where you Sign up</p></strong>
            <?php
                include_once 'inc/menu.php'; 
            ?>
        </header>
    </body>
</html>

<?php

	//print_r($_GET);
	if( isset($_GET['pseudo']) AND !empty($_GET['pseudo'])
		AND isset($_GET['mdp']) AND !empty($_GET['mdp'])
		AND isset($_GET['mdp_verif']) AND !empty($_GET['mdp_verif'])
		AND $_GET['mdp'] == $_GET['mdp_verif'])
	{
		$pseudo = $_GET['pseudo'];
		$mdp = $_GET['mdp'];
		$mdp_verif = $_GET['mdp_verif'];
		echo("You have created an account with:<br/>
			  Pseudo: <b>$pseudo</b><br/>
			  password: <b>$mdp</b><br/>
			  confirm password: <b>$mdp_verif</b><br/>");
	}
	else{
		?>
		<h1>Sign up</h1>
	<h2>You are about to create an account.</h2>
	<form>
		<label for='v1'>Choose a login:</label><br/>
		<input type='text' name='pseudo' id='v1' />
		<input type='button' value='Test'/><br/>
		<label for='v2'>Choose a password:</label><br/>
		<input type='password' name='mdp' id='v2' /><br/>
		<label for='v3'>Confirm the password:</label><br/>
		<input type='password' name='mdp_verif' id='v3' /><br/>
		<input type='submit' value="Sign Up" /><br/>
	</form>
		<?php
	}
?>


