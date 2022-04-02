<?php


$connection = new PDO("mysql:host = localhost ; dbname=fiverr2","root","");
	$connection->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	

$id = null;
	if (isset($_GET['ID'])){
		$id = $_GET['ID'];
		  
			 
			 
		
		
	}


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

?>
<html>
<head>
<title>login</title>
 
		<script src="jquery-3.4.0.js"></script>
		<script>
		

 
  

	 $(document).ready(function(){
  $("#j").click(function(){

 window.open("jobs.php")
  window.close("createjobs.php")
  
  });
  
});
		
		
		</script>
<style>
.header{height:12%;
        width:100%;
		border-top: 1px solid black ;
		border-bottom: 1px solid #D7DBDD ;
		float:left;}
		

.content{width:100%;
                 height:100%;
				
				
				 float:left;
				
				 }
	.labl{
        cursor: pointer;

    height: 39px;
	width:10px;
	float:left;
	}	
.footer{width:100%;
                 height:80%;
				border: 1px solid black;
				float:left;
				border-top: 1px solid #D7DBDD ;
				border-right: 1px solid white ;
				border-left: 1px solid white ;
				}
				 		



.list1{

}
.list1 li{

  cursor: pointer;
padding-left:10px;
padding-right:10px;
display:inline;
float:right;
font-size:15px;
 
}

.list2{

}
.list2 li{
  cursor: pointer;
padding-left:10px;
padding-right:10px;
display:inline;
font-size:20px;
border:1px solid #D7DBDD  ;
 
}




.image{width:40%;
        height:45%;}

.fiverr{
width:10%;
margin-top:20px;
margin-left:25px;
height:7%;
}

.buying{
float:right;
}
.image{
margin-left:110px;
float:left;
}

.profile{
margin-left:30px;
margin-top:25px;
width:30%;
height:85%;
float:left;
background-color:white;
border:1px solid #D7DBDD  ;
}
.checked {
  color: orange;
}
.fa {
  font-size: 17px;
}
</style>
</head>
<body>
 

</div>
<div class="content">
<div style="width:30%;height:74%; background-color:white; border:1px solid black; margin-left:400px; margin-top:45px; border-radius:5px;">
<div style="margin-left:85px;margin-top:10px;">
<label style="font-size:30px; font-weight:bold;">Create Job</label>
</div>


<div style="width:100%; height:70%; border:1px solid #D7DBDD ; margin-top:30px;">
<form method="POST" action="editJobs.php">
<div>
<div style="margin-left:23px;margin-top:10px;"><label style="font-size:15px">User ID </label></div>
<input type="text" name="jobid" readonly value="<?php echo $id;	?>" style="background-color:#DEE2E4;padding-top:13px;padding-bottom:13px; padding-right:160px; padding-left:5px; margin-top:15px;margin-left:25px;"/>


</div>
<div>
<div style="margin-left:23px;margin-top:10px;"><label style="font-size:15px">User ID </label></div>
<input type="text" name="user" readonly value="<?php echo $login_id;	?>" style="background-color:#DEE2E4;padding-top:13px;padding-bottom:13px; padding-right:160px; padding-left:5px; margin-top:15px;margin-left:25px;"/>


</div>
<div>
<input type="text" name="jobname" placeholder="jobName" style="padding-top:13px;padding-bottom:13px; padding-right:160px; padding-left:5px; margin-top:15px;margin-left:25px;"/>


</div>
<div>

<input type="text" name="jobarea" placeholder="jobArea" style="padding-top:13px;padding-bottom:13px; padding-right:160px; padding-left:5px; margin-top:15px;margin-left:25px;">

</div>
<div>

<input type="text" name="status" placeholder="Status" style="padding-top:13px;padding-bottom:13px; padding-right:160px; padding-left:5px; margin-top:15px;margin-left:25px;">

</div>
<div>

<input type="submit" name="submit" value="Continue" style="padding-top:13px;padding-bottom:13px; padding-right:132px; padding-left:132px;margin-top:15px;margin-left:25px; color:white;font-size:18px; background-color:#259F55 ;">

</div>
</form>

</div>


</div>


 
</body>
</html>