

<?php

// Connexion à la base de données
include'modele/connexion_bdd.php';

if (empty($_POST['event']) || empty($_POST['description']))
{
	echo "remplir les champs"; ?>
	<center>
 			<input type="submit" name="Submit" action="form.php" value="Envoyer">
 	</center>

	<?php
}
else
{
	$event = htmlspecialchars($_POST['event']);
	$description = htmlspecialchars($_POST['description']);
	

// Insertion du message à l'aide d'une requête préparée

$req = $bdd->prepare('INSERT INTO evenement (event, description, date) VALUES(?, ?, NOW())');

$req->execute(array($event, $description));

$req->closeCursor();

}

header('location: P1.php');


