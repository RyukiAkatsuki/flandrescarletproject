<?php
function EffectuerRequete($requete)
{
	//CONNECTION AU SERVEUR MYSQL
	$host="127.0.0.1";
	$user="root";
	$pass="";
	$db="account";
	$ressource=false;
	$Connexion = new mysqli($host, $user, $pass, $db);
	$res =$Connexion->query($requete);
	return $res;
}


?>