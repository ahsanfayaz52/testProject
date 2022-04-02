<?php
	
try {
 
if (isset($_POST['username'])) 
{ 

$name123 = $_POST['username'];
} 
 if (isset($_POST['Password'])) 
{ 
   $pass123 = $_POST['Password'];
}  
 if (isset($_POST['email'])) 
{ 
   $email123 = $_POST['email'];
}
	$connection = new PDO("mysql:host = localhost:8012 ; dbname=fiverr2","root","");
	$connection->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
	
	$Query1 = "select * from user";
$stm = $connection->prepare($Query1);
$stm->execute();
$result = $stm->fetchAll();

$check = 0;
foreach ($result As $row)
{
	if ($row['username'] == $name123 && $row['password'] == $pass123)
	{
			 
		 $check=1;
		
		  break;		 
	}	 	
}
if ($check == 0)
{
	$Query1 = "insert into user (username,password,email) values('$name123',$pass123,'$email123')";
    $effected = $connection->exec($Query1);
	    header("location: login.html");
}
else
{
	session_start();
	$_SESSION['exist'] = "already exists";
	header("location: signup.php");
}

}
catch (PDOException $e)
{
	echo "connection failed: ", $e->getMessage();
}

?>