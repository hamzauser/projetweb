<?php
//include("../../model/connection.php");
class article extends connection {
	private $id_article;
	private $titre_article;
	private $contenu_article;
	private $date_article;
	private $id_categorie;
	private $id_etudiant;
	private $file;
	private $visibilite;

	//private $id_article = "id_article";
	//private $titre_article = "titre_article";
	//private $id_categorie = "id_categorie";
	//private $id_etudiant = "id_etudiant";
	// structure
	//private $contenu_article = "contenu_article";
	//private $date_article = "date_article";
	//private $file = "file";
	//private $visibilite = "visibilite";
	private $table = "articles";
	
	
	public function __construct($titre = null, $date_article = null, $categorie = null, $auteur = null, $contenu = null, $visibilite = null, $image = null) {
		$this->titre_article = $titre;
		$this->date_article = $date_article;
		$this->id_categorie = $categorie;
		$this->contenu_article = $contenu;
		$this->visibilite = $visibilite;
		$this->file = $image;
	}
	
	public function supprimer_article($id){
		$sql = "DELETE FROM {$this->table} WHERE id_etudiant = :id";
		$query = $this->getPDO ()->prepare($sql);
		$query->execute(array('id' => $id));
		return $query;
	}
	
	
	public function savearticle() {
		/* conception de requete sql insert */
		$sql = "INSERT INTO {$this->table} VALUES (
		'',
		'{$this->titre_article}',
		'{$this->date_article}',
		'{$this->id_categorie}',
		'{$this->id_etudiant}',
		'{$this->contenu_article}',
		'{$this->visibilite}',
		'{$this->file}'
		)";
		/* execution de la requete sql insert */
		$query = $this->getPDO ()->query ( $sql );
		return $query;
	}
	// read
	public function get_article($id = null) {
		if ($id != null) {
			$sql = "SELECT * FROM {$this->table} WHERE {$this->id_article}=" . $id;
		} else {
			$sql = "SELECT * FROM {$this->table}";
		}
		$query = $this->getPDO ()->query ( $sql );
		return $query;
	}
	public function get_article_by_categorie($id) {
		$sql = "SELECT * FROM {$this->table} WHERE {$this->id_categorie}=" . $id;
		
		/* filtre de recuperation des articles par id de la categorie utiliser lors du cliq menu */
		$query = $this->getPDO ()->query ( $sql );
		return $query;
	}
	
	
	
	public function get_all_article($id){
		$sql = "SELECT titre_article, date_article , visibilite , id_article FROM {$this->table} WHERE id_etudiant = :id";
		$query = $this->getPDO ()->prepare ( $sql );
		$query->execute(array('id' => $id));
		return $query;
		
		
	}
	
	
}
?>
