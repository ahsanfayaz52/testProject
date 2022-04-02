<?php
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


 
   
   if(!isset($_SESSION['user'])){
      header("location:login.php");
      die();
   }

    if (isset($_POST['logout']))
	{
		session_destroy();
	}

?>
<html>
<head>
<title>login</title>
<link href="bootstrap/bootstrap.min.css" rel="stylesheet">
		<script src="bootstrap/bootstrap.min.js"></script>
		<script src="jquery-3.4.0.js"></script>
		<script>
		

	 $(document).ready(function(){
  $("#create").click(function(){

  window.open("createjobs.php")
  window.close("jobs.php")
  
  });
  
});
 $(document).ready(function(){
  $("#logout").click(function(){

  window.open("login.php")
  window.close("jobs.php")
  
  });
  
});
		
		
		</script>
 
</head>
<body>
 

</div>
 
<?php

try {
 

	$connection = new PDO("mysql:host = localhost ; dbname=fiverr2","root","");
	$connection->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	
	



$Query1 = "select * from jobs";
$stm = $connection->prepare($Query1);
$stm->execute();
$result = $stm->fetchAll();



echo "<table class='table table-bordered'>";
	echo "<tr><th>jobID</th><th>userID</th><th>jobName</th><th>Area</th><th>Status</th><th>Delete</th><th>Update</th></tr>";
   
	foreach ($result as $row)
	{
		if ($row['userID'] == $login_id)
		{
			 
		
		 echo "<tr><td>".$row['jobID']."</td><td>".$row['userID']."</td><td>".$row['jobName']."</td><td>".$row['Area']."</td><td>".$row['status']."</td><td><a href='delete.php?ID=".$row['jobID']."'>Delete</a></td><td><a href='edit.php?ID=".$row['jobID']."'>Edit</a></td></tr>";
		}
		 
		
		 
	}

echo "</table>";

}
catch (PDOException $e)
{
	echo "connection failed: ", $e->getMessage();
}






?>
<div style="float:left; margin-left:550px;"><button id="create" style="font-size:20px;font-weight:bold; padding-top:7px;padding-bottom:7px; padding-left:15px; padding-right:15px; color:#259F55 ; border:1px solid #259F55 ;background-color:white;margin-bottom:10px; cursor: pointer;">Create Job</button></div>
<form action="logout.php" method = "post">
<div style="float:left; margin-left:550px;"><input type="submit" name="Logout" value = "Logout" style="font-size:20px;font-weight:bold; padding-top:7px;padding-bottom:7px; padding-left:15px; padding-right:15px; color:#259F55 ; border:1px solid #259F55 ;background-color:white;margin-bottom:10px; cursor: pointer;"> </div>
</form>
 


 
</body>
</html>