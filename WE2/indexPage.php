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

?>

<html>
<head>
<title>Fiverr</title>
		 
<style>

		

.content{width:100%;
                 height:130%;
				
				background-color:  #F4F6F7          ;
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
				 		
	.labl{
	 
        cursor: pointer;
        height: 39px;
	    width:10px;
	    float:left;
		@media screen and (max-width: 600px) {
  div.example {
    display: none;
  }
}
	}	
 
				 		



.list1{margin-left:90px;

}
.list1 li{

  cursor: pointer;
padding-left:10px;
padding-right:10px;
display:inline;

font-size:15px;
 
}
 


.image{width:40%;
        height:45%;}

.fiverr{
width:10%;
margin-top:20px;
margin-left:25px;
height:3%

}

.buying{

float:right;
margin-right:60px;
margin-top:20px;
}
.image{
margin-left:110px;

float:left;
}

.profile{
margin-left:30px;
margin-top:25px;
width:30%;
height:55%;
float:left;
background-color:white;
border:1px solid #D7DBDD  ;
}
</style>
<script src="jquery-3.4.0.js"></script>
<script>
	 
		
			$(document).ready(function(){
 
  $("#j").click(function(){

  window.open("jobs.php")
  window.close("main2.php")
  
  });
});


</script>
</head>

<body>
<div>

<div class="fiverr">
<label class="labl" style="font-size:35px; font-family:impact">fiverr<label>
 </div>
<div style="float:left; margin-left:90px; "><input type="text" style="font-size:15px;padding-top:5px;padding-bottom:5px; padding-right:90px;"placeholder="Find Services">
<button style="font-size:15px; background-color:#259F55  ;padding-top:6px;padding-bottom:6px; padding-left:6px; padding-right:6px; color:white;">Search</button></div>

<div class="buying">
<div style="float:left;margin-right:10px;"><a href="login.html"   style="cursor:pointer;font-size:15px; color: green ;paddin-left:10px;  ">LOGIN</a></div>
<div style="float:left;margin-right:10px;"><a href="signup.html"   style="cursor:pointer;font-size:15px; color:green;paddin-left:10px; ">SIGNUP</a></div>
<div style="float:left;"><a href="2nd page.html"   style="cursor:pointer;font-size:15px; color:#74E4A0 ; ">Switch to Buying</a></div>

 
</div>

</div>

<div class="list1">
<ul>



<li>Buying</li>
<li>Messages</li>
<li>Community</li>
<li style="color:#74E4A0 ">Fiverr Pro</li>
<li>
 <button id="j" style="font-size:15px; padding-top:7px;padding-bottom:7px; padding-left:15px; padding-right:15px; color:#259F55 ; border:1px solid #259F55 ;background-color:white;  cursor: pointer;">JOBS</button> 

</li>
<li>
<form action="logout.php" method = "post">
 <input type="submit" name="Logout" value = "Logout" style="float:left;font-size:20px;font-weight:bold; padding-top:7px;padding-bottom:7px; padding-left:15px; padding-right:15px; color:#259F55 ; border:1px solid #259F55 ;background-color:white;  cursor: pointer;"/>  
</form>
</li>

</ul>


</div>



</div>
<div class="content">
<form class="profile" >
<div style=" margin-top:40px;   margin-left:300px;"><label style="color:#74E4A0; border:2px solid #74E4A0; border-radius:30%; padding-left:10px; padding-right:10px;">Online</label></div>
<div style=" margin-top:10px; "><img src="2.png" width="" height="70;" style="border-radius:50%; margin-left:150px; " >
<div style=" margin-top:10px;   margin-left:140px;"><label><b><?php echo  $login_session; echo $login_id; ?></b></label></div>
</div>

<div style="  margin-top:40px">
<label style=" margin-left:50px; padding-left:10px;  padding-right:10px;  padding-top:17px;  padding-bottom:17px; border:2px solid #74E4A0; border-radius:50%;">100%</label>
<label style=" margin-left:12px; padding-left:10px;  padding-right:10px;  padding-top:17px;  padding-bottom:17px; border:2px solid #74E4A0; border-radius:50%;">100%</label>
<label style="margin-left:12px; padding-left:10px;  padding-right:10px;  padding-top:17px;  padding-bottom:17px; border:2px solid #74E4A0; border-radius:50%;">100%</label>
<label style="margin-left:15px;padding-left:13px;  padding-right:10px;  padding-top:17px;  padding-bottom:17px;border:2px solid gray; border-radius:50%;">N/A</label>
</div>
<div   style="  margin-top:30px">
<label style="margin-left:50px; font-size:15px;">Response</label>
<label style="margin-left:10px; font-size:15px;">Delievered on</label>
<label style="margin-left:10px; font-size:15px;">Order</label>
<label style="margin-left:33px; font-size:15px;">rating</label>

</div>
<div style="  ">
<label style="margin-left:70px; font-size:15px;">Rate</label>
<label style="margin-left:40px; font-size:15px;">time</label>
<label style="margin-left:30px; font-size:15px;">completion</label>


</div>

<div style="margin-top:15px; margin-left:12px;border-top:1px solid #D7DBDD  ; border-bottom:1px solid #D7DBDD  ; width:90%; height:17%;">
<div style="margin-top:13px;"><label style="margin-top:15px; margin-left:20px; font-size:15px;">Earned in May</label>
<label style="margin-left:200px; font-size:15px;"><b>$0</b></label>
 </div> 
<div> 
<div style="margin-top:13px;"><label style="margin-top:15px; margin-left:20px; font-size:15px;">Completion</label>
<label style="margin-left:200px; font-size:15px; color:red"><b>19 hr</b></label>
</div>
</div>

<div style="margin-top:50px;"><label style="margin-top:15px; margin-left:20px; font-size:15px;">Inbox</label>
<label style="margin-left:210px; font-size:15px; color:#74E4A0"><b>View All</b></label>
</div>
</div>

</form>

<div style="margin-left:30px">
<fieldset style=" float:right;width:60%; margin-right:40px; margin-top:20px; border-right:1px solid  #EBEDEF ;border-left:1px solid  #EBEDEF ; border-bottom:1px solid  #EBEDEF ;">
<legend style="padding-right:15px"><b> Upgrade Your Business </b> <legend>




</fieldset>
<div style="border:1px solid #D7DBDD  ;float:right; margin-right:40px;width:63%; height:25%; background-color:white;">
<div style="margin-top:20px"><img id="img" src="3.png" width="90" height="90" style="border-radius:50%; float:left"></div>
<h1 id="h1">Learn More, Earn More</h1>
<p id="p1" style="font-size:20px; color:gray">Take courses specifically created to meet your professional needs to improve your ranking in the marketplace, and boost your sales.</p>
<button id="b1" style="cursor:pointer;margin-left:90px;padding-left:25px;padding-right:25px;padding-top:5px;padding-bottom:5px;color:white; font-size:15px;background-color:#0BB14C  ; border-radius:15%;">Enroll Now</button>


</div>
</div>
<div style="float:left;margin-left:360px; margin-top:20px;">
<button id="next1" style="height:10px;background-color:#F4F6F6  " ></button>
<button id="next2" style="height:10px;background-color:#F4F6F6  ">
</button>
<button id="next3" style="height:10px;background-color:#F4F6F6  " ></button>
</div>
</div>

<div class="footer">
<div class="fiverr">
<label style="font-size:35px; font-family:impact; color:gray; margin-top:10px;">fiverr</label>

</div>

<div><label style="margin-left:25px;font-size:12px; display:block;margin-top:20px;">Privacy Policy|Terms of service</label></div>
<div><label style="margin-left:25px;font-size:12px; color:gray">Fiverr international ltd.2019</label></div>
<div style="margin-left:20px; display:block; width:20% ; float:left;">
<label style="font-size:15px; display:block; margin-top:30px;">Categories</label>
<label style="font-size:15px; display:block;margin-top:20px; color:gray">Graphics & design</label>
<label style="font-size:15px; display:block;margin-top:20px; color:gray">Digital Marketing</label>
<label style="font-size:15px; display:block;margin-top:20px;color:gray">Writing & Translation</label>
<label style="font-size:15px; display:block;margin-top:20px;color:gray">Video & Animation</label>
<label style="font-size:15px; display:block;margin-top:20px;color:gray">Audio & Video</label>
<label style="font-size:15px; display:block;margin-top:20px;color:gray">Programming & Tech</label>
<label style="font-size:15px; display:block;margin-top:20px;color:gray">Business</label>
<label style="font-size:15px; display:block;margin-top:20px;color:gray">Lifestyle</label>
<label style="font-size:15px; display:block;margin-top:20px; color:gray">Sitemap</label>


</div>

<div style="margin-left:20px;display:block; width:15% ; float:left;">
<label style="font-size:15px; display:block; margin-top:30px;">About</label>
<label style="font-size:15px; display:block;margin-top:20px; color:gray">Careers</label>
<label style="font-size:15px; display:block;margin-top:20px; color:gray">Press & News</label>
<label style="font-size:15px; display:block;margin-top:20px;color:gray">Privacy</label>
<label style="font-size:15px; display:block;margin-top:20px;color:gray">Partnership Policy</label>
<label style="font-size:15px; display:block;margin-top:20px;color:gray">term of service</label>
<label style="font-size:15px; display:block;margin-top:20px;color:gray">Intelectual Property</label>



</div>

<div style="margin-left:20px;display:block; width:15% ; float:left;">
<label style="font-size:15px; display:block; margin-top:30px;">Support</label>
<label style="font-size:15px; display:block;margin-top:20px; color:gray">Help & Support</label>
<label style="font-size:15px; display:block;margin-top:20px; color:gray">Trust & Safety</label>
<label style="font-size:15px; display:block;margin-top:20px;color:gray">Selling on Fiverr</label>
<label style="font-size:15px; display:block;margin-top:20px;color:gray">Buying on Fiverr</label>



</div>
<div style="margin-left:20px; display:block; width:15% ; float:left;">
<label style="font-size:15px; display:block; margin-top:30px;">Community</label>
<label style="font-size:15px; display:block;margin-top:20px; color:gray">Events</label>
<label style="font-size:15px; display:block;margin-top:20px; color:gray">Blogs</label>
<label style="font-size:15px; display:block;margin-top:20px;color:gray">Forums</label>
<label style="font-size:15px; display:block;margin-top:20px;color:gray"> Podcast</label>
<label style="font-size:15px; display:block;margin-top:20px;color:gray">Affiliates</label>
<label style="font-size:15px; display:block;margin-top:20px;color:gray">Invite a Friend</label>
<label style="font-size:15px; display:block;margin-top:20px;color:gray">Become a Seller</label>


</div>
<div style="margin-left:20px; display:block; width:15% ; float:left;">
<label style="font-size:15px; display:block; margin-top:30px;">More From Fiverr</label>
<label style="font-size:15px; display:block;margin-top:20px; color:gray">Fiverr Pro</label>
<label style="font-size:15px; display:block;margin-top:20px; color:gray">Get Inspired</label>
<label style="font-size:15px; display:block;margin-top:20px;color:gray">Clear Voice</label>
<label style="font-size:15px; display:block;margin-top:20px;color:gray"> AND CO</label>
<label style="font-size:15px; display:block;margin-top:20px;color:gray">Learn</label>
<label style="font-size:15px; display:block;margin-top:20px;color:gray">Fiverr Elevate</label>



</div>

<div style="margin-top:15px;float:left;border-top:1px solid black; height:9%; width:100%;">
<div>
<img src="g.png" width="40" height="40" style="float:left; margin-top:18px;">
<img src="10.png" width="30" height="30" style="float:left; margin-top:20px;">
<img src="11.png" width="30" height="30" style="float:left; margin-top:20px;">
<img src="12.png" width="30" height="30" style="float:left; margin-top:20px;">
</div>

<input type="text" style="margin-top:15px; margin-right:20px;float:right;padding-top:5px; padding-bottom:5px; padding-left:5px; padding-right:5px;font-size:18px; width:170px;height:40px" placeholder="USD - $     >">
</div>
</div>


 






</body>
</html>