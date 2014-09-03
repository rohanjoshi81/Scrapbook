<?php 
$link=mysql_connect("mysql1.000webhost.com","a4228986_1337","unlock123");
mysql_select_db("a4228986_scrap");
$u=mysql_real_escape_string($_GET["id"]);
$query="Select * from public where user='$u'";
$result=mysql_query($query);
if ($result==false)
{
    die(mysql_error());
} 
$count=mysql_num_rows($result);
echo "Total : ";
echo $count ;
//echo $u;
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