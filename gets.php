<?php
session_start();
$idb=$_SESSION['sid'];
$link=mysql_connect("mysql1.000webhost.com","a4228986_1337","unlock123");
mysql_select_db("a4228986_scrap") or die("Sorry :( Connection Error");
$query="Select id,data,user,time from public where public=1 and id>=$idb ORDER BY id DESC";
$x=mysql_query($query);
if($z=mysql_fetch_array($x))
$_SESSION['sid']=$z["id"];
$query="Select data,user,time from public where public=1 and id>=$idb ORDER BY id DESC";
$result=mysql_query($query);
$ct=0;
while( $row = mysql_fetch_array($result) ){
    $posts = $row["data"];
	$user = $row["user"];
	$t=strtotime($row["time"]);               //phew that was 3 hours :/
	//$randomcolor = '#'.strtoupper(dechex(rand(256,16777215)));//using random color in place of #FFFF66
	$randomcolor="#ffffff";
	if($ct%2==0)            //now XSS secure
	{
	echo "<div class=\"animated FadeInUp\" style=\"background-color:".$randomcolor.";background-clip:content-box;display:inline;\">";
    echo htmlspecialchars($posts)." -  </div> <a href=\"profile.php?id=".htmlspecialchars($user)."\">".htmlspecialchars($user)."</a><br>";
	echo "<span data-livestamp=\"".$t."\"></span><br>";
	echo "<hr id=\"phr\">";
	//echo htmlspecialchars($str);
	}
	else
	{echo "<div style=\"float:right\"><div class=\"animated FadeInUp\" style=\"background-color:".$randomcolor.";background-clip:content-box;display:inline;\">";
    echo htmlspecialchars($posts)." -  </div> <a href=\"profile.php?id=".htmlspecialchars($user)."\">".htmlspecialchars($user)."</a><br>";
	echo "<span data-livestamp=\"".$t."\"></span></div><br><br>";
	echo "<hr id=\"phr\">";
	}
	$ct++;	
    }

?>