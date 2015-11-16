<?php
require_once '../../module/model/connection.php';
require_once '../../module/model/authentifier/authentifier.php';
//require_once '../../module/model/article/article.php';
// nous allons recevoir les donne des formulaire via les variable $_POST[]
$login_admin = (isset ( $_POST ["login_admin"] )) ? $_POST ["login_admin"] : "";
// $nomcategorie =(si $_POST["nomcategorie"]existe)?alors on affecte la valeur de $_POST["nomcategorie"]:si nom on affecte "" vide
$pwd = (isset ( $_POST ["pwd_admin"] )) ? $_POST ["pwd_admin"] : "";
$auth = new authentifier_admin();
$var = $auth->verification_admin($_POST ["login_admin"])->fetch()[0];
if($var == $pwd ){
	echo (" Authentification Reussi");
	include_once ("../../forms/categorie/ajouter.inc");
	} else {
	echo ("Echec de Authentification");
}

?>