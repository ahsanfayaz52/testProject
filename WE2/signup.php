


<html>
<head>
<title>sign up</title>
 
 
<style>
 

.content{width:100%;
                 height:100%;
				
				
				 float:left;
				
				 }
 
</style>
</head>
<body>
 

 

<div class="content">
<div style="width:30%;height:78%; background-color:white; border:1px solid black; margin-left:400px; margin-top:45px; border-radius:5px;">
<div style="margin-left:85px;margin-top:10px;">
<label style="font-size:30px; font-weight:bold;">SignUp To Fiverr</label>
</div>
<div style="width:90%; height:9%; background-color:#2471A3; margin-left:22px; border-radius:5px; margin-top:15px ">
<div style="float:left;"><img src="15.png" width="30" height="30" style=" margin-top:5px; margin-left:5px;"></div>
<div style=" float:right; margin-top:10px; margin-right:80px;"><label style="font-size:17px; color:white;  cursor:pointer; ">Continue As Facebook</label></div>
</div>
<div style="width:90%; height:9%; background-color:white; margin-left:22px; border-radius:5px; margin-top:20px ;border:1px solid black">
<div style="float:left;"><img src="g.png" width="30" height="30" style=" margin-top:5px; margin-left:5px;"></div>
<div style=" float:right; margin-top:10px; margin-right:80px;"><label style="font-size:17px; color:black;  cursor:pointer; ">Continue As Goolge</label></div>
</div>

<?php
 session_start();
 if (isset($_SESSION['exist']))
 {
    session_destroy();
  echo '<script> alert("already exists")   </script>';
 
 
 }

 

?>

<div style="width:100%; height:50%; border:1px solid #D7DBDD ; margin-top:30px;">
<form method="POST" action= "sign.php">

<div>

<input type="text" name="username" placeholder="Username" required value="" style="padding-top:13px;padding-bottom:13px; padding-right:160px; padding-left:5px; margin-top:15px;margin-left:25px;"/>


</div>
<div>

<input type="text" name="Password" required value="" placeholder="Password" style="padding-top:13px;padding-bottom:13px; padding-right:160px; padding-left:5px; margin-top:15px;margin-left:25px;">

</div>
<div>

<input type="email" name="email" required value ="" placeholder="Email" style="padding-top:13px;padding-bottom:13px; padding-right:160px; padding-left:5px; margin-top:15px;margin-left:25px;">

</div>
<div>

<input type="submit" name="submit" value="Continue" style="padding-top:13px;padding-bottom:13px; padding-right:132px; padding-left:132px;margin-top:15px;margin-left:25px; color:white;font-size:18px; background-color:#259F55 ;">

</div>

</form>


</div>
<div style="margin-left:95px; margin-top:10px;"><label id="l5" style="cursor: pointer;">Already a member? sign in</label></div>
</div>

</div>


 
</body>
</html>