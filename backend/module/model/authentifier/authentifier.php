<?php
//include("../../model/connection.php");

class authentifier extends connection {
	private $login_admin;
	private $pwd_admin;
	private $login_etudiant;
	private $pwd_etudiant;
	private $table_admin = "admin";
	private $table_etudiant = "etudiants";
	
	public function __construct($login_admin = null, $pwd_admin = null, $login_etudiant = null ,$login_etudiant = null) {
		$this->login_admin = $login_admin;
		$this->pwd_admin = $pwd_admin;
		$this->login_etudiant = $login_admin;
		$this->pwd_etudiant = $pwd_admin;
	}
	
	
	public function verification_etudiant($login_etudiant) {
		$sql = "SELECT {$this->pwd_etudiant} FROM {$this->table_etudiant} WHERE {$this->login_etudiant}=" . $login_etudiant;
		$query = $this->getPDO ()->query ( $sql );
		echo ("hamza");
		return $query;
		
	}
	
	public function verification_admin($login_admin) {
		$sql = "SELECT * FROM {$this->table_admin} WHERE {$this->login_admin}=" . $login_admin;
		$query = $this->getPDO ()->query ( $sql );
		echo ($query+"hamza");
		return $query;
	
	}
}	
class authentifier_user extends connection {
		private $login_etudiant;
		private $table_etudiant = "etudiants";
	
		public function __construct($login_etudiant = null ) {
			$this->login_etudiant = $login_etudiant;
		}
	
		//WHERE {$this->login_etudiant}=".$login_etudiant
		public function verification_user($login_etudiant) {
			$sql = "SELECT pwd_etudiant FROM {$this->table_etudiant} where login_etudiant = :login_etudiant ";
			$query = $this->getPDO ()->prepare($sql);
			$query->execute(array('login_etudiant' => $login_etudiant));
			return $query;
	
		}
}

class authentifier_admin extends connection {
			private $login_admin;
			private $table_admin = "admin";
		
			public function __construct($login_admin = null ) {
				$this->login_admin = $login_admin;
			}
		
			//WHERE {$this->login_etudiant}=".$login_etudiant
			public function verification_admin($login_admin) {
				$sql = "SELECT pwd_admin FROM {$this->table_admin} where login_admin = :login_admin ";
				$query = $this->getPDO ()->prepare($sql);
				$query->execute(array('login_admin' => $login_admin));
				//echo ($query->fetch()[0]);
				return $query;
		
			}
	
	
}

//verification_etudiant("hamzauser");


?>