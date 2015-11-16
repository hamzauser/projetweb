<?php
require_once '../../module/model/connection.php';
require_once '../../module/model/authentifier/authentifier.php';
require_once '../../module/model/etudiant/etudiant.php';
// nous allons recevoir les donne des formulaire via les variable $_POST[]
$etu = new etudiant();
$login_admin = (isset ( $_POST ["login_etudiant"] )) ? $_POST ["login_etudiant"] : "";
// $nomcategorie =(si $_POST["nomcategorie"]existe)?alors on affecte la valeur de $_POST["nomcategorie"]:si nom on affecte "" vide
$pwd = (isset ( $_POST ["pwd_etudiant"] )) ? $_POST ["pwd_etudiant"] : "";
$auth = new authentifier_user();
//$_SESSION['id_art'] = $login_admin;
$var = $auth->verification_user($_POST ["login_etudiant"])->fetch()[0];
if($var == $pwd ){
	echo (" Authentification Reussi");
	include_once ("../../admin/etudiant/index.php");	
	session_start();
	$_SESSION['id'] =  $_POST ["login_etudiant"];
?>
<?php 	
	} else {
	echo ("Echec de Authentification");
}
//session_start();
?>