<!--  a 1337 c0d3 -->
<html>
<head>

<title>Scrapb00k Beta</title>
<link rel="stylesheet" type="text/css" href="scrap.css">
<link rel="stylesheet" type="text/css" href="filler.css">
<link rel="stylesheet" href="animate.css">
 <script src="jquery-1.11.0.min.js"></script>
<script language="javascript" type="text/javascript">
//function showDiv() {
  // if(document.getElementById('reg').style.display == "none")
   //document.getElementById('reg').style.display = "block";
	//else
	//document.getElementById('reg').style.display = "none";
   //}
   $(document).ready(function(){
   $("#hide").click(function(){
  $("#reg").slideToggle("slow");
});
		 $("#t").click(function(){
		  $( "#team" ).animate({
width: "70%",
opacity: 0.4,
marginLeft: "0.6in",
fontSize: "3em",
borderWidth: "10px"
}, 1500 );
            $("#team").text("Vegeta");
			$("#t").val("Rohan J.");
			});
			
});
</script>
</head>
<body style="font-family:ubu">
<!--  Login form -->
<div id="container">
 <div id="header">
<div id="login" >
<h1>
ScrapB00k
</h1>
<br><br>
<form action="check.php" method="POST">
Username : <input type="text" name="user" placeholder="Username" required><!--html5 placeholder -->
Password : <input type="password" name="pass" placeholder="Password" required>
<input type="submit" value="Go" >
</form>
<?php
session_start();
if(isset($_SESSION['log']))
echo "<b>LOGIN FAIL ..Try Again </b>"
?>

</div>
</div>
<div id="body">

<br><br>
<br><br><br>
ScrapB00k is a social platform for you to write and share your scraps . It is free and will always be !
<br><br><br>
<img id="imain" src="sb.png" alt="Scraps" name="s">

<!--  reg form -->
<div style="float:right;">New around here ?  
<input type="button" name="register" value="Register" id="hide" />
<div id="reg"  style="display:none;position:absolute" class="regform" > 
<br>
<form action="reg.php" method="POST">
Username <input type="text" name="user" placeholder="User" required><br>
Password <input type="password" name="pass" placeholder="Pass" required><br>
<input type="submit" value="Submit">
</form>	
</div><br>
<!--<div id="filler"  the animated color box >
</div>--> <br><br><br><br><br><br><br><br><br><br><br><br><br>
<input type="button" id="t" value="hard_Coded_By" >
<div id="team">
</div>

</div>
</div>
<!--  foot -->
<div id="foot">
<br>Compatible with IE 9+, Chrome Canary and FF 20+ @1366X768
<br>Copyright &copy; 2014 thegeekinn.com
Site Designed by <a href="http://thegeekinn.com">The Geek Inn</a>.All Rights Reserved.
<br><br></div></div>
</body>
</html>