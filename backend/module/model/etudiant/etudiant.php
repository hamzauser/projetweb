<?php

//include("../../model/connection.php");

class etudiant extends connection {
	private $id_etudiant;
	private $login_etudiant;
	private $pwd_etudiant;
	private $email_etudiant;
	private $table = "etudiants";
	public function __construct($login_etudiant = null, $pwd_etudiant = null, $email_etudiant = null) {
		$this->login_etudiant = $login_etudiant;
		$this->pwd_etudiant = $pwd_etudiant;
		$this->email_etudiant = $email_etudiant;
	}
	/* create */
	public function valueExist($valeur, $champ) {
		$sql = "SELECT * FROM {$this->table} WHERE $champ='$valeur'";
		$req = $this->getPDO ()->query ( $sql );
		if ($req->fetchColumn () > 0)
			return true;
		else
			return false;
	}
	public function save_etudiant() {
		if ($this->valueExist ( $this->email_etudiant , "email_etudiant" ) == false) {
			
			/* conception de requete sql insert */
			$sql = "INSERT INTO {$this->table} VALUES (
			'',
			'{$this->login_etudiant}',
			'{$this->pwd_etudiant}','{$this->email_etudiant}'
			)";
			echo ("insertion faite");
			/* execution de la requete sql insert */
			$query = $this->getPDO ()->query ( $sql );
			return $query;
		}
	}
	// read
	public function get_etudiant($id = null) {
		if ($id != null) {
			$sql = "SELECT * FROM {$this->table} WHERE {$this->id_etudiant}=" . $id;
		} else {
			$sql = "SELECT * FROM {$this->table}";
		}
		$query = $this->getPDO ()->query ( $sql );
		return $query;
	}
	// delete
	public function delete_etudiant($id) {
		$sql = "DELETE FROM {$this->table} WHERE id_etudiant = :id";
		$query = $this->getPDO ()->prepare($sql);
		$query->execute(array('id' => $id));
		return $query;
	}
	
	public function get_id($login){
		$sql ="SELECT id_etudiant FROM {$this->table} where INSTR(login_etudiant,:login) > 0 AND CHAR_LENGTH(login_etudiant) = CHAR_LENGTH(:login)";
		$query = $this->getPDO ()->prepare ( $sql );
		$query->execute(array('login' => $login));
		return $query;
	}
	
	public function afficher_all(){
		$sql = "SELECT * FROM {$this->table}";
		$query = $this->getPDO ()->query ( $sql );
		return $query;
	}
	
	public function afficher($id){
		$sql = "SELECT * FROM {$this->table} where id_etudiant = :id";
		$query = $this->getPDO ()->prepare ( $sql );
		$query->execute(array('id' => $id));
		return $query;
	}
	
	
	// update
	public function update_etudiant($login_etudiant, $pwd_etudiant) {
		$sql = "UPDATE {$this->table} SET {$this->login_etudiant}='$nom' , {$this->pwd_etudiant}='$pwd_etudiant' WHERE  {$this->id_etudiant}=" . $id;
		
		$query = $this->getPDO ()->query ( $sql );
		return $query;
	}
}

?>