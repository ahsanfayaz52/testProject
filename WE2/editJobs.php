<?php
	

try {
 if (isset($_POST['jobid'])) 
{ 

$jobid = $_POST['jobid'];
}
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
	 
	$Query1 = "update jobs set jobName = '$name123', Area= '$jobarea123' ,status = '$status123' where jobID = $jobid ";
 
    $effected = $connection->exec($Query1);
    header("location: jobs.php");
	

}
catch (PDOException $e)
{
	echo "connection failed: ", $e->getMessage();
}








?>