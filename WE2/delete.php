<?php

 

try {
 
 

	$connection = new PDO("mysql:host = localhost ; dbname=fiverr2","root","");
	$connection->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$id = null;
	if (isset($_GET['ID'])){
		$id = $_GET['ID'];
		  
			$stmn = $connection->prepare("delete from jobs where jobID=?");
			$stmn -> execute(array($id));
			header("location: jobs.php");
			 
			 
		
		
	}
 

 

}
catch (PDOException $e)
{
	echo "connection failed: ", $e->getMessage();
}




















?>