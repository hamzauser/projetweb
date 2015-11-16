<?php
require_once '../../module/connection.php';
require_once '../../module/model/article/article.php';
// nous allons recevoir les donne des formulaire via les variable $_POST[]
$titre = (isset ( $_POST ["titrearticle"] )) ? $_POST ["titrearticle"] : "";
// $nomcategorie =(si $_POST["nomcategorie"]existe)?alors on affecte la valeur de $_POST["nomcategorie"]:si nom on affecte "" vide
$date = date ( "y_m_d" );
$categorie = (isset ( $_POST ["categorie"] )) ? $_POST ["categorie"] : "";
$contenu = (isset ( $_POST ["contenuarticle"] )) ? $_POST ["contenuarticle"] : "";

if (isset ( $_POST ["visibilite"] )) {
	$visibilite = true;
} else {
	$visibilite = false;
}

if (isset ( $_FILES ["file"] )) {
	// Traitement des donn�es
	// sp�cifier le chemin vers le r�pertoir des images
	$dossier = '../../../images/';
	// permet de r�cup�rer le nom du fichier
	$fichier = basename ( $_FILES ['file'] ['name'] );
	// permet de r�cuperer l'extension du fichier et le transformer en minuscule
	$extension = strtolower ( pathinfo ( $_FILES ['file'] ['name'], PATHINFO_EXTENSION ) );
	
	if ($extension == "jpg" || $extension == "png" || $extension == "gif") {
		
		if (move_uploaded_file ( $_FILES ['file'] ['tmp_name'], $dossier . md5 ( $fichier ) . "." . $extension )) // Si la fonction renvoie TRUE, c'est que �a a fonctionn�...
{
			$imageUploaded = md5 ( $fichier ) . "." . $extension;
			
			echo 'Upload effectu� avec succ�s !';
		} else {
			echo 'Echec de l\'upload !';
		}
	} else {
		echo ("Erreur extention");
	}
}

$article = new article ( $titre, $date, $categorie, $_GET['id'] , $contenu, $visibilite, $imageUploaded );
$resultat = $article->savearticle();

if ($resultat == true) {
	echo ("<br/>Article cr�e avec succ�s");
} else {
	echo ("<br/>Echec de cr�ation");
}

?>
