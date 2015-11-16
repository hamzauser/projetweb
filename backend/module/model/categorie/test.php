<?php
include('../../model/categorie/categorie.php');?>
<select name="categorie">
		<!-- <option value="0">nom categorie</option> -->
		<!-- <option value='1'>info</option> -->
	    <?php
			$cat = new categorie() ;
			//echo($cat->get_all_categorie()->fetch()[0]);
			$list = $cat ->get_all_categorie();
			while ($donnees =  $list -> fetch(PDO::FETCH_ASSOC) ) {
				echo ("<option value='" . $donnees ["id_categorie"] . "'>");
				echo ($donnees ["nom_categorie"]);
				echo ("</option>");
			}
			?>	
</select>
