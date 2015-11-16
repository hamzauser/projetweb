<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Authenfication Etudiant</title>
<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="../../js/validation.js">
</script>
</head>

<body>
	<a href="#">
		<div class="annuler">
			<p>annuler l ajout</p>
		</div>
	</a>
	<div id="form">
		<form name="Authentication"
			action="../../action/authentifier/actionauthentifier.php" method="post">
			<table>
				<tr>
					<td colspan=2 id="bloc_erreur"></td>
				</tr>
				<tr>
					<td><label> Entrer votre login</label></td>
					<td><input type="text" name="login_admin" /></td>
				</tr>
				<tr>
					<td><label> Entrer votre password</label></td>
					<td><input type="text" name="pwd_admin" /></td>
				</tr>
				
				<tr>
					<td colspan=2><input class="btn" type="button"
						value="Valider" 
						onclick="valider(Authentication,'Authentication')" /></td>
				</tr>
			</table>
		</form>
	</div>
</body>

</html>