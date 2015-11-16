<?php 
include('../../model/article/article.php');
$art = new article() ;
$hb='10';
echo($art->get_all_article($hb)->fetch()[1]);

?>