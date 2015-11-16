<?php
include("../../model/connection.php");
class admin extends connection {
	private $id_admin;
	private $login_admin;
	private $pwd_admin;
	private $table = "admin";
	public function __construct($login_admin = null, $pwd_admin = null) {
		$this->login_admin = $login_admin;
		$this->pwd_admin = $pwd_admin;
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
	public function get_admin($id = null) {
		if ($id != null) {
			$sql = "SELECT * FROM {$this->table} WHERE {$this->id_admin}=" . $id;
		} else {
			$sql = "SELECT * FROM {$this->table}";
		}
		$query = $this->getPDO ()->query ( $sql );
		return $query;
	}
	// delete
	public function delete_etudiant($id) {
		$sql = "DELETE FROM {$this->table} WHERE {$this->id_etudiant}=" . $id;
		$query = $this->getPDO ()->query ( $sql );
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