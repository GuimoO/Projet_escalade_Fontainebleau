<?php
//connexion a la bdd a l'aide du nom de la bdd ainsi que le l'id et le mdp
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=projet_escalade;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>