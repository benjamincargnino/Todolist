<?php

// Aide pour la suppression :
// Récupérer dans un tableau $toutesLesTaches toutes mes tâches
// fopen
// feof
// fgetcsv
// enregitrer la tâche dans le tableau $toutesLesTaches
// var_dump de $toutesLesTaches
// Créer un tableau $tacheQueJeGarde vide
// parcourir avec la boucle foreach ou for le tableau $toutesLesTaches
// si l'id la tâche que je suis en train de parcourir est dans le tableau $_POST['id'] alors je prend pas: je fais rien
// Sinon je sauvegarde la tâche en cours dans le tableau $tacheQueJeGarde
// Utiliser in_array
//  var_dump de $tacheQueJeGarde
// enregistrer le tableau $tacheQueJeGarde dans le fichier data.csv
// fopen avec un mode ouverture ET sûppression total du contenu
// parcourir le tableau $tacheQueJeGarde
// utiliser fputcsv
// fclose

// Bonus :
// Afficher un code couleur pour les priorités
// Afficher uniquement le titre des tâches. Lorsqu'on clique dessus, faire apparaître toutes les informations.
// Supprimer toutes les tâches
// Afficher le nombre de tâches
// Supprimer toutes les tâches
// Afficher "en retard" si la date de réalisation est inférieur à la date du jour
// Vérifier que tous les choix soient remplis. Afficher un message associé en fonction. Exemple: Veuillez rentrer un titre
// Vérifier que le titre soit inférieur à 250 caractères
// Vérifier qu'une tâche avec le même titre n'existe pas
// Possibilité de dire qu'une tâche est terminé. Attention, supprimer une tâche et terminer une tâche sont deux choses différentes.
// Vérifier que la date de fin n'est pas inférieur à la date d'aujourd'hui
// Ajouter des messages d'erreurs à côté des input et select en javascript lorsqu'il y a une erreur (champ vide par exemple). Ne soumettre le formulaire que si le formulaire est valide
// Ajouter un message d'alerte lorsqu'on supprime une ou des tâches afin d'avertir que l'action est irréversible. Demander confirmation
// Rajouter la possibilité de filtrer les tâches par priorités ou par date
// Créer un petit moteur de rechercher afin de rechercher une tâche par rapport à son titre
// Mettre en avant les tâches à faire aujourd'hui.
// Afficher le nombre de tâche à faire aujourd'hui. Afficher un curseur permettant d'afficher le pourcentage de tâches finies aujourd'hui. Ex: 10 tâches à faire dans la journée avec 5 réalisées : 50% réalisé


$toutesLesTaches = [];

$file = fopen("data.csv","r");

while(! feof($file))
{
	$task = fgetcsv($file);
	if($task != false) {
		$toutesLesTaches[] = $task ;
	}
}

fclose($file);

include "page.phtml";