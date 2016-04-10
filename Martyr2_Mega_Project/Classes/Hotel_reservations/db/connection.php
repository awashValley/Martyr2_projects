<?php  
	/**
	* 
	*/
	class MakeConnection
	{

		public $dbHost;
		public $dbUser;
		public $dbPassword;
		public $dbname;
		
		function __construct($host, $user, $password){
			$this->dbHost 	  =$host;
			$this->dbUser 	  =$user;
			$this->dbPassword =$password;
		}

		function checkConnection(){
			$connection =mysql_connect($this->dbHost, $this->dbUser, $this->dbPassword);

			if(!($connection)){
				die("Cannot connect: " . mysql_error());
			}
			// else{
			// 	echo "The connection is successful." . "<br>";
			// }
		}

		function selectDB($db){
			$this->dbname =$db;

			$selectedDB = mysql_select_db($this->dbname);

			if (!($selectedDB)) {
				die("Cannot get the database: " . mysql_error());
			}
			// else{
			// 	echo "The database is selected.";
			// }
		}
	}

?>