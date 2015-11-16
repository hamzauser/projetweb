<?php 
include('../../model/authentifier/authentifier.php');
$auth = new authentifier_admin();
$hb='hb';
echo($auth->verification_admin($hb)->fetch()[0]);

?>