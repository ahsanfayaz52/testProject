<html>
<head>

<link href="bootstrap/bootstrap.min.css" rel="stylesheet">
		<script src="bootstrap/bootstrap.min.js"></script>
		<script src="jquery-3.4.0.js"></script>
		<script>
		

	 $(document).ready(function(){
  $("#job").click(function(){

  window.close("proposalphp.php");
  window.open("jobs.php");
  
  });
  
});
		
		
		</script>
		
		
</head>

<body>

<?php
	

	
try {
 if (isset($_POST['jobid'])) 
{ 

$job123 = $_POST['jobid'];
} 
if (isset($_POST['deliveryTime'])) 
{ 

$deliveryTime123 = $_POST['deliveryTime'];
} 
 if (isset($_POST['Price'])) 
{ 
   $price123 = $_POST['Price'];
}  
 if (isset($_POST['submitDate'])) 
{ 
   $submit123 = $_POST['submitDate'];
}
 
	$connection = new PDO("mysql:host = localhost ; dbname=fiverr","root","");
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
			  $login_id = $row['userID'];
		}
	}
	$check=0;
	$check2=0;
	if ($deliveryTime123>=10 || $price123>=100)
	{
		
						
			$Query2 = "select * from proposals";
$stm = $connection->prepare($Query2);
$stm->execute();
$result = $stm->fetchAll();
foreach ($result As $row)
{
	if ($row['jobID']==$job123  && $row['ProposalStatus']=='Accepted')
	{
		$check2 = 1;
		
	}
	
		}
		if ($check2==1)
		{
			echo "<div style='margin-top:200px;'><lable style='margin-left:250px; padding-right:150px; font-size:50px; font-weight:bold;'>Oops! this job is not available now</lable></div>";
			echo "<div style='margin-left:570px; margin-top:30px;'><button id='job' style='font-size:15px; padding-top:7px;padding-bottom:7px; padding-left:15px; padding-right:15px; color:#259F55 ; border:1px solid #259F55 ;background-color:white;margin-bottom:10px; cursor: pointer;'>View More Jobs</button></div>";
		}
		else
	{
		$Query2 = "insert into proposals (jobID,userID,DelieveryTime,Payment,SubmitDate,ProposalStatus) values($job123,$login_id,'$deliveryTime123',$price123,$submit123,'waiting')";
        $effected1 = $connection->exec($Query2);
		
			$Query4 = "select * from proposals";
$stm = $connection->prepare($Query4);
$stm->execute();
$result = $stm->fetchAll();
echo "<table class='table table-bordered'>";
	echo "<tr><th>proposalID</th><th>jobID</th><th>userID</th><th>DelieveryTime</th><th>Payment</th><th>SubmitDate</th><th>ProposalStatus</th></tr>";
   
	foreach ($result as $row)
	{
		 echo "<tr><td>".$row['proposalID']."</td><td>".$row['jobID']."</td><td>".$row['userID']."</td><td>".$row['DelieveryTime']."</td><td>".$row['Payment']."</td><td>".$row['SubmitDate']."</td><td>".$row['ProposalStatus']."</td></tr>";
		
		 
	}

echo "</table>";
	}
		
			
	
	
}
		else
	{
		
		
			
			$Query2 = "select * from proposals";
$stm = $connection->prepare($Query2);
$stm->execute();
$result = $stm->fetchAll();
foreach ($result As $row)
{
	if ($row['jobID']==$job123  && $row['ProposalStatus']=='Accepted')
	{
		$check = 1;
		
	}
	
		}
		if ($check==1)
		{
			echo "<div style='margin-top:200px;'><lable style='margin-left:250px; padding-right:150px; font-size:50px; font-weight:bold;'>Oops! this job is not available now</lable></div>";
			echo "<div style='margin-left:570px; margin-top:30px;'><button id='job'  style='font-size:15px; padding-top:7px;padding-bottom:7px; padding-left:15px; padding-right:15px; color:#259F55 ; border:1px solid #259F55 ;background-color:white;margin-bottom:10px; cursor: pointer;'>View More Jobs</button></div>";
		}
		else
	{
		$Query2 = "insert into proposals (jobID,userID,DelieveryTime,Payment,SubmitDate,ProposalStatus) values($job123,$login_id,'$deliveryTime123',$price123,$submit123,'Accepted')";
        $effected1 = $connection->exec($Query2);
		
			$Query3 = "select * from jobs";
$stm = $connection->prepare($Query3);
$stm->execute();
$result1 = $stm->fetchAll();
foreach ($result1 As $row)
{
	if ($row['jobID']== $job123)
	{
		$Query5 = "update jobs set status='closed' where jobID=$job123";
        $effected1 = $connection->exec($Query5);
		$Query6 = "select * from proposals";
$stm = $connection->prepare($Query6);
$stm->execute();
$result = $stm->fetchAll();
echo "<table class='table table-bordered'>";
	echo "<tr><th>proposalID</th><th>jobID</th><th>userID</th><th>DelieveryTime</th><th>Payment</th><th>SubmitDate</th><th>ProposalStatus</th></tr>";
   
	foreach ($result as $row)
	{
		 echo "<tr><td>".$row['proposalID']."</td><td>".$row['jobID']."</td><td>".$row['userID']."</td><td>".$row['DelieveryTime']."</td><td>".$row['Payment']."</td><td>".$row['SubmitDate']."</td><td>".$row['ProposalStatus']."</td></tr>";
		
		 
	}

echo "</table>";
		
	}
}
		
	}
			
	
	}
  
	
	

	

}
catch (PDOException $e)
{
	echo "connection failed: ", $e->getMessage();
}








?>



</body>
</html>

