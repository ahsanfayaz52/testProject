<?php
	

try {
 
if (isset($_POST['jobname'])) 
{ 

$name123 = $_POST['jobname'];
} 
 if (isset($_POST['jobarea'])) 
{ 
   $jobarea123 = $_POST['jobarea'];
}  
 if (isset($_POST['status'])) 
{ 
   $status123 = $_POST['status'];
} 
	$connection = new PDO("mysql:host = localhost ; dbname=fiverr2","root","");
	$connection->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	session_start();
   
   $user_check = $_SESSION['user'];
    $user_ID = $_SESSION['ID'];
   
  
    $Query3 = "select * from user" ;
	$result = $connection->Query($Query3);
	foreach ($result As $row)
	{
		if ($row['username'] == $user_check)
		{
			  $login_session = $row['username'];
			  $login_id = $row['ID'];
		}
	}
	$Query1 = "insert into jobs (userID,jobName,Area,status) values($login_id,'$name123','$jobarea123','$status123')";
    $effected = $connection->exec($Query1);
    header("location: jobs.php");
	

}
catch (PDOException $e)
{
	echo "connection failed: ", $e->getMessage();
}








?>