<?php
require_once ("../../module/connection.php");
require_once ("../../module/model/categorie/categorie.php");
require_once ("../../module/model/etudiant/etudiant.php");
require_once ("../../module/model/admin/admin.php");


?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>bienvenue</title>
<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="../../js/validation.js">
</script>
</head>

<body>
	<a href="../../admin/article/editer.php">
		<div>
			<p>editer article</p>
		</div>
	</a>
	<a href="#">
		<div class="annuler">
			<p>annuler lajout</p>
		</div>
	</a>
	<div id="form">
		<form enctype="multipart/form-data" name="articleForm"
			action="../../action/article/actionajouter.php" method="post">
			<table>
				<tr>
					<td colspan=2 id="bloc_erreur"></td>
				</tr>
				<tr>
					<td><label> titre</label></td>
					<td><input type="text" name="titrearticle" /></td>
				</tr>
				<tr>
					<td><label>categorie</label></td>
					<td><?php
					include('../../module/model/categorie/categorie.php');?>
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
				   </select></td>
				</tr>
				<tr>
					<td><label>contenu</label></td>
					<td><textarea name="contenuarticle">
	       	</textarea></td>
				</tr>
				<tr>
					<td><label>publier?</label></td>
					<td><input type="checkbox" name="visibilite" /></td>
				</tr>
				<tr>
					<td><label>file</label></td>
					<td><input type="file" name="file" /></td>
				</tr>

				<tr>
					<td colspan=2><input class="btn" type="button"
						value="ajouter article"
						onclick="valider('articleForm','ajouterarticle')" /></td>
				</tr>
			</table>
		</form>
	</div>
</body>

</html>