<?php 
require_once '../../module/model/connection.php';
require_once '../../module/model/etudiant/etudiant.php';



//echo( $id = $_GET['id']) ;
$etu  =  new etudiant();
$etu->delete_etudiant($_GET['id']);
include_once ("../../admin/admin/index.php");
?>  