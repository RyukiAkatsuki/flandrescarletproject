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
        <title>Login Page</title>
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
            <h2 class="perso">Login</h2>
            <strong><p class="mini">Here is where you login</p></strong>
            <?php
                include_once 'inc/menu.php'; 
            ?>
        </header>
    </body>
</html>

<?php

require_once('inc/fonction.php');	
	
	if( isset($_POST['pseudo']) AND !empty($_POST['pseudo']) AND isset($_POST['mdp']) AND !empty($_POST['mdp'])){
		$pseudo = $_POST['pseudo'];
		$mdp = $_POST['mdp'];
		
		$requete =" SELECT * FROM `loginform` WHERE `User` = '$pseudo' AND `Pass`='$mdp' ";
		$resultat = EffectuerRequete($requete);

		echo("You tried to log in with:<br/>
			  Pseudo: <b>$pseudo</b><br/>
			  password: <b>$mdp</b><br/>
			  request: $requete<br/>");
		if($resultat != false)
		{
			$tab=$resultat->fetch_row();
			echo("Successful");
			if ($tab){

			} else {
				echo"Pseudo or Password are incorrect";
			}
			//TO DO Keep session on
		}
		else echo"request error";
	}
		?>
		<h2>Login Space</h1>
	<h2>Please login:</h2>
	<form method='post'>
		<label for='v1'>Login</label><br/>
		<input type='text' name='pseudo' id='v1' /><br/>
		<label for='v2'>Password</label><br/>
		<input type='password' name='mdp' id='v2' /><br/>
		<input type='submit' value='Login' /><br/>
	</form>
	<h2>Not sign in ? <br/> <a href="inscription.php">Click here</a> </h2>


