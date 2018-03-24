<?php

class DB {

	private $hostname = "localhost";
	private $username = "root";
	private $userPassword = "root";
	private $dbName = "todo";


	function __construct( ) {
		return $this->createConnection();
	}

	private function createConnection(){
		$con = mysqli_connect($this->hostname, $this->username, $this->userPassword, $this->dbName);

		if($con){
			return $con;
		}
		return false;
	}

}
$myDb = new DB();
