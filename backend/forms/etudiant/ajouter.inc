<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Ajout Etudiant</title>
<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="../../js/validation.js">
</script>
</head>

<body>
	<a href="../../admin/auteur/editer.php">
		<div>
			<p>editer auteur</p>
		</div>
	</a>
	<a href="#">
		<div class="annuler">
			<p>annuler l ajout</p>
		</div>
	</a>
	<div id="form">
		<form name="etudiantForm"
			action="../../actions/etudiant/ajouteraction.php" method="post">
			<table>
				<tr>
					<td colspan=2 id="bloc_erreur"></td>
				</tr>
				<tr>
					<td><label> Entrer votre login</label></td>
					<td><input type="text" name="login_etudiant" /></td>
				</tr>
				<tr>
					<td><label> Entrer votre password</label></td>
					<td><input type="text" name="pwd_etudiant" /></td>
				</tr>
				<tr>
					<td><label> Repeter votre password</label></td>
					<td><input type="text" name="pwd_etudiant_1" /></td>
				</tr>
				<tr>
					<td><label>Email</label></td>
					<td><input type="text" name="Email" /></td>
				</tr>
				<tr>
					<td colspan=2><input class="btn" type="button"
						value="ajouter auteur :s"
						onclick="valider(etudiantForm,'ajouteretudiant')" /></td>
				</tr>
			</table>
		</form>
	</div>
</body>

</html>