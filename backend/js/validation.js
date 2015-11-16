/*document java script de validation */
function valider(form,type){
	//form=ie formulaire qu un souhaite valider
	//type= l action qu on souhaite valider (ajouter ou modifier ;;;)
	//erreur permet de stoker la liste des erreurs a afficher a l utulisataeur 
	var erreur = "";
	//on verifie le type du formulaire qu on souhaite valider
	if(type == "ajouterCategorie"){
		
	//verification des valeur de chaque  champ de texte 
	if(form.nom_categorie.value == "")
		
	erreur +="- Veuillier remplir le nom de la categorie <br/>";
		
		if(form.desc_categorie.value == "")
			
			erreur +="- Veuillier remplir la description de la categorie <br/>";
		
	}else  if(type == "ajouteretudiant"){
		if(form.login_etudiant.value == "")	erreur +="- Veuillier remplir le nom de l auteur <br/>";
				
		if(form.pwd_etudiant.value == "")	erreur +="- Veuillier remplir le prenom <br/>";
		
		if(form.pwd_etudiant.value != form.pwd_etudiant_1.value ) erreur +="- Les deux mots de passes ne correspondent pas <br/>";
		
		var expreg = /^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([_\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$/;
		var email=form.Email.value;
		if(email.match(expreg) == null) erreur+="veilliez corrigez vos mails </br>";
		
		
				
	
	
	}else  if(type == "ajouterarticle"){
		if(form.titrearticle.value == "")	erreur +="- Veuillier remplir le titre  <br/>";
		if(form.categorie.selectedIndex == false) erreur +="- Veuillier remplir categorie <br/>";
		if(form.contenuarticle.value == "")  erreur+="-veilliez corrigez contenu </br>";
		//la visibiliter n est pas obligatoire 
		if(form.file.value == "")  erreur+="-veilliez corrigez une image </br>";
		//la visibiliter n est pas obligatoire 
		//if(form.visibilite.checked==false) erreur+="veuiliez cocher la visibilite"			


	}else  if(type == "Authentication"){
		if(form.login_admin.value == "")	erreur +="- Veuillier enter votre admin  <br/>";
		if(form.pwd_admin.value == "") erreur +="- Veuillier entrer votre mot de passe <br/>";		
	}else  if(type == "Authentication_etudiant"){
		//var hb = $('#login_etudiant').val();
		//var $hb = form.login_etudiant.value ;
		if(form.login_etudiant.value == "")	erreur += "- Veuillier enter votre admin  <br/>";
		if(form.pwd_etudiant.value == "") erreur += "- Veuillier entrer votre mot de passe <br/>";	
		//$.post("../action/article/actionarticle.php", {variable: hb});
		//var $my_variable = "hamza" ;
		//$.ajax({
		  //   url: 'http://localhost/projetweb/backend/action/article/actionarticle.php',
		   //  data: {x: $my_variable},
		    // type: 'POST'
		//});
	}
		
		//verification des erreurs et affichage 
		if(erreur == ""){
			form.submit();
		}else{
			//erreur detecter + affichage des erreurs dans #bloc _erreur
			document.getElementById("bloc_erreur").innerHTML = "<div id='erreur'>"+erreur+"</div>";
		}
	
		
	
		
	
}










