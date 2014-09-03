<?php
session_start();
if(!isset($_SESSION['iuser']))
header('Location: index.php ');
?>
<html>
<head>
<title>Scrapb00k Beta</title>
<link rel="stylesheet" type="text/css" href="scrap.css">
<link rel="stylesheet" href="animate.css">
 <script src="jquery-1.11.0.min.js"></script>
 <script src="moment.min.js"></script>
<script src="livestamp.min.js"></script>
 <script>
 $(document).ready(function(){ 
 $.ajax({url: "getfull.php",type : "get" ,  dataType : 'html',
 success : function(data){
	  $("#public").html(data+$("#public").html());
}
});
}); 
var id=<?php echo $_SESSION['sid']?>;
//alert(id);
	setInterval(function() {
	//alert(id);

var checkid=<?php echo $_SESSION['sid']?>; 
	  if(id!=checkid){ $.ajax({
 url: "gets.php",
 type : "get" ,
  dataType : 'html',
 success : function(data){
  $("#public").html(data+$("#public").html());
  id=checkid;
  } 
});}}, 5000); //5 seconds
 </script>
<script language="javascript" type="text/javascript">
/*function showDiv() {
   if(document.getElementById('add').style.display == "none")
   {document.getElementById('add').setAttribute('class', 'animated FadeIn');
   document.getElementById('add').style.display = "block";
	
	}
	else
	{
	document.getElementById('add').setAttribute('class', '');
	document.getElementById('add').style.display = "none";
   }
   }*/
   $(document).ready(function(){
   $("#x").click(function(){
  $("#add").slideToggle("slow");
});});
</script>
</head>
<body style="font-family:ubu">
<div id="container">
 <div id="header">
<div id="login" >
<h1>
ScrapB00k
</h1>
<br><br>
<!--this is not login but we are using the CSS for #login :p -->
<br><br>
</div></div><div id="body">
<br><br><br>
<p class="animated lightSpeedIn" style="font-size:20px;" >
Welcome , <?php echo $_SESSION['iuser']    ?></p>
<br><a style={float:left;} href="edit.php">View your profile</a> 
<a id="logout" href="logout.php">LOGOUT</a><br><br>
<input type="button" id="x" name="add" value="Add Scrap"  />
<div id="add" style="display:none;" >
<form name="add" action="add.php" method="POST">
<textarea name="scrap" placeholder="Scribble here" rows="3" cols="100"></textarea>
<input type="radio" name="pub" value="1" checked>Public
<input type="radio" name="pub" value="0">Private
<input type="submit" value="Paste" />
</form>
</div>
<hr>
Public Scraps                          <!-- add here Public Feed  --> 
<hr >
<div id="public">

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
