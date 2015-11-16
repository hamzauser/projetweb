<?php
class connection{
	private $host = "localhost";
	private $user = "root";
	private $pwd = "";
	private $dbname = "projet_web";
	private $connection; /* statement */
	public function __construct() {
		$this->connection = new PDO ( "mysql:host={$this->host};dbname={$this->dbname},{$this->user},{$this->pwd}" );
	}
	public function getPDO() {
		try {
				
			$this->connection = new PDO ( "mysql:host={$this->host}; dbname=" . $this->dbname, $this->user, $this->pwd );
			return $this->connection;
		} catch ( Exception $e ) {
			echo ("Exception: " . $e->getMessage ());
		}
	}
	
	}
	
?>