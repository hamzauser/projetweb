<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Creation Categorie</title>
<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="../../js/validation.js">
</script>
</head>

<body>
	<a href="../../admin/categorie/editer.php">
		<div>
			<p>editer les categorie</p>
		</div>
	</a>
	<a href="#">
		<div class="annuler">
			<p>annuler l ajout</p>
		</div>
	</a>
	<div id="form">
		<form name="categorieForm"
			action="../../actions/categorie/ajouteraction.php" method="post">
			<table>
				<tr>
					<td colspan=2 id="bloc_erreur"></td>
				</tr>
				<tr>
					<td><label> Nom categorie</label></td>
					<td><input type="text" name="nom_categorie" /></td>
				</tr>
				<tr>
					<td><label> Description categorie</label></td>
					<td><textarea name="desc_categorie"></textarea></td>
				</tr>
				<tr>
					<td colspan=2><input class="btn" type="button"
						value="Creer categorie"
						onclick="valider(categorieForm,'ajouterCategorie')" /></td>
				</tr>
			</table>
		</form>
	</div>
</body>

</html>