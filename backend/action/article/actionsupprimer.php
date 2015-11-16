<?php 
require_once '../../module/model/connection.php';
require_once '../../module/model/article/article.php';



echo( $id = $_GET['id']) ;
$etu  =  new article();
$etu->supprimer_article($_GET['id']);
include_once ("actionarticle.php");
?>  