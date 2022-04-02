<html>
<head>
<title>Error</title>
<link href="bootstrap/bootstrap.min.css" rel="stylesheet">
		<script src="bootstrap/bootstrap.min.js"></script>
		<script src="jquery-3.4.0.js"></script>
		<script>
		

	 $(document).ready(function(){
  $("#job").click(function(){

  window.close("error.php");
  window.open("jobs.php");
  
  });
  
});
		
		
		</script>

</head>
<body>
<?php


echo "<div style='margin-top:200px;'><lable style='margin-left:250px; padding-right:150px; font-size:50px; font-weight:bold;'>Oops! this job is created by you</lable></div>";
			echo "<div style='margin-left:570px; margin-top:30px;'><button id='job'  style='font-size:15px; padding-top:7px;padding-bottom:7px; padding-left:15px; padding-right:15px; color:#259F55 ; border:1px solid #259F55 ;background-color:white;margin-bottom:10px; cursor: pointer;'>Go to Jobs</button></div>";

?>
<div>
<label></label>




</div>













</body>
</html>