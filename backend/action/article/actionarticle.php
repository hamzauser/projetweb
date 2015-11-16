<?php
require_once '../../module/model/connection.php';
require_once '../../module/model/etudiant/etudiant.php';
require_once '../../module/model/authentifier/authentifier.php';
require_once '../../module/model/article/article.php';

// nous allons recevoir les donne des formulaire via les variable $_POST[]
$login_admin = (isset ( $_POST ["login_etudiant"] )) ? $_POST ["login_etudiant"] : "";
// $nomcategorie =(si $_POST["nomcategorie"]existe)?alors on affecte la valeur de $_POST["nomcategorie"]:si nom on affecte "" vide
$pwd = (isset ( $_POST ["pwd_etudiant"] )) ? $_POST ["pwd_etudiant"] : "";

?>
<script language="javascript" src="../../js/validation.js"></script>

<?php 
$art = new article();
$reponse = $art->get_all_article($_GET['id']);

?>
        <table>
			<tr>
				<td><label>  Titre	</label></td>
				<td><label>  Date de publication</label></td>
				<td><label>  Visibilité </label></td>
				
			</tr>
<?php
while ($donnees = $reponse->fetch(PDO::FETCH_ASSOC))
{
	?>
			<tr>
			    <td><?php echo $donnees['titre_article'];?></td>	
				<td><?php echo $donnees['date_article']; ?></td>
				<td><?php echo $donnees['visibilite']; ?></td>
				<td><a href="actionsupprimer.php?id=<?php echo $donnees['id_article'] ?>">Delete</a></td>
			</tr>
       </table>
<?php
}
?>
            
			<a href="../../admin/etudiant/index.php?id=<?php echo $_GET['id'] ?>">
				<div class="annuler">
					<p>Annuler la suppression</p>
				</div>
			</a>



