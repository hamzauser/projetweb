<?php
require_once '../../module/model/connection.php';
require_once '../../module/model/etudiant/etudiant.php';

?>
<script language="javascript" src="../../js/validation.js"></script>

<?php 
$etu = new etudiant();
$reponse = $etu->afficher_all();
?>
        <table>
			<tr>
				<td><label>  ID</label></td>
				<td><label>  Login</label></td>
				<td><label>  Email</label></td>
				
			</tr>
<?php
while ($donnees = $reponse->fetch(PDO::FETCH_ASSOC))
{
	?>
			<tr>
			    <td><?php echo $donnees['id_etudiant'];?></td>	
				<td><?php echo $donnees['login_etudiant']; ?></td>
				<td><?php echo $donnees['email_etudiant']; ?></td>
				<td><a href="../../action/etudiant/actionetudiant.php?id=<?php echo $donnees['id_etudiant'] ?>">Delete</a></td>
			</tr>
       </table>
<?php
}
?>
            <div id="result"></div>
			<td colspan=2><input class="btn" type="button" 
						value="Supprimer"
				        onclick="post()" />
			</td>
			
			