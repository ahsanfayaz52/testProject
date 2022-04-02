<?php
	
session_start();
try {
 
if (isset($_POST['username'])) 
{ 

$name123 = $_POST['username'];
} 
 if (isset($_POST['Password'])) 
{ 
   $pass123 = $_POST['Password'];
}  
	$connection = new PDO("mysql:host = localhost ; dbname=fiverr2","root","");
	$connection->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$Query1 = "select * from user";
$stm = $connection->prepare($Query1);
$stm->execute();
$result = $stm->fetchAll();


foreach ($result As $row)
{
	if ($row['username'] == $name123 && $row['password'] == $pass123)
	{
		 $_SESSION['ID'] = $userID;
		 $_SESSION['user'] = $name123;
		 header("location: indexPage.php");
	}
	else
	{
		echo "not matched";
	}
	
}

	

}
catch (PDOException $e)
{
	echo "connection failed: ", $e->getMessage();
}








?>