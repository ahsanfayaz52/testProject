	<?php
	try
	{
			$conn =new PDO("mysql:host=localhost;dbname=fiverr","root","");
			$conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			
session_start();
   
   $user_check = $_SESSION['user'];
   $user_ID = $_SESSION['ID'];
   
  
    $Query3 = "select * from user" ;
	$result = $conn->Query($Query3);
	foreach ($result As $row)
	{
		if ($row['username'] == $user_check)
		{
			  $login_session = $row['username'];
			  $login_id = $row['userID'];
		}
	}
		$id=null;

		if(isset($_GET['ID']))
		{
         
			$id=$_GET['ID'];
			$stmn = $conn->prepare("Select * from jobs where jobID=?");
			$stmn -> execute(array($id));
			$result=$stmn->fetch();



		}
	}
	catch(PDOException $e)
	{
	echo "Connection failed: " . $e->getMessage();
	}

	?>
<html>
<head>
	<title></title>
</head>
<body>


	
	

</div>
<div class="content">
<div style="width:30%;height:82%; background-color:white; border:1px solid black; margin-left:400px; margin-top:45px; border-radius:5px;">
<div style="margin-left:85px;margin-top:10px;">
<label style="font-size:30px; font-weight:bold;">Create Proposal</label>
</div>


<div style="width:100%; height:70%; border:1px solid #D7DBDD ; margin-top:30px;">
<form method="POST" action="proposalphp.php">
<div>
<div style="margin-left:23px;margin-top:10px;"><label style="font-size:15px">Job ID </label></div>
<input type="text" name="jobid" readonly value="<?php echo isset($result['jobID']) ? $result['jobID'] : '';	?>" style="background-color:#DEE2E4;padding-top:13px;padding-bottom:13px; padding-right:160px; padding-left:5px; margin-top:15px;margin-left:25px;"/>


</div>
<div>
<div style="margin-left:23px;margin-top:10px;"><label style="font-size:15px">User ID </label></div>
<input type="text" name="user" readonly value="<?php echo $login_id;	?>" style="background-color:#DEE2E4;padding-top:13px;padding-bottom:13px; padding-right:160px; padding-left:5px; margin-top:15px;margin-left:25px;"/>

</div>
<div>
<input type="text" name="deliveryTime" placeholder="Deliverytime" style="padding-top:13px;padding-bottom:13px; padding-right:160px; padding-left:5px; margin-top:15px;margin-left:25px;"/>


</div>
<div>

<input type="text" name="Price" placeholder="Price" style="padding-top:13px;padding-bottom:13px; padding-right:160px; padding-left:5px; margin-top:15px;margin-left:25px;">

</div>
<div>

<input type="text" name="submitDate" placeholder="submitDate" style="padding-top:13px;padding-bottom:13px; padding-right:160px; padding-left:5px; margin-top:15px;margin-left:25px;">

</div>


<div>

<input type="submit" name="submit" value="Continue" style="padding-top:13px;padding-bottom:13px; padding-right:132px; padding-left:132px;margin-top:15px;margin-left:25px; color:white;font-size:18px; background-color:#259F55 ;">

</div>
</form>

</div>


</div>s


<?php
include 'footer.php';

?>
	
	
	
	
	
	

</body>
</html>