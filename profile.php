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
<br><br><br><br><br><br><br>
<br>
<br><a style={float:left;} href="home.php">Go Home</a>

<a id="logout" href="logout.php">LOGOUT</a><br>
<p>Viewing profile of <?php echo $_GET["id"]    ?>  </p>
<p class="animated lightSpeedIn" style="font-size:20px;">
Name :  <?php echo $_GET["id"]    ?>               <!-- must not add edit option  :D-->
<br>Age : 
<br>Bio :
<br>Scraps :
<?php 

$link=mysql_connect("mysql1.000webhost.com","a4228986_1337","unlock123");
mysql_select_db("a4228986_scrap") or die("Sorry :( Connection Error");
$u=mysql_real_escape_string($_GET["id"]);
$query="Select * from public where user='$u'";
$result=mysql_query($query);
if ($result==false)
{
    die(mysql_error());
} 
$count=mysql_num_rows($result);
echo $count ;
$query="Select data from public where public=1 && user='$u'";
$result=mysql_query($query);
$ct=0;
echo "<hr>Public posts of ".$_GET['id']."<hr>";
while( $row = mysql_fetch_array($result) ){
    $posts = $row["data"];
	//$randomcolor = '#'.strtoupper(dechex(rand(256,16777215)));//using random color in place of #FFFF66
	$randomcolor="#ffffff";
	if($ct%2==0)            //now XSS secure
	{
	echo "<div class=\"animated FadeInUp\" style=\"background-color:".$randomcolor.";background-clip:content-box;display:inline;\">";
    echo htmlspecialchars($posts)." -  </div> <br><br>";
	echo "<hr id=\"phr\">";
	//echo htmlspecialchars($str);
	}
	else
	{echo "<div style=\"float:right\"><div class=\"animated FadeInUp\" style=\"background-color:".$randomcolor.";background-clip:content-box;display:inline;\">";
    echo htmlspecialchars($posts)." -  </div></div><br><br>";
	echo "<hr id=\"phr\">";
	}
	$ct++;	
    }
?>
	<br>

</p>
</div>
<!--  foot -->
<div id="foot">
<br>Compatible with IE 9+, Chrome Canary and FF 20+ @1366X768
<br>Copyright &copy; 2014 thegeekinn.com
Site Designed by <a href="http://thegeekinn.com">The Geek Inn</a>.All Rights Reserved.
<br><br></div>
</body>
</html>
