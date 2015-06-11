<?php

// Créer un formulaire avec les champs suivants
// Titre (input de type texte), description (textarea), date de réalisation (3 choix select) et priorité (select : faible, moyen, urgent)
// var_dump() des informations tapées dans le formulaire
// Créer un tableau permettant de stocker les données du formulaire

$taches=[];

if(array_key_exists("title", $_POST) && (empty($_POST["title"]) == false) 
	&& array_key_exists("description", $_POST) && (empty($_POST["description"]) == false) 
	&& array_key_exists("day", $_POST) 
	&& array_key_exists("month", $_POST) 
	&& array_key_exists("year", $_POST) 
	&& array_key_exists("priority", $_POST)) 

{
	if (title)
	{
		//var_dump($_POST);
		array_push($taches, $_POST["title"], $_POST["description"], $_POST["day"].'-'.$_POST["month"].'-'.$_POST["year"], $_POST["priority"]);
		//var_dump($taches);
		
		// Nous allons écrire dans un fichier. Pour cela, il faut utiliser la fonction fopen permettant d'ouvrir un fichier. Nommé le fichier "data.csv". Je souhaite ouvrir le fichier en mode écriture seul.
		// Utiliser la fonction fputcsv pour enregistrer mon tableau dans le fichier
		// Utiliser la fonction fclose afin de fermer le fichier
		// Lorsque l'on arrive la première fois sur "le site", il faut afficher toutes les tâches. Utiliser la fonction fgetcsv ainsi que feof
		// Donner la possibilité de supprimer une tâche ou plusieurs en même temps (checkbox)

		$file = fopen("data.csv", "a" );
		fputcsv($file, $taches);
		fclose($file);
		
		header("Location:index.php?success=ok");
		die();
		
	}

	header("Location:index.php?errortitle=ok");
	die();
}


header("Location:index.php?error=ok");
die();


?>