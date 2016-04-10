<?php  
	
	/**
	* 
	*/
	class MakeHeader{

		public $projectSource ="Martyr2";
		public $projectCategory;
		public $projectName;
		public $developer;
		public $dateStarted;
		public $dateUptodate;
		
		function __construct($pCategory, $pName, $pDeveloper, $pDateSatrted, $pDateUptodate){

			$this->projectCategory =$pCategory;
			$this->projectName     =$pName;
			$this->developer       =$pDeveloper;
			$this->dateStarted     =$pDateSatrted;
			$this->dateUptodate    =$pDateUptodate;

		}

		function showHeader(){
			return "Welcome to our PHP open projects. <br>" . "</br>" .
			       "Source: {$this->projectSource} <br>" . 
			       "Description: {$this->projectName} <br>" .
			       "Developer: {$this->developer} <br>" .
			       "Date (initial version 1.0): {$this->dateStarted} <br>" .
			       "Date (current version): {$this->dateUptodate}" ;
		}
	}


?>