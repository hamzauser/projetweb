<?php

include("../../model/connection.php");
class categorie extends connection {
	private $id_categorie;
	private $nom_categorie;
	private $desc_categorie;
	private $table = "categorie";
	// structure
	//private $id_categorie = "id_categorie";
	//private $nom_categorie = "nom_categorie";
	//private $desc_categorie = "desc_categorie";
	public function __construct($nom_categorie = null, $desc_categorie = null) {
		$this->nom_categorie = $nom_categorie;
		$this->desc_categorie = $desc_categorie;
	}
	/* create */
	public function saveCategorie() {
		/* conception de requete sql insert */
		$sql = "INSERT INTO {$this->table} VALUES (
 				'',
 				'{$this->nom_categorie}',
 				'{$this->desc_categorie}'
 				)";
		/* execution de la requete sql insert */
		$query = $this->getPDO ()->query ( $sql );
		return $query;
	}
	// read
	public function getcategorie($id = null) {
		if ($id != null) {
			$sql = "SELECT * FROM {$this->table} WHERE id_etudiant = :id";
		} else {
			$sql = "SELECT * FROM {$this->table}";
		}
		$query = $this->getPDO ()->prepare ( $sql );
		$query->execute(array('id' => $id));
		return $query;
	}
	// delete
	public function deleteCategorie($id) {
		$sql = "DELETE FROM {$this->table} WHERE {$this->id_categorie}=" . $id;
		$query = $this->getPDO ()->query ( $sql );
		return $query;
	}
	// update
	public function updateCategorie($id, $nom, $description) {
		$sql = "UPDATE {$this->table} SET {$this->nom_categorie}='$nom' , {$this->desc_categorie}='$description' WHERE  {$this->id_categorie}=" . $id;
		
		$query = $this->getPDO ()->query ( $sql );
		return $query;
	}
	public function getidcategorie() {
		return $this->id_categorie;
	}
	
	public function get_all_categorie(){
		$sql = "SELECT * FROM {$this->table}";
		$query = $this->getPDO ()->query ( $sql );
		return $query;		
	}
}

?>